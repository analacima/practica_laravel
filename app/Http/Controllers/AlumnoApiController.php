<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlumnoResource;
use App\Models\Alumno;
use App\Http\Resources\AlumnoCollection;
use Illuminate\Http\Request;

class AlumnoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AlumnoCollection(Alumno::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // recojo los datos y los guardo
        $datos=$request->input("data.attributes");
        $alumno=new Alumno($datos);
        $alumno->save();
        return new AlumnoResource($alumno);
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
    public function destroy(string $id)
    {
        //
    }
}
