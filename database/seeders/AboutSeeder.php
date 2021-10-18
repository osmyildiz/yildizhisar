<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'about_first_text_tr'=>"Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer alan, harika mimarisi ve boğaz manzarasıyla kahvaltı, öğlen ve akşam yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri, seminer gibi özel günlerde de hizmet vermekteyiz. Yıldız Ana Restoran, Havuz başı Restoran, Alt Teras Restoran, şömineli toplantı salonlarımız bulunmaktadır. Havuz başı Restoranda; yaz aylarında 650, kış aylarında 130 kişiye hizmet verirken, Yıldız Ana Restoranda 450 kişiye hizmet vermekteyiz. 2021 Haziran ayında gerçekleşen tadilatımız itibariyle Yalı Tarım işletmesine geçmiş bulunmaktayız.",
            'about_first_text_en'=>"Located in Rumeli Fortress, right next to Fatih Sultan Mehmet Bridge, with its wonderful architecture and Bosphorus view, we serve breakfast, lunch and dinner as well as special occasions such as weddings, engagement parties, cocktails, graduation nights, seminars. We have Yıldız Main Restaurant, Poolside Restaurant, Lower Terrace Restaurant, meeting rooms with fireplace. At the poolside restaurant; While we serve 650 people in summer and 130 people in winter, we serve 450 people in Yıldız Main Restaurant. As of our renovation in June 2021, we have moved to Yalı Tarım.",
            'middle_text_tr'=>"Yıldız Hisar Tesisleri, yaz aylarında teras dahil edilerek ve açılır tavan sisteminden faydalanarak oldukça şık bir ambiyansa sahiptir. Ayrıca, Davet ve Etkinlik için oldukça şık bir davet alanı daha sunmaktadır. Dilerseniz mekânın havuz başı alanında göze hitap eden, elegant ve romantik bir davet gerçekleştirebilirsiniz. Boğazın muhteşem görünümü bu alanda da davetinize eşlik edecek ve gecenizi aydınlatacaktır. Yıldız Hisar Tesisleri ağırlıklı olarak yemekli düğün ve davetlerde Türk mutfağının eşsiz lezzetlerini sunmaktadır. Bununla sınırlı kalmayıp ikramlarında Dünya mutfağına da yer vermektedir. Menü konusunda çeşitlilik sunarak, herkesi mutlu edebilmektedir. Oldukça profesyonel aşçılar ve mutfak ekibine sahip olan tesisimiz, davetlerinde ikram edilecek yemekler konusunda oldukça hassastır.",
            'middle_text_en'=>"Yıldız Hisar Facilities have a very stylish ambiance by including the terrace in the summer months and making use of the sunroof system. It also offers a very stylish invitation area for Invitation and Event. If you wish, you can organize an elegant and romantic invitation in the poolside area of the venue. The magnificent view of the Bosphorus will accompany your invitation in this area as well and will illuminate your night. Yıldız Hisar Facilities mainly offer the unique tastes of Turkish cuisine in weddings and invitations with dinner. Not limited to this, it also includes world cuisine in its offerings. It can make everyone happy by offering a variety on the menu. Our facility, which has very professional cooks and kitchen team, is very sensitive about the meals to be served at their invitations.",
            'img1'=>"/img/y1.jpeg",
            'img2'=>"/img/y2.jpeg",
            'img3'=>"/img/y7.jpeg",
            'img4'=>"/img/y4.jpeg",
            'img5'=>"/img/y5.jpeg",
            'img6'=>"/img/y6.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);





    }
}
