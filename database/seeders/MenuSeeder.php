<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('tr_TR');

        $category=["Çorbalar","Ara Sıcaklar","Ana Yemekler","Tatlılar","İçecekler"];
        for($i = 0; $i < 5; $i++) {
            $id = mt_rand(10, 15);

            DB::table('menus')->insert([

                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[0],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 8; $i++) {
            $id = mt_rand(40, 90);

            DB::table('menus')->insert([
                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[1],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d'),

                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 15; $i++) {
            $id = mt_rand(20, 40);

            DB::table('menus')->insert([
                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[1],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d'),

                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 15; $i++) {
            $id = mt_rand(40, 120);

            DB::table('menus')->insert([
                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[2],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d'),

                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(20, 35);

            DB::table('menus')->insert([
                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[3],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d'),

                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(8, 15);

            DB::table('menus')->insert([
                'name' => strtoupper($faker->sentence(2)),
                'category' => $category[4],
                'description'=>$faker->sentence(10),
                'price'=>$id,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }

    }
}
