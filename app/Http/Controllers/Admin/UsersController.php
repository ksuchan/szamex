<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {   
        $users = User::all();
        $roles = config('roles.models.role')::all();

        return view('user.list', compact('users', 'roles'));
    }

    public function attachRole($user_id, $role_slug){
        $user = User::find($user_id);
        
        $role = config('roles.models.role')::where('slug', '=', $role_slug)->first();

        $user->attachRole($role);

        return redirect(route('users.list'));
    }

    public function revoceRole($user_id, $role_slug){
        $user = User::find($user_id);
        
        $role = config('roles.models.role')::where('slug', '=', $role_slug)->first();
        
        $user->detachRole($role);
        
        return redirect(route('users.list'));
    }

    public function addUser(){
        return view('user.add');
    }

    public function addUserPost(Request $request){
        $fields = $request->request->all();

        if (config('roles.models.defaultUser')::where('email', '=', $fields['email'])->first() === null) {
            $userRole = config('roles.models.role')::where('slug', '=', 'user')->first();

            $newUser = config('roles.models.defaultUser')::create([
                'name'     => $fields['username'],
                'email'    => $fields['email'],
                'password' => bcrypt($fields['password']),
            ]);

            $newUser;
            $newUser->attachRole($userRole);
        }

        return redirect(route('users.list'));
    }
}
