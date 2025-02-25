{{-- Diseño para escritorio --}}
<header class="hidden md:flex h-10v bg-header flex flex-row justify-between items-center  p-3 ">
    <img  class ="h-16 max-h-full" src="{{asset("images/logo.svg")}}" alt="logo">
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
                <span>Hola, {{auth()->user()->name}} </span>
                @csrf
                <input class="btn btn-sm" type="submit" value="Logout">
            </form>
        @endauth
    </div>
</header>

{{-- Diseño para móviles --}}

<header class="hidden md:hidden bg-header flex flex-row justify-between items-center p-3">
    <img class="m-4 h-16 max-h-full" src="{{asset("images/logo.svg")}}" alt="logo">
    <h1 class ="text-5xl text-white " >GESTIÓN CENTRO</h1>
</header>

