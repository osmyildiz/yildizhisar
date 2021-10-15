@extends('frontend.layouts.master')
@section('title','Rezervasyon')

@section('slider')
    <style>

        body > div > div.restbeef_header_wrapper.restbeef_js_bg_image.restbeef_height100 > div > h1 {
            font-size: 75px;
        }

        .restbeef_header_description {
            font-size: 40px;
        }

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
                <span class="restbeef_up_title"></span>
                RESTORAN
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                RESTAURANT
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
                            <div class="restbeef_block restbeef_js_margin">
                                <div style="box-shadow: none; padding: 37px 49px 0px 49px !important;"
                                     class="col-10 restbeef_content_box restbeef_js_margin">
                                    <div class="restbeef_block">
                                        <h2  class="restbeef_block_title align_center"
                                             style="font-size:60px; border-bottom: 2px solid black; padding-bottom: 15px">
                                            <span style="font-size: 50px" class="restbeef_up_title">Lezzetli</span>
                                            HİSAR MENU
                                        </h2>
                                        <div style="" class="row">
                                            <div class="col-2 text-center menu-bnt menu-active" id="1"><h5 style="font-weight: normal;">
                                                    <a style="font-size: 30px;">Çorbalar</a></h5></div>
                                            <div class="col-3 text-center menu-bnt" id="2"><h5 style="font-weight: normal;">
                                                    <a style="font-size: 30px;">Ara Sıcaklar</a></h5></div>
                                            <div class="col-3 text-center menu-bnt" id="3"><h5 style="font-weight: normal;">
                                                    <a style="font-size: 30px;">Ana Yemekler</a></h5></div>
                                            <div class="col-2 offset-0 text-center menu-bnt" id="4"><h5
                                                        style="font-weight: normal;"><a style="font-size: 30px;">Tatlılar</a>
                                                </h5></div>
                                            <div class="col-2 text-center menu-bnt" id="5"><h5 style="font-weight: normal;">
                                                    <a style="font-size: 30px;">İçecekler</a></h5></div>
                                        </div>
                                    </div><!-- .restbeef_block -->
                                </div>
                                <div class="row d-flex-x bottom-menu" id="menu-1" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->

                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->

                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>

                                        </div><!-- .restbeef_menu_list -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5  style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div  class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5  style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div  class="restbeef_menu_item_content">
                                                    <div style="font-weight: 600" class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                        </div><!-- .restbeef_menu_list -->

                                    </div><!-- .col-6 -->
                                </div>
                                <div class="row d-none-x bottom-menu" id="menu-2" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5  style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>

                                        </div><!-- .restbeef_menu_list -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                        </div><!-- .restbeef_menu_list -->

                                    </div><!-- .col-6 -->
                                </div>
                                <div class="row d-none-x bottom-menu" id="menu-3" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>

                                        </div><!-- .restbeef_menu_list -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                        </div><!-- .restbeef_menu_list -->

                                    </div><!-- .col-6 -->
                                </div>
                                <div class="row d-none-x bottom-menu" id="menu-4" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>

                                        </div><!-- .restbeef_menu_list -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                        </div><!-- .restbeef_menu_list -->

                                    </div><!-- .col-6 -->
                                </div>
                                <div class="row d-none-x bottom-menu" id="menu-5" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div><!-- .restbeef_menu_item -->
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>

                                        </div><!-- .restbeef_menu_list -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                            <div class="restbeef_menu_item">
                                                <div class="restbeef_menu_item_head">
                                                    <h5><a href="product.html">Greek salad</a></h5>
                                                    <h5 class="restbeef_menu_price">
                                                        15 TL
                                                    </h5><!-- .restbeef_menu_price -->
                                                </div><!-- .restbeef_menu_item_head -->
                                                <div class="restbeef_menu_item_content">
                                                    <div class="restbeef_menu_item_description">
                                                        Is made with pieces of tomatoes, sliced cucumbers, onion, feta
                                                        cheese and dressed with olive oil.
                                                    </div><!-- .restbeef_menu_item_description
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div>--><!-- .restbeef_menu_item_weight -->
                                                </div><!-- .restbeef_menu_item_content -->
                                            </div>
                                        </div><!-- .restbeef_menu_list -->

                                    </div><!-- .col-6 -->
                                </div>
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
                                            <a href="img/y11.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="0">
                                                <img src="img/y11.jpeg" alt="Gallery Image 01"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y9.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="1">
                                                <img src="img/y9.jpeg" alt="Gallery Image 02"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y10.jpeg" class="restbeef_pswp_slide" data-size="1920x1280" data-count="2">
                                                <img src="img/y10.jpeg" alt="Gallery Image 03"/>
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

