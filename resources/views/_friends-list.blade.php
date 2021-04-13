
<ul class="bg-blue-100 rounded-lg p-4">
    <li class="unorder-list">
        <!-- profile picture end -->
        <div class="profile-thumb">
            <a href="{{route('profile',$user)}}">
                <figure class="profile-thumb-small">
                    <img src="{{asset("user/images/profile")}}/{{$user->profile_img}}" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <div class="unorder-list-info">
            <h3 class="list-title"><a href="{{route('profile',$user)}}">{{$user->name}}</a></h3>
            <p class="list-subtitle">{{$user->bio}}</p>
        </div>
        <button id="send_love{{$user->id}}" class="send_love_button" style="margin-left: 20px; " class="btn btn-sm">
            <i style="font-size: 20px" class="fas fa-heart"></i>
        </button>
    </li>
</ul>
