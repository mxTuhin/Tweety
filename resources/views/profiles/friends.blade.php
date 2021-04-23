@extends('profiles.layout')
@section('title', 'Friends')
@section('friends_prof_link', 'active')

@section('profile_content')
    <!-- sendary menu start -->
    <div class="menu-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                        <div class="page-title-inner">
                            <h4 class="page-title">friends ({{$user->follows->count()}})</h4>
                        </div>
                        <div class="filter-menu">
                            <button class="active" data-filter="*">all</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sendary menu end -->

    <!-- photo section start -->
    <div class="friends-section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-box friends-zone">
                        <div class="row mt--20 friends-list">
                            @foreach($user->follows as $following)
                                <div class="col-lg-3 col-sm-6 relative collage">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="{{route('profile', $following)}}">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('user/images/profile/')}}/{{$following->profile_img}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="{{route('profile', $following)}}">{{$following->name}}</a></h6>
                                            <button class="add-frnd">{{$following->bio}}</button>
                                        </div>
                                    </div>
                                </div>

                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photo section end -->
@endsection
