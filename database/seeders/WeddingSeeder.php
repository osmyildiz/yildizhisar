<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weddings')->insert([
            'main_text_tr'=>"Bazı anların tekrarı yoktur… Eşinizle hayatınızı birleştirdiğiniz düğün gününüz ise biricik ve sadece size özel olmalıdır. Bu yüzden hayallerinizi gerçekleştirebilmek, sizlere ve konuklarınıza unutulmaz bir deneyim yaşatmak için hem biz hem de eşsiz Boğaz manzaramız her daim hazır…",
            'main_text_en'=>"Some moments cannot be repeated… Your wedding day, when you unite your life with your spouse, should be unique and special only to you. That's why we and our unique Bosphorus view are always ready to make your dreams come true and to give you and your guests an unforgettable experience...",
            'name_tr'=>"Düğün Organizasyonu",
            'name_en'=>"WEDDING",
            'slug_tr'=>Str::slug("Düğün Organizasyonu","-"),
            'slug_en'=>Str::slug("WEDDING","-"),

            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('weddings')->insert([
            'main_text_tr'=>"Müstakbel eşinizle birleştireceğiniz hayatınızda sizlere eşlik edecek yüzükleri parmağınıza taktığınız o an, unutulmazdır… Boğaz’ın büyülü mavisi Nişan davetlerinize çok yakışacak…",
            'main_text_en'=>"The moment when you put on the rings that will accompany you in your life, which you will unite with your future spouse, is unforgettable... The magical blue of the Bosphorus will suit your engagement parties very well...",
            'name_tr'=>"Nişan Organizasyonu",
            'name_en'=>"ENGAGEMENT",
            'slug_tr'=>Str::slug("Nişan Organizasyonu","-"),
            'slug_en'=>Str::slug("ENGAGEMENT","-"),

            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);

        DB::table('weddings')->insert([
            'main_text_tr'=>"Kına gecesinin kadim bir kurum olan evliliğe adım atarken uğur getireceğine inanılır. Yıldız Hisar’daki bir diğer uğurunuz ise masalsı mekânımız ve gecenizi eşsiz kılacak tecrübeli ekibimiz olacak…",
            'main_text_en'=>"It is believed that henna night will bring good luck when stepping into marriage, which is an ancient institution. Another of your luck in Yıldız Hisar will be our fairy-tale venue and our experienced team that will make your night unique.",
            'name_tr'=>"Kına Organizasyonu",
            'name_en'=>"HENNA NIGHT",
            'slug_tr'=>Str::slug("Kına Organizasyonu","-"),
            'slug_en'=>Str::slug("HENNA NIGHT","-"),

            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('weddings')->insert([
            'main_text_tr'=>"Yüzlerce yıllık zengin bir tarihe ev sahipliği yapan Rumeli Hisarı’nda konumlanan işletmemiz, oğlunuzun bu kıymetli gününe ihtişam katmak için sizleri bekliyor. Davetlilerinizi ağırlarken güvenle sırtınızı yaslayabileceğiniz tecrübeli ekibimiz ile hem heyecanınıza ortak olacak hem de davetinizin mükemmel bir deneyime dönüşmesini sağlayacağız.",
            'main_text_en'=>"Located in Rumeli Hisarı, which hosts a rich history of hundreds of years, our business is waiting for you to add splendor to this precious day of your son. With our experienced team, which you can safely lean on while hosting your guests, we will both share your excitement and ensure that your invitation turns into an excellent experience.",
            'name_tr'=>"Sünnet Organizasyonu",
            'name_en'=>"CIRCUMCISION",
            'slug_tr'=>Str::slug("Sünnet Organizasyonu","-"),
            'slug_en'=>Str::slug("CIRCUMCISION","-"),

            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('weddings')->insert([
            'main_text_tr'=>"Nikah töreninizde sizler mutluluğa imza atarken, bu özel günden hatıra kalacak fotoğraf karelerinize Yıldız Hisar’ın benzersiz Boğaz manzarası imza atacak… Asya ve Avrupa’yı birleştiren noktada konumlanan işletmemizde, partnerinizle hayatınızı birleştirdiğiniz anlara şahit olmaktan mutluluk duyacağız…",
            'main_text_en'=>"While you will be happy at your wedding ceremony, Yıldız Hisar's unique Bosphorus view will create your photo frames that will remain as memories of this special day. We will be happy to witness the moments when you unite your life with your partner in our business, which is located at the point that unites Asia and Europe.",
            'name_tr'=>"Nikah Organizasyonu",
            'name_en'=>"WEDDING CEREMONY",
            'slug_tr'=>Str::slug("Nikah Organizasyonu","-"),
            'slug_en'=>Str::slug("WEDDING CEREMONY","-"),

            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);





    }
}
