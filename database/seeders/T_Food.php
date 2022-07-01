<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class T_Food extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        $fake = Faker::create();
        for ($i = 0; $i <  $count; $i++) {
            DB::table('t__food')->insert([
                'name' => Str::random(10),
                'description' => Str::random(50),
                'image' => Str::random(10),
                'price' => $fake->numberBetween($min = 30000, $max = 100000),
                'discount' => $fake->numberBetween($min = 5000, $max = 10000),
                'category' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
