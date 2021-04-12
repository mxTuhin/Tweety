<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function timeline(){
        if(Auth::check()){
            $user_list=User::all()->except(\auth()->user()->id);
            echo $user_list;
            return view('_timeline', [
                'user_list'=>$user_list,
            ]);
        }
        else{
            return redirect()->to(route('landingPage'));
        }

    }
}
