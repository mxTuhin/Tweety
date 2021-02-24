<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show(User $user){
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user){
        if(current_user()->is($user)){
            return view('profiles.edit', [
                "user"=>$user

            ]);
        }
        else{
            return view('profiles.show', compact('user'));
        }




    }
}
