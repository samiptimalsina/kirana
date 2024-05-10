<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private $userData = [
        ["name" => "Asif", "usertype" => "0", "email" => "admin@gmail.com", "password" => "password"],
        ["name" => "Admin-Asif", "usertype" => "1", "email" => "admin@admin.com", "password" => "password"],
        ["name" => "Asif4", "usertype" => "0", "email" => "samiptimalsina17@gmail.com", "password" => "password"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->userData as $data) {
            User::create([
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => Hash::make($data["password"]), // Hashing the password
            ]);
        }
    }
}
