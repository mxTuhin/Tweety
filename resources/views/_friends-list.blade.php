<h3 class="font-bold mb-4 text-xl">Following</h3>
<ul class="bg-blue-100 rounded-lg p-4">
    @foreach(auth()->user()->follows as $user)
        <li class="mb-2">
            <a href="{{route('profile', $user)}}">
            <div class="flex items-center text-sm">
                <img
                    src="{{$user->avatar}}"
                    alt=""
                    class="rounded-full"
                    >
                <p class="ml-2">{{$user->name}}</p>

            </div>
            </a>
        </li>
    @endforeach
</ul>
