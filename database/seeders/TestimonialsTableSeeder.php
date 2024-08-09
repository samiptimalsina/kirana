<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('testimonials')->insert([
            [
                'name' => 'Bijaya Store',
                'bio' => 'Rolpa',
                'review' => 'We loved how your team is committed to providing high-quality customer services and easy approach. we look forward to be connected with you in future as well. Best wishes!!',
                'img' => 'logo',
                'rating' => '4'
            ],
            [
                'name' => 'B And B Suppliers',
                'bio' => 'Salyan',
                'review' => 'I highly recommend this dealership for their services as they were professional, knowledgeable and did an excellent job on the products.',
                'img' => 'logo',
                'rating' => '4'
            ],
            [
                'name' => 'Gaunibagh Trade & Suppliers',
                'bio' => 'Dhangadhi, Kailali',
                'review' => 'I found them reliable, honest and operate with integrity providing a certain level of trust and assurance.',
                'img' => 'logo',
                'rating' => '4'
            ],
            [
                'name' => 'Ramesh',
                'bio' => 'Butwal',
                'review' => 'Loved these snacks, flavor is excellent and with reasonable price. I loved how these products can be enjoyed at any time of the day.',
                'img' => 'logo',
                'rating' => '4'
            ],
            [
                'name' => 'Prakash',
                'bio' => 'Pokhara',
                'review' => 'I loved, there is wide variety of products to choose from. And how easy it is to place an order and the speed of the delivery',
                'img' => 'logo',
                'rating' => '4'
            ],
            [
                'name' => 'Dhiraj',
                'bio' => 'Chitwan',
                'review' => 'Snacks to fit all budgets and diets and tastes even better. I like the product quality, way of packaging, fast delivery.',
                'img' => 'logo',
                'rating' => '4'
            ],
        ]);
    }
}
