<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncomeFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'source' => $this->faker->randomElement(['Продажа', 'Аренда', 'Инвестиции']),
            'amount' => $this->faker->randomFloat(2, 200, 10000),
            'description' => $this->faker->sentence(),
        ];
    }
}
