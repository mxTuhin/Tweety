@extends('layouts.app')

@section('content')
    <header class="mb-4 relative">
        <img
            src="/images/banner.jpg"
            alt="Cover Photo"
            class="mb-2"
            >

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @if(current_user()->is($user))
                <a href="{{route('editProfile',$user)}}"
                   class="bg-white rounded-full border border-gray-500 py-2 px-2 text-black text-xs mr-4"
                >Edit Profile
                </a>
                @endif
                <x-follow-button :user="$user"></x-follow-button>


            </div>
        </div>
        <img src="{{$user->avatar}}"
             alt="Profile Image"
             class="rounded-full mr-2 absolute"
             style="width:150px; left: calc(50% - 75px); top: 140px"
             >

        <p class="text-sm">
            Meow Meow Meow. LALALALLALA
        </p>

    </header>

    @include('_timeline',[
        'tweets'=>$user->tweets
    ])
@endsection
