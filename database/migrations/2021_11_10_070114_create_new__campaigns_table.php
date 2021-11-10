<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new__campaigns', function (Blueprint $table) {
            $table->id();
            $table->String('name_tr');
            $table->String('name_en');
            $table->String('slug_tr');
            $table->String('slug_en');
            $table->String('img1')->default("/img/y1.jpeg");
            $table->String('is_active')->default(1);
            $table->integer('priority')->default(1000);
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
        Schema::dropIfExists('new__campaigns');
    }
}
