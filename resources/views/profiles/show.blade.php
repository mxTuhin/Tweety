@extends('profiles.layout')
@section('title', 'Profile')
@section('show_prof_link', 'active')

@section('profile_content')
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
                                    <li><i class="fas fa-briefcase"></i> {{$user->workplace}}</li>
                                    <li><i class="fas fa-home"></i> {{$user->home}}</li>
                                    <li><i class="fa fa-university"></i> {{$user->institution}}</li>

                                    <li><i class="fas fa-heartbeat"></i> {{$user->hobby}}</li>
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
                                        <div >
                                            <figure class="post-thumb">
                                                <button  >
                                                    <i style="font-size: 40px; color: #5ec9d1" class="fas fa-plus"></i>
                                                </button>
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
                                    @foreach($user_list as $users)
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
                @include('_publish-tweet-panel')
                @foreach($user->tweets as $tweet)
                    @include('_angry-tweets')
                @endforeach
            </div>

            <div class="col-lg-3 order-3">
                <aside class="widget-area">
                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">To Do List</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">


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
                                @foreach($user->follows as $users)
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
@endsection

@section('dashboardJS')

    @endsection
