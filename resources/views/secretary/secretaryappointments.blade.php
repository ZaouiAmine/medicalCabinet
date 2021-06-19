@extends('layouts.app')
    @section('content')
        <div class="bg h-screen w-full flex flex-col justify-center items-center">
            <div class="text-blue-500 text-4xl">
                <h1>Appointments</h1>
            </div>
            @if(!Auth::user()->hasRole('patient'))
            <div class="w-full flex justify-center items-center">
                
                    <div class="w-full lg:w-5/6 flex justify-end items-center">
                        <a href="{{route('chooseprofile')}}">
                        <button class="text-blue-500 font-bold p-2 m-2 border border-blue-500 bg-white hover:bg-blue-500 hover:text-white" >Add Appointment</button>
                        </a>
                    </div>
               
            </div>
            @endif
            <div class="w-full flex flex-col justify-center items-center">
                <table class="w-full p-2 m-2 lg:w-5/6 flex flex-col justify-around items-center border border-blue-500">
                    <tbody class="w-full h-full flex flex-col justify-around items-center">
                    @foreach($appointments as $appointment)
                    <tr class="flex w-full justify-around items-center border-blue-500 border bg-white p-1 m-1 text-blue-500 font-bold">
                        <td class=" flex justify-center"> 

                            @if($appointment->done==2)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-red-100 text-red-500">W</div>
                            @endif
                        
                            @if($appointment->done==1)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-green-100 text-green-500">D</div>
                            @endif
                            
                        </td>
                        <td class="w-1/6 flex justify-center"> {{$appointment->appointment_date}} </td>
                        <td class="w-1/6 flex justify-center"> {{$appointment->appointment_hour}} </td>
                        @if(!Auth::user()->hasRole('patient'))

                        <td class=" h-full">
                            <form action="{{route('acceptappointment')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$appointment->id}}">
                                
                                <button class="w-10 h-10 rounded-full font-bold lg:text-green-500 bg-green-500 lg:bg-white hover:bg-green-500 text-white hover:text-white text-xl" type="submit">&#10003</button> 

                            </form>
                        </td>
                        @endif
                        <td class=" h-full">
                            <form action="{{route('deleteappointment')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$appointment->id}}">
                                <button class="w-10 h-10 rounded-full font-bold lg:text-red-500 bg-red-500 lg:bg-white hover:bg-red-500 text-white hover:text-white text-xl" type="submit">&#10005</button> 

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
                <div class="presenters">
                {{ $appointments->links() }}
                </div>
            </div>
        </div>
        <style>
            .bg{
                background-image: url('assets/manageaccounts-bg.png');
                background-size: cover;
            }
        </style>
    @endsection