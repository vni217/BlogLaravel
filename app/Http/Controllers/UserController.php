<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){

        return view('admin.users.profile', ['user'=>$user]);

    }

    public function update(User $user){

        $inputs = request()->validate([

            'username'=>'required','string','max:255','alpha_dash',
            'name'=>'required','string', 'max:255',
            'email'=>'required','email', 'max:255',
            'avatar'=>'file'
    
        ]);
       
            $inputs->username = $inputs['username'];
            $inputs->name = $inputs['name']; 
            $inputs->email= $inputs['email'];
            $inputs->password = $inputs['password'];

            if(request('avatar')){
                $inputs['avatar'] = request('avatar')->store('images');

            }
            $this->authorize('update', $inputs);
            
            $user->update($inputs);

            return back();

    }


}



