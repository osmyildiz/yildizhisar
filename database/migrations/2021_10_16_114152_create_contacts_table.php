<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->String('working_hours_weekdays_tr');
            $table->String('working_hours_weekdays_en');
            $table->String('working_hours_weekend_tr');
            $table->String('working_hours_weekend_en');
            $table->String('phone');
            $table->String('address');
            $table->String('contact_us_email_text_tr_1');
            $table->String('contact_us_email_1');
            $table->String('contact_us_email_text_en_1');
            $table->String('contact_us_email_text_tr_2');
            $table->String('contact_us_email_text_en_2');
            $table->String('contact_us_email_2');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
