<?php

namespace App\Http\Controllers;

use App\SweetMemories;
use Illuminate\Http\Request;

class SweetMemoriesController extends Controller
{
    //
    public function add_memory($img){
        $mems = new SweetMemories();
        $mems->user_id=auth()->user()->id;
        $mems->img=$img;
        $mems->save();

        return redirect()->to(route('profile', auth()->user()));
    }
}
