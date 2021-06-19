@extends('layouts.guest')
@section('content')
    <div class="h-screen w-full p-1 flex justify-center items-center flex-col">
        <h1 class="text-blue-500 text-5xl p-4">Contact us</h1>
        <div class="border border-blue-500 lg:w-3/6 w-full bg-gray-50">
            <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('contact')}}" method="post">
                @csrf
                <input class="m-2 w-full border-blue-500" name="subject" type="text" placeholder="Subject">
                <input class="m-2 w-full border-blue-500" name="email" type="email" placeholder="Email">
                <textarea class="m-2 w-full border-blue-500" name="message" id="" cols="30" rows="8" placeholder="Your Message"></textarea>
                <button class="m-2 p-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection