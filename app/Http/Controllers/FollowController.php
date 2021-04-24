<?php

namespace App\Http\Controllers;

use App\Notifications;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    //
    public function store(Request $request){
        $user=User::find($request->id);
        if(\request()->ajax()){
            if(auth()->user()->following($user)){
                // Folllow the given user
                auth()->user()->unfollow($user);
            }
            else{
                // Folllow the given user
                auth()->user()->follow($user);
            }
        }

    }

    public function send_anger(){
        if(\request()->ajax()){
            $notify=new Notifications();
            $notify->user_id=\request()->id;
            $notify->type='notification';
            $notify->data='Has Sent you Angry Vibe and Feeling Happy xD';
            $notify->notifier_name=current_user()->name;
            $notify->notifier_image=current_user()->profile_img;
            $notify->save();
        }
        return "meow";
    }

}
