<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function timeline(){
        if(Auth::check()){
            return view('_timeline');
        }
        else{
            return redirect()->to(route('landingPage'));
        }

    }
}
