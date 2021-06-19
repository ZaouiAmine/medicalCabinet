@extends('layouts.guest')
    @section('content')
        <div class="flex flex-initial justify-start pt-10 px-10">
            <h1 class=" font-bold text-gray-800 hover:text-yellow-500"><a href="{{route('home')}}">< Back</a></h1>
        </div>
        <div class="flex flex-initial justify-center">
            <h1 class="text-6xl font-bold text-gray-800">Email Verification</h1>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="w-full w-full flex flex-1 justify-center items-center p-10">
        <div class="mt-4 flex items-center justify-between">
            <form class="m-4" method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                   
                    <button class="p-4 mt-1 rounded-md bg-yellow-500 text-gray-800 font-bold hover:bg-yellow-400" type="submit" value="Submit">Resend Verification Email</button>

                </div>
            </form>

            <form class="m-4" method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="p-4 mt-1 rounded-md bg-yellow-500 text-gray-800 font-bold hover:bg-yellow-400" type="submit" value="Submit">Log out</button>

            </form>
            <div class="flex-1 flex justify-center m-4">
            <a href="{{route('dashboard')}}"><button class="p-4 mt-1 rounded-md bg-yellow-500 text-gray-800 font-bold hover:bg-yellow-400">Dashboard</button></a>
        
            </div>
        </div>
            
        </div>

    @endsection



