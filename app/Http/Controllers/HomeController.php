<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $applicants = DB::table('application_letters')
            ->count();
        $queries = DB::table("queries")
            ->count();
        $answeredQueries = DB::table('queries')
            ->where('status', "Success")
            ->count();
        $unansweredQueries = DB::table('queries')
            ->where('status', "Pending")
            ->count();
        $uniqueVisits = DB::table('visitors')
            ->count();
        $active = 'home';
        return view('home', [
            'totalApplicants' => $applicants,
            'totalQueries' => $queries,
            'answered' => $answeredQueries,
            'unanswered' => $unansweredQueries,
            'uniqueVisits' => $uniqueVisits,
            'active' => $active
        ]);
    }

    public function applicantsView()
    {
        $active = 'applicants';
        $applicants = DB::table('application_letters')
            ->get();
        return view('admin.applicants')->with('applicants', $applicants)->with('active', $active);
    }
}
