

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
        <button onclick="send_anger('{{$users->id}}', '{{$users->name}}')" id="send_love{{$users->id}}" class="send_love_button" style="margin-left: 20px; " class="btn btn-sm" data-toggle="tooltip" data-placement="right" title="Send Anger xD">
            <i style="font-size: 20px" class="far fa-angry"></i>
        </button>
    </li>

