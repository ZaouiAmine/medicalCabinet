@extends('layouts.guest')
@section('content')
    <div class="h-screen w-full flex justify-center items-center pt-32 lg:pt-48">
        <div class="lg:h-5/6 h-full lg:w-5/6 w-full flex flex-col lg:flex-row">
            <div class="lg:w-1/2 w-full h-full">
                <div class="h-1/2 w-full flex  justify-center items-center">
                    <div class="amine h-56 w-56 rounded-full border-2 border-blue-500"></div>
                </div>
                <div class="h-1/2 w-full flex flex-col justify-center items-center">
                    <h1 class="text-3xl lg:text-4xl text-blue-500">Zaoui M. Amine</h1>
                    <p class="text-gray-400">Student at NTIC faculty of technology</p>
                </div>
            </div>
            <div class="lg:w-1/2 w-full h-full">
                <div class="h-1/2 w-full flex justify-center items-center">
                    <div class="cmo h-56 w-56 rounded-full border-2 border-blue-500"></div>
                </div>
                <div class="h-1/2 w-full flex flex-col justify-center items-center">
                    <h1 class="text-3xl lg:text-4xl text-blue-500">Taleb Oussema</h1>
                    <p class="text-gray-400">Student at NTIC faculty of technology</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .cmo{
            background-image: url('assets/cmo.jpg');
            background-size: cover;
        }
        .amine{
            background-image: url('assets/me.jpg');
            background-size: cover;
        }

    </style>
@endsection
