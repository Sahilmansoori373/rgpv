<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;



class SubAdminController extends Controller
{
    //
    public function users()
    {
        $users = User::with('roles')->where('role','!=',1)->get();
        return view('sub-admin.users', compact('users'));
    }
    public function manageRole()
    {
        $users = User::where('role','!=',1)->get();
        $roles = Role::all();
        return view('sub-admin.manage-role', compact(['users','roles']));
    }

    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id
        ]);
        return redirect()->back();
    }

    public function dashboard()
    {
        return view('sub-admin.dashboard');
    }
}
