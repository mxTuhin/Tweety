@if(auth()->user()->isNot($user))

    <button id="follow_button" onclick="follow_user('{{$user->id}}')" class="edit-btn">
        {{auth()->user()->following($user) ? 'Unfollow':'Follow'}}
    </button>
@endif
