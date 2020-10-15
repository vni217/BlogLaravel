<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $users = User::all();

        return view('admin.users.index', ['users'=>$users]);
       
    }


    public function show(User $user){

        // return view('admin.users.profile', ['user'=>$user]);
        return view('admin.users.profile')->with('user', Auth::user());
    }

    public function update(User $user){

        $inputs = request()->validate([
            'avatar'=>['file'],
            'username'=>['required', 'string', 'max:255', 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email', 'max:255']
            // 'password' => ['min:8', 'max:255','confirmed']

        ]);

            if(request('avatar')){
                $inputs['avatar'] = request('avatar')->store('images');   
            }

            $user->update($inputs);

            return back();

        }
       

    
}