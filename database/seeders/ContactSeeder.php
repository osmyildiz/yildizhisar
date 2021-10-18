<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'working_hours_weekdays_tr'   =>"09:00 - 23:00",
            'working_hours_weekdays_en'   =>"From 09:00 to 23:00",
            'working_hours_weekend_tr'    =>"09:00 - 23:00",
            'working_hours_weekend_en'    =>"From 09:00 to 23:00",
            'phone'                       =>"+90 212 287 70 45",
            'address'                     =>"Rumeli Hisarı, Salih Bey Sk. No:6 34470 Sarıyer / İstanbul",
            'contact_us_email_text_tr_1'  =>"Genel",
            'contact_us_email_1'          =>"info@yildizhisar.com",
            'contact_us_email_text_en_1'  =>"General",
            'contact_us_email_text_tr_2'  =>"Düğün & Davet",
            'contact_us_email_text_en_2'  =>"Wedding",
            'contact_us_email_2'          =>"dugundavet@yildizhisar.com",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}