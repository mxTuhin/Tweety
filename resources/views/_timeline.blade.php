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
                                        @foreach($user_list as $user)
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
                    <div class="card card-small">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{asset("user/images/profile")}}/{{auth()->user()->profile_img}}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="body" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
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
                                        <form method="POST" action="{{route('store_tweets')}}" class="share-text-box" enctype="multipart/form-data">
                                        @csrf
                                            <div class="modal-body custom-scroll">

                                            <textarea name="body" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="file" name="image" class="post-share-btn" >
                                            <button type="submit" class="post-share-btn">post</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    </div>
                        @foreach($tweets as $tweet)
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
                                                    <img src="user/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">5 min ago</p>
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
                            <h4 class="widget-title">Friend List</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @foreach(auth()->user()->follows as $user)
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

@section('dashboardJS')

    <script>
        function follow_user(user_id){
            $.ajax({
                type : 'post',
                url : '{{URL::to(route('follow_user'))}}',
                data:{
                    id: user_id
                },
                success:function(data){
                    console.log(data)
                }
            });

        }
    </script>
    <script>
        function add_like(_id){
            var like=document.getElementById('like_count'+_id).innerText;
            var like_counter=parseInt(like);

            $.ajax({
                type : 'post',
                url : '{{URL::to(route('add_like'))}}',
                data:{
                    id: _id
                },
                success:function(data){
                    console.log(data)
                    document.getElementById('like_count'+_id).innerText = like_counter+1;
                }
            });

        }
    </script>

@endsection
