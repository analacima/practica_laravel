<x-layouts.layout>

    <div class="flex flex-col justify-center items-center p-4">
        <h1 class="text-3xl">Crear alumno</h1>
        <h2 class="text-2xl">Introduce los datos del nuevo alumno:</h2>
        <form action="{{route("alumnos.store")}}" method="post" class="space-y-3"> <!-- form-control w-full max-w-xs -->
            @csrf
            <!-- los name de los input tienen que coincidir con el nombre de los campos-->
            <div>
                <label for="name" class="label">Nombre completo: </label>
                <input type="text" id="name" name="nombre" class="input input-bordered">
            </div>
            <div>
                <label for="dni" class="label">Número de DNI: </label>
                <input type="text" id="dni" name="dni" class="input input-bordered">
            </div>
            <div>
                <label for="email" class="label">Correo electrónico: </label>
                <input type="email" id="email" name="email" class="input input-bordered">
            </div>
            <div class="flex flex-col justify-center items-center p-4">
                <input type="submit" id="create" class="input input-bordered bnt bg-header" value="Crear">
            </div>
        </form>
    </div>
</x-layouts.layout>
