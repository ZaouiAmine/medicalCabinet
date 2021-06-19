@extends('layouts.app')
    @section('content')
        <div class="bg h-screen w-full flex flex-col justify-center items-center">
            <div class="text-blue-500 text-4xl">
                <h1>Newsletters</h1>
            </div>
           
            <div class="w-full flex flex-col justify-center items-center">
                <table class="lg:w-1/2 sm:w-full p-2 m-2 lg:w-5/6 flex flex-col justify-around items-center border border-blue-500">
                    <tbody class="w-full h-full flex flex-col justify-around items-center">
                    @foreach($newsletters as $newsletter)
                    <tr class="flex w-full justify-around items-center border-blue-500 border bg-white p-1 m-1 text-blue-500 font-bold">
                        
                        <td class="w-1/6 flex justify-center"> {{$newsletter->email}} </td>
                        
                        
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
                <div class="presenters">
                {{ $newsletters->links() }}
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