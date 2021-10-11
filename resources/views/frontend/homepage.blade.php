@extends('frontend.layouts.master')
@section('title','Yıldız Hisar')
@section('data-image')
    restbeef_header_wrapper restbeef_js_bg_image restbeef_height100 data-background="img/yildiz-hisar-sariyer-1.jpg"
@endsection
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
        <h1>
            <span class="restbeef_up_title">Boğaz Manzarası Eşliğinde</span>
            UNUTULMAYAN HATIRALAR
        </h1>
        <p class="restbeef_header_description">
            Etkinlik - Davet - Restaurant & Bar
        </p>
        <a href="our_menu.html" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Galeri</a>
        <a href="/table_rezervations" style=" border: 1px solid white;"
           class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Rezervasyon</a>
    </div><!-- .restbeef_header_title -->
@endsection

@section('content')
    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">

                        <!-- Recent Products Block -->
                        <div class="restbeef_block restbeef_js_margin" data-margin="-20px 0 99px 0">
                            <h2 style="font-size: 60px" class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                <span style="font-size: 50px" class="restbeef_up_title">Eşsiz Lezzetler</span>
                                Yıldız Hisar'da
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_products restbeef_grig_3columns">
                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/image.1552661787858.jpg" alt="Product 01"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"><i style="font-size: 39px;font-weight: 700;" class="far fa-star"></i></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Season Menu
													</span>-->
                                                <a href="product.html" class="card-menu-text">Restaurant</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/yildiz-hisar-009.jpg" alt="Product 02"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <<div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"><i style="font-size: 39px;font-weight: 700;" class="far fa-star"></i></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Dessert Menu
													</span>-->
                                                <a href="product.html" class="card-menu-text">Düğün<br> & Davet</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/yildiz-hisar-011.jpg" alt="Product 03"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"><i style="font-size: 39px;font-weight: 700;" class="far fa-star"></i></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Steak Menu
													</span>-->
                                                <a href="product.html" class="card-menu-text">Etkinlik</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->
                                </div><!-- .restbeef_recent_products -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Story Block -->
                        <div
                            class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right"
                            data-background="img/yildiz-hisar-009.jpg" data-margin="0 0 71px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                        <div class="restbeef_content_box align_center">
                                            <h2>
                                                <span class="restbeef_up_title">Yıldız Hisar</span>
                                                Hakkımızda
                                            </h2>
                                            <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">The
                                                Restbeef Steakhouse was est in 1989 in Chicago City. With more than 30
                                                years of experience and base on traditional recipes, we understand how
                                                to best serve our customers through tried service principles. Instead of
                                                following trends, we set them. We create steaks and grill we’re proud to
                                                serve and deliver it fast, with a smile. No matter where you find us,
                                                we’re making sure each meal our clients enjoy is delicious and
                                                one-of-a-kind. Our steaks is always perfect and our professional team
                                                working hard to make you happy.</p>
                                            <a href="about_us.html"
                                               class="restbeef_button rezervasyon-text">Rezervasyon</a>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Testimonials Block -->
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

                        <!-- Contact Block -->
                        <div
                            class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left"
                            data-background="img/1624012337617_1125x522.jpeg" data-margin="0 0 -92px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_height100">
                                    <div class="col-5 restbeef_js_padding restbeef_align_middle">
                                        <div class="restbeef_content_box align_center">
                                            <h2 style="font-size: 60px">
                                                <span style="font-size: 50px" class="restbeef_up_title">Tüm Sorularınız İçin</span>
                                                Mesaj Atabilirsiniz
                                            </h2>
                                            <form method="post" id="contact_form">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" placeholder="İSİM / SOYİSİM"
                                                               name="your_name"/>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="email" placeholder="TELEFON veya MAİL AFRESİ"
                                                               name="your_email"/>
                                                    </div>
                                                </div><!-- .row -->
                                                <textarea placeholder="MESAJINIZ"
                                                          name="your_message"></textarea>
                                                <input
                                                    style="background-color: #AB945E; font-size: 22px; font-weight: normal"
                                                    type="submit" value="GÖNDER"/>
                                            </form>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">

                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->
                    </div><!-- .restbeef_tiny -->
                </div><!-- .restbeef_content -->

            </div><!-- .restbeef_content_wrapper -->
        </div><!-- .restbeef_container -->
    </div><!-- .restbeef_main_wrapper -->
    <script>
        $(".menu-bnt").click(function () {
            $(".bottom-menu").addClass("d-none-x").removeClass("d-flex-x")
            $(".menu-bnt").removeClass("menuactive")
            let id = $(this).attr('id');
            if ($("#bottom-menu" + id).hasClass('d-none')) {
                $("#bottom-menu" + id).removeClass("d-none-x").addClass("d-flex-x")
                $("#"+ id).addClass("menuactive");
            } else {
                $("#bottom-menu" + id).addClass("d-none-x").removeClass("d-flex-x")
            }
        })
    </script>
@endsection

