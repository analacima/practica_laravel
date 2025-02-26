<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Alumno::factory()->count(10)->create(); // el modelo llama a la fábrica para que cree 50 veces
    }
}
