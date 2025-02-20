<header class="h-10v bg-header flex flex-row justify-between items-center  p-3 ">
<img  class ="h-16 max-h-full" src="{{asset("images/f53fafffb6dea92f630a4ff127d608bb.svg")}}" alt="logo">
<h1 class ="text-5xl text-white " >GESTIÓN CENTRO</h1>

<div>
    @guest
        <form action="">
            <a href="{{route("login")}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
               focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4">Login</a>
            <a href="{{route("register")}}" class="btn btn-sm">Register</a>
        </form>
    @endguest
    @auth
        <form action="{{route("logout")}}" method="post">
            Hola, {{auth()->user()->name}}
            @csrf
            <input class="btn btn-sm" type="submit" value="Logout">
        </form>
    @endauth

</div>

</header>



