<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perfume>
 */
class PerfumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'marca' => $this->faker->name(),
            'nome' => $this->faker->name(),
            'nota_oufativa' => $this->faker->name(),
            'validade' =>$this->faker->date()
        ];
    }
}
