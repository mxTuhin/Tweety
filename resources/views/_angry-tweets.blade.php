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
            <h6 class="author"><a href="profile.html">{{$tweet->user->name}}</a></h6>

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
                    <img src="user/images/post/post-1.jpg" alt="post image">
                </a>
            </figure>
        </div>
        <div class="post-meta">
            <button class="post-meta-like">
                <i class="bi bi-heart-beat"></i>
                <span>You and 201 people like this</span>
                <strong>201</strong>
            </button>
            <ul class="comment-share-meta">
                <li>
                    <button class="post-comment">
                        <i class="bi bi-chat-bubble"></i>
                        <span>41</span>
                    </button>
                </li>
                <li>
                    <button class="post-share">
                        <i class="bi bi-share"></i>
                        <span>07</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- post status end -->
