<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\TechNews;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //Login Sign Up System
    public function store(){
        $this->validate(\request(),[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'gender'=>'required',
            'username'=>'required|unique:users,username',
            'country'=>'required',
            'password'=>'required'
        ]);
        $input=\request()->all();

        if(\request()->hasFile('image')){
            $image = \request()->file('image');
            $new_name = Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user/images/profile'), $new_name);


        }

        $user=new User();
        $user->name=$input['name'];
        $user->username=$input['username'];
        $user->email=$input['email'];
        $user->password=bcrypt($input['password']);
        $user->gender=$input['gender'];
        $user->country=$input['country'];
        $user->profile_img=$new_name;
        $user->save();

        Auth::login($user);

        return redirect()->to(route('landingPage'));

    }

    public function login(){
        $this->validate(\request(),[
            'username'=>'required',
            'password'=>'required'
        ]);
        $input = \request()->all();
        try{
            $fieldType = filter_var(\request()->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            if(Auth::attempt(array($fieldType => $input['username'], 'password'=>$input['password']))){
                return redirect()->to(route('timeline_user'));
            }
            else{
                return redirect()->to(route('landingPage'));
            }
        }
        catch(\Throwable $e){
            return abort(404);
        }
    }

    //
    public function show(User $user){
        $ids=\auth()->user()->follows()->pluck('id');
        $ids->push(\auth()->user()->id);

        $id_array=array();
        foreach ($ids as $id){
            array_push($id_array, $id);
        }

        $user_list=User::all()->except($id_array);
        $advertisement=Advertisement::all();
        return view('profiles.show', [
            'user_list'=>$user_list,
            'advertises'=>$advertisement,
            'user'=>$user
        ]);
    }

    public function edit(Request $request){
        $output=array();
        if($request->ajax()){
            $user=User::find(Auth::id());
            $user->name=$request->name;
            $user->gender=$request->gender;
            $user->country=$request->country;
            $user->bio=$request->bio;
            $user->workplace=$request->workplace;
            $user->home=$request->home;
            $user->hobby=$request->hobby;
            $user->institution=$request->institution;
            $user->facebook=$request->facebook;
            $user->twitter=$request->twitter;
            $user->flickr=$request->flickr;
            $user->github=$request->github;
            $user->about=$request->about;
            $user->cellnum=$request->cellnum;
            $user->address=$request->address;
            $user->save();
        }
        return Response("success");
    }

    public function about(User $user){
//        $ids=\auth()->user()->follows()->pluck('id');
//        $ids->push(\auth()->user()->id);
//
//        $id_array=array();
//        foreach ($ids as $id){
//            array_push($id_array, $id);
//        }
//
//        $user_list=User::all()->except($id_array);
//        $advertisement=Advertisement::all();
        return view('profiles.about', [
//            'user_list'=>$user_list,
//            'advertises'=>$advertisement,
            'user'=>$user
        ]);
    }

    public function friends(User $user){
        return view('profiles.friends',[
            'user'=>$user
        ]);
    }
    public function photos(User $user){
        return view('profiles.photos',[
            'user'=>$user
        ]);
    }
}
