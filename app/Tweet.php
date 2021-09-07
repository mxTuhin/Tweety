<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $guarded =[];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function opinions(){
        return $this->hasMany(Opinion::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
