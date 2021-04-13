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
            $ids=\auth()->user()->follows()->pluck('id');
            $ids->push(\auth()->user()->id);

            $id_array=array();
            foreach ($ids as $id){
                array_push($id_array, $id);
            }

            $user_list=User::all()->except($id_array);
            return view('_timeline', [
                'user_list'=>$user_list,
                'tweets'=>auth()->user()->timeline()
            ]);
        }
        else{
            return redirect()->to(route('landingPage'));
        }

    }
}
