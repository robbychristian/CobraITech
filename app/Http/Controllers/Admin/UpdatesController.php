<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Updates;
use Illuminate\Support\Facades\DB;

class UpdatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = 'updates';
        $blog_list = DB::table('updates')
            ->get();
        return view('admin.updates')->with('blog_list', $blog_list)->with('active', $active);
    }

    public function addUpdate(Request $request)
    {
        if ($request->hasFile('img_heading')) {
            $fileName = $request->file('img_heading')->getClientOriginalName();
            $request->file('img_heading')->storeAs('blog_image', $request->title . '/' . $fileName, 'public');
            $blog = Updates::create([
                'publisher' => $request->publisher,
                'title' => $request->title,
                'body' => $request->body,
                'img_heading' => $fileName
            ]);
            return redirect('/updates')->with('success', 'Added a blog post successfully!');
        } else {
            dd(false);
        }
    }

    public function delete(Request $request)
    {
        DB::table('updates')
            ->where('id', $request->id)
            ->delete();
        return redirect('/updates')->with('success', 'Deleted a blog post successfully!');
    }
}
