<?php

namespace App\Http\Controllers;

use App\ChatHistory;
use App\Conversation;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class ChatHistoryController extends Controller
{
    //
    public function fetch(){
        $output="";
        $convo = Conversation::find(\request()->id);


        foreach ($convo->chats as $chat){
            if($chat->user_id==current_user()->id){


        ?>

        <li class="text-author"><p><?php echo $chat->msg ?></p> <div class="message-time"><?php echo $chat->created_at->diffForHumans() ?></div> </li>
<?php
            }
            else{
                ?>
                <li class="text-friends"><p><?php echo $chat->msg ?></p> <div class="message-time"><?php echo $chat->created_at->diffForHumans() ?></div> </li>
<?php
            }
        }

        return $output;
    }
    public function store(Request $request){
        $chat = new ChatHistory();
        $chat->conversation_id= $request->id;
        $chat->user_id=current_user()->id;
        $chat->chat_user_id=$request->chat_user_id;
        $chat->msg=$request->msg;
        $chat->save();


    }
}
