<nav class="navbar flex h-16 w-full bg-blue-500 lg:bg-white fixed z-10">
    <div class="h-full w-full lg:w-1/2 lg:px-4 px-1 flex justify-center items-center">
        <ul class="h-full w-full flex justify-around lg:justify-center items-center ">
            @if(Auth::user()->hasRole('admin'))
                <a href="{{route('dashboard')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Approvals</li>
                </a>
                <a href="{{route('manageaccounts')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Manage Accounts</li>
                </a>
                <a href="{{route('shownewsletter')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Newsletter</li>
                </a>
                        
            @endif
            @if(Auth::user()->hasRole('doctor'))
                <a href="{{route('dashboard')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Appointments</li>
                </a>
                <a href="{{route('managemedications')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Mediactions</li>
                </a>
                <a href="{{route('manageaccounts')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Manage Accounts</li>
                </a>          
            @endif
            @if(Auth::user()->hasRole('secretary'))
                <a href="{{route('dashboard')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Appointments</li>
                </a>
                <a href="{{route('managemedications')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Mediactions</li>
                </a>
                <a href="{{route('manageaccounts')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Accounts</li>
                </a>          
            @endif
            @if(Auth::user()->hasRole('patient'))
                <a href="{{route('home')}}" class="h-full">
                    <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Home</li>
                </a>
                      
            @endif
            
        </ul>
    </div>
    <div class="h-full w-1/5 lg:w-1/2 lg:px-4 px-1 flex justify-around justify-end items-center ">
            <h1 class="text-blue-500 font bold">{{Auth::user()->first_name}}</h1>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="lg:p-3 p-2 m-2 text-white lg:text-blue-500 font-bold border-blue-500 border  hover:bg-blue-500 hover:text-white hidden lg:block">Log-out</button>
            </form>
            
            
        
        <a href="#" id="hambtn">
            <img class="w-10 lg:hidden" src="assets/ham-btn.png" alt="">
        </a>
    </div>
    
</nav>
<div id="hammenu" class="bg-blue-500 absolute active flex justify-around items-center">
            <form  action="{{route('logout')}}" method="post">
                @csrf
                <button class=" lg:p-3 p-2 m-2 text-blue-500 bg-white font-bold ">Log-out</button>
            </form>
</div>
<style>
    #hammenu{
        width: 100%;
        height: 200px;
    }
    .active{
        top: -200px;
    }
    
</style>
<script>
    var hammenu = document.getElementById("hammenu");
    var hambtn = document.getElementById("hambtn").addEventListener('click',function(){
        console.log('hamburger toggle');
        hammenu.classList.toggle("active");
    });

</script>