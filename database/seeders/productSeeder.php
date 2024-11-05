<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class productSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = Faker::create();
     for($i = 0 ; $i < 11 ;$i++ ){
        DB::table('products')->insert([
            'name'=>$faker->name,
            'color_id' =>$faker->numberBetween('1','2'),
            'size_id'=>$faker->numberBetween('1','2'),
            'category_id'=>$faker->numberBetween('1','2'),
            'title'=>$faker->sentence(),
            'image'=>'https://media3.coolmate.me/cdn-cgi/image/quality=80,format=auto/uploads/January2024/poloapl220.11.png',
            'quantity'=>200,
            'code_products'=>'DH'.rand(1,200),
            'availability'=>rand(1,2),
            'material'=>'thô cứng',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
     }
    }
}
