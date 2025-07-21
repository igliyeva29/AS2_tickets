<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seat_number' => fake()->unique()->numberBetween(1, 60) . fake()->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K']),
            'seat_type' => fake()->randomElement(['Window', 'Aisel', 'Middle']),
            'is_available' => fake()->boolean(30),
        ];
    }
}
