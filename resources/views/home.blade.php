@extends('layouts.guest')
@section('content')
    <div class="w-full h-screen flex font-bold text-blue-500 mb-10">
        <div class="cover w-full h-full flex justify-center items-center text-center">
        <div class="left w-1/2 h-full flex flex-col justify-center items-center lg:pt-16">
            <h1 class="lg:text-6xl text-5xl p-1 text-white lg:text-blue-500">Welcome To Our Medical Cabinet Managing <span class="text-red-500 ">System</span> </h1>
            <div class="flex m-4 ">
                <a href="{{route('login')}}">
                    <button class="lg:p-3 p-2 m-2 text-white lg:text-blue-500 font-bold border-blue-500 border  hover:bg-blue-500 hover:text-white hidden lg:block">Sign-in</button>
                </a>
                <a href="{{route('register')}}">
                    <button class="lg:p-3 p-2 m-2 bg-blue-500 text-white border border-blue-400  hover:bg-blue-600 hover:text-white font-bold hidden lg:block">Sign-up</button>
                </a>
            </div>
        </div>
        <div class="right w-1/2 h-full"></div>
    </div>
        
    </div>
    <div class="w-full h-96 p-5 mb-10">
        <div class="flex justify-around items-center w-full h-full lg:hidden  transition">
            <button class="w-10 h-10 bg-blue-500 text-white rounded-full outline-none border-none" onclick="plusDivs(-1)">&#10094;</button>
            <div class="w-4/6 mySlides p-1 text-center">
                <h1 class="font-bold text-3xl text-blue-500">Appointment Manager</h1>
                <p class="text-gray-400">Check for available appointment, and book the date your want for your patients.</p>
            </div>
            <div class="w-4/6 mySlides p-1 text-center">
                <h1 class="font-bold text-3xl text-blue-500">Medications Managements</h1>
                <p class="text-gray-400">Manage your medications list by adding new ones , deleting oudated ones and update the existing to use for patient's perscriptions.</p>
            </div>
            <div class="w-4/6 mySlides p-1 text-center">
                <h1 class="font-bold text-3xl text-blue-500">Manage Patients</h1>
                <p class="text-gray-400">Manage patients and there medical files with ease by adding consultations and perscriptions to each and every record.</p>
            </div>

            <button class="w-10 h-10 bg-blue-500 text-white rounded-full outline-none border-none" onclick="plusDivs(+1)">&#10095;</button>
        </div>
        <div class="features-lg flex flex-row justify-around items-center w-full h-full ">
            <div class="w-1/4">
                <h1 class="font-bold text-4xl text-blue-500">Appointment Manager</h1>
                <p class="text-gray-400">Check for available appointment, and book the date your want for your patients.</p>
            </div>
            <div class="w-1/4">
                <h1 class="font-bold text-4xl text-blue-500">Medications Managements</h1>
                <p class="text-gray-400">Manage your medications list by adding new ones , deleting oudated ones and update the existing to use for patient's perscriptions.</p>
            </div>
            <div class="w-1/4">
                <h1 class="font-bold text-4xl text-blue-500">Manage Patients</h1>
                <p class="text-gray-400">Manage patients and there medical files with ease by adding consultations and perscriptions to each and every record.</p>
            </div>
        </div>
    </div>
    <style>
        
        @media all and (min-width:1000px)
        {
            .cover{
            background-image: url('assets/home-hero.png');
            background-size:cover;
            }
        }
        @media all and (max-width:1000px)
        {
            .cover{
                background-image: none');
               
            }
            .left{
                width: 100%;
                background-image: url('assets/home-hero-mobile.png');
                background-size: cover;
            }
            .right{
                width: 0%;
            }
        }
        @media all and (max-width:1000px){
            .features-lg{
                display: none;
            }
        }
    </style>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
        }
    </script>
@endsection