<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Accomplisment;

class AccomplishmentsTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('accomplisments')->delete();

        Accomplisment::create([
            'id' => 1,
            'title' => 'Sample Opinion',
            'short_description' => 'This is a short description.',
            'description' => 'This is a full description.',
            'video_link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'image' => 'public/opinion-images/nature.jpg',
        ]);
    }
}
