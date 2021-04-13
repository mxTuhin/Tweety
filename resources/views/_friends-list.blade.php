<ul class="bg-blue-100 rounded-lg p-4">
    @foreach(auth()->user()->follows as $user)
        <li class="unorder-list">
            <!-- profile picture end -->
            <div class="profile-thumb">
                <a href="#">
                    <figure class="profile-thumb-small">
                        <img src="{{asset("user/images/profile")}}/{{$user->profile_img}}" alt="profile picture">
                    </figure>
                </a>
            </div>
            <!-- profile picture end -->

            <div class="unorder-list-info">
                <h3 class="list-title"><a href="#">{{$user->name}}</a></h3>
                <p class="list-subtitle"><a href="#">{{$user->bio}}</a></p>
            </div>
            <button style="margin-left: 20px" class="btn btn-sm">
                <i class="fas fa-heart"></i>
            </button>
        </li>
    @endforeach
</ul>
