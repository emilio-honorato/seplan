<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marca' => fake()->randomElement(['Toyota','Ford','Honda','Chevrolet', 'Renault', 'Fiat', 'Volkswagen', 'Nissan']),
            'modelo' => fake()->randomElement(['Gol','Uno','Celta','HB20', 'Kwid', 'Onix', 'Cruze', 'Corolla', 'Civic', 'Focus', 'Fusion', 'Ranger', 'Fiesta']),
            //'modelo' => fake()->word(),
            'ano' => fake()->numberBetween(2015, date('Y')),
            'preco' => fake()->randomFloat(2, 20000, 150000),
            'descricao' => fake()->sentence(),
        ];
    }

}
