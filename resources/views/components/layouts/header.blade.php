<header class="h-10v bg-header flex flex-row justify-between items-center  p-3 ">
<img  class ="h-16 max-h-full bg-white" src="{{asset("images/logo.jpg")}}" alt="logo">
<h1 class ="text-5xl text-white " >GESTIÓN CENTRO</h1>

<div>
    @guest
        <form action="">
            <a href="{{route("login")}}" class="btn btn-sm btn-primary btn-outline">Login</a>
            <a href="{{route("register")}}" class="btn btn-sm">Register</a>
        </form>
    @endguest
    @auth
        <form action="{{route("logout")}}" method="post">
            <div class="badge badge-lg badge-outline ">{{auth()->user()->name}}</div>
            @csrf
            <input class="btn btn-sm" type="submit" value="Logout">
        </form>
    @endauth

</div>

</header>



