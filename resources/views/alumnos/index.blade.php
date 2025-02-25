<x-layouts.layout>
    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Email</th>
            </tr>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-layouts.layout>
