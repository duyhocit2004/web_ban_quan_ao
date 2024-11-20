<?php

namespace Database\Seeders;

use faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Validation\Rules\Unique;

class OrderSeeDer extends Seeder
{
   
    public function run(): void
    {
        $faker = faker::Create();

        for($i = 0 ; $i < 4 ; $i++){
            DB::table('order')->insert([
                'username' => $faker->name,
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->Unique()->email,
                'user_id' => 9,
                'note' => $faker->text,
                'payment_status_id'=>1,
                'payment_method_id'=>1
            ]);
        }
    }
}
