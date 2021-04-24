<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    //
    protected $fillable = [
        'user_id', 'text', 'status'
    ];
}
