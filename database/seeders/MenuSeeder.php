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

        $category=[1,2,3,4,5,6,7,8,9];
        for($i = 0; $i < 5; $i++) {
            $id = mt_rand(10, 15);

            DB::table('menus')->insert([

                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[0],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 8; $i++) {
            $id = mt_rand(40, 90);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[1],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 15; $i++) {
            $id = mt_rand(20, 40);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[2],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 15; $i++) {
            $id = mt_rand(40, 120);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[3],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(20, 35);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[4],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(8, 15);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[5],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(8, 15);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[6],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(8, 15);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[7],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
        for($i = 0; $i < 10; $i++) {
            $id = mt_rand(8, 15);

            DB::table('menus')->insert([
                'name_tr' => strtoupper($faker->sentence(2)),
                'name_en' => strtoupper($faker->sentence(2)),
                'category' => $category[8],
                'description_tr'=>$faker->sentence(10),
                'description_en'=>$faker->sentence(10),
                'price_tl'=>$id,
                'price_usd'=>$id,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }

    }
}
