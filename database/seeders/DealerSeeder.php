<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $dealers = [
            ['name' => 'Gaundibaag Tred And Suppliers', 'address' => 'Dhangadhi', 'contact_person' => 'Hari Prasad Bhatta', 'proprietor_name' => 'Hari Prashad Bhatta'],
            ['name' => 'Nagarjun Store', 'address' => 'Mahendranagar', 'contact_person' => 'Bhuwan Jaisi', 'proprietor_name' => 'Bhuwan Jaisi'],
            ['name' => 'Gaundibaag Distributers', 'address' => 'Dadeldhura', 'contact_person' => 'Dammar Joshi', 'proprietor_name' => 'Dammar Joshi'],
            ['name' => 'Himganga Tred Concern', 'address' => 'Dhangadhi', 'contact_person' => 'Tejendra Bohara', 'proprietor_name' => 'Tejendra Bohara'],
            ['name' => 'Aush Cold Store', 'address' => 'Ibrd.(Kanchanpur)', 'contact_person' => 'Laxman Thapa', 'proprietor_name' => 'Laxman Thapa'],
            ['name' => 'Prajuli Suppliers', 'address' => 'Rajapur(Bardiya)', 'contact_person' => 'Dilip Prajuli', 'proprietor_name' => 'Dilip Prajuli'],
            ['name' => 'Sk. Store', 'address' => 'Tarataal(Bardiya)', 'contact_person' => 'Hari Lal Khatri', 'proprietor_name' => 'Hari Lal Khatri'],
            ['name' => 'Siwani Sandhya Suppliers', 'address' => 'Gulariya(Bardiya)', 'contact_person' => 'Balaram Yadav', 'proprietor_name' => 'Balaram Yadav'],
            ['name' => 'Shubha Laxmi Janaral Store', 'address' => 'Nepalgunj', 'contact_person' => 'Surendra Yadav', 'proprietor_name' => 'Surendra Yadav'],
            ['name' => 'Jyoti Tred Concern', 'address' => 'Dhangadhi', 'contact_person' => 'Jyoti Prakash Joshi', 'proprietor_name' => 'Jyoti Prakash Joshi'],
            ['name' => 'Nirak Janaral Store', 'address' => 'Surkhet', 'contact_person' => 'Surendra Oli', 'proprietor_name' => 'Surendra Oli'],
            ['name' => 'Sandesh And Sangita Store', 'address' => 'Surkhet', 'contact_person' => 'Sandesh Sheresth', 'proprietor_name' => 'Sandesh Sheresth'],
            ['name' => 'Raju Store', 'address' => 'Dailekh', 'contact_person' => 'Raju Sheresth', 'proprietor_name' => 'Raju Sheresth'],
            ['name' => 'S.S. Suppliers', 'address' => 'Lamahi (Dang)', 'contact_person' => 'Hemant G.c.', 'proprietor_name' => 'Hemant G.c.'],
            ['name' => 'New Sindur Kirana Pasal', 'address' => 'Tulsipur(Dang)', 'contact_person' => 'Krishna Pokhrel', 'proprietor_name' => 'Krishna Pokhrel'],
            ['name' => 'Shivmani Suppliers', 'address' => 'Kapilbastu', 'contact_person' => 'Deepak Bhushal', 'proprietor_name' => 'Deepak Bhushal'],
            ['name' => 'Om Laxmi Kirana Pasal', 'address' => 'Arghakhachi', 'contact_person' => 'Anjana Bhushal', 'proprietor_name' => 'Anjana Bhushal'],
            ['name' => 'Shree Nandarupa Suppliers', 'address' => 'Murgiya', 'contact_person' => 'Home Nath Subedi', 'proprietor_name' => 'Home Nath Subedi'],
            ['name' => 'K. & G. Tred And Suppliers', 'address' => 'Butwal', 'contact_person' => 'Karna Bdr. Tandan', 'proprietor_name' => 'Karna Bdr. Tandan'],
            ['name' => 'Prekshya And Prashant Suppliers', 'address' => 'Narayangadh', 'contact_person' => 'Prashant K.c.', 'proprietor_name' => 'Prashant K.c.'],
            ['name' => 'Binaya Marketing', 'address' => 'Kawasoti', 'contact_person' => 'Binaya Adhikari', 'proprietor_name' => 'Binaya Adhikari'],
            ['name' => 'Supriya And Shulabh Tredars', 'address' => 'Hetauda', 'contact_person' => 'Binaya Bhatta', 'proprietor_name' => 'Binaya Bhatta'],
            ['name' => 'New Pragati Store', 'address' => 'Abukhaireni', 'contact_person' => 'Ganesh Sheresth', 'proprietor_name' => 'Ganesh Sheresth'],
            ['name' => 'Maharudra Store', 'address' => 'Tanahu', 'contact_person' => 'Chanchal Sheresth', 'proprietor_name' => 'Chanchal Sheresth'],
            ['name' => 'Namuna Store', 'address' => 'Damauli', 'contact_person' => 'Rajendra Sheresth', 'proprietor_name' => 'Rajendra Sheresth'],
            ['name' => 'New Anup Trede Center', 'address' => 'Bhairahawa', 'contact_person' => 'Chandra Prakash murau', 'proprietor_name' => 'Chandra Prakash murau'],
            ['name' => 'Sk. Suppliers', 'address' => 'Sunawal', 'contact_person' => 'Shiv Subedi', 'proprietor_name' => 'Shiv Subedi'],
            ['name' => 'Nittyam Treding Pvt.Ltd.', 'address' => 'Banepa', 'contact_person' => 'Sabin Manandhar', 'proprietor_name' => 'Sabin Manandhar'],
            ['name' => 'B & D Tred & Suppliers', 'address' => 'Pepsicola', 'contact_person' => 'Ganesh Bhushal', 'proprietor_name' => 'Ganesh Bhushal'],
            ['name' => 'Jaya Laxmi Tred Link', 'address' => 'Balkumari', 'contact_person' => 'Salin Sheresth', 'proprietor_name' => 'Salin Sheresth'],
            ['name' => 'Jass Tred International', 'address' => 'Dhapakhel(Lalitpur)', 'contact_person' => 'Sashi Chandra Shingh', 'proprietor_name' => 'Sashi Chandra Shingh'],
            ['name' => 'Jssp Enterprises', 'address' => 'Jorpati', 'contact_person' => 'Surendra Limbu', 'proprietor_name' => 'Surendra Limbu'],
            ['name' => 'Loard Pashupati Tred Link', 'address' => 'Kapan', 'contact_person' => 'Keshav Acharya', 'proprietor_name' => 'Keshav Acharya'],
            ['name' => 'Nayabha Enterprises', 'address' => 'Suryabinayak', 'contact_person' => 'Narayan Bdr. Nayabha', 'proprietor_name' => 'Narayan Bdr. Nayabha'],
            ['name' => 'PPK Shanti Tredars Pvt.Ltd.', 'address' => 'Balaju', 'contact_person' => 'Prabhakar Maharjan', 'proprietor_name' => 'Prabhakar Maharjan'],
            ['name' => 'Khanal Jee Kirana Supplier', 'address' => 'Naraphat', 'contact_person' => 'Nabin Khanal', 'proprietor_name' => 'Nabin Khanal'],
        ];


        foreach ($dealers as $dealer) {
            Dealer::updateOrCreate(
                [
                    'name' => $dealer['name'],
                    'contact_person' => $dealer['contact_person']
                ],
                [
                    'address' => $dealer['address'],
                    'proprietor_name' => $dealer['proprietor_name'],
                    'updated_at' => now(),
                ]
            );
        }
    }
}
