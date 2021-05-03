{{--<div class="flex p-4 border-b border-b-gray-1000">--}}
{{--    <div class="mr-2 flex-shrink-0">--}}
{{--        <a href="{{route('profile', $tweet->user)}}"><img--}}
{{--            src="../images/mxTuhin.jpg"--}}
{{--            style="height: 55px; width: 48px"--}}
{{--            alt=""--}}
{{--            class="rounded-full"--}}
{{--        ></a>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <a href="{{route('profile', $tweet->user)}}">--}}
{{--        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>--}}
{{--        </a>--}}
{{--        <p class="text-sm">--}}
{{--            {{$tweet->body}}--}}
{{--        </p>--}}

{{--    </div>--}}
{{--</div>--}}


<!-- post status start -->
<div class="card">
    <!-- post title start -->
    <div class="post-title d-flex align-items-center">
        <!-- profile picture end -->
        <div class="profile-thumb">
            <a href="{{route('profile', current_user()->username)}}">
                <figure class="profile-thumb-middle">
                    <img src="{{asset("user/images/profile")}}/{{$tweet->user->profile_img}}" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <div class="posted-author">
            <h6 class="author"><a href="{{route('profile',$tweet->user)}}">{{$tweet->user->name}}</a></h6>
            <p class="list-subtitle">{{ date('h:i:s a m/d/Y', strtotime($tweet->created_at))}}</p>

        </div>

        <div class="post-settings-bar">
            <i style="margin-top: -250px" class="fas fa-chevron-down"></i>
            <div class="post-settings arrow-shape">
                <ul>

                    <li><button>Edit</button></li>
                    <li><a href="#"><button>Delete</button></a></li>
                    <li><button>Copy</button></li>


                </ul>
            </div>
        </div>
    </div>
    <!-- post title start -->
    <div class="post-content">
        <p class="post-desc">
            {{$tweet->body}}
        </p>
        <div class="post-thumb-gallery">
            <figure class="post-thumb img-popup">
                <a href="{{asset("user/images/uploads")}}/{{$tweet->image}}">
                    @if($tweet->image!="")
                        <img src="{{asset("user/images/uploads")}}/{{$tweet->image}}" alt="Tweeties">
                    @endif
                </a>
            </figure>
        </div>
        <div class="post-meta">
            <button onclick="add_like('{{$tweet->id}}')" class="post-meta-like">
                <i class="fas fa-heartbeat"></i>
                <span id="like_count{{$tweet->id}}">{{$tweet->like_count}}</span>

            </button>
            <ul class="comment-share-meta">
                <li>
                    <button onclick="show_comment('{{$tweet->id}}')" class="post-comment">
                        <i class="fas fa-comment-dots"></i>
                        <span id="tweet_opinion_count_{{$tweet->id}}">{{$tweet->opinions->count()}}</span>
                    </button>
                </li>

            </ul>
        </div>
        <div class="comment_section" id="comment_section_{{$tweet->id}}">
            <hr>
            <br>
            <div id="comment_box_{{$tweet->id}}">


            @foreach($tweet->opinions as $opinion)
                <div>
                    <div class="row">
                        <div class="col-1 col-sm-1">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="{{route('profile', $opinion->user->username)}}">
                                    <figure style="height: 40px; width: 40px" class="profile-thumb-middle">
                                        <img src="{{asset("user/images/profile")}}/{{$opinion->user->profile_img}}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->
                        </div>
                        <div style="padding-left: 20px" class="col-11 col-sm-11">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <h3 class="list-title">{{$opinion->user->name}}</h3>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <p>{{$opinion->opinion}}</p>
                                </div>
                                <div  class="col-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-3 col-sm-3">
                                            <div class="row">
                                                <div class="col-6 col-sm-6">
                                                    <button onclick="opinion_like('{{$opinion->id}}')" style="font-size: 12px" type="button"><b>Like</b></button>

                                                </div>
                                                <div style="margin-left: -30px; margin-top: 2px" class="col-6 col-sm-6">
                                                    <p id="opinion_like_count_{{$opinion->id}}" style="font-size: 12px" class="list-subtitle"><b>{{$opinion->like}}</b></p>
                                                </div>
                                            </div>

                                        </div>
                                        <div style="margin-left: -30px; margin-top: 2px" class="col-6 col-sm-6">
                                            <p style="font-size: 12px" class="list-subtitle">{{ date('h:i:s a m/d/Y', strtotime($opinion->created_at))}}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                            </div>


                        </div>

                    </div>
                </div>
            @endforeach
            </div>




            <div>
                <form>
                    <div class="row">
                        <div class="col-1 col-sm-1">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="{{route('profile', current_user()->username)}}">
                                    <figure style="height: 40px; width: 40px" class="profile-thumb-middle">
                                        <img src="{{asset("user/images/profile")}}/{{current_user()->profile_img}}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->
                        </div>
                        <div class="col-11 col-sm-11">
                            <input id="opinion_input_{{$tweet->id}}" onkeydown="add_opinion('{{$tweet->id}}', this)" style="border-radius: 20px" class="form-control" placeholder="Share Your Opinion">

                        </div>

                    </div>

                </form>
            </div>

        </div>

    </div>
</div>
<!-- post status end -->
