<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queries;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\ReplyToQuery;

class InquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = 'inquiries';
        $inquiries = DB::table('queries')
            ->paginate(10);
        $total_inquiries = DB::table('queries')
            ->count();
        return view('admin.inquiries')->with("inquiries", $inquiries)->with("total_inquiries", $total_inquiries)->with('active', $active);
    }

    public function individualInquiry($id)
    {
        $active = 'inquiries';
        $inquiry = DB::table('queries')
            ->where('id', $id)
            ->get();
        return view('admin.individualinquiry')->with('inquiry', $inquiry)->with('active', $active);
    }

    public function replyToQuery(Request $request)
    {
        $data['message'] = $request->message;
        $data['email'] = $request->receiver;
        $data['name'] = $request->name;
        $myEmail = $request->receiver;
        DB::table('queries')->where('id', $request->id)->update(['status' => 'Success']);
        Mail::to($myEmail)->send(new ReplyToQuery($data, $myEmail, 'Re: Question from ' . $request->name));
        return redirect('showinquiry/' . $request->id);
    }
}
