<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Opinions;

class OpinionsTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('opinions')->delete();

        Opinions::create([
            'id' => 1,
            'title' => 'Sample Opinion',
            'short_description' => 'This is a short description.',
            'description' => 'This is a full description.',
            'image' => 'public/opinion-images/nature.jpg',
        ]);
    }
}
