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
                'name' => 'রুহুল হাসান',
                'description' => 'রুহুল হাসান',
            ],
            [
                'slug' => 'mabrurul-haque-fuad',
                'name' => 'মাবরুরুল হক ফুয়াদ',
                'description' => 'মাবরুরুল হক ফুয়াদ',
            ],
            [
                'slug' => 'hafiz-hamidullah',
                'name' => 'হাফিজ হামিদুল্লাহ',
                'description' => 'হাফিজ হামিদুল্লাহ',
            ],
            [
                'slug' => 'rohit-hassan',
                'name' => 'রহিত হাসান',
                'description' => 'রহিত হাসান',
            ],
            [
                'slug' => 'imtiyaz-hussain',
                'name' => 'ইমতিয়াজ হুসাইন',
                'description' => 'ইমতিয়াজ হুসাইন',
            ],
            [
                'slug' => 'anisuzzaman',
                'name' => 'আনিসুজ্জামান',
                'description' => 'আনিসুজ্জামান',
            ],
            [
                'slug' => 'mashruf-ahmad',
                'name' => 'মাশরুফ আহমদ',
                'description' => 'মাশরুফ আহমদ',
            ],
            [
                'slug' => 'tareq-hussain',
                'name' => 'তারেক হুসাইন',
                'description' => 'তারেক হুসাইন',
            ],
            [
                'slug' => 'harunur-rashid',
                'name' => 'হারুনুর রশিদ',
                'description' => 'হারুনুর রশিদ',
            ],
            [
                'slug' => 'muhammadullah',
                'name' => 'মুহাম্মাদুল্লাহ',
                'description' => 'মুহাম্মদুল্লাহ',
            ]
        ];
    }
}
