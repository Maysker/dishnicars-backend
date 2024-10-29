<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project; 
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Wrap By Dishni Cars - BMW M3',
                'description' => 'BMW M3 wrap video door Dishni Cars.',
                'video_url' => 'https://www.tiktok.com/@dishni_cars/video/7269475055736851744',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Wrap By Dishni Cars - Mercedes AMG W213',
                'description' => 'Mercedes AMG W213 Wrap Video door Dishni Cars.', 
                'video_url' => 'https://www.tiktok.com/@dishni_cars/video/7269479898006277408',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'BMW Custom Wrap',
                'description' => 'Aangepaste BMW Wrap Video.', 
                'video_url' => 'https://www.tiktok.com/@dishni_cars/video/7269481597580201249',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
