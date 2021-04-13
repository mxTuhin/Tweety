<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\TechNews;
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
            $tech_news=TechNews::all();
            $advertisement=Advertisement::all();
            return view('_timeline', [
                'user_list'=>$user_list,
                'tweets'=>auth()->user()->timeline(),
                'tech_news'=>$tech_news,
                'advertises'=>$advertisement,
//                'user'=>\auth()->user()
            ]);
        }
        else{
            return redirect()->to(route('landingPage'));
        }

    }
}
