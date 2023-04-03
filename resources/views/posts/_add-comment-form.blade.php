@auth
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="post" >
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" 
                    alt="" 
                    width="40px" 
                    height="40px" 
                    class="rounded-full">
                <h2 class="ml-3">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" id=""  rows="5" 
                        placeholder="Quick, Say something!"
                        class="w-full text-sm focus:outline-none focus:ring border border-gray-200 p-2 rounded-xl"
                        required
                ></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-5 ">
                <x-form.button class="flex justify-end mt-5 ">Post</x-form.button>
            </div>

          

        </form>
    </x-panel>
@else 
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> 
        or 
        <a href="/login" class="hover:underline">Log in </a> 
        to leave a comment!
    </p>
@endauth