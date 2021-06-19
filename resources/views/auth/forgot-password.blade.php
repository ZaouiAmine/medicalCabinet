@extends('layouts.guest')
    @section('content')
        <div class="flex flex-initial justify-start pt-10 px-10">
            <h1 class=" font-bold text-gray-800 hover:text-yellow-500"><a href="#">< Back</a></h1>
        </div>
        <div class="flex flex-initial justify-center items-center">
            <h1 class="text-6xl font-bold text-gray-800">Reset Your Password</h1>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="w-screen flex flex-1 justify-center items-center p-10">
            <form class="flex flex-col w-full lg:w-2/6" action="" method="post">
            @csrf

                    <input class="p-4 mt-1 rounded-md bg-gray-50 focus:bg-white" type="email" name="email" id="email" placeholder="Email">

                    <button class="p-4 mt-1 rounded-md bg-yellow-500 text-gray-800 font-bold hover:bg-yellow-400" type="submit" value="Submit">Email Password Reset Link</button>
                
            </form>
        </div>

    @endsection



           

                
