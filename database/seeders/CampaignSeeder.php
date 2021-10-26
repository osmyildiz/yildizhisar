<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([

        'main_text_tr'=>  "Nikah töreninizde sizler mutluluğa imza atarken, bu özel günden hatıra kalacak fotoğraf karelerinize Yıldız Hisar’ın benzersiz Boğaz manzarası imza atacak… Asya ve Avrupa’yı birleştiren noktada konumlanan işletmemizde, partnerinizle hayatınızı birleştirdiğiniz anlara şahit olmaktan mutluluk duyacağız…",
        'main_text_en'=>  "Nikah töreninizde sizler mutluluğa imza atarken, bu özel günden hatıra kalacak fotoğraf karelerinize Yıldız Hisar’ın benzersiz Boğaz manzarası imza atacak… Asya ve Avrupa’yı birleştiren noktada konumlanan işletmemizde, partnerinizle hayatınızı birleştirdiğiniz anlara şahit olmaktan mutluluk duyacağız…",
        'menu1_tr'=>  "Klasik Meze Tabağı, beyaz peynir, mercimek köfte, zeytinyağlı yaprak sarma, Çerkez tavuğu, patlıcan salatası, haydari, acılı ezme, domates, salatalık “ Sebzeli Krep Domates sos ile Limon ve Kekik ile Marine Edilmiş Tavuk Göğsü fırınlanmış biberiyeli patates ve sebze buketi ile Düğün Pastası Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat",
        'menu1_en'=>  "Klasik Meze Tabağı, beyaz peynir, mercimek köfte, zeytinyağlı yaprak sarma, Çerkez tavuğu, patlıcan salatası, haydari, acılı ezme, domates, salatalık “ Sebzeli Krep Domates sos ile Limon ve Kekik ile Marine Edilmiş Tavuk Göğsü fırınlanmış biberiyeli patates ve sebze buketi ile Düğün Pastası Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat",
        'menu1_fiyat_tr'=> "240 TL + KDV",
        'menu1_fiyat_en'=> "240 TL + KDV",
        'menu2_tr'=>  "Zeytinyağlı Tabağı, zeytinyağlı yaprak sarma, zeytinyağlı kırmızıbiber dolması, mini imambayıldı, sızma zeytinyağı ile tatlandırılmış fava, Gül Böreği Süzme yoğurt ve taze nane eşliğinde Taze Baharatlar ve Kök Sebzeler ile Ağır Ateşte Pişmiş Dana Kürek mevsim sebzeleri ve sarı patates püresi ile Düğün Pastası Çay & Nescafe Türk Lokumu İle Limitsiz Meşrubat",
        'menu2_en'=>  "Zeytinyağlı Tabağı, zeytinyağlı yaprak sarma, zeytinyağlı kırmızıbiber dolması, mini imambayıldı, sızma zeytinyağı ile tatlandırılmış fava, Gül Böreği Süzme yoğurt ve taze nane eşliğinde Taze Baharatlar ve Kök Sebzeler ile Ağır Ateşte Pişmiş Dana Kürek mevsim sebzeleri ve sarı patates püresi ile Düğün Pastası Çay & Nescafe Türk Lokumu İle Limitsiz Meşrubat",
            'menu2_fiyat_tr'=> "260 TL + KDV",
            'menu2_fiyat_en'=> "260 TL + KDV",
        'aciklama_tr'=> "Menü fiyatlarımıza %8 KDV dahil değildir.
Menü fiyatlarımız kişi başı olup, mekân kullanımı dahildir.
Yukarıdaki menü fiyatlarımız Kasım, Aralık, Ocak, Şubat ayları için geçerli olup, minimum 150 kişi garanti edildiği takdirde uygulanmaktadır.
Fiyatlarımız 2021 yılı için geçerlidir.
Toplam tutara istinaden %5 servis bedeli alınmaktadır.
İşletme menü, paket ve fiyatları değiştirme değiştirme hakkını saklı tutar",
            'aciklama_en'=> "Menü fiyatlarımıza %8 KDV dahil değildir.
Menü fiyatlarımız kişi başı olup, mekân kullanımı dahildir.
Yukarıdaki menü fiyatlarımız Kasım, Aralık, Ocak, Şubat ayları için geçerli olup, minimum 150 kişi garanti edildiği takdirde uygulanmaktadır.
Fiyatlarımız 2021 yılı için geçerlidir.
Toplam tutara istinaden %5 servis bedeli alınmaktadır.
İşletme menü, paket ve fiyatları değiştirme değiştirme hakkını saklı tutar",

        'pakete_dahil_tr'=>"Hoş Geldiniz Kokteyli
Show Pasta
Davet Öncesinde Düğün Menü Tadımı
Masa ve Sandalyelerin Süslenmesi
Dj Müzik ve Ses & Işık Sistemi
Düğün Günü Gelin & Damat İçin Hazırlık Odası
Düğün Günü Gelin & Damada Özel Akşam Yemeği
1. Evlilik yıldönümünde Şömineli Oda da Özel Akşam Yemeği
20 adet Resimden oluşan Gelin & Damat albümü",
            'pakete_dahil_en'=>"Hoş Geldiniz Kokteyli
Show Pasta
Davet Öncesinde Düğün Menü Tadımı
Masa ve Sandalyelerin Süslenmesi
Dj Müzik ve Ses & Işık Sistemi
Düğün Günü Gelin & Damat İçin Hazırlık Odası
Düğün Günü Gelin & Damada Özel Akşam Yemeği
1. Evlilik yıldönümünde Şömineli Oda da Özel Akşam Yemeği
20 adet Resimden oluşan Gelin & Damat albümü",
        'muzik_tr'=>"Müzik hizmeti Yıldız Hisar’ın anlaşmalı olduğu İzzet & Yakar Müzik Hizmetleri firması tarafından yapılmaktadır. DJ Müzik & Ses & Işık ( haftasonu geçerlidir ) İZZET & YAKAR MÜZİK / İzzet Biton 4.000 TL + KDV 0212 275 67 69, 0212 288 32 93, 0532 231 75 95, www.izzetyakar.com",
        'muzik_en'=>"Müzik hizmeti Yıldız Hisar’ın anlaşmalı olduğu İzzet & Yakar Müzik Hizmetleri firması tarafından yapılmaktadır. DJ Müzik & Ses & Işık ( haftasonu geçerlidir ) İZZET & YAKAR MÜZİK / İzzet Biton 4.000 TL + KDV 0212 275 67 69, 0212 288 32 93, 0532 231 75 95, www.izzetyakar.com",
        'dekorasyon_tr'=>"Süsleme hizmeti Yıldız Hisar’ın anlaşmalı olduğu A Plus Davet & Organizasyon firması tarafından yapılmaktadır. (Giriş alanına büyük ve orta boy fener süsleme, 4 adet yapay çiçeklerden oluşan gelin yolu, alternatif renk seçeneklerinden oluşan masa örtüsü ve dantel kapağı, masa ortası kare ayna, 5 farklı masa ortası görsel kristal bardak mumluklarda, duni peçete, masa numaratörleri, Lake nikah kürsüsü veya Nikah masası yapay çiçek süsleme ile birlikte düğün paket fiyatına dahildir.) *Ekstra talepleriniz süsleme firması tarafından fiyatlandırılacaktır.

A PLUS DAVET & ORGANİZASYON / Aslı Kubilay 0212 267 57 91 / 0532 571 19 43 www.aplusdavet.com",
            'dekorasyon_en'=>"Süsleme hizmeti Yıldız Hisar’ın anlaşmalı olduğu A Plus Davet & Organizasyon firması tarafından yapılmaktadır. (Giriş alanına büyük ve orta boy fener süsleme, 4 adet yapay çiçeklerden oluşan gelin yolu, alternatif renk seçeneklerinden oluşan masa örtüsü ve dantel kapağı, masa ortası kare ayna, 5 farklı masa ortası görsel kristal bardak mumluklarda, duni peçete, masa numaratörleri, Lake nikah kürsüsü veya Nikah masası yapay çiçek süsleme ile birlikte düğün paket fiyatına dahildir.) *Ekstra talepleriniz süsleme firması tarafından fiyatlandırılacaktır.

A PLUS DAVET & ORGANİZASYON / Aslı Kubilay 0212 267 57 91 / 0532 571 19 43 www.aplusdavet.com",
        'video_tr'=>"Video ve Fotoğraf hizmeti Yıldız Hisar’ın anlaşmalı olduğu firması tarafından yapılmaktadır STUDIOS MCM / Nihat Tanrıverdi 0212 218 24 55 / 0532 504 10 13 www.studiosmcm.com",
        'video_en'=>"Video ve Fotoğraf hizmeti Yıldız Hisar’ın anlaşmalı olduğu firması tarafından yapılmaktadır STUDIOS MCM / Nihat Tanrıverdi 0212 218 24 55 / 0532 504 10 13 www.studiosmcm.com",

        'karsilama_tr'=>"19.00-20.00 saatleri arasında gerçekleşecek karşılama kokteyli esnasında misafirlerimize cips, çerez, yeşil zeytin, peynir topları ve çıtır grissini çubukları ikram edilecektir.",
        'karsilama_en'=>"19.00-20.00 saatleri arasında gerçekleşecek karşılama kokteyli esnasında misafirlerimize cips, çerez, yeşil zeytin, peynir topları ve çıtır grissini çubukları ikram edilecektir.",

        'vestiyer_tr'=>"Vestiyer hizmetimiz davet boyunca ücretsiz olarak verilmektedir.",
        'vestiyer_en'=>"Vestiyer hizmetimiz davet boyunca ücretsiz olarak verilmektedir.",

        'menu_tadimi_tr'=>"Davetinizden önce düğün danışmanınız ile yapacağınız menü tadımı hizmeti, pakete dahil olarak verilmektedir.",
        'menu_tadimi_en'=>"Davetinizden önce düğün danışmanınız ile yapacağınız menü tadımı hizmeti, pakete dahil olarak verilmektedir.",
        'vale_tr'=> "Vale hizmetimiz ücretli olup, araç başı 25 TL + KDV dir.",
        'vale_en'=> "Vale hizmetimiz ücretli olup, araç başı 25 TL + KDV dir.",
        'odeme_tr'=>"Düğün organizasyonlarımızda anlaşma sağlandığı takdirde, ön ödeme %30 sözleşme imzalandığında alınacak olup, ara ödemeleriniz ise sözleşmede bildirilecektir. Tüm tutarın ise organizasyondan en geç 20 gün öncesine kadar ödenerek kapatılması gerekmektedir.",
        'odeme_en'=>"Düğün organizasyonlarımızda anlaşma sağlandığı takdirde, ön ödeme %30 sözleşme imzalandığında alınacak olup, ara ödemeleriniz ise sözleşmede bildirilecektir. Tüm tutarın ise organizasyondan en geç 20 gün öncesine kadar ödenerek kapatılması gerekmektedir.",
        'rezervasyon_tr'=>"Teklifimizin sadece bilgilendirme amaçlı olduğunu hatırlar, herhangi bir salon rezervasyonunun yapılmadığını tarafınıza bildiririz. Teklifimizin olumlu olması halinde, talebinizi yazılı olarak bildirmenizi rica eder, müsaitlik doğrultusunda ön rezervasyonunuzun memnuniyetle yapacağımızı bilgilerinize sunarız. Yıldız Hisar Davet ve Etkinlik Mekânı olarak, siz ve değerli misafirlerinizi ağırlamaktan dolayı memnuniyet duyacağımızı belirtir, sağlıklı ve güzel günler dileriz.",
        'rezervasyon_en'=>"Teklifimizin sadece bilgilendirme amaçlı olduğunu hatırlar, herhangi bir salon rezervasyonunun yapılmadığını tarafınıza bildiririz. Teklifimizin olumlu olması halinde, talebinizi yazılı olarak bildirmenizi rica eder, müsaitlik doğrultusunda ön rezervasyonunuzun memnuniyetle yapacağımızı bilgilerinize sunarız. Yıldız Hisar Davet ve Etkinlik Mekânı olarak, siz ve değerli misafirlerinizi ağırlamaktan dolayı memnuniyet duyacağımızı belirtir, sağlıklı ve güzel günler dileriz.",
        'is_active'=>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
