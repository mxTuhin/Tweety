<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //
    public function friend(){
        return $this->belongsTo(User::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function chats(){
        return $this->hasMany(ChatHistory::class);
    }
}
