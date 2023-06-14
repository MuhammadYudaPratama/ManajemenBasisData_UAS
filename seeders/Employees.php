<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employees extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employees::factory()->count(5)->create();
    }
}
