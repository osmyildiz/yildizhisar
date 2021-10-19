@extends('frontend.layouts.master')
@section('title','Rezervasyon')

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
                <span class="restbeef_up_title">En güzel anılar burda başlar</span>
                DÜĞÜN & DAVET
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">The most beautiful moments start here</span>
                WEDDING
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
                                 data-margin="-100px 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")

                                            <p>Havuz başı düğün denilince Yıldız Hisar Tesisleri, muhteşem manzarası ile ilk gelen mekanlar arasında yer almaktadır. Mekanımız yıllardır şık tasarımı, büyüleyici manzarası ve geniş hizmet yelpazesi ile birlikte çiftlerin tercih sebebi olmaktadır. Sunduğu ayrıcalıklara karşın fiyatları da her bütçeye hitap etmektedir. Düğün fiyatlarımız seçilen menüye göre kişi başı 290 TL’den başlıyor.</p>  </div><!-- .col-6 -->


                                @else

                                        <p>Havuz başı düğün denilince Yıldız Hisar Tesisleri, muhteşem manzarası ile ilk gelen mekanlar arasında yer almaktadır. Mekanımız yıllardır şık tasarımı, büyüleyici manzarası ve geniş hizmet yelpazesi ile birlikte çiftlerin tercih sebebi olmaktadır. Sunduğu ayrıcalıklara karşın fiyatları da her bütçeye hitap etmektedir. Düğün fiyatlarımız seçilen menüye göre kişi başı 290 TL’den başlıyor.</p>  </div><!-- .col-6 -->


                                @endif
                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 80px 0">

                            <!-- Contact Icons -->
                            <div class="restbeef_block restbeef_js_margin restbeef_iconbox_block" data-margin="0 0 90px 0">
                                <div class="restbeef_block_inner align_center">

                                    <div class="row">

                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-check-circle-o"></i>
                                                <h4>Menü SEÇİMİ</h4>
                                                <p>Size sunduğumuz<br>6 menüden birini seçiniz.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-money"></i>
                                                <h4>Hizmet Seçimi</h4>
                                                <p>Müzik, Dekorasyon, Video ve Fotoğraf Hizmetlerimizi İnceleyiniz</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-smile-o"></i>
                                                <h4>Teklif</h4>
                                                <p>Siz karar verdikten sonra size uygun bir teklif tarafımızdan hazırlaranarak size ulaştırılacaktır.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->
                                <div class="restbeef_main_wrapper">
                                    <div class="restbeef_container">
                                        <div class="restbeef_content_wrapper restbeef_no_sidebar">

                                            <!-- Content Inner -->
                                            <div class="restbeef_content">
                                                <div class="restbeef_tiny">

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 90px 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y3.jpeg" alt="menu1" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            MENÜ 01
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                           Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                         </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 90px 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y4.jpeg" alt="menu2" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            Menü 02
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                            Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 90px 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y5.jpeg" alt="menu3" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            Menü 03
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                            Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 90px 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y3.jpeg" alt="menu4" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            Menü 04
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                            Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->

                                                    <!-- Team Member -->
                                                    <div class="restbeef_block restbeef_team_block">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y5.jpeg" alt="menu5" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            Menü 05
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                            Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div><!-- .restbeef_block -->
                                                    <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 90px 0">
                                                        <div class="restbeef_block_inner">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="img/y3.jpeg" alt="menu6" />
                                                                </div><!-- .col1-6 -->
                                                                <div class="col-6">
                                                                    <div class="restbeef_team_block_content align_center">
                                                                        <h2>
                                                                            <span class="restbeef_up_title">Yıldız Hisar</span>
                                                                            Menü 06
                                                                        </h2>
                                                                        <div class="restbeef_poduct_description">

                                                                            <p><h6>Meze Tabağı</h6>
                                                                            Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                                            kısır, kaşar peynir, somon füme


                                                                            <strong>Ara Sıcaklar</strong>
                                                                            Peynirli Su Böreği

                                                                            <strong>Ana Yemek</strong>
                                                                            Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile
                                                                            <strong>Düğün Pastası</strong>
                                                                            Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                                        </div>
                                                                    </div><!-- .restbeef_team_block_content -->
                                                                </div><!-- .col1-6 -->
                                                            </div><!-- .row -->
                                                        </div><!-- .restbeef_block_inner -->
                                                    </div>

                                                    <div class="restbeef_block restbeef_team_block restbeef_team_summary">

                                                        <div class="restbeef_block_inner">
                                                            <div class="restbeef_recent_posts restbeef_grig_2columns">
                                                                <div class="restbeef_recent_post">

                                                                    <div class="restbeef_recent_post_content">
                                                                        <h5>

                                                                        </h5>

                                                                            <h5>
                                                                                MÜZİK HİZMETİ
                                                                            </h5>



                                                                        <p>Müzik hizmeti Yıldız Hisar’ın anlaşmalı olduğu İzzet & Yakar Müzik Hizmetleri firması  tarafından yapılmaktadır. DJ Müzik & Ses & Işık ( haftasonu geçerlidir )
                                                                            <strong>İZZET & YAKAR MÜZİK / İzzet Biton</strong>
                                                                            4.000 TL + KDV
                                                                            <p>0212 275 67 69</p>
                                                                            <p>0212 288 32 93</p>
                                                                            <p>0532 231 75 95</p>
                                                                        www.izzetyakar.com
                                                                        </p>


                                                                    </div><!-- .restbeef_recent_post_content -->
                                                                </div><!-- .restbeef_recent_post -->

                                                                <div class="restbeef_recent_post">

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
                                                                <div class="restbeef_recent_post">

                                                                    <div class="restbeef_recent_post_content">
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
                                                                <div class="restbeef_recent_post">

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
                                                            </div><!-- .restbeef_recent_posts -->
                                                        </div>
                                                    </div><!-- .restbeef_block -->


                                                    <!-- .restbeef_block -->

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

