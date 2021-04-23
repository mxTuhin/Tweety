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
        <p class="list-subtitle"><a href="{{route('profile',$users)}}">{{$users->bio}}</a></p>
    </div>
    <button onclick="follow_user('{{$users->id}}')" style="margin-left:30px" class=" btn-sm">
        <i id="follow_user_icon_{{$users->id}}" class="fas fa-user-plus"></i>
    </button>
</li>
