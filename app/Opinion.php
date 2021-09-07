<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tweet(){
        return $this->belongsTo(Tweet::class);
    }
    protected $fillable = [
        'tweet_id', 'user_id', 'opinion', 'like'
    ];
    public function likes(){
        return $this->hasMany(OpinionLike::class);
    }
}
