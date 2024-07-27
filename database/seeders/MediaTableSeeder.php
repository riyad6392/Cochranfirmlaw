<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Media;

class MediaTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('media')->delete();

        Media::create([
            'id' => 1,
            'title' => 'Sample media',
            'short_description' => 'This is a short description.',
            'description' => 'This is a full description.',
            'video_link' => 'https://www.youtube.com/watch?v=b__XlEwrXso&t=1s',
            'thumbal' => 'public/opinion-images/nature.jpg',
        ]);
    }
}
