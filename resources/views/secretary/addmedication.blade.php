@extends('layouts.app')
    @section('content')
    <div class="full min-h-screen w-full flex justify-center items-center flex-col pt-10 lg:pt-20">
            <h1 class="text-3xl text-blue-500">Add Appointment</h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <div class="p-4 flex flex-col w-full md:w-2/4 lg:w-2/5 xxl:w-1/4">
                <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('addmedication')}}" method="post">
                    @csrf
                    
                    <input class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="scientific_name" type="text"
                    placeholder="scientific name">
                    <input class="m-1 p-3 w-full border-blue-500 bg-blue-50 focus:bg-white" name="commercial_name" type="text" placeholder="commercial name">
                    
                    <button class="m-1 p-3 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">Add medication</button>
                </form>
            </div>
        </div>
    @endsection