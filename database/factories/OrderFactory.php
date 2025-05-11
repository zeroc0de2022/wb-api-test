<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'customer_name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['new', 'shipped', 'delivered']),
            'total_amount' => $this->faker->randomFloat(2, 100, 5000),
        ];
    }
}
