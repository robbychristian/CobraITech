<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ApplicationLetter;
use Mail;
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

    public function sendApplication(Request $request)
    {
        if ($request->hasFile('curriculum_vitae')) {
            $file = $request->file('curriculum_vitae')->getClientOriginalName();
            $request->file('curriculum_vitae')->storeAs('curriculum_vitae', $request->email . '/' . $file, '');
            $application = ApplicationLetter::create([
                'name' => $request->name,
                'email' => $request->email,
                'job_category' => $request->job_category,
                'curriculum_vitae' => $file
            ]);
            $myEmail = $application->email;
            Mail::to($myEmail)->send(new UserApplication());
            return redirect('/joinus')->with('success', 'Successfully sent your application!');
        } else {
            dd('false');
        }
    }
}
