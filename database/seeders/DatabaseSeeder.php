<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\Order;
use App\Models\Stock;
use App\Models\Income;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Sale::factory()->count(50)->create();
        Order::factory()->count(20)->create();
        Stock::factory()->count(10)->create();
        Income::factory()->count(10)->create();
    }
}

