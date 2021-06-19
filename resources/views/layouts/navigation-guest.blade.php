<nav class="navbar flex h-16 w-full bg-blue-500 lg:bg-white fixed z-10">
    <div class="h-full w-full lg:w-1/2 lg:px-4 px-1 flex justify-center items-center">
        <ul class="h-full w-full flex justify-around lg:justify-center items-center ">
            <a href="{{route('home')}}" class="h-full">
                <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Home</li>
            </a>
            <a href="{{route('about')}}" class="h-full">
                <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">About</li>
            </a>
            <a href="{{route('contact')}}" class="h-full">
                <li class="h-full flex justify-center items-center lg:p-4 p-1 lg:mx-2 mx-1 lg:hover:bg-blue-500 text-white lg:text-blue-500 hover:text-white font-bold cursor-pointer">Contact</li>
            </a>            
        </ul>
    </div>
    <div class="h-full w-1/5 lg:w-1/2 lg:px-4 px-1 flex justify-center justify-end items-center ">
        
            <a href="{{route('login')}}">
                <button class="lg:p-3 p-2 m-2 text-white lg:text-blue-500 font-bold border-blue-500 border  hover:bg-blue-500 hover:text-white hidden lg:block">Sign-in</button>
            </a>
            <a href="{{route('register')}}">
                <button class="lg:p-3 p-2 m-2 bg-blue-500 text-white border border-blue-400  hover:bg-blue-600 hover:text-white font-bold hidden lg:block">Sign-up</button>
            </a>
        
        <a href="#" id="hambtn">
            <img class="w-10 lg:hidden" src="assets/ham-btn.png" alt="">
        </a>
    </div>
    
</nav>
<div id="hammenu" class="bg-blue-500 absolute active flex justify-around items-center">
            <a href="{{route('login')}}">
                <button class="lg:p-3 p-2 m-2 text-white lg:text-blue-500 font-bold border-blue-500 border  hover:bg-blue-500 hover:text-white ">Sign-in</button>
            </a>
            <a href="{{route('register')}}">
                <button class="lg:p-3 p-2 m-2 bg-blue-500 text-white border border-blue-400  hover:bg-blue-600 hover:text-white font-bold ">Sign-up</button>
            </a>
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