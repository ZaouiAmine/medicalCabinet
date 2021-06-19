@extends('layouts.app')
    @section('content')
        <div class="bg h-screen w-full flex flex-col justify-center items-center">
            <div class="text-blue-500 text-4xl">
                <h1>Manage Accounts</h1>
            </div>
            <div class="w-full flex justify-center items-center">
                
                    <div class="w-full lg:w-5/6 flex justify-end items-center">
                        <a href="{{route('addaccount')}}">
                        <button class="text-blue-500 font-bold p-2 m-2 border border-blue-500 bg-white hover:bg-blue-500 hover:text-white" >Add Account</button>
                        </a>
                    </div>
               
            </div>
            <div class="w-full flex flex-col justify-center items-center">
                <table class="w-full p-2 m-2 lg:w-5/6 flex flex-col justify-around items-center border border-blue-500">
                    <tbody class="w-full h-full flex flex-col justify-around items-center">
                    @foreach($users as $user)
                    <tr class="flex w-full justify-around items-center border-blue-500 border bg-white p-1 m-1 text-blue-500 font-bold">
                        <td class=" flex justify-center"> 
                            @if($user->role_id==1)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-red-100 text-red-500">A</div>
                            @endif
                            @if($user->role_id==2)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-green-100 text-green-500">D</div>
                            @endif
                            @if($user->role_id==3)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-yellow-100 text-yellow-500">S</div>
                            @endif
                            @if($user->role_id==4)
                                <div class="w-7 h-7 flex justify-center items-center rounded-full font-bold bg-blue-100 text-blue-500">P</div>
                            @endif
                        </td>
                        <td class="w-1/6 flex justify-center"> {{$user->first_name}} </td>
                        <td class="w-1/6 flex justify-center"> {{$user->last_name}} </td>
                        <td class="w-2/6 flex justify-center hidden lg:block"> {{$user->email}} </td>
                        <td class="w-1/6 flex justify-center hidden lg:block"> {{$user->phone_number}} </td>
                        <td class=" h-full">
                            <form action="{{route('modifyaccount')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button class="w-10 h-10 rounded-full font-bold lg:text-yellow-500 bg-yellow-500 lg:bg-white hover:bg-yellow-500 text-white hover:text-white text-xl" type="submit">&#9781</button>
                            </form>
                        </td>
                        <td class=" h-full">
                            <form action="{{route('deleteaccount')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button class="w-10 h-10 rounded-full font-bold lg:text-red-500 bg-red-500 lg:bg-white hover:bg-red-500 text-white hover:text-white text-xl" type="submit">&#10005</button> 

                            </form>
                        </td>
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
            .bg{
                background-image: url('assets/manageaccounts-bg.png');
                background-size: cover;
            }
        </style>
    @endsection