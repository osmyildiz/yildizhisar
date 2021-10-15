@extends('frontend.layouts.master')
@section('title','Rezervasyon')

@section('slider')
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title"></span>
                HAKKIMIZDA
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                ABOUT US
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
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="-100px 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")
                                            <h2 style="font-size: 60px" class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                                <span style="font-size: 50px" class="restbeef_up_title">Hikayemiz</span>

                                            </h2>
                                            <p>Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer alan, harika mimarisi ve boğaz manzarasıyla kahvaltı, öğlen ve akşam yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri, seminer gibi özel günlerde de hizmet vermekteyiz.
                                                Yıldız Ana Restoran, Havuz başı Restoran, Alt Teras Restoran, şömineli toplantı salonlarımız bulunmaktadır. Havuz başı Restoranda; yaz aylarında 650, kış aylarında 130 kişiye hizmet verirken, Yıldız Ana Restoranda 450 kişiye hizmet vermekteyiz. 2021 Haziran ayında gerçekleşen tadilatımız itibariyle Yalı Tarım işletmesine geçmiş bulunmaktayız.
                                            </p>

                                        @else
                                            <h2 style="font-size: 60px" class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                                <span style="font-size: 50px" class="restbeef_up_title">Our History</span>

                                            </h2>
                                            <p>Located in Rumeli Fortress, right next to Fatih Sultan Mehmet Bridge, with its wonderful architecture and Bosphorus view, we serve breakfast, lunch and dinner as well as special occasions such as weddings, engagement parties, cocktails, graduation nights, seminars.
                                                We have Yıldız Main Restaurant, Poolside Restaurant, Lower Terrace Restaurant, meeting rooms with fireplace. At the poolside restaurant; While we serve 650 people in summer and 130 people in winter, we serve 450 people in Yıldız Main Restaurant. As of our renovation in June 2021, we have moved to Yalı Tarım. </p>
                                        @endif
                                         </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Cheef Block -->
                            <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right" data-background="img/yildiz_about1.jpeg" data-margin="0 0 71px 0">
                                <div class="restbeef_block_inner">
                                    <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                        </div><!-- .col-6 -->
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                            <div class="restbeef_content_box align_center">
                                               @if(app()->getLocale() == "tr")
                                                    <h2>
                                                        <span class="restbeef_up_title">Muhteşem Ambiyanslar</span>
                                                        Yıldız Hisar'da
                                                    </h2>
                                                    <p class="restbeef_js_margin" data-margin="0 0 43px 0">
                                                        Yıldız Hisar Tesisleri, yaz aylarında teras dahil edilerek ve açılır tavan sisteminden faydalanarak oldukça şık bir ambiyansa sahiptir. Ayrıca, Davet ve Etkinlik için oldukça şık bir davet alanı daha sunmaktadır. Dilerseniz mekânın havuz başı alanında göze hitap eden, elegant ve romantik bir davet gerçekleştirebilirsiniz. Boğazın muhteşem görünümü bu alanda da davetinize eşlik edecek ve gecenizi aydınlatacaktır. Yıldız Hisar Tesisleri ağırlıklı olarak yemekli düğün ve davetlerde Türk mutfağının eşsiz lezzetlerini sunmaktadır. Bununla sınırlı kalmayıp ikramlarında Dünya mutfağına da yer vermektedir. Menü konusunda çeşitlilik sunarak, herkesi mutlu edebilmektedir. Oldukça profesyonel aşçılar ve mutfak ekibine sahip olan tesisimiz, davetlerinde ikram edilecek yemekler konusunda oldukça hassastır.

                                                    </p>

                                                @else
                                                    <h2>
                                                        <span class="restbeef_up_title">Magnificent Ambiances at</span>
                                                        YILDIZ Hisar
                                                    </h2>
                                                    <p class="restbeef_js_margin" data-margin="0 0 43px 0">

                                                        Yıldız Hisar Facilities have a very stylish ambiance by including the terrace in the summer months and making use of the sunroof system. It also offers a very stylish invitation area for Invitation and Event. If you wish, you can organize an elegant and romantic invitation in the poolside area of the venue. The magnificent view of the Bosphorus will accompany your invitation in this area as well and will illuminate your night. Yıldız Hisar Facilities mainly offer the unique tastes of Turkish cuisine in weddings and invitations with dinner. Not limited to this, it also includes world cuisine in its offerings. It can make everyone happy by offering a variety on the menu. Our facility, which has very professional cooks and kitchen team, is very sensitive about the meals to be served at their invitations.
                                                    </p>

                                                @endif


                                            </div><!-- .restbeef_content_box -->
                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Our Gallery -->
                            <div class="restbeef_block">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
                                    <span class="restbeef_up_title">New Photos</span>
                                    Our Gallery
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="624">
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y1.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="0">
                                                <img src="img/y1.jpeg" alt="Gallery Image 01"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y2.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="1">
                                                <img src="img/y2.jpeg" alt="Gallery Image 02"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y7.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="2">
                                                <img src="img/y7.jpeg" alt="Gallery Image 03"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y4.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="3">
                                                <img src="img/y4.jpeg" alt="Gallery Image 04"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y5.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="4">
                                                <img src="img/y5.jpeg" alt="Gallery Image 05"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y6.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="5">
                                                <img src="img/y6.jpeg" alt="Gallery Image 06"/>
                                            </a>
                                        </div>
                                    </div><!-- .restbeef_grig_gallery_wrapper -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

