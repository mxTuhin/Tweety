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
            <a href="#">
                <figure class="profile-thumb-middle">
                    <img src="{{asset("user/images/profile")}}/{{$tweet->user->profile_img}}" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <div class="posted-author">
            <h6 class="author"><a href="{{route('profile',$tweet->user)}}">{{$tweet->user->name}}</a></h6>
            <p class="list-subtitle">{{$tweet->created_at->diffForHumans()}}</p>

        </div>

{{--        <div class="post-settings-bar">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <div class="post-settings arrow-shape">--}}
{{--                <ul>--}}
{{--                    <li><button>copy link to adda</button></li>--}}
{{--                    <li><button>edit post</button></li>--}}
{{--                    <li><button>embed adda</button></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- post title start -->
    <div class="post-content">
        <p class="post-desc">
            {{$tweet->body}}
        </p>
        <div class="post-thumb-gallery">
            <figure class="post-thumb img-popup">
                <a href="user/images/post/post-large-1.jpg">
                    @if($tweet->image!="")
                        <img src="{{asset("user/images/tweets")}}/{{$tweet->image}}" alt="post image">
                    @endif
                </a>
            </figure>
        </div>
        <div class="post-meta">
            <button onclick="add_like('{{$tweet->id}}')" class="post-meta-like">
                <i class="bi bi-heart-beat"></i>
                <span id="like_count{{$tweet->id}}">{{$tweet->like_count}}</span>

            </button>
            <ul class="comment-share-meta">
                <li>
                    <button class="post-comment">
                        <i class="bi bi-chat-bubble"></i>
                        <span>0</span>
                    </button>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- post status end -->
