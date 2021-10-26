<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_types')->insert([
            'name_tr'=>"Kahvaltı",
            'name_en'=>"BREAKFAST",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Soğuk Başlangıçlar",
            'name_en'=>"Cold STARTERS",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Sıcak Aperatifler",
            'name_en'=>"Hot APPETIZERS",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Makarnalar",
            'name_en'=>"PASTAS",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Salatalar",
            'name_en'=>"SALADS",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Ana Yemekler",
            'name_en'=>"MAIN DISHES",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Tatlılar",
            'name_en'=>"Desserts",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Soft İçecekler",
            'name_en'=>"Soft Drinks",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('food_types')->insert([
            'name_tr'=>"Sıcak İçecekler",
            'name_en'=>"Hot Drinks",
            "is_active"=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);






    }
}
