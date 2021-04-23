
<ul class="bg-blue-100 rounded-lg p-4">
    <li class="unorder-list">
        <!-- profile picture end -->
        <div class="profile-thumb">
            <a href="{{route('profile',$users)}}">
                <figure class="profile-thumb-small">
                    <img src="{{asset("user/images/profile")}}/{{$users->profile_img}}" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <div class="unorder-list-info">
            <h3 class="list-title"><a href="{{route('profile',$users)}}">{{$users->name}}</a></h3>
            <p class="list-subtitle">{{$users->bio}}</p>
        </div>
        <button id="send_love{{$users->id}}" class="send_love_button" style="margin-left: 20px; " class="btn btn-sm">
            <i style="font-size: 20px" class="fas fa-heart"></i>
        </button>
    </li>
</ul>
