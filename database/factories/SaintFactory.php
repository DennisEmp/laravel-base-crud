<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => fake() -> name(),
            'birth_place' => fake() -> city(),
            'blessing_date' => fake() -> date(),
            'miracles' => fake() -> numberBetween(0, 30),

        ];
    }
}
