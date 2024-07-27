<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MediaReel;

class MediaReelTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('media_reels')->delete();

        MediaReel::create([
            'id' => 1,
            'title' => 'Sample mediareel',
            'thumbal' => 'public/opinion-images/nature.jpg',
            'video_link' => 'https://www.youtube.com/watch?v=b__XlEwrXso&t=1s',
        ]);
    }
}
