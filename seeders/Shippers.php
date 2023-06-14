<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Shippers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shippers::factory()->count(2)->create();
    }
}
