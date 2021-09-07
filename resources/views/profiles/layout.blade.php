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
                        <div  class="profile-picture-box">
                            <figure  class="profile-picture">
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
                                <button class="edit-btn" data-toggle="modal" data-target="#profileEditorModal">edit profile</button>
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

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="profileEditorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="height:600px; overflow-y: scroll " class="modal-body">
                    <form>
                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Username (Not Changable)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Username" value="{{$user->username}}" disabled>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Email (Not Changable)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Your Home" value="{{$user->email}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Your Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="name" placeholder="Your Name" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Your Gender</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-venus-mars"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="gender" placeholder="Your Gender" value="{{$user->gender}}" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Staying Country</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-globe-asia"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="country" placeholder="Your Country" value="{{$user->country}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Your Cell Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-globe-asia"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="cellnum" placeholder="Your Cell Number" value="{{$user->cellnum}}" >
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 10px" class="row">


                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Workplace</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="workplace" placeholder="Your Work Place" value="{{$user->workplace}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Home</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-home"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="home" placeholder="Your Home" value="{{$user->home}}">
                                </div>
                            </div>

                        </div>
                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Institution</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-university"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="institution" placeholder="Your Institution" value="{{$user->institution}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Hobby</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-heartbeat"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="hobby" placeholder="Your Hobby" value="{{$user->hobby}}">
                                </div>
                            </div>

                        </div>

                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">About</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="about" placeholder="Your About Info" value="{{$user->about}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Bio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-info"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="bio" placeholder="Your Bio" value="{{$user->bio}}">
                                </div>
                            </div>

                        </div>

                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-12 col-sm-12">
                                <label for="validationCustomUsername">About</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="address" placeholder="Your Detail Address" value="{{$user->address}}">
                                </div>
                            </div>


                        </div>

                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-facebook"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="facebook" placeholder="Your Facebook Username" value="{{$user->facebook}}">
                                </div>
                            </div>

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Twitter</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-twitter"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="twitter" placeholder="Your Twitter Username" value="{{$user->twitter}}">
                                </div>
                            </div>


                        </div>

                        <div style="margin-bottom: 10px" class="row">

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Flickr</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-flickr"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="flickr" placeholder="Your Flickr Username" value="{{$user->flickr}}">
                                </div>
                            </div>

                            <div class="col-6 col-sm-6">
                                <label for="validationCustomUsername">Github</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-github"></i></span>
                                    </div>
                                    <input class="form-control" type="text" id="github" placeholder="Your Github Username" value="{{$user->github}}">
                                </div>
                            </div>


                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <div style="font-size: 12px;">
                        <b > Scroll to see more fields</b>
                    </div>

                    <button style="padding: 10px; border-radius: 50px" type="button" class="btn-info">Save changes</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('dashboardJS')

@endsection
