<?php

namespace Database\Seeders;

use App\Models\Lyricist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LyricistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreign key check disable
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('lyricists')->truncate();

        Lyricist::factory()->createMany($this->fake_lyricists());

        // foreign key check enable
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    public function fake_lyricists(): array
    {
        return [
            [
                'slug' => 'mufajjolur-rahman',
                'name' => 'Mufajjolur Rahman',
                'description' => 'Mufajjolur Rahman',
            ],
            [
                'slug' => 'hafiz-khan',
                'name' => 'Hafiz Khan',
                'description' => 'Hafiz Khan',
            ],
            [
                'slug' => 'mesut-al-fahim',
                'name' => 'Mesut Al Fahim',
                'description' => 'Mesut Al Fahim',
            ],
            [
                'slug' => 'tohsinur-rahman',
                'name' => 'Tohsinur Rahman',
                'description' => 'Tohsinur Rahman',
            ],
            [
                'slug' => 'muhiuddin',
                'name' => 'Muhiuddin',
                'description' => 'Muhiuddin',
            ],
            [
                'slug' => 'najmul-huda-farazi',
                'name' => 'Najmul Huda Farazi',
                'description' => 'Najmul Huda Farazi',
            ],
            [
                'slug' => 'rashedul-abedin',
                'name' => 'Rashedul Abedin',
                'description' => 'Rashedul Abedin',
            ],
            [
                'slug' => 'anisuzzaman',
                'name' => 'Anisuzzaman',
                'description' => 'Anisuzzaman',
            ],
            [
                'slug' => 'golam-munjir',
                'name' => 'Golam Munjir',
                'description' => 'Golam Munjir',
            ],
            [
                'slug' => 'masumur-rahman',
                'name' => 'Masumur Rahman',
                'description' => 'Masumur Rahman',
            ],
            [
                'slug' => 'shaiyyiduzzaman',
                'name' => 'Shaiyyiduzzaman',
                'description' => 'Shaiyyiduzzaman',
            ]
        ];
    }

}
