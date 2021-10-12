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
                DÜĞÜN & DAVET
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                WEDDING
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">


        <!-- Content -->
        <div class="restbeef_main_wrapper">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 80px 0">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 align_center">
                                        <p>We delivering the fastest way! It does not matter where you are: working at office, sitting at home or take a walk in the park. If you will be hungry - we will find you everywhere and deliver to you perfect meal from our menu.</p>
                                    </div><!-- .col-6 -->
                                    <div class="col-3"></div>
                                </div>
                            </div><!-- .restbeef_block -->

                            <!-- Contact Icons -->
                            <div class="restbeef_block restbeef_js_margin restbeef_iconbox_block" data-margin="0 0 90px 0">
                                <div class="restbeef_block_inner align_center">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-clock-o"></i>
                                                <h4>Fast Delivery</h4>
                                                <p>Our delivery time is up to one hour.<br>Note: cooking time is not included.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-money"></i>
                                                <h4>Reasonable Prices</h4>
                                                <p>Delivery price depends on the distance and is $0.99 for one mile from us to you.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-smile-o"></i>
                                                <h4>Free Delivery</h4>
                                                <p>Orders from $100 are delivered free of charge within 5 miles of the restaurant.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Delivery Steps -->
                            <div class="restbeef_block restbeef_js_margin"  data-margin="0 0 100px 0">
                                <h2 class="restbeef_block_title align_center">
                                    <span class="restbeef_up_title">How It Works</span>
                                    Making an order
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 01</span>
                                                    290 TL + KDV
                                                </h2>
                                                <div class="align_center">
                                                    <div class="restbeef_poduct_description">
                                                        <h6>Meze Tabağı</h6>
                                                        <p>
                                                            <span>Yaprak sarma, Ezine Beyaz peynir, domates, salatalık, acılı ezme,
                                                        </span><span>kısır, kaşar peynir, somon füme</span>
                                                        </p>

                                                        <h6>Ara Sıcaklar</h6>
                                                        <p>Peynirli Su Böreği</p>

                                                        <h6>Ana Yemek</h6>
                                                        <p>Fırında Tavuk Göğsü ‘ Florantine ‘ Sote ıspanak yatağında, baharatlı patates ile</p>
                                                        <h6>Düğün Pastası</h6>
                                                        <p>Düğün Pastası,Çay & Nescafe Türk Lokumu ile Limitsiz Meşrubat</p>
                                                    </div><!-- .restbeef_poduct_description -->
                                                </div><!-- .restbeef_poduct_summary_content -->


                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 02</span>
                                                    Order Form
                                                </h2>
                                                <p>Next step is to place your order. To do that you can go to shopping cart, by using widget in sidebar, pressing button with the same name or by click on cart icon in header. In shopping cart you can check your order, fill form fields and after that confirm your order.</p>

                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 03</span>
                                                    Select meal
                                                </h2>
                                                <p>To make an order at first step you need select meal, that you want to order. You can do it on our menu page, where all dishes are sorted by categories. Click on menu item and in opened page press “Add to Cart” button. You can add as more items, as you need.</p>

                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 04</span>
                                                    Order Form
                                                </h2>
                                                <p>Next step is to place your order. To do that you can go to shopping cart, by using widget in sidebar, pressing button with the same name or by click on cart icon in header. In shopping cart you can check your order, fill form fields and after that confirm your order.</p>

                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 05</span>
                                                    Select meal
                                                </h2>
                                                <p>To make an order at first step you need select meal, that you want to order. You can do it on our menu page, where all dishes are sorted by categories. Click on menu item and in opened page press “Add to Cart” button. You can add as more items, as you need.</p>
                                                <a href="our_menu.html" class="restbeef_button">View menu</a>
                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                    <div class="row restbeef_step_item">
                                        <div class="col-8">
                                            <div class="restbeef_step_content">
                                                <h2>
                                                    <span class="restbeef_up_title">Menü 06</span>
                                                    Wait for a call
                                                </h2>
                                                <p>After all that steps we call you back immediately (or maybe in 3-5 minutes) to confirm your order and to clarify details.  And after that we will sent your order for you. All our delivery men are fastest drivers in the world, so your order will not have time to cool!</p>
                                                <a href="contacts01.html" class="restbeef_button">Contact Us</a>
                                            </div>
                                        </div><!-- .col-8 -->
                                        <div class="col-4 restbeef_step_path">
                                        </div><!-- .col-4 -->
                                    </div><!-- .restbeef_step_item -->
                                </div>
                            </div><!-- .restbeef_block -->

                            <!-- Contact Form -->
                            <div class="restbeef_block restbeef_intro_block">
                                <h2 class="restbeef_block_title align_center">
                                    <span class="restbeef_up_title">Got Questions?</span>
                                    Get in touch with US
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <form method="post" id="contact_form">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" placeholder="Enter Your Name" name="your_name"/>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="email" placeholder="Enter Your Email" name="your_email"/>
                                                    </div>
                                                </div><!-- .row -->
                                                <textarea placeholder="Enter Your Message" name="your_message"></textarea>
                                                <input type="submit" value="Send Your Message"/>
                                            </form>
                                        </div><!-- .col-8 -->
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

