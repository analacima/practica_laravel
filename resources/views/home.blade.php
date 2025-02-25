<x-layouts.layout>
    @guest()
        <div
            class="hero min-h-full"
            style="background-image:url({{asset('images/flat-lay-back-school-still-life-arrangement.jpg')}})">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Bienvenido a nuestro centro</h1>
                    <p class="mb-5">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>

                </div>
            </div>
        </div>
    @endguest
</x-layouts.layout>
