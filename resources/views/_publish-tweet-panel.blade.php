<div class="border border-blue-400 rounded-lg px-8 py-6 mb-4">
    <form method="POST" action="/tweets">
        @csrf
                <textarea
                    name="body"
                    class="w-full"
                    placeholder="Spread Angryness"
                ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img
                src="{{auth()->user()->avatar}}"
                alt=""
                class="rounded-full"
            >

            <button class="bg-blue-400 rounded-lg shadow py-2 px-2 text-white" type="submit">Tweet Angry</button>


        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm">{{$message}}</p>
    @enderror
</div>

