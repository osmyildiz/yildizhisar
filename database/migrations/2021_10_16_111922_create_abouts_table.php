<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('about_first_text_tr');
            $table->longText('about_first_text_en');
            $table->longText('middle_text_tr');
            $table->longText('middle_text_en');
            $table->String('img1')->default("/img/y1.jpeg");
            $table->String('img2')->default("/img/y2.jpeg");
            $table->String('img3')->default("/img/y7.jpeg");
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
        Schema::dropIfExists('abouts');
    }
}
