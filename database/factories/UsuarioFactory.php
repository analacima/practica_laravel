<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'usuario' => $this->faker->usuario(),
            'password' => $this->faker->password(),
            'rol' => $this->faker->randomElement(['alumno', 'profesor']),
            'estado' => array_rand(['Activo', 'Inactivo']),
        ];
    }
}
