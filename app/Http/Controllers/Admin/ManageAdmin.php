<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManageAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = 'Manage Admin';
        $admins = DB::table('users')
            ->where('is_admin', 0)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('admin.manageadmin', [
            'admins' => $admins,
            'active' => $active
        ]);
    }

    public function addAdmin(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 0,
        ]);

        return redirect('/manageadmin')->with('success', 'You have successfully added an admin!');
    }

    public function deleteAdmin(Request $request)
    {
        DB::table('users')
            ->where('id', $request->id)
            ->delete();

        return redirect('/manageadmin')->with('success', 'Admin has been successfully deleted!');
    }
}
