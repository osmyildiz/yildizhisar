<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $faker = Faker::create('tr_TR');
            DB::table('forms')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'message'=> $faker->sentence,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
    }
}
