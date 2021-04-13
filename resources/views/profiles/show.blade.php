@extends('layouts.app')
@section('title', 'Profile')

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
        <div class="profile-banner-large bg-img" data-bg="{{asset('user/images/banner/banner-small.jpg')}}">
        </div>
        <div class="profile-menu-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a href="{{route('profile',$user)}}">
                                    <img src="{{asset("user/images/profile")}}/{{$user->profile_img}}" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li class="active"><a href="#">timeline</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="photos.html">photos</a></li>
                                        <li><a href="friends.html">friends</a></li>
                                        <li><a href="about.html">more</a></li>
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area profile-sidebar">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">{{$user->name}}</h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <p>{{$user->bio}}</p>
                                    <ul class="author-into-list">
                                        <li><a href="#"><i class="bi bi-office-bag"></i></a></li>
                                        <li><a href="#"><i class="bi bi-home"></i></a></li>
                                        <li><a href="#"><i class="bi bi-location-pointer"></i></a></li>
                                        <li><a href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Sweets Memories</h4>
                            <div class="widget-body">
                                <div class="sweet-galley img-gallery">
                                    <div class="row row-5">
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-1.jpg">
                                                        <img src="assets/images/gallery/gallery-1.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-2.jpg">
                                                        <img src="assets/images/gallery/gallery-2.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-3.jpg">
                                                        <img src="assets/images/gallery/gallery-3.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-4.jpg">
                                                        <img src="assets/images/gallery/gallery-4.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-5.jpg">
                                                        <img src="assets/images/gallery/gallery-5.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-6.jpg">
                                                        <img src="assets/images/gallery/gallery-6.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-7.jpg">
                                                        <img src="assets/images/gallery/gallery-7.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-8.jpg">
                                                        <img src="assets/images/gallery/gallery-8.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/gallery/gallery-9.jpg">
                                                        <img src="assets/images/gallery/gallery-9.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">People You may Know</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @if($user_list->count() >=1)
                                        @foreach($user_list as $user)
                                            @include('_mayKnowFriends')
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card card-small">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{asset("user/images/profile")}}/{{$user->profile_img}}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                    <button class="btn-share" type="submit">share</button>
                                </form>
                            </div>
                            <!-- share content box end -->
                            <!-- Modal start -->
                            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Share Your Mood</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body custom-scroll">
                                            <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                            <button type="button" class="post-share-btn">post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    </div>
                    <!-- share box end -->
                    @foreach($user->tweets as $tweet)
                        @include('_angry-tweets')
                    @endforeach
                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Recent Notifications</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">5 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-35.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">10 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">18 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">25 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-34.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">39 min ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Advertisement</h4>
                            @foreach($advertises as $advert)
                                <div class="widget-body">
                                    <div class="add-thumb">
                                        <a href="{{$advert->link}}">
                                            <img src="{{$advert->image}}" alt="advertisement">
                                        </a>
                                    </div>
                                </div>
                                <h4 class="widget-title"></h4>
                            @endforeach
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Users Friend List</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @foreach($user->follows as $user)
                                        @include('_friends-list')
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>


@endsection
