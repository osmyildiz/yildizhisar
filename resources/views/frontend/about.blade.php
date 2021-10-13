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

                            <!-- Team Grid -->
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 100px 0">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
                                    <span class="restbeef_up_title">Our1 Masters</span>
                                    Professional Team
                                </h2>
                                <div class="restbeef_block_inner align_center">
                                    <div class="restbeef_team_grid restbeef_grig_3columns">
                                        <div class="restbeef_team_grid_item">
                                            <div class="restbeef_team_grid_image">
                                                <a href="team_member.html">
                                                    <img src="img/dummy/740x700_user.png" alt="Scotty Mason"/>
                                                </a>
                                            </div><!-- .restbeef_recent_post_image -->
                                            <div class="restbeef_team_grid_content">
                                                <h4>
                                                    <span class="restbeef_up_title">Sous-Chef</span>
                                                    <a href="team_member.html">Scotty Mason</a>
                                                </h4>
                                            </div><!-- .restbeef_team_grid_content -->
                                        </div><!-- .restbeef_team_grid_item -->
                                        <div class="restbeef_team_grid_item">
                                            <div class="restbeef_team_grid_image">
                                                <a href="team_member.html">
                                                    <img src="img/dummy/740x700_user.png" alt="Brittney Hall"/>
                                                </a>
                                            </div><!-- .restbeef_recent_post_image -->
                                            <div class="restbeef_team_grid_content">
                                                <h4>
                                                    <span class="restbeef_up_title">Fish Master</span>
                                                    <a href="team_member.html">Brittney Hall</a>
                                                </h4>
                                            </div><!-- .restbeef_team_grid_content -->
                                        </div><!-- .restbeef_team_grid_item -->
                                        <div class="restbeef_team_grid_item">
                                            <div class="restbeef_team_grid_image">
                                                <a href="team_member.html">
                                                    <img src="img/dummy/740x700_user.png" alt="Johnny Garnett"/>
                                                </a>
                                            </div><!-- .restbeef_recent_post_image -->
                                            <div class="restbeef_team_grid_content">
                                                <h4>
                                                    <span class="restbeef_up_title">Desserts Master</span>
                                                    <a href="team_member.html">Johnny Garnett</a>
                                                </h4>
                                            </div><!-- .restbeef_team_grid_content -->
                                        </div><!-- .restbeef_team_grid_item -->
                                    </div><!-- .restbeef_team_grid -->
                                    <a href="our_team.html" class="restbeef_button restbeef_js_margin" data-margin="50px 0 0 0">Learn More</a>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Cheef Block -->
                            <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right" data-background="img/dummy/1920x1280.png" data-margin="0 0 71px 0">
                                <div class="restbeef_block_inner">
                                    <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                        </div><!-- .col-6 -->
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                            <div class="restbeef_content_box align_center">
                                                <h2>
                                                    <span class="restbeef_up_title">Our Chef</span>
                                                    Renzo Rogers
                                                </h2>
                                                <p class="restbeef_js_margin" data-margin="0 0 43px 0">Renzo Rogers began his journey to culinary excellence 15 years ago after graduating from the Chicago Cookery Academy with honors. After graduation he worked for a long time abroad in various restaurants, gaining experience. After 10 years, he had return to his hometown, to take lead the kitchen in our restaurant, what has been successfully engaged in the past 5 years. The winner of many culinary competitions, has many awards and is currently working on his own author's menu.</p>
                                                <a href="team_member.html" class="restbeef_button">Learn More</a>
                                            </div><!-- .restbeef_content_box -->
                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Our Benefits -->
                            <div class="restbeef_block restbeef_js_margin restbeef_iconbox_block" data-margin="0 0 90px 0">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 50px 0">
                                    <span class="restbeef_up_title">Why We</span>
                                    Our Benefits
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="row restbeef_js_padding" data-padding="0 0 70px 0">
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-cutlery"></i>
                                                <h4>Freshly Cooked</h4>
                                                <p>Our steaks are always fresh and perfect, because we use only best meat from proven suppliers.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-users"></i>
                                                <h4>Professional Team</h4>
                                                <p>We understand how to best serve our customers through tried and true service principles.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-truck"></i>
                                                <h4>Quick Delivery</h4>
                                                <p>Quick and quality delivering. You may sure, that your order will be fresh, just like from a fire.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-glass"></i>
                                                <h4>Wide range drinks</h4>
                                                <p>No matter what you prefer: strong whiskey, light beer or tasty wine. We have all of this and more.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-clock-o"></i>
                                                <h4>Save your time</h4>
                                                <p>We know the cost of the time, so we cooking for you really fast, but always with the best quality.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-music"></i>
                                                <h4>Live Music</h4>
                                                <p>Every evening you can enjoy not only perfect steaks, but also wonderful lounge live music.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Delivery Block -->
                            <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left" data-background="img/dummy/1920x1280.png" data-margin="0 0 85px 0">
                                <div class="restbeef_block_inner">
                                    <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">
                                            <div class="restbeef_content_box align_center">
                                                <h2>
                                                    <span class="restbeef_up_title">Fast and Furious</span>
                                                    Food Delivery
                                                </h2>
                                                <p class="restbeef_js_margin" data-margin="0 0 43px 0">We delivering fast, faster and fastest way! It does not matter where you are: working at office, sitting at home or take a walk in the park. If you will be hungry - we will find you everywhere and deliver to you fresh and hot meal from our menu. To make an order select needed meal from our menu page, fill in order form and wait for a call. We call you back immediately (or maybe in 3-5 minutes), clarify the details and will sent your order for you. All our delivery men are fastest drivers in the world, so your order will stay hot!</p>
                                                <a href="food_delivery.html" class="restbeef_button">Learn More</a>
                                            </div><!-- .restbeef_content_box -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">

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

