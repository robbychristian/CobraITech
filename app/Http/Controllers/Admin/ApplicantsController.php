<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Mail\ReplyToApplicant;
use Mail;

class ApplicantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function deleteApplicant(Request $request)
    {
        DB::table('application_letters')
            ->where('id', $request->id)
            ->delete();
        return redirect('/applicants');
    }

    public function downloadPdf($email, $fileName)
    {
        return response()->file(public_path('storage/applications/' . $email . '/' . $fileName));
    }

    public function openApplication($id)
    {
        $active = 'applicants';
        $applicantDetails = DB::table('application_letters')
            ->where('id', $id)
            ->get();
        return view('admin.individualapplicants')->with('applicantDetails', $applicantDetails)->with('active', $active);
    }

    public function replyTo(Request $request)
    {
        $data['message'] = $request->message;
        $data['email'] = $request->receiver;
        $data['name'] = $request->name;
        $myEmail = $request->receiver;
        Mail::to($myEmail)->send(new ReplyToApplicant($data, $myEmail, "Re: Application to Cobra iTech Services Corporation"));
        return redirect('showapplicant/' . $request->id)->with("success", "Replied to receipient successfully!");
    }
}
