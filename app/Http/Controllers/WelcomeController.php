<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ApplicationLetter;
use Mail;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;
use App\Models\visitors;
//support page
use App\Mail\UserApplication;
use App\Mail\Support;
use App\Models\Queries;

class WelcomeController extends Controller
{
    public function index()
    {
        $ip = request()->ip();
        $request = new Request([
            'ip_address' => $ip
        ]);

        $is_unique = DB::table('visitors')
            ->where('ip_address', $request->ip_address)
            ->count();

        $threeUpdates = DB::table('updates')
            ->orderBy('created_at', 'asc')
            ->take(3)
            ->get();

        if ($is_unique != 1) {
            visitors::create(['ip_address' => $ip]);
            return view('welcome', [
                'updates' => $threeUpdates
            ]);
        } else {
            return view('welcome', [
                'updates' => $threeUpdates
            ]);
        }

        // $valid = $request->validate([
        //     'ip_address' => 'unique:visitors,ip_address'
        // ]);
        // if ($valid == false) {
        //     dd(false);
        // } else {
        // }

        // $data['ip'] = $ip;
        // $validator = Validator::make($data, [
        //     'ip' => 'required|unique:visitors,ip_address'
        // ]);
    }

    public function joinUs()
    {
        return view('Welcome.JoinUs');
    }

    public function support()
    {
        return view('Welcome.Support');
    }

    public function updates()
    {
        $blogs = DB::table('updates')
            ->get();
        return view('Welcome.Updates')->with('blogs', $blogs);
    }

    public function sendApplication(Request $request)
    {
        $validate = $request->validate([
            'email' => 'unique:application_letters',
        ]);
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
            Mail::to($myEmail)->send(new UserApplication($path, $request->name . " Application Letter", $data, $myEmail));
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

    public function sendQuery(Request $request)
    {
        $query = Queries::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => 'Pending',
            'message' => $request->message
        ]);
        $myEmail = $query->email;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        Mail::to($myEmail)->send(new Support("Question from " . $request->name, $data, $myEmail));
        return redirect('/support')->with("success", 'Successfully sent your question!');
    }
}
