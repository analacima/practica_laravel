

<nav class="navbar bg-nav h-7v flex flex-row justify-center items-center px-4">
    <a href="{{route('home')}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> Home</a>
    <a href="{{route('about')}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> About</a>
    <a href="{{route('contacto')}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> Contacto</a>
    <a href="{{route('noticias')}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> Noticias</a>
    @auth
        <a href="{{route("alumnos.index")}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-header
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4">Alumnos</a>
    @endauth
</nav>


