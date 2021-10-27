<?php

namespace Database\Seeders;

use App\Models\FoodType;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ReservationSeeder::class,
            AboutSeeder::class,
            FormSeeder::class,
            ContactSeeder::class,
            NewsletterSeeder::class,
            MenuSeeder::class,
            EventSeeder::class,
            WeddingSeeder::class,
            FoodTypeSeeder::class,
            CampaignSeeder::class,


        ]);
    }
}
