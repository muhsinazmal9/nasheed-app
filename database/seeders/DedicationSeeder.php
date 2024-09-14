<?php

namespace Database\Seeders;

use App\Models\Dedication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreign key check disable
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('dedications')->truncate();

        Dedication::factory()->createMany($this->fake_dedications());

        // foreign key check enable
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function fake_dedications(): array
    {
        return [
            [
                'slug' => 'imamul-umam',
                'name' => 'ইমামুল উমাম আলাইহিস সালাম',
                'description' => 'ইমামুল উমাম আলাইহিস সালাম',
            ],
            [
                'slug' => 'ummul-umam',
                'name' => 'উম্মুল উমাম আলাইহাস সালাম',
                'description' => 'উম্মুল উমাম আলাইহাস সালাম',
            ],
            [
                'slug' => 'khalifatul-umam',
                'name' => 'খলীফাতুল উমাম আলাইহিস সালাম',
                'description' => 'খলীফাতুল উমাম আলাইহিস সালাম',
            ],
            [
                'slug' => 'naqibatul-umam',
                'name' => 'নাক্বিবাতুল উমাম আলাইহাস সালাম',
                'description' => 'নাক্বিবাতুল উমাম আলাইহাস সালাম',
            ],
            [
                'slug' => 'nibrasatul-umam',
                'name' => 'নিবরাসাতুল উমাম আলাইহাস সালাম',
                'description' => 'নিবরাসাতুল উমাম আলাইহাস সালাম',
            ],
            [
                'slug' => 'shafiul-umam',
                'name' => 'শাফিউল উমাম আলাইহিস সালাম',
                'description' => 'শাফিউল উমাম আলাইহিস সালাম',
            ],
            [
                'slug' => 'hadiul-umam',
                'name' => 'হাদীউল উমাম আলাইহিস সালাম',
                'description' => 'হাদীউল উমাম আলাইহিস সালাম',
            ],
            [
                'slug' => 'saiyyidatul-umam',
                'name' => 'সাইয়্যিদাতুল উমাম আলাইহিমাস সালাম',
                'description' => 'সাইয়্যিদাতুল উমাম আলাইহিমাস সালাম',
            ],
            [
                'slug' => 'saiyyidul-umam',
                'name' => 'সাইয়্যিদুল উমাম আলাইহিমুস সালাম',
                'description' => 'সাইয়্যিদুল উমাম আলাইহিমুস সালাম',
            ]
        ];
    }
}
