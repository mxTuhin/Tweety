{{--<div class="border border-gray-300 rounded-lg my-4">--}}
{{--    @foreach($tweets as $tweet)--}}
{{--        @include('_angry-tweets')--}}
{{--    @endforeach--}}
{{--</div>--}}

@extends('layouts.app')
@section('title', "Timeline")

@section('content')
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card card-profile widget-item p-0">
                            <div class="profile-banner">
                                <figure class="profile-banner-small">
                                    <a href="{{route('profile', auth()->user())}}">
                                        <img src="user/images/banner/banner-small.jpg" alt="">
                                    </a>
                                    <a href="{{route('profile', auth()->user())}}" class="profile-thumb-2">
                                        <img src="{{asset("user/images/profile")}}/{{auth()->user()->profile_img}}" alt="">
                                    </a>
                                </figure>
                                <div class="profile-desc text-center">
                                    <h6 class="author"><a href="{{route('profile', auth()->user())}}">{{auth()->user()->name}}</a></h6>
                                    <p>{{auth()->user()->bio}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item start -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">People You May Know</h4>
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

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">latest Tech News</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @foreach($tech_news as $news)
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{$news->image}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="{{$news->link}}" target="_blank">{{$news->title}}</a></h3>
                                                <p class="list-subtitle">{{$news->created_at->diffForHumans()}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    @include('_publish-tweet-panel')

                        @foreach($tweets as $tweet)
                            @include('_angry-tweets')
                        @endforeach

                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <div class="card widget-item">
                            <h4 class="widget-title">To Do List</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @foreach(auth()->user()->to_do_list as $list)
                                        @include('to_do_list')
                                    @endforeach

                                </ul>
                            </div>
                            <hr>
                            <div class="widget-item">
                                <form action="{{route('store_todo_list')}}" method="POST">
                                    @csrf
                                    <input id="todo_list_input" class="form-control" name="todo_list" placeholder="Type ToDo Work and Press Enter">
                                </form>
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
                            <h4 class="widget-title">Friend List</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <ul class="bg-blue-100 rounded-lg p-4">
                                    @foreach(auth()->user()->follows as $users)
                                        @include('_friends-list')
                                    @endforeach
                                    </ul>


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

@section('dashboardJS')


@endsection
