@extends('layouts.guest')
    @section('content')
        <div class="full min-h-screen w-full flex justify-center items-center flex-col pt-10 lg:pt-20">
            <h1 class="text-5xl text-blue-500">Sign-in</h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <div class="p-4 flex flex-col w-full md:w-2/4 lg:w-2/5 xxl:w-1/4">
                <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('register')}}" method="post">
                    @csrf
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="firstName" type="text" placeholder="First Name">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="lastName" type="text" placeholder="Last Name">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="dateOfBirth" type="date" placeholder="Date Of Birth">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="email" type="email" placeholder="Email">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="phoneNumber" type="tel" placeholder="Phone Number">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="password" type="password" placeholder="Password">
                    <input class="m-1 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="password_confirmation" type="password" placeholder="Confirm Password">
                    <button class="m-1 p-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">Register</button>
                </form>
            </div>
        </div>
        <style>
            .full{
                background-image: url('assets/register-bg.png');
                background-size: cover;
            }
        </style>

                    

    @endsection

