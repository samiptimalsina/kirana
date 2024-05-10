<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

                DB::table('banners')->insert([
            [
                'image' => 'banner1.jpg',
                'image_url' => 'https://example.com/banner1',
                'title' => 'Banner 1',
                'description' => 'This is the first banner description.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'banner2.jpg',
                'image_url' => 'https://example.com/banner2',
                'title' => 'Banner 2',
                'description' => 'This is the second banner description.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more banner data as needed
        ]);
    }
}
