<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->date('res_date');
            $table->String('name')->nullable();
            $table->String('time')->nullable();
            $table->String('email')->nullable();
            $table->String('phone')->nullable();
            $table->text('message')->nullable();
            $table->integer('guest_number')->default(0);
            $table->string('offer_name');
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
        Schema::dropIfExists('offers');
    }
}
