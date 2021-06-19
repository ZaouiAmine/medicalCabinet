<footer class="w-full h-96 md:h-48 bg-blue-500 flex flex-col md:flex-row">
    <div class="w-full md:w-4/6 h-full flex">
        <div class="h-full w-1/2 p-5 flex justify-center items-center">
            <div>
                <h1 class="text-xl font-bold text-white">Socials</h1>
                <ul class="p-2">
                    <a href="facebook.com"><li class="text-white">Facebook</li></a>
                    <a href="twitter.com"><li class="text-white">Twitter</li></a>
                    <a href="instagram.com"><li class="text-white">Instagram</li></a>
                </ul>
            </div>
        </div>
        <div class="h-full w-1/2 p-5 flex justify-center items-center">
            <div>
                <h1 class="text-xl font-bold text-white">Content</h1>
                <ul class="p-2">
                    <a href="{{route('home')}}"><li class="text-white">Home</li></a>
                    <a href="{{route('about')}}"><li class="text-white">About</li></a>
                    <a href="{{route('contact')}}"><li class="text-white">Contact</li></a>
                </ul>
            </div>
        </div>
    </div>
    @if(Auth::guest())
    <div class="w-full md:w-2/6 h-full flex flex-col justify-center items-center">
        <h1 class="text-xl font-bold text-white">Subscribe to newsletter</h1>
        <form class="flex flex-col" action="{{route('newsletter')}}" method="post">
            @csrf
            <input class="border-none outline-none my-2" type="email" name="email" placeholder="Email">
            <button class="w-full p-2 bg-red-400 hover:bg-red-500 font-bold text-white" type="submit">Subscribe</button>
        </form>
    </div>
    @endif
</footer>