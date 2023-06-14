<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Order_details extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order_details::factory()->count(20)->create();
    }
}
