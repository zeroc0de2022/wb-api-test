<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => now()->toDateString(),
            'product_name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(0, 200),
            'warehouse' => $this->faker->randomElement(['Main', 'Backup', 'West', 'East']),
        ];
    }
}

