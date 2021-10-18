<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
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
            DB::table('newsletters')->insert([
                'email' => $faker->email,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
    }
}
