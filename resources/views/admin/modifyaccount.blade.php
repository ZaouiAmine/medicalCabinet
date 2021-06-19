@extends('layouts.app')
    @section('content')
    <div class="full min-h-screen w-full flex justify-center items-center flex-col pt-10 lg:pt-20">
            <h1 class="text-3xl text-blue-500">Modify This Account</h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <div class="p-4 flex flex-col w-full md:w-2/4 lg:w-2/5 xxl:w-1/4">
                <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('submit')}}" method="post">
                    @csrf
                    
                    
                    <input type="hidden" name="id" value="{{$users->id}}">
                    <input id="new_first_name" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="new_first_name" type="text" placeholder="old:{{$users->first_name}}">
                    
                    <input id="new_last_name" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="new_last_name" type="text" placeholder="old:{{$users->last_name}}">
                    
                    <input id="new_date_of_birth" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="new_date_of_birth" type="date" placeholder="old:{{$users->date_of_birth}}">
                    
                    <input id="new_email" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="new_email" type="email" placeholder="old:{{$users->email}}">
                    
                    <input id="new_phone_number" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="new_phone_number" type="tel" placeholder="old:{{$users->phone_number}}">
                    <input id="password" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="password" type="password" placeholder="Password">
                    <input id="confirm_password" class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="password_confirmation" type="password" placeholder="Confirm Password">
                    <button class="m-1 p-3 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">Save Changes</button>
                    
                </form>
            </div>
        </div>
        

    @endsection