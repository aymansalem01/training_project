<?php

namespace Database\Seeders;

use App\Models\Item;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index) {
            Item::create([
                "name" => $faker->firstNameMale,
                "category_id" => rand(1,2),
                "price" => rand(20, 50),
                "describtion" => $faker->sentence(10),
            ]);
        }
    }
}
