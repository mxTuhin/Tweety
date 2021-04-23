@extends('layouts.app')


{{--@section('content')--}}
{{--    <header class="mb-4 relative">--}}
{{--        <img--}}
{{--            src="../images/banner.jpg"--}}
{{--            alt="Cover Photo"--}}
{{--            class="mb-2"--}}
{{--            >--}}

{{--        <div class="flex justify-between items-center mb-6">--}}
{{--            <div>--}}
{{--                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>--}}
{{--                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>--}}
{{--            </div>--}}

{{--            <div class="flex">--}}
{{--                @if(current_user()->is($user))--}}
{{--                <a href="{{route('editProfile',$user)}}"--}}
{{--                   class="bg-white rounded-full border border-gray-500 py-2 px-2 text-black text-xs mr-4"--}}
{{--                >Edit Profile--}}
{{--                </a>--}}
{{--                @endif--}}
{{--                <x-follow-button :user="$user"></x-follow-button>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--        <img src="../images/mxTuHin.jpg"--}}
{{--             alt="Profile Image"--}}
{{--             class="rounded-full mr-2 absolute"--}}
{{--             style="width:150px; left: calc(50% - 75px); top: 140px"--}}
{{--             >--}}

{{--        <p class="text-sm">--}}
{{--            Meow Meow Meow. LALALALLALA--}}
{{--        </p>--}}

{{--    </header>--}}

{{--    @include('_timeline',[--}}
{{--        'tweets'=>$user->tweets--}}
{{--    ])--}}
{{--@endsection--}}

@section('content')


    <div class="main-wrapper">
        <div id="profile_banner_custom" class="profile-banner-large bg-img" data-bg="{{asset('user/images/banner/banner-small.jpg')}}">
        </div>
        <div class="profile-menu-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a href="{{route('profile',$user)}}">
                                    <img id="large_profile_img_custom" src="{{asset("user/images/profile")}}/{{$user->profile_img}}" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                    @include('profilebar_links')
                                    <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            @if(current_user()->is($user))
                                <button class="edit-btn">edit profile</button>
                            @else

                                <x-follow-button :user="$user"></x-follow-button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('profile_content')
    </div>


@endsection

@section('dashboardJS')

@endsection
