<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreign key check disable
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('artists')->truncate();

        Artist::factory()->createMany($this->fake_artists());

        // foreign key check enable
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function fake_artists(): array
    {
        return [
            [
                'slug' => 'ruhul-hasan',
                'name' => 'Ruhul Hasan',
                'description' => 'Ruhul Hasan',
            ],
            [
                'slug' => 'mabrurul-haque-fuad',
                'name' => 'Mabrurul Haque Fuad',
                'description' => 'Mabrurul Haque Fuad',
            ],
            [
                'slug' => 'hafiz-hamidullah',
                'name' => 'Hafiz Hamidullah',
                'description' => 'Hafiz Hamidullah',
            ],
            [
                'slug' => 'rohit-hassan',
                'name' => 'Rohit Hassan',
                'description' => 'Rohit Hassan',
            ],
            [
                'slug' => 'imtiyaz-hussain',
                'name' => 'Imtiyaz Hussain',
                'description' => 'Imtiyaz Hussain',
            ],
            [
                'slug' => 'anisuzzaman',
                'name' => 'Anisuzzaman',
                'description' => 'Anisuzzaman',
            ],
            [
                'slug' => 'mashruf-ahmad',
                'name' => 'Mashruf Ahmad',
                'description' => 'Mashruf Ahmad',
            ],
            [
                'slug' => 'tareq-hussain',
                'name' => 'Tareq Hussain',
                'description' => 'Tareq Hussain',
            ],
            [
                'slug' => 'harunur-rashid',
                'name' => 'Harunur Rashid',
                'description' => 'Harunur Rashid',
            ],
            [
                'slug' => 'muhammadullah',
                'name' => 'Muhammadullah',
                'description' => 'Muhammadullah',
            ]
        ];
    }
}
