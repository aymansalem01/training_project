<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "password" => Hash::make("password"),
            "role" => "admin",
            "phone_number" => "07817431130",
        ]);

        User::create([
            "name" => "customer",
            "email" => "customer@customer.com",
            "password" => Hash::make("password"),
            "role" => "user",
            "phone_number" => "0781743113",
        ]);
    }
}
