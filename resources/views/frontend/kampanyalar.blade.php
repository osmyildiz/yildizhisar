@extends('frontend.layouts.master')
@section('title','Nisan')

@section('slider')
    <style>

        a.restbeef_button.restbeef_button_white {
            background-color: #0b0b0b;
            color: #A38D58;
            border: 1px solid #A38D58;
            font-size: 20px;
        }
        a.restbeef_button.restbeef_button_white:hover {
            border: 1px solid #ffffff;
        }

        .restbeef_header_title a.restbeef_button {
            max-width: 200px;
        }

        body > div > div.restbeef_main_wrapper > div > div > div > div > div:nth-child(1) > div > div > div:nth-child(2) > div.restbeef_recent_product_content > h4 {
            margin-top: -20px;
            line-height: 52px;
        }

        body > div > div.restbeef_main_wrapper > div > div > div > div > div.restbeef_block.restbeef_js_bg_image.restbeef_height100.restbeef_fullwidth.restbeef_js_margin.restbeef_home01_block.restbeef_content_on_right > div > div > div:nth-child(2) > div > h2 > span {
            color: #AD965F;
            padding-bottom: 24px;
            font-size: 55px;
        }

        .rezervasyon-text {
            font-size: 23px !important;
        }
        .menu-bnt{
            cursor: pointer;
        }
        .menu-active{
            border-bottom: 10px solid #AB945E;
        }
    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title"><!--En güzel anılar burda başlar--></span>
                KAMPANYALAR
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"><!--The most beautiful moments start here--></span>
                CAMPAIGNS
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">


        <!-- Content -->
        <div class="restbeef_main_wrapper restbeef_no_top_padding">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <!-- Team Member -->
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin"
                                 data-margin="-100px 0 0 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")

                                            <p>Nikah töreninizde sizler mutluluğa imza atarken, bu özel günden hatıra kalacak fotoğraf karelerinize Yıldız Hisar’ın benzersiz Boğaz manzarası imza atacak… Asya ve Avrupa’yı birleştiren noktada konumlanan işletmemizde, partnerinizle hayatınızı birleştirdiğiniz anlara şahit olmaktan mutluluk duyacağız…</p>
                                @else

                                       <p>While you will be happy at your wedding ceremony, Yıldız Hisar's unique Bosphorus view will create your photo frames that will remain as memories of this special day. We will be happy to witness the moments when you unite your life with your partner in our business, which is located at the point that unites Asia and Europe.</p>    @endif
                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 0 0">


                                <div class="restbeef_main_wrapper">
                                    <div class="restbeef_container">
                                        <div class="restbeef_content_wrapper restbeef_no_sidebar">

                                            <!-- Content Inner -->
                                            <div class="restbeef_content">
                                                <div class="restbeef_tiny">

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y3.jpeg" alt="menu1" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">MENÜ 01</span>
                                                                            240 TL + KDV
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">
                                                                            <p>Klasik Meze Tabağı,
                                                                                beyaz peynir, mercimek köfte, zeytinyağlı yaprak sarma, Çerkez tavuğu, patlıcan salatası,
                                                                                haydari, acılı ezme, domates, salatalık “
                                                                                Sebzeli Krep
                                                                                Domates sos ile
                                                                                Limon ve Kekik ile Marine Edilmiş Tavuk Göğsü
                                                                                fırınlanmış biberiyeli patates ve sebze buketi ile
                                                                                Düğün Pastası
                                                                                Çay & Nescafe Türk Lokumu ile
                                                                                Limitsiz Meşrubat</p>

                                                                        </div>
                                                                         </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y4.jpeg" alt="menu2" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Menü 02</span>
                                                                            260 TL + KDV
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p>Zeytinyağlı Tabağı,
                                                                                zeytinyağlı yaprak sarma, zeytinyağlı kırmızıbiber dolması, mini imambayıldı,
                                                                                sızma zeytinyağı ile tatlandırılmış fava,
                                                                                Gül Böreği
                                                                                Süzme yoğurt ve taze nane eşliğinde
                                                                                Taze Baharatlar ve Kök Sebzeler ile Ağır Ateşte Pişmiş Dana Kürek
                                                                                mevsim sebzeleri ve sarı patates püresi ile
                                                                                Düğün Pastası
                                                                                Çay & Nescafe Türk Lokumu İle
                                                                                Limitsiz Meşrubat
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <div class="restbeef_block restbeef_team_block restbeef_team_summary">

                                                        <div class="restbeef_block_inner">


                                                            <div class="restbeef_recent_posts restbeef_grig_2columns">
                                                                <div class="restbeef_recent_post card-height">

                                                                    <div class="restbeef_recent_post_content ">
                                                                        <h5>

                                                                        </h5>

                                                                        <h5>
                                                                            AÇIKLAMA
                                                                        </h5>

                                                                        <div class="align_left">
                                                                            <p >
                                                                            <ul>
                                                                                <li>Menü fiyatlarımıza %8 KDV dahil değildir.</li>
                                                                                <li>Menü fiyatlarımız kişi başı olup, mekân kullanımı dahildir.</li>
                                                                                <li>Yukarıdaki menü fiyatlarımız Kasım, Aralık, Ocak, Şubat ayları için geçerli olup,
                                                                                    minimum 150 kişi garanti edildiği takdirde uygulanmaktadır.</li>
                                                                                <li>Fiyatlarımız 2021 yılı için geçerlidir.</li>
                                                                                <li>Toplam tutara istinaden %5 servis bedeli alınmaktadır.</li>
                                                                                <li>İşletme menü, paket ve fiyatları değiştirme değiştirme hakkını saklı tutar</li>


                                                                            </ul>
                                                                            </p>
                                                                        </div>






                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div>

                                                                <div class="restbeef_recent_post card-height">

                                                                    <div class="restbeef_recent_post_content ">
                                                                        <h5>

                                                                        </h5>

                                                                        <h5>
                                                                            Kış Paketine Dahil Olan Hizmetler
                                                                        </h5>

                                                                        <div class="align_left">
                                                                            <p >
                                                                            <ul>
                                                                                <li>Hoş Geldiniz Kokteyli</li>
                                                                                <li>Show Pasta</li>
                                                                                <li>Davet Öncesinde Düğün Menü Tadımı</li>
                                                                                <li>Masa ve Sandalyelerin Süslenmesi</li>
                                                                                <li>Dj Müzik ve Ses & Işık Sistemi</li>
                                                                                <li>Düğün Günü Gelin & Damat İçin Hazırlık Odası</li>
                                                                                <li>Düğün Günü Gelin & Damada Özel Akşam Yemeği</li>
                                                                                <li>1. Evlilik yıldönümünde Şömineli Oda da Özel Akşam Yemeği</li>
                                                                                <li>20 adet Resimden oluşan Gelin & Damat albümü</li>

                                                                            </ul>
                                                                            </p>
                                                                        </div>






                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div>





                                                                <!-- .restbeef_recent_post -->

                                                            </div>
                                                            <div class="restbeef_recent_posts restbeef_grig_1columns">

                                                                <div class="restbeef_recent_post card-width ">

                                                                    <div class="restbeef_recent_post_content ">
                                                                        <h5>

                                                                        </h5>

                                                                        <h5>
                                                                            MÜZİK HİZMETİ
                                                                        </h5>



                                                                        <p>Müzik hizmeti Yıldız Hisar’ın anlaşmalı olduğu İzzet & Yakar Müzik Hizmetleri firması  tarafından yapılmaktadır. DJ Müzik & Ses & Işık ( haftasonu geçerlidir )
                                                                            İZZET & YAKAR MÜZİK / İzzet Biton
                                                                            4.000 TL + KDV
                                                                        0212 275 67 69,
                                                                        0212 288 32 93,
                                                                        0532 231 75 95,
                                                                        www.izzetyakar.com
                                                                        </p>


                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div><!-- .restbeef_recent_post -->

                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            DEKORASYON HİZMETİ
                                                                        </h5>

                                                                        <p>Süsleme hizmeti Yıldız Hisar’ın anlaşmalı olduğu  A Plus Davet & Organizasyon firması
                                                                            tarafından yapılmaktadır. (Giriş alanına büyük ve orta boy fener süsleme, 4 adet yapay çiçeklerden oluşan gelin yolu, alternatif renk seçeneklerinden oluşan masa örtüsü ve dantel kapağı, masa ortası kare ayna, 5 farklı masa ortası görsel kristal bardak mumluklarda, duni peçete, masa numaratörleri, Lake nikah kürsüsü veya Nikah masası yapay çiçek süsleme ile birlikte düğün paket fiyatına dahildir.) *Ekstra talepleriniz süsleme firması tarafından fiyatlandırılacaktır.
                                                                        <p>A PLUS DAVET & ORGANİZASYON / Aslı Kubilay 0212 267 57 91 / 0532 571 19 43 www.aplusdavet.com</p>

                                                                        </p>

                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div><!-- .restbeef_recent_post -->
                                                                <div class="restbeef_recent_post card-width" >

                                                                    <div class="restbeef_recent_post_content ">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Video ve Fotoğraf Hizmeti
                                                                        </h5>
                                                                        <p>Video ve Fotoğraf hizmeti Yıldız Hisar’ın anlaşmalı olduğu firması tarafından yapılmaktadır
                                                                            STUDIOS MCM / Nihat Tanrıverdi 0212 218 24 55 / 0532 504 10 13 www.studiosmcm.com
                                                                        </p>
                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div><!-- .restbeef_recent_post -->
                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Karşılama Kokteyli
                                                                        </h5>


                                                                        <p>19.00-20.00 saatleri arasında gerçekleşecek karşılama kokteyli esnasında misafirlerimize cips, çerez, yeşil zeytin, peynir topları ve çıtır grissini çubukları ikram edilecektir.
                                                                        </p>
                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div><!-- .restbeef_recent_post -->
                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Vestiyer
                                                                        </h5>
                                                                        <p>Vestiyer hizmetimiz davet boyunca ücretsiz olarak verilmektedir.  </p>
                                                                    </div><!-- .restbeef_recent_post_content -->


                                                                </div>

                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Menü Tadımı
                                                                        </h5>


                                                                        <p>Davetinizden önce düğün danışmanınız ile
                                                                            yapacağınız menü tadımı hizmeti,
                                                                            pakete dahil olarak verilmektedir.</p>

                                                                    </div>


                                                                </div>
                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Vale Parking
                                                                        </h5>


                                                                        <p>Vale hizmetimiz ücretli olup,
                                                                            araç başı 25 TL + KDV dir.</p>
                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div>
                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>
                                                                        <h5>
                                                                            Ödeme Planı
                                                                        </h5>


                                                                        <p>Düğün organizasyonlarımızda anlaşma sağlandığı takdirde, ön ödeme %30 sözleşme imzalandığında alınacak olup, ara ödemeleriniz ise sözleşmede bildirilecektir. Tüm tutarın ise organizasyondan en geç 20 gün öncesine kadar ödenerek kapatılması gerekmektedir.</p>
                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div>
                                                                <div class="restbeef_recent_post card-width">

                                                                    <div class="restbeef_recent_post_content ">
                                                                        <h5>

                                                                        </h5>

                                                                        <h5>
                                                                            Rezervasyon Durumu
                                                                        </h5>



                                                                        <p>Teklifimizin sadece bilgilendirme amaçlı olduğunu hatırlar, herhangi bir salon rezervasyonunun yapılmadığını tarafınıza bildiririz. Teklifimizin olumlu olması halinde, talebinizi yazılı olarak bildirmenizi rica eder, müsaitlik doğrultusunda ön rezervasyonunuzun memnuniyetle yapacağımızı bilgilerinize sunarız.
                                                                            Yıldız Hisar Davet ve Etkinlik Mekânı olarak, siz ve değerli misafirlerinizi
                                                                            ağırlamaktan dolayı memnuniyet duyacağımızı belirtir, sağlıklı ve güzel günler dileriz.</p>


                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div>




                                                                <!-- .restbeef_recent_post -->

                                                            </div>

                                                        </div>
                                                    </div>
                                                    </div><!-- .restbeef_block -->

                                                </div><!-- .restbeef_tiny -->
                                            </div><!-- .restbeef_content -->

                                        </div><!-- .restbeef_content_wrapper -->
                                    </div><!-- .restbeef_container -->
                                </div><!-- .restbeef_main_wrapper -->     <!-- Delivery Steps -->

                            <!-- Contact Form -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

