

    <nav class="navbar bg-nav h-7v">
        <a href="{{route('home')}}" class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-#D5E9DE-600
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> Home</a>
        <button class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-orange-600
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> About</button>
        <button class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-orange-600
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded mr-4"> Contact</button>
        <button class="bg-#90B2CA-500 text-white py-2 px-2 rounded hover:bg-orange-600
    focus:outline-none focus:ring-2 focus:ring-orange-200 btn btn-sm btn-outline p-2 rounded "> Noticias</button>
        @auth
            <a href="{{route("alumnos")}}" class="btn text-xl">Alumnos</a>
        @endauth
        <!--
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </button>
        </div>
        -->
    </nav>



