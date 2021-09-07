<?php

namespace App\Http\Controllers;

use App\Like;
use App\Notifications;
use App\Opinion;
use App\Tweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //


    public function add_like(){
        if(\request()->ajax()){

            $like=new Like();
            $like->user_id=current_user()->id;
            $like->tweet_id=\request()->id;
            $like->save();
            $opn = Tweet::find(\request()->id);

            $notify=new Notifications();
            $notify->user_id=$opn->user->id;
            $notify->type='notification';
            $notify->data='has Liked Your Comment';
            $notify->notifier_name=current_user()->name;
            $notify->notifier_image=current_user()->profile_img;
            $notify->save();
        }
        return "meow";
    }

    public function remove_like(){
        if(\request()->ajax()){

            $like=Like::where('user_id', '=', current_user()->id)->where('tweet_id', '=', \request()->id)->delete();

        }
        return $like;
    }
}
