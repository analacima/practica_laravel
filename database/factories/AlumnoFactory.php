<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function dni():string{
        $letras= "TRWAGMYFPDXBNJZSQVHLCKE";
        $num=$this->faker->unique()->randomNumber(8);
        $nif=$num.$letras[$num%23];
        return $nif;
    }
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'dni' => $this->dni(),
            'email' => fake()->safeEmail()
        ];
    }
}
