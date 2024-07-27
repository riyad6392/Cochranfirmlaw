<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AttornysSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PracticeAreasSeeder::class);
        $this->call(OutReachSeeder::class);
        $this->call(GeneralLinksSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(SeoBackendSeeder::class);
        $this->call(OpinionsTableSeeder::class);
        $this->call(AccomplishmentsTableSeeder::class);
        $this->call(MediaReelTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(HeroSectionSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
