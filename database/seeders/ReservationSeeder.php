<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++) {
            $faker = Faker::create('tr_TR');
            DB::table('reservations')->insert([
                'name' => $faker->firstName.' '.$faker->lastName,
                'email' => $faker->email,
                'res_date' => Carbon::today()->addDays(rand(1, 20)),
                'time' => rand(17,22).':00',
                'phone' => $faker->phoneNumber,
                'guest_number' => $faker->numberBetween(1,7),
                'message'=> $faker->sentence,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }

    }

}
