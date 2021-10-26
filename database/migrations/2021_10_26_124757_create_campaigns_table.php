<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->longText('main_text_tr');
            $table->longText('main_text_en');
            $table->longText('menu1_tr');
            $table->string('menu1_fiyat_tr');
            $table->string('menu1_fiyat_en');
            $table->longText('menu1_en');
            $table->longText('menu2_tr');
            $table->longText('menu2_en');
            $table->string('menu2_fiyat_tr');
            $table->string('menu2_fiyat_en');
            $table->String('menu1_img')->default("/img/y1.jpeg");
            $table->String('menu2_img')->default("/img/y2.jpeg");
            $table->longText('aciklama_tr');
            $table->longText('aciklama_en');
            $table->longText('pakete_dahil_tr');
            $table->longText('pakete_dahil_en');
            $table->longText('muzik_tr');
            $table->longText('muzik_en');
            $table->longText('dekorasyon_tr');
            $table->longText('dekorasyon_en');
            $table->longText('video_tr');
            $table->longText('video_en');
            $table->longText('karsilama_tr');
            $table->longText('karsilama_en');
            $table->longText('vestiyer_tr');
            $table->longText('vestiyer_en');
            $table->longText('menu_tadimi_tr');
            $table->longText('menu_tadimi_en');
            $table->longText('vale_tr');
            $table->longText('vale_en');
            $table->longText('odeme_tr');
            $table->longText('odeme_en');
            $table->longText('rezervasyon_tr');
            $table->longText('rezervasyon_en');
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('campaigns');
    }
}
