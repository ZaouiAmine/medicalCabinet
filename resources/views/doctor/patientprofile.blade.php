@extends('layouts.app')
@section('content')
    <div class="h-screen w-full flex justify-center items-center">
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2"> 
            <h1 class="text-blue-500 font-bold text-lg lg:text-2xl m-4">{{$patient->first_name}} {{$patient->last_name}} Appointment</h1>
            <div class=" p-4  border border-blue-500 flex flex-col items-center">
                <div class="flex justify-start flex-col items-start">
                    <div class=" flex justtify-start items-center">
                        <h1 class="text-blue-500 font-bold text-lg pr-4">First Name :</h1>
                        <p class="text-gray-500">{{$patient->first_name}}</p>
                    </div>
                    <div class=" flex justtify-start items-center">
                        <h1 class="text-blue-500 font-bold text-lg pr-4">Last Name :</h1>
                        <p class="text-gray-500">{{$patient->last_name}}</p>
                    </div>
                    <div class=" flex justtify-start items-center">
                        <h1 class="text-blue-500 font-bold text-lg pr-4">Email :</h1>
                        <p class="text-gray-500">{{$patient->email}}</p>
                    </div>
                    <div class=" flex justtify-start items-center">
                        <h1 class="text-blue-500 font-bold text-lg pr-4">Date Of Birth :</h1>
                        <p class="text-gray-500">{{$patient->date_of_birth}}</p>
                    </div>
                    <div class=" flex justtify-start items-center">
                        <h1 class="text-blue-500 font-bold text-lg pr-4">Phone Number :</h1>
                        <p class="text-gray-500">{{$patient->phone_number}}</p>
                    </div>
                    @if(Auth::user()->hasRole('doctor'))
                    <div class=" flex justtify-center w-full items-center">
                        <form action="addconsultation" class=" w-full flex justify-center items-center" method="post">
                        @csrf
                        
                            <input type="hidden" name="app_id" value="{{$app_id}}">
                            <input type="hidden" name="id" value="{{$patient->id}}">
                            <button class="p-2 m-1 bg-blue-500 hover:bg-white border border-blue-500 hover:text-blue-500 text-white" type="submit">Add Consultation</button>
                        </form>
                        
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
        
    </div>
    
@endsection