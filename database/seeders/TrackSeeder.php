<?php

namespace Database\Seeders;

use App\Models\Track;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreign key check disable
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tracks')->truncate();

        $tracks = $this->fake_tracks();

        foreach ($tracks as $track) {
            $inserted = Track::factory()->create($track['data']);

            if ($inserted) {
                foreach ($track['artists'] as $artist) {
                    DB::table('artist_track')->insert([
                        'track_id' => $inserted->id,
                        'artist_id' => $artist,
                    ]);
                }
            }
        }


        // foreign key check enable
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function fake_tracks(): array
    {
        $tracks = [
            [
                'data' => [
                    'title' => '12 Rabiul Auwale Udoy',
                    'slug' => '12-rabiul-auwale-udoy',
                    'lyricist_id' => 1,
                    'audio_file' => 'uploads/tracks/1.mp3',
                ],
                'artists' => [10],
            ],
            [
                'data' => [
                    'title' => 'Hire Manik Jor',
                    'slug' => 'hire-manik-jor',
                    'lyricist_id' => 2,
                    'audio_file' => 'uploads/tracks/2.mp3',
                ],
                'artists' => [4],
            ],
            [
                'data' => [
                    'title' => 'Didarer ashile pala',
                    'slug' => 'didarer-ashile-pala',
                    'lyricist_id' => 2,
                    'audio_file' => 'uploads/tracks/3.mp3',
                ],
                'artists' => [4],
            ],
            [
                'data' => [
                    'title' => 'Shahzada Qibla ashben Aaj',
                    'slug' => 'shahzada-qibla-ashben-aaj',
                    'lyricist_id' => 3,
                    'audio_file' => 'uploads/tracks/4.mp3',
                ],
                'artists' => [2],
            ],
            [
                'data' => [
                    'title' => 'Aqaji kodom Pake Odhom',
                    'slug' => 'aqaji-kodom-pake-odhom',
                    'lyricist_id' => 2,
                    'audio_file' => 'uploads/tracks/5.mp3',
                ],
                'artists' => [4],
            ],
            [
                'data' => [
                    'title' => 'Shafayat Koriyen Habibi',
                    'slug' => 'shafayat-koriyen-habibi',
                    'lyricist_id' => 2,
                    'audio_file' => 'uploads/tracks/6.mp3',
                ],
                'artists' => [4],
            ],
            [
                'data' => [
                    'title' => 'Shob i Amar Dosh',
                    'slug' => 'shob-i-amar-dosh',
                    'lyricist_id' => 2,
                    'audio_file' => 'uploads/tracks/7.mp3',
                ],
                'artists' => [4],
            ],
        ];

        return $tracks;
    }
}
