<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = [
        'user_id', 'img_tag', 'img'
    ];
}
