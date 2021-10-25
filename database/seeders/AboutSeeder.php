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
            'about_first_text_tr'=>"İşletmemiz, Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer almaktadır. Muhteşem mimarisi ve benzersiz Boğaz manzarası eşliğinde kahvaltı, öğlen ve akşam yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri, seminer gibi özel günlerde de hizmet vermektedir. Yıldız Ana Restoran, Havuz Başı Restoran, Alt Teras Restoran ve şömineli toplantı salonları gibi farklı alanları sayesinde tüm ihtiyaçlarınızı karşılayabilecek bir tasarıma sahiptir. Havuz Başı Restoran yaz aylarında 650, kış aylarında 130; Yıldız Ana Restoran ise 450 kişiye hizmet verebilecek kapasiteye sahiptir. 2021 Haziran ayında gerçekleşen tadilatımız itibarıyla Yalı Tarım işletmesine geçmiş olan işletmemiz, Yıldız Teknik Üniversitesi mensuplarının yanı sıra, tüm misafirlerimize açıktır. ",
            'about_first_text_en'=>"Located in Rumeli Fortress, right next to Fatih Sultan Mehmet Bridge, with its wonderful architecture and Bosphorus view, we offer alternative venues for breakfast, lunch and dinner as well as for all kinds of invitation organizations such as weddings, engagement parties, cocktails, graduation nights, seminars. We have Yıldız Main Restaurant, Poolside Restaurant, Lower Terrace Restaurant and meeting rooms with fireplaces. At the poolside restaurant; While we serve 650 people in the summer and 130 people in the winter, we serve 450 people in Yıldız Main Restaurant. It is open to all our guests as well as members of YTU, and as of our renovation in June 2021, we have moved to Yali Tarım.",
            'middle_text_tr'=>"Yıldız Hisar, davet ve etkinlikleriniz için oldukça şık bir ambiyans sunmaktadır. Yaz aylarında kullanılan terası ve açılır tavan sistemi ile manzaranın tadını çıkarabilir, dilerseniz mekânın havuz başı alanında göze hitap eden, elegan ve romantik bir davet gerçekleştirebilirsiniz. Boğaz’ın muhteşem görünümü bu alanda da davetinize eşlik edecek ve gecenizi aydınlatacaktır. Yıldız Hisar’da gerçekleştireceğiniz yemekli düğün ve davetlerinizde Türk Mutfağı’nın eşsiz yemekleriyle konuklarınıza üst düzey bir deneyim sunabilir, dünyadaki mutfaklardan öne çıkan lezzetler ile de tüm damaklara hitap eden geniş bir menü yelpazesine sahip olabilirsiniz. Oldukça profesyonel aşçılar ve mutfak ekibine sahip olan işletmemiz, davetlerinde ikram edilecek yemekler konusunda oldukça özenli ve iddialıdır.",
            'middle_text_en'=>"Yıldız Hisar Facilities have a very stylish ambiance by including the terrace in the summer months and making use of the sunroof system. It also offers a very stylish invitation area for Invitation and Event. If you wish, you can organize an elegant and romantic invitation in the poolside area of the venue. The magnificent view of the Bosphorus will accompany your invitation in this area as well and will illuminate your night. Yıldız Hisar Facilities mainly offer the unique tastes of Turkish cuisine in weddings and invitations with dinner. Not limited to this, it also includes world cuisine in its offerings. It can make everyone happy by offering a variety on the menu. Our facility, which has very professional cooks and kitchen team, is very sensitive about the meals to be served at their invitations.",
            'img1'=>"/img/y1.jpeg",
            'img2'=>"/img/y2.jpeg",
            'img3'=>"/img/y7.jpeg",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);





    }
}
