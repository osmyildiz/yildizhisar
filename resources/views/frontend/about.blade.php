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

                                 <!-- Our Gallery -->
                            <div class="restbeef_block">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
                                    <span class="restbeef_up_title">New Photos</span>
                                    Our Gallery
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="624">
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="0">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 01"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="1">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 02"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="2">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 03"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="3">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 04"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="4">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 05"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/dummy/1920x1280.png" class="restbeef_pswp_slide" data-size="1920x1280" data-count="5">
                                                <img src="img/dummy/740x640.png" alt="Gallery Image 06"/>
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

