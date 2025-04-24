<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImagesSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'item_id' => $i,
                'image' => 'lcd.jpeg',
            ];
        }

        DB::table('images')->insert($data);
    }
}
