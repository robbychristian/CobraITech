<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ApplicationLetter;
use Mail;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;
use App\Mail\UserApplication;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function joinUs()
    {
        return view('Welcome.JoinUs');
    }

    public function support()
    {
        return view('Welcome.Support');
    }

    public function sendApplication(Request $request)
    {
        if ($request->hasFile('curriculum_vitae')) {
            $file = $request->file('curriculum_vitae')->getClientOriginalName();
            $path = public_path('storage/applications' . '/' . $request->email . '/' . $file);
            $attachment = $request->file('curriculum_vitae');
            $attachment->storeAs('applications', $request->email . '/' . $file, 'public');
            $application = ApplicationLetter::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'job_category' => $request->job_category,
                'curriculum_vitae' => $file
            ]);
            $myEmail = $application->email;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['message'] = $request->message;
            $data['job_category'] = $request->job_category;
            Mail::to($myEmail)->send(new UserApplication(public_path($path), $request->name . " Application Letter", $data));
            return redirect('/joinus')->with('success', 'Successfully sent your application!');
        } else {
            dd('false');
        }
    }

    public function downloadPdf($pdf, $email)
    {
        $path = public_path('applications') . '/' . $email . '/' . $pdf;
        return response()->download($path);
    }
}
