<x-layouts.layout>

    <div class="flex flex-col justify-center items-center p-4">
        <h1 class="text-3xl">Actualizar alumno</h1>
        <h2 class="text-2xl">Realice los cambios necesarios:</h2>

        <form action="{{route("alumnos.update", $alumno->id)}}" method="post" class="space-y-3">
            @method("PUT")
            @csrf
            <!-- los name de los input tienen que coincidir con el nombre de los campos-->
            <div>
                <label for="name" class="label">Nombre completo: </label>
                <input value="{{$alumno->nombre}}" type="text" id="name" name="nombre" class="input input-bordered">
            </div>
            <div>
                <label for="dni" class="label">Número de DNI: </label>
                <input value={{$alumno->dni}} type="text" id="dni" name="dni" class="input input-bordered">
            </div>
            <div>
                <label for="email" class="label">Correo electrónico: </label>
                <input value={{$alumno->email}} type="email" id="email" name="email" class="input input-bordered">
            </div>
            <div class="flex flex-col justify-center items-center p-4">
                <button onclick=confirmarActualizar({{$alumno->id}}) class="btn bg-nav">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmarActualizar(id){
            swal({
                title:"Confirmar actualización",
                text :"Esta acción es definitiva no recuperable",
                icon:"warning",
                buttons: true,
            }).then( (ok)=> {
                    if (ok) {
                        let formulario = document.getElementById("formulario" + id);
                        formulario.submit();
                    }
                }
            );
        }
    </script>
</x-layouts.layout>

