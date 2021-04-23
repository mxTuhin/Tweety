<li class="msg-list-item d-flex justify-content-between">
    <!-- profile picture end -->
    <div class="profile-thumb">
        <figure class="profile-thumb-middle">
            <img src="{{asset('user/images/profile/')}}/{{$notify->notifier_image}}" alt="profile picture">
        </figure>
    </div>
    <!-- profile picture end -->

    <!-- message content start -->
    <div class="msg-content notification-content">
        <a href="">{{$notify->notifier_name}}</a>,
        <p>{{$notify->data}}</p>
    </div>
    <!-- message content end -->

    <!-- message time start -->
    <div class="msg-time">
        <p>{{$notify->created_at->diffForHumans()}}</p>
    </div>
    <!-- message time end -->
</li>
