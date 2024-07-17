<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;

class CustomerContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $contacts = [
            ['name' => 'Aarthik Suppliers', 'contact_no' => '9856033876'],
            ['name' => 'Aayush Cold Store', 'address' => 'IBRD Kanchanpur', 'contact_no' => '9848745080'],
            ['name' => 'Adhikari Stores'],
            ['name' => 'B And B Suppliers', 'address' => 'Salyan', 'contact_no' => '9858027613'],
            ['name' => 'Bhusal Trading Center', 'address' => 'Kathmandu', 'contact_no' => '9849368888'],
            ['name' => 'Bijaya Store', 'address' => 'Rolpa', 'contact_no' => '9847869222'],
            ['name' => 'Binaya Marketting', 'address' => 'Kawasoti, Nawalpur', 'contact_no' => '9857041972'],
            ['name' => 'D.R. Suppliers', 'address' => 'Juneta Salyan', 'contact_no' => '9844991572'],
            ['name' => 'Gaunibagh Trade & Suppliers', 'address' => 'Dhangadhi, Kailali', 'contact_no' => '9858751058'],
            ['name' => 'Gauribagh Distributor', 'address' => 'Dadeldhura', 'contact_no' => '9858751059'],
            ['name' => 'Godawari Traders Pvt. Ltd.', 'address' => 'Attariya, Kailali', 'contact_no' => '9865945747'],
            ['name' => 'Himganga Trade Concern', 'address' => 'Dhangadhi Kailali', 'contact_no' => '9848592370'],
            ['name' => 'Jyoti Trade And Suppliers', 'address' => 'Dhangadhi Kailali', 'contact_no' => '9801707942'],
            ['name' => 'K And G Trade Suppliers', 'address' => 'Butwal, Rupandhahi', 'contact_no' => '9857058532'],
            ['name' => 'Khadka Suppliers', 'address' => 'Ghorahi Dang', 'contact_no' => '9857834295'],
            ['name' => 'Maharudra Store', 'address' => 'Tanahu', 'contact_no' => '9846368229'],
            ['name' => 'New Anoop Tread Center', 'address' => 'Bhairahawa, Rupandhahi', 'contact_no' => '9806971990'],
            ['name' => 'New Bhageshwor Suppliers', 'address' => 'Dhangadhi Kailali', 'contact_no' => '9867254848'],
            ['name' => 'New Pragati Stores', 'address' => 'Abukhaireni, Tanahu', 'contact_no' => '9856040217'],
            ['name' => 'New Sindur Kirana Pasal', 'address' => 'Tulsipur, Dang', 'contact_no' => '9847823996'],
            ['name' => 'Nirak General Store', 'address' => 'Surkhet', 'contact_no' => '9858020429'],
            ['name' => 'Om Laxmi Kirana Pasal', 'address' => 'Sandhikharkha, Arghakhanchi', 'contact_no' => '9847082597'],
            ['name' => 'Parajuli Suppliers', 'address' => 'Rajapur, Bardiya', 'contact_no' => '9848147461'],
            ['name' => 'Prekshya and Prashant Suppliers', 'address' => 'Narayanghat, Chitwan', 'contact_no' => '9855059344'],
            ['name' => 'Raju Store', 'address' => 'Dailekh', 'contact_no' => '9868087550'],
            ['name' => 'Riddi Siddi Trades', 'address' => 'Tansen, Palpa', 'contact_no' => '9847092613'],
            ['name' => 'S.k Suppliers', 'address' => 'Sunawal, Nalparasi', 'contact_no' => '9811409098'],
            ['name' => 'S.K. Store', 'address' => 'Taratal, Bardiya', 'contact_no' => '9848145590'],
            ['name' => 'S.S. Suppliers', 'address' => 'Lamahi, Dang', 'contact_no' => '9857070632'],
            ['name' => 'Shivamani Suppliers', 'address' => 'Jitpur, Kapilbastu', 'contact_no' => '9857051360'],
            ['name' => 'Shiwani General Store', 'address' => 'Gulariya, Bardiya'],
            ['name' => 'Shree Nagarjun Store', 'address' => 'Mahendranagar Kanchanpur', 'contact_no' => '9806437358'],
            ['name' => 'Shubha Laxmi General Store', 'address' => 'Nepaljung, Banke', 'contact_no' => '9848253799'],
            ['name' => 'Supriya And Sulab Traders', 'address' => 'Hetauda, Makawanpur', 'contact_no' => '9849759388'],
        ];

        foreach ($contacts as $contact) {
            Dealer::create($contact);
        }
    }
}
