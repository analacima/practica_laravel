<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all(); // sql * from alumnos;

        return view('alumnos.index', ["alumnos" => $alumnos]);
    }

    public function create()
    {
        return view('alumnos.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request tiene un método llamado input que nos devolverá los datos de la solicitud
        $datos=$request->input();
        $alumno = new Alumno($datos);
        $alumno->save();

        return redirect()->route('alumnos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');

    }
}
