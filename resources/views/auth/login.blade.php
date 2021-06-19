@extends('layouts.guest')
    @section('content')
        <div class="full h-screen w-full flex justify-center items-center flex-col">
            <h1 class="text-5xl text-blue-500">Sign-in</h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <div class="p-4 flex flex-col w-full md:w-2/4 lg:w-2/5 xxl:w-1/4">
                <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('login')}}" method="post">
                    @csrf
                    <input class="m-2 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="email" type="email" placeholder="Email">
                    <input class="m-2 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="password" type="password" placeholder="password">
                    <button class="m-2 p-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">Login</button>
                </form>
            </div>
        </div>
        <style>
            @media all and (max-width:1000px){
                .full{
                background-image: url('assets/login-gb-mobile.png');
                background-size: cover;
                }
            }
            @media all and (min-width:1000px){
                .full{
                background-image: url('assets/login-bg.png');
                background-size: cover;
                }
            }
        </style>
@endsection



           

                