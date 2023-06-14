<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Suppliers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suppliers::factory()->count(5)->create();
    }
}
