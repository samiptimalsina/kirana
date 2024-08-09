<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [

            [
                'name' => 'छक्का पन्जा',
                'slug' => 'chhakka-panja',
                'img' => 'assets/images/foodimage/chhakka-panja.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Corn Grits, Rice Grits, Edible Vegetable Oil, Iodized Salt, Spices and Condiments'
            ],
            [
                'name' => 'Noodle Crunch',
                'slug' => 'noodle-crunch',
                'img' => 'assets/images/foodimage/noodle-crunch.png',
                'price' => 20.00,
                'desc' => 'Ingredients: Refined Wheat Flour, Edible Vegetable Oil, Corn Starch, Potato Starch, Seasoning Spices & Condiments'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (अकबरे पिरो )',
                'slug' => 'jyap-jhup-crunchy-stick-akbare-piro',
                'img' => 'assets/images/foodimage/akbare-piro-10.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (Tomato Tangy Masala )',
                'slug' => 'jyap-jhup-crunchy-stick-tomato-tangy-masala',
                'img' => 'assets/images/foodimage/tomato-tangy-10.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salts'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (Masala Munch )',
                'slug' => 'jyap-jhup-crunchy-stick-masala-munch',
                'img' => 'assets/images/foodimage/masala-munch-10.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salts'
            ],
            [
                'name' => 'मजेदार मिक्स (580 gm)',
                'slug' => 'majedar-mix-580-gm',
                'img' => 'assets/images/foodimage/majedar580.png',
                'price' => 175.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'मजेदार मिक्स (280 gm)',
                'slug' => 'majedar-mix-280-gm',
                'img' => 'assets/images/foodimage/majedar280.png',
                'price' => 100.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'मजेदार मिक्स (140 gm)',
                'slug' => 'majedar-mix-140-gm',
                'img' => 'assets/images/foodimage/majedar140.png',
                'price' => 50.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'फुरनदाना (450gm)',
                'slug' => 'phurandana-450-gm',
                'img' => 'assets/images/foodimage/phurandana450.png',
                'price' => 150.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'फुरनदाना (250gm)',
                'slug' => 'phurandana-250-gm',
                'img' => 'assets/images/foodimage/phunardana250.png',
                'price' => 100.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'सदाबहार मिक्स ( 700 gm)',
                'slug' => 'sadabahar-mix-700-gm',
                'img' => 'assets/images/foodimage/sadabahar700.png',
                'price' => 220.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'सदाबहार मिक्स (350 gm)',
                'slug' => 'sadabahar-mix-350-gm',
                'img' => 'assets/images/foodimage/sadabahar350.png',
                'price' => 125.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'सदाबहार मिक्स (200 gm)',
                'slug' => 'sadabahar-mix-200-gm',
                'img' => 'assets/images/foodimage/sadabahar200.png',
                'price' => 75.00,
                'desc' => 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices'
            ],
            [
                'name' => 'बदाम टेस्टी',
                'slug' => 'badam-tasty',
                'img' => 'assets/images/foodimage/badam.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Peanut, Gram Pulse Flour, Edible Vegetable Oil, Corn Starch, Spices & Condiments, Salt and Acidity Regular'
            ],
            [
                'name' => 'SALTED PEANUTS',
                'slug' => 'salted-peanuts',
                'img' => 'assets/images/foodimage/salted-peanuts.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Peanuts, Edible Vegetable Oil & Edible Common Salt'
            ],
            [
                'name' => 'CHATPATA MATAR',
                'slug' => 'chatpata-matar',
                'img' => 'assets/images/foodimage/chatpata-matar.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Green Pea, Edible Vegetable Oil, Edible Salt, Condiments and Seasoning Spices'
            ],
            [
                'name' => 'MIX DALMOTH',
                'slug' => 'mix-dalmoth',
                'img' => 'assets/images/foodimage/mix-dalmoth.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Rice Flakes, Rice Flour, Edible Vegetable Oil, Peanuts, Chickpeas Flour, Red Chilli, Black Pepper, Potato Powder, Black Salt, Spices and Other Seasoning'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (अकबरे पिरो )',
                'slug' => 'jyap-jhup-crunchy-stick-akbare-piro-20',
                'img' => 'assets/images/foodimage/akbare-piro-20.png',
                'price' => 20.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (Masala Munch )',
                'slug' => 'jyap-jhup-crunchy-stick-masala-munch-20',
                'img' => 'assets/images/foodimage/masala-munch.png',
                'price' => 20.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt'
            ],
            [
                'name' => 'Jyap Jhup Crunchy Stick (Tomato Tangy Masala )',
                'slug' => 'jyap-jhup-crunchy-stick-tomato-tangy-masala-20',
                'img' => 'assets/images/foodimage/tomato-tangy-20.png',
                'price' => 20.00,
                'desc' => 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt'
            ],
            [
                'name' => 'CHANA DAAL MASALA',
                'slug' => 'chana-daal-masala',
                'img' => 'assets/images/foodimage/chana-dal.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Gram, Edible Vegetable Oil & Edible Common Salt & Spices'
            ],
            [
                'name' => 'MOONG DAAL',
                'slug' => 'moong-daal',
                'img' => 'assets/images/foodimage/moong-daal.png',
                'price' => 10.00,
                'desc' => 'Ingredients: Split Green Gram, Edible Vegetable Oil and Edible Common Salt Powder'
            ],
        ];

        DB::table('food')->insert($products);
    }
}
