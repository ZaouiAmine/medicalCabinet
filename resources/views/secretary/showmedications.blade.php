@extends('layouts.app')
    @section('content')
        <div class="bg h-screen w-full flex flex-col justify-center items-center">
            <div class="text-blue-500 text-4xl">
                <h1>Manage Medications</h1>
            </div>
            <div class="w-full flex justify-center items-center">
                
                    <div class="w-full lg:w-5/6 flex justify-end items-center">
                        <a href="{{route('addmedication')}}">
                        <button class="text-blue-500 font-bold p-2 m-2 border border-blue-500 bg-white hover:bg-blue-500 hover:text-white" >Add Medication</button>
                        </a>
                    </div>
               
            </div>
            <div class="w-full flex flex-col justify-center items-center">
                <table class="w-full p-2 m-2 lg:w-5/6 flex flex-col justify-around items-center border border-blue-500">
                    <tbody class="w-full h-full flex flex-col justify-around items-center">
                    @foreach($meds as $med)
                    <tr class="flex w-full justify-around items-center border-blue-500 border bg-white p-1 m-1 text-blue-500 font-bold">
                        
                        <td class="w-1/6 flex justify-center"> {{$med->scientific_name}} </td>
                        <td class="w-1/6 flex justify-center"> {{$med->commercial_name}} </td>
                        

                        <td class=" h-full">
                            <form action="{{route('deletemedication')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$med->id}}">
                                <button class="w-10 h-10 rounded-full font-bold lg:text-red-500 bg-red-500 lg:bg-white hover:bg-red-500 text-white hover:text-white text-xl" type="submit">&#10005</button> 

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
                <div class="presenters">
                {{ $meds->links() }}
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