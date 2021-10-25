<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'main_text_tr'=>"Doğum günlerinizi size özel kılacak alternatif çeşitliliği, gösterişli ve şık görünüme sahip atmosferi, her detayı sizin için düşünülmüş hizmet kalitesi ile Boğaz manzaralı organizasyonlarınız için bize ulaşabilirsiniz.",
            'main_text_en'=>"Yildiz Hisar is an alternative to the place where you can make unforgettable memories with your loved ones, which you can harmonize with the combination you want with its flashy and stylish appearance! Contact us for a birthday organization with a view of the Bosphorus, all details of which have been thought for you. Let's design your special days together!",
            'name_tr'=>"Doğum Günü",
            'name_en'=>"BIRTHDAY PARTY",
             'img1'=>"/img/y12.jpeg",
            'slug_tr'=>Str::slug("Doğum Günü","-"),
            'slug_en'=>Str::slug("BIRTHDAY PARTY","-"),
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('events')->insert([
            'main_text_tr'=>"Bayi toplantısı, lansman, eğitim ve dönem sonu toplantıları, seminer, açılış gibi organizasyonlarınızda katılımcı profilinize uygun hizmet kalitesi ile kurumunuzu temsil etmek için hazırız. ",
            'main_text_en'=>"In your meetings, seminars, launches and opening organizations, we ensure that you have a pleasant time with the menus prepared for you, adhering to the hygiene and quality standards, in a place with a Bosphorus view you need, in order for you to be able to sign successfully completed events.",
            'name_tr'=>"Toplantı & Lansman",
            'name_en'=>"MEETING & LAUNCHING",
            'slug_tr'=>Str::slug("Toplantı & Lansman","-"),
            'slug_en'=>Str::slug("MEETING & LAUNCHING","-"),
            'img1'=>"/img/y13.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('events')->insert([
            'main_text_tr'=>"Partilerin en tatlısı, Baby Shower…
Kucağınıza alacağınız bebeğinizin sevincini ve heyecanını, eşsiz Boğaz manzaramız eşliğinde tüm sevdiklerinizle birlikte doyasıya yaşamanız için hayalini kurduğunuz partiyi gerçekleştirmenizi sağlıyoruz.",
            'main_text_en'=>"The sweetest of parties; Baby Shower.. We are hosting your most special moment by offering elegance and fun together so that you can celebrate the joy of your baby in your arms with all your loved ones in our unique Bosphorus view.",
            'name_tr'=>"Baby Shower",
            'name_en'=>"BABY SHOWER",
            'slug_tr'=>Str::slug("Baby Shower","-"),
            'slug_en'=>Str::slug("Baby Shower","-"),

            'img1'=>"/img/y14.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('events')->insert([
            'main_text_tr'=>"Kurumunuz için önemli etkinliklerden biri olan şirket yemeklerinize Rumeli Hisarı’nın köklü geçmişi, Boğaz’ın engin manzarası yakışır…

Lezzette, hizmette ve bulunduğu konumda iddialı olan işletmemiz, kurum içi motivasyonunuzu yükseltmek için doğru bir adres!",
            'main_text_en'=>"Have Corporate Business Meals at Yıldız Hisar! Being aware of the fact that company meals are very important for our business and our career, we realize your events with an unforgettable taste, suitable for your company and befitting your corporate structure.",
            'name_tr'=>"Şirket Akşam Yemeği",
            'name_en'=>"COMPANY DINNER",
            'slug_tr'=>Str::slug("Şirket Akşam Yemeği","-"),
            'slug_en'=>Str::slug("COMPANY DINNER","-"),

            'img1'=>"/img/y7.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('events')->insert([
            'main_text_tr'=>"Bekarlığa veda partileri, yıllar boyu arkadaşlarınızla birlikte keyifle hatırlayacağınız en önemli anılardan biridir. Bu anınızı, Boğaz manzarası ile mükemmelleştirmek, eğlencenize kaliteli hizmeti de dahil etmek için ekibimiz sizleri bekliyor… ",
            'main_text_en'=>"Are you looking for a venue to make your bachelorette party different? In the rising trend of recent years, we organize a farewell in Yıldız Hisar with your beloved friends, which suits the magnificent magic of being single. We bring you joyful moments that you will not forget for years and that you will live together.",
            'name_tr'=>"Bekarlığa Veda",
            'name_en'=>"STAG NIGHT",
            'slug_tr'=>Str::slug("Bekarlığa Veda","-"),
            'slug_en'=>Str::slug("STAG NIGHT","-"),

            'img1'=>"/img/y7.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);





    }
}
