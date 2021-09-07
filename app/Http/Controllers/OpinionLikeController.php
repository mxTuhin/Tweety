<?php

namespace App\Http\Controllers;

use App\Like;
use App\Notifications;
use App\Opinion;
use App\OpinionLike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OpinionLikeController extends Controller
{
    //
    public function add_like(){
        $like=new OpinionLike();
        $like->user_id=current_user()->id;
        $like->opinion_id=\request()->id;
        $like->save();
        $opn = Opinion::find(\request()->id);

        $notify=new Notifications();
        $notify->user_id=$opn->user->id;
        $notify->type='notification';
        $notify->data='has Liked Your Comment';
        $notify->notifier_name=current_user()->name;
        $notify->notifier_image=current_user()->profile_img;
        $notify->save();
    }
    public function remove_like(){
        if(\request()->ajax()){

            $like=OpinionLike::where('user_id', '=', current_user()->id)->where('opinion_id', '=', \request()->id)->delete();

        }
        return $like;
    }
}
