<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('menus')->insert([

            'name_tr' => strtoupper("SERPME KAHVALTI (2 Kişilik)"),
            'name_en' => strtoupper("SERPME KAHVALTI (2 Kişilik)"),
            'category' => 1,
            'description_tr'=>"Ekmek sepetinde
 “kepekli ve sade roll ekmek, peynirli ve sade poğaça, simit, sade krouasan, açma ve klasik ekmek “

Peynir Çeşitleri
“beyaz peynir, dil, peyniri, çeçil peyniri, örgü peynir, tulum peyniri, Van otlu peynir, taze kaşar peynir”

Şarküteri Çeşitleri 
“siyah zeytin, yeşil zeytin, ızgara yeşil zeytin, dana jambon, hindi füme, rozbif, Macar salam, tereyağı, kutu bal, reçel çeşitleri, cevizli kış helvası, tahin & pekmez, ballı kaymak, mevsim yeşillikleri, mini domates ve Çengelköy salatalık “ 

Sıcak Serpmeler 
“peynirli sigara böreği, pankek, geleneksel pişi, patates kızartması, “çikolata sos, yoğurt sos ve kokteyl sos ile “, soslu dana sosis, sahanda tereyağlı sucuk”  

Yumurta Çeşitleri 
haşlanmış yumurta 
“peynirli ya da sade omlet”
         veya
“domatesli ve biberli Melemen” 

Limitsiz Çay 
",
            'description_en'=>"Ekmek sepetinde
 “kepekli ve sade roll ekmek, peynirli ve sade poğaça, simit, sade krouasan, açma ve klasik ekmek “

Peynir Çeşitleri
“beyaz peynir, dil, peyniri, çeçil peyniri, örgü peynir, tulum peyniri, Van otlu peynir, taze kaşar peynir”

Şarküteri Çeşitleri 
“siyah zeytin, yeşil zeytin, ızgara yeşil zeytin, dana jambon, hindi füme, rozbif, Macar salam, tereyağı, kutu bal, reçel çeşitleri, cevizli kış helvası, tahin & pekmez, ballı kaymak, mevsim yeşillikleri, mini domates ve Çengelköy salatalık “ 

Sıcak Serpmeler 
“peynirli sigara böreği, pankek, geleneksel pişi, patates kızartması, “çikolata sos, yoğurt sos ve kokteyl sos ile “, soslu dana sosis, sahanda tereyağlı sucuk”  

Yumurta Çeşitleri 
haşlanmış yumurta 
“peynirli ya da sade omlet”
         veya
“domatesli ve biberli Melemen” 

Limitsiz Çay 
",
            'price_tl'=>165,
            'price_usd'=>165,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("KAHVALTI TABAĞI"),
            'name_en' => strtoupper("KAHVALTI TABAĞI"),
            'category' => 1,
            'description_tr'=>"beyaz peynir, taze kaşar peyniri, dana jambon, macar salam, çilek reçeli, bal, tereyağı, dil peyniri, kaymak, haşlanmış yumurta, siyah zeytin ve çizik zeytin, salatalık, domates, kuru kayısı, kuru üzüm",
            'description_en'=>"beyaz peynir, taze kaşar peyniri, dana jambon, macar salam, çilek reçeli, bal, tereyağı, dil peyniri, kaymak, haşlanmış yumurta, siyah zeytin ve çizik zeytin, salatalık, domates, kuru kayısı, kuru üzüm",
            'price_tl'=>62,
            'price_usd'=>62,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SİGARA BÖREĞİ"),
            'name_en' => strtoupper("SİGARA BÖREĞİ"),
            'category' => 1,
            'description_tr'=>"Beyaz peynirli",
            'description_en'=>"Beyaz peynirli",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("OMLET"),
            'name_en' => strtoupper("OMLET"),
            'category' => 1,
            'description_tr'=>"Sade",
            'description_en'=>"Sade",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("OMLET"),
            'name_en' => strtoupper("OMLET"),
            'category' => 1,
            'description_tr'=>"Beyaz peynirli",
            'description_en'=>"Beyaz peynirli",
            'price_tl'=>24,
            'price_usd'=>24,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("MENEMEN"),
            'name_en' => strtoupper("MENEMEN"),
            'category' => 1,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>30,
            'price_usd'=>30,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SAHANDA YUMURTA"),
            'name_en' => strtoupper("SAHANDA YUMURTA"),
            'category' => 1,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>20,
            'price_usd'=>20,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SAHANDA TEREYAĞLI SUCUK"),
            'name_en' => strtoupper("SAHANDA TEREYAĞLI SUCUK"),
            'category' => 1,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>35,
            'price_usd'=>35,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("GÜNÜN ÇORBASI"),
            'name_en' => strtoupper("GÜNÜN ÇORBASI"),
            'category' => 3,
            'description_tr'=>"Şef'in seçimi",
            'description_en'=>"Şef'in seçimi",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SOMON FÜME"),
            'name_en' => strtoupper("SOMON FÜME"),
            'category' => 2,
            'description_tr'=>"Üzüm çekirdeği yağı ile marine edilmiş somon dilimleri,  hardal sos, roka ve maskolin yaprakları eşliğinde",
            'description_en'=>"Üzüm çekirdeği yağı ile marine edilmiş somon dilimleri,  hardal sos, roka ve maskolin yaprakları eşliğinde",
            'price_tl'=>42,
            'price_usd'=>42,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("HELLİM PEYNİRLİ IZGARA KULESİ"),
            'name_en' => strtoupper("HELLİM PEYNİRLİ IZGARA KULESİ"),
            'category' => 2,
            'description_tr'=>"Sebze kulesi, taze fesleğen ve Akdeniz zeytinyağı ile",
            'description_en'=>"Sebze kulesi, taze fesleğen ve Akdeniz zeytinyağı ile",
            'price_tl'=>35,
            'price_usd'=>35,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("PEYNİR BUKETİ"),
            'name_en' => strtoupper("PEYNİR BUKETİ"),
            'category' => 2,
            'description_tr'=>"Yerli ve yabancı peynir çeşitleri, kurutulmuş meyveler ve grisini eşliğinde",
            'description_en'=>"Yerli ve yabancı peynir çeşitleri, kurutulmuş meyveler ve grisini eşliğinde",
            'price_tl'=>75,
            'price_usd'=>75,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("ÇİN BÖREĞİ"),
            'name_en' => strtoupper("ÇİN BÖREĞİ"),
            'category' => 3,
            'description_tr'=>"Organik sebzeler, soya sos ve Akdeniz yeşillikleri eşliğinde",
            'description_en'=>"Organik sebzeler, soya sos ve Akdeniz yeşillikleri eşliğinde",
            'price_tl'=>40,
            'price_usd'=>40,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("PAÇANGA BÖREĞİ"),
            'name_en' => strtoupper("PAÇANGA BÖREĞİ"),
            'category' => 3,
            'description_tr'=>"Tokat çemeni ile tatlandırılmış pastırma dilimleri, kaşar peyniri ve sour krem sos ile ",
            'description_en'=>"Tokat çemeni ile tatlandırılmış pastırma dilimleri, kaşar peyniri ve sour krem sos ile ",
            'price_tl'=>45,
            'price_usd'=>45,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("MOZERELLA STICK ÜÇLEMESİ "),
            'name_en' => strtoupper("MOZERELLA STICK ÜÇLEMESİ "),
            'category' => 3,
            'description_tr'=>"Mozerella peyniri, soğan halkaları, patates kızartması ve kokteyl sos eşliğinde",
            'description_en'=>"Mozerella peyniri, soğan halkaları, patates kızartması ve kokteyl sos eşliğinde",
            'price_tl'=>45,
            'price_usd'=>45,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("CAJUN BAHARATLI PATATES KIZARTMASI VE ÇITIR TAVUK PARÇALARI"),
            'name_en' => strtoupper("CAJUN BAHARATLI PATATES KIZARTMASI VE ÇITIR TAVUK PARÇALARI"),
            'category' => 3,
            'description_tr'=>"Ketçap, mayonez ve hardal eşliğinde",
            'description_en'=>"Ketçap, mayonez ve hardal eşliğinde",
            'price_tl'=>52,
            'price_usd'=>52,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SPAGETTİ BOLONEZ"),
            'name_en' => strtoupper("SPAGETTİ BOLONEZ"),
            'category' => 4,
            'description_tr'=>"Baharatlarla tatlandırılmış kıyma sos ve parmesan peyniri ile",
            'description_en'=>"Baharatlarla tatlandırılmış kıyma sos ve parmesan peyniri ile",
            'price_tl'=>48,
            'price_usd'=>48,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SPAGETTİ NAPOLİTEN"),
            'name_en' => strtoupper("SPAGETTİ NAPOLİTEN"),
            'category' => 4,
            'description_tr'=>"Baharatlarla tatlandırılmış domates sos ve parmesan peyniri ile",
            'description_en'=>"Baharatlarla tatlandırılmış domates sos ve parmesan peyniri ile",
            'price_tl'=>48,
            'price_usd'=>48,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("PENNE ARABİATTA"),
            'name_en' => strtoupper("PENNE ARABİATTA"),
            'category' => 4,
            'description_tr'=>"Taze fesleğen, toz parmesan ve acı sos ile.",
            'description_en'=>"Taze fesleğen, toz parmesan ve acı sos ile.",
            'price_tl'=>45,
            'price_usd'=>45,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("ÜÇ RENKLİ TORTELLİNİ"),
            'name_en' => strtoupper("ÜÇ RENKLİ TORTELLİNİ"),
            'category' => 4,
            'description_tr'=>"Pesto sos, parmesan peyniri, taze nane yaprakları ve krema ile",
            'description_en'=>"Pesto sos, parmesan peyniri, taze nane yaprakları ve krema ile",
            'price_tl'=>62,
            'price_usd'=>62,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("EV YAPIMI KAYSERİ MANTISI"),
            'name_en' => strtoupper("EV YAPIMI KAYSERİ MANTISI"),
            'category' => 4,
            'description_tr'=>"Baharatlı tereyağ sos ile",
            'description_en'=>"Baharatlı tereyağ sos ile",
            'price_tl'=>50,
            'price_usd'=>50,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("TAVUKLU SEZAR SALATASI"),
            'name_en' => strtoupper("TAVUKLU SEZAR SALATASI"),
            'category' => 5,
            'description_tr'=>"Izgara tavuk dilimleri, kroton ekmek, parmesan peyniri ve sezar sos ile",
            'description_en'=>"Izgara tavuk dilimleri, kroton ekmek, parmesan peyniri ve sezar sos ile",
            'price_tl'=>52,
            'price_usd'=>52,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("HELLIM SALATA"),
            'name_en' => strtoupper("HELLIM SALATA"),
            'category' => 5,
            'description_tr'=>"Maskolin yaprakları üzerinde ızgara hellim peyniri ve chery domates ile",
            'description_en'=>"Maskolin yaprakları üzerinde ızgara hellim peyniri ve chery domates ile",
            'price_tl'=>56,
            'price_usd'=>56,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("TON BALIKLI SALATA"),
            'name_en' => strtoupper("TON BALIKLI SALATA"),
            'category' => 5,
            'description_tr'=>"Akdeniz yeşillikleri, limon sos, ve mısır eşliğinde",
            'description_en'=>"Akdeniz yeşillikleri, limon sos, ve mısır eşliğinde",
            'price_tl'=>58,
            'price_usd'=>58,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("MEVSİM SALATASI"),
            'name_en' => strtoupper("MEVSİM SALATASI"),
            'category' => 5,
            'description_tr'=>"Mevsim yeşillikleri ve limon sos ile",
            'description_en'=>"Mevsim yeşillikleri ve limon sos ile",
            'price_tl'=>35,
            'price_usd'=>35,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("IZGARA BONFİLE "),
            'name_en' => strtoupper("IZGARA BONFİLE "),
            'category' => 6,
            'description_tr'=>"peper sos veya mantar sos eşlinde, baharatlı elma dilimi patates ve pilav ile",
            'description_en'=>"peper sos veya mantar sos eşlinde, baharatlı elma dilimi patates ve pilav ile",
            'price_tl'=>120,
            'price_usd'=>120,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("IZGARA KÖFTE"),
            'name_en' => strtoupper("IZGARA KÖFTE"),
            'category' => 6,
            'description_tr'=>"Toprak güveçte fesleğenli domates sosu ve taze kaşar peyniri ile",
            'description_en'=>"Toprak güveçte fesleğenli domates sosu ve taze kaşar peyniri ile",
            'price_tl'=>70,
            'price_usd'=>70,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("IZGARA PİLİÇ, BAHARATLARLA TATLANDIRILMIŞ"),
            'name_en' => strtoupper("IZGARA PİLİÇ, BAHARATLARLA TATLANDIRILMIŞ"),
            'category' => 6,
            'description_tr'=>"ızgara domates ve biber,  pirinç pilavı ve baharatlı patates ile",
            'description_en'=>"ızgara domates ve biber,  pirinç pilavı ve baharatlı patates ile",
            'price_tl'=>65,
            'price_usd'=>65,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("PİLİÇ SCHNITZEL"),
            'name_en' => strtoupper("PİLİÇ SCHNITZEL"),
            'category' => 6,
            'description_tr'=>"maydanozlu, biberli limon, pirinç pilavı ve baharatlı patates ile",
            'description_en'=>"maydanozlu, biberli limon, pirinç pilavı ve baharatlı patates ile",
            'price_tl'=>68,
            'price_usd'=>68,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("IZGARADA DENİZ LEVREĞİ"),
            'name_en' => strtoupper("IZGARADA DENİZ LEVREĞİ"),
            'category' => 6,
            'description_tr'=>"Taze deniz levreği, sebzeli noodle eşliğinde “Menüer “sos ile",
            'description_en'=>"Taze deniz levreği, sebzeli noodle eşliğinde “Menüer “sos ile",
            'price_tl'=>89,
            'price_usd'=>89,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("NORVEÇ SOMON IZGARA"),
            'name_en' => strtoupper("NORVEÇ SOMON IZGARA"),
            'category' => 6,
            'description_tr'=>"sebzeli  noodle eşliğinde “Menüer “ sos ile",
            'description_en'=>"sebzeli  noodle eşliğinde “Menüer “ sos ile",
            'price_tl'=>97,
            'price_usd'=>97,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("BROWNİE"),
            'name_en' => strtoupper("BROWNİE"),
            'category' => 7,
            'description_tr'=>"sade dondurma ile",
            'description_en'=>"sade dondurma ile",
            'price_tl'=>42,
            'price_usd'=>42,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("LİMONLU CHEESECAKE"),
            'name_en' => strtoupper("LİMONLU CHEESECAKE"),
            'category' => 7,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>42,
            'price_usd'=>42,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("SAN SEBASTIAN CHEESECAKE"),
            'name_en' => strtoupper("SAN SEBASTIAN CHEESECAKE"),
            'category' => 7,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>39,
            'price_usd'=>39,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("KARA ORMAN PASTASI "),
            'name_en' => strtoupper("KARA ORMAN PASTASI "),
            'category' => 7,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>45,
            'price_usd'=>45,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("ORMAN MEYVELİ TURTA"),
            'name_en' => strtoupper("ORMAN MEYVELİ TURTA"),
            'category' => 7,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>42,
            'price_usd'=>42,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("MEYVE BUKETİ"),
            'name_en' => strtoupper("MEYVE BUKETİ"),
            'category' => 7,
            'description_tr'=>"dilimlenmiş meyve çeşitleri",
            'description_en'=>"dilimlenmiş meyve çeşitleri",
            'price_tl'=>32,
            'price_usd'=>32,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Su (33 ML)"),
            'name_en' => strtoupper("Su (33 ML)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>9,
            'price_usd'=>9,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Sade Soda (33ML)"),
            'name_en' => strtoupper("Sade Soda (33ML)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>14,
            'price_usd'=>14,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Meyveli Soda (33 ML)"),
            'name_en' => strtoupper("Meyveli Soda (33 ML)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>14,
            'price_usd'=>14,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Ayran (naneli / sade)"),
            'name_en' => strtoupper("Ayran (naneli / sade)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>16,
            'price_usd'=>16,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Cola"),
            'name_en' => strtoupper("Cola"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Cola Light / Zero"),
            'name_en' => strtoupper("Cola Light / Zero"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Fanta"),
            'name_en' => strtoupper("Fanta"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Sprite"),
            'name_en' => strtoupper("Sprite"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Limonata (naneli / sade)"),
            'name_en' => strtoupper("Limonata (naneli / sade)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>22,
            'price_usd'=>22,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Fuse Tea (Şeftali / Limon)"),
            'name_en' => strtoupper("Fuse Tea (Şeftali / Limon)"),
            'category' => 8,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Demleme Bardak Çay"),
            'name_en' => strtoupper("Demleme Bardak Çay"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>9.5,
            'price_usd'=>9.5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Türk Kahvesi"),
            'name_en' => strtoupper("Türk Kahvesi"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Meyve Çayları"),
            'name_en' => strtoupper("Meyve Çayları"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Yeşil Çay"),
            'name_en' => strtoupper("Yeşil Çay"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>20,
            'price_usd'=>20,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Espresso"),
            'name_en' => strtoupper("Espresso"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Double Espresso"),
            'name_en' => strtoupper("Double Espresso"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>22,
            'price_usd'=>22,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Filtre Kahve"),
            'name_en' => strtoupper("Filtre Kahve"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>22,
            'price_usd'=>22,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Sıcak Çikolata"),
            'name_en' => strtoupper("Sıcak Çikolata"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>18,
            'price_usd'=>18,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([

            'name_tr' => strtoupper("Cappuccino"),
            'name_en' => strtoupper("Cappuccino"),
            'category' => 9,
            'description_tr'=>"",
            'description_en'=>"",
            'price_tl'=>23,
            'price_usd'=>23,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);




    }
}
