@extends('layouts.app')
    @section('content')
    <div class="flex bg h-screen w-full flex flex-col lg:flex-row justify-around">
        <div class="flex justify-center items-center w-full lg:w-1/3 ">
            <h1 class="text-white font-bold text-2xl lg:text-3xl">Approve New Doctors</h1>
        </div>
        <div class="flex flex-col justify-center items-center w-full lg:w-2/3">
            <table class="w-full p-2 lg:w-2/3 flex flex-col justify-around items-center border border-blue-500">
                <tbody class="w-full h-full flex flex-col justify-around items-center">
                @foreach($users as $user)
                <tr class="flex w-full justify-around items-center border-blue-500 border bg-white p-1 m-1 text-blue-500 font-bold">
                    <td class="w-2/6 flex justify-center"> {{$user->first_name}} </td>
                    <td class="w-2/6 flex justify-center"> {{$user->last_name}} </td>
                    <td class="w-1/6 h-full"><form class="w-full h-full" action="{{route('acceptApproval')}}" method="post">@csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button class="w-10 h-10 rounded-full font-bold lg:text-green-500 bg-green-500 lg:bg-white hover:bg-green-500 text-white hover:text-white text-xl" type="submit">&#10003</button>
                    </form></td>
                    <td class="w-1/6 h-full"><form class="w-full h-full" action="{{route('deleteApproval')}}" method="post">@csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button class="w-10 h-10 rounded-full font-bold lg:text-red-500 bg-red-500 lg:bg-white hover:bg-red-500 text-white hover:text-white text-xl" type="submit">&#10005</button> 
                    </form></td>
                </tr>
                @endforeach
                </tbody>
                
            </table>
            <div class="presenters">
            {{ $users->links() }}
            </div>
        </div>
    </div>
    <style>
        @media screen and (min-width:1000px)
        {
            .bg{
            background-image: url(assets/doc-dash-bg.png);
            background-size: cover;
            }
        }
        @media screen and (max-width:1000px)
        {
            .bg{
            background-image: url(assets/doc-dash-bg-mobile.png);
            background-size: cover;
            }
        }
        
        
    </style>
    @endsection