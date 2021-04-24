<?php

namespace App\Http\Controllers;

use App\Notifications;
use App\Opinion;
use App\Tweet;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    //
    public function store(Request $request){
        $output="";
        $opinionDB = new Opinion();
        $opinionDB->user_id=current_user()->id;
        $opinionDB->tweet_id=$request->id;
        $opinionDB->opinion=$request->opinion;
        $opinionDB->like=0;
        $opinionDB->save();

        $loc_tweet=Tweet::find($request->id);

        $notify=new Notifications();
        $notify->user_id=$loc_tweet->user->id;
        $notify->type='notification';
        $notify->data='has commented on your post';
        $notify->notifier_name=current_user()->name;
        $notify->notifier_image=current_user()->profile_img;
        $notify->save();

        $opinion_db_id=$opinionDB->id;
        ?>
        <div>
            <div class="row">
                <div class="col-1 col-sm-1">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="<?php echo route('profile', current_user()->username) ?>">
                            <figure style="height: 40px; width: 40px" class="profile-thumb-middle">
                                <img src="<?php echo asset("user/images/profile/").'/'.current_user()->profile_img ?>" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->
                </div>
                <div style="padding-left: 20px" class="col-11 col-sm-11">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h3 class="list-title"><?php echo current_user()->name ?></h3>
                        </div>
                        <div class="col-12 col-sm-12">
                            <p><?php echo $request->opinion ?></p>
                        </div>
                        <div  class="col-12 col-sm-12">
                            <div class="row">
                                <div class="col-3 col-sm-3">
                                    <div class="row">
                                        <div class="col-6 col-sm-6">
                                            <button onclick="opinion_like('<?php echo $opinion_db_id ?>')" style="font-size: 12px" type="button"><b>Like</b></button>

                                        </div>
                                        <div style="margin-left: -30px; margin-top: 2px" class="col-6 col-sm-6">
                                            <p id="opinion_like_count_<?php echo $opinion_db_id ?>" style="font-size: 12px" class="list-subtitle"><b>0</b></p>
                                        </div>
                                    </div>

                                </div>
                                <div style="margin-left: -30px; margin-top: 2px" class="col-6 col-sm-6">
                                    <p style="font-size: 12px" class="list-subtitle">Just Now</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                    </div>


                </div>

            </div>
        </div>

<?php
        return $output;
    }

    public function opinion_like(){
        $opn = Opinion::find(\request()->id);
        $opn->like+=1;
        $opn->save();

        $notify=new Notifications();
        $notify->user_id=$opn->user->id;
        $notify->type='notification';
        $notify->data='has Liked Your Comment';
        $notify->notifier_name=current_user()->name;
        $notify->notifier_image=current_user()->profile_img;
        $notify->save();
    }
}
