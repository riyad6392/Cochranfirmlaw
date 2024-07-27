<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    public function run()
    {

        DB::table('hero_sections')->delete();

        HeroSection::create([
            'id' => 1,
            'title' => 'Sample media',
            'sub_title'=>'sub title',
            'image'=>'public/opinion-images/nature.jpg',
            'learn_more_link'=>'learn more',
            'contact_us_link'=>'contact us',
            'created_by'=>'created by',
            'updated_by'=>'updated by',
            'is_active' => true,
        ]);
    }
}
