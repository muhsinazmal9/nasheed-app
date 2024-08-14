<?php

namespace Database\Seeders;

use App\Models\Dedication;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dedication::factory(10)->create();
    }
}
