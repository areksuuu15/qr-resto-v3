<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $roles = Role::all();
        return view('assign-role', ['users' => $users, 'roles' => $roles]);
    }

public function assignRole(Request $request)
{
    $user = User::find($request->user_id);
    $role = Role::find($request->role_id);

    $user->roles()->sync($role);


    return back()->with('success', 'Table occupancy updated successfully!');
}


  public function removeRole($user_id, $role_id)
    {
        $user = User::findOrFail($user_id);
        $role = Role::findOrFail($role_id);
        $user->roles()->detach($role);
        return redirect()->back();
    }
}
