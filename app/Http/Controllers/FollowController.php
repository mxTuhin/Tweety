<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    //
    public function store(Request $request){
        $user=User::find($request->id);
        if(\request()->ajax()){
            auth()->user()->follow($user);
        }

    }

    public function delete_follow(User $user){
        if(auth()->user()->following($user)){
            // Folllow the given user
            auth()->user()->unfollow($user);
        }
        else{
            // Folllow the given user
            auth()->user()->follow($user);
        }

        return back();
    }
}
