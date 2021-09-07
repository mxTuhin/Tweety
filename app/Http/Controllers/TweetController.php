<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Notifications;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TweetController extends Controller
{
    //
    public function index()
    {
        return view('tweets.index',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }

    public function store(){
        request()->validate([
            'body'=>'required'
        ]);
        $new_name="";
        if(\request()->hasFile('image')){
            $image = \request()->file('image');
            $new_name = Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user/images/uploads'), $new_name);


        }
        Tweet::create([
            'user_id'=>auth()->id(),
            'body'=>\request('body'),
            'image'=>$new_name
        ]);
        if($new_name !=""){
            Gallery::create([
                'user_id'=>auth()->id(),
                'img_tag'=>"tweet",
                'img'=>$new_name
            ]);
        }

        return redirect()->route('timeline_user');
    }
    public function add_like(){
        if(\request()->ajax()){
            $tweet = Tweet::find(\request()->id);
            $tweet->like_count+=1;
            $tweet->save();

            $notify=new Notifications();
            $notify->user_id=$tweet->user->id;
            $notify->type='notification';
            $notify->data='has liked your post';
            $notify->notifier_name=current_user()->name;
            $notify->notifier_image=current_user()->profile_img;
            $notify->save();
        }
        return "meow";
    }
    public function delete(Request $request){
        $tweet=Tweet::find($request->id);
        $tweet->status="hide";
        $tweet->save();
        return Response("success");
    }
    public function edit(Request $request){
        $tweet=Tweet::find($request->id);
        $tweet->body=$request->txt;
        $tweet->save();
        return Response("success");
    }
}
