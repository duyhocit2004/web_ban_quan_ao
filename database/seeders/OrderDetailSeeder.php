<?php

namespace Database\Seeders;

use faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for($i = 0 ; $i <= 10 ; $i++){
            DB::table('detail_order')->insert([
                'products_id' => rand(27,35) ,
                'order_id'=>rand(2,5),
                'price' => 200,
                'quantity'=>rand(2,5),
                'sum'=>200 * rand(2,5)
            ]);
        }
    }
}
