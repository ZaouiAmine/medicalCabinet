@extends('layouts.app')
    @section('content')
    
    <div class="h-screen w-full flex flex-col items-center justify-center">
        <h1 class="text-5xl text-blue-500">Add Consultation and Perscription</h1>

        <div class="flex w-full items-center">
            <div class=" h-full w-1/2 flex justify-center items-center flex-col">
                    
                    <div class="p-4 flex flex-col w-full md:w-4/5 lg:w-4/5 xxl:w-3/4">
                        <form class="w-full p-2 lg:p-4 flex justify-center items-center flex-col" action="{{route('submitconsultation')}}" method="post">
                            @csrf
                            <input type="hidden" name="app_id" value="{{$app_id}}">
                            <input type="hidden" name="id" value="{{$id}}">
                            <input class="m-2 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="motive" type="text" placeholder="Motive">
                            <textarea class="m-2 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="consultation_and_examinations" type="text" placeholder="Consultation"></textarea>
                            <textarea id="prescription" class="m-2 p-4 w-full border-blue-500 bg-blue-50 focus:bg-white" name="perscription" type="text" placeholder="Perscription">
                                
                            </textarea>
                            <button class="m-2 p-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold" type="submit">ADD</button>
                        </form>
                    </div>
            </div>
            <div class="h-96 pt-48 w-1/2 flex justify-center items-center flex-col overflow-y-scroll"> 
                @foreach($medications as $medication)
                <div class=" flex justify-between items-center w-1/2">
                    <h1 class=" text-blue-500 ">{{$medication->commercial_name}} </h1><button class="font-bold text-blue-500" onclick="
                    var node = document.createTextNode('{{$medication->commercial_name}} -');
                    document.getElementById('prescription').appendChild(node);
                    ">ADD</button>
                </div>
                
                @endforeach
                

            </div>
        </div>

    </div>
    
    @endsection