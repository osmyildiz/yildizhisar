@extends('frontend.layouts.master')
@section('title','Events')

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
                ETKİNLİK
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                EVENTS
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

                            <!-- Grid Events -->
                            <div class="restbeef_block">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_events restbeef_events_2columns">

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="Order two glasses of wine at a 30% discount"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">22 May, 2019</div>
                                                <h5><a href="post_standard.html">Order two glasses of wine at a 30% discount</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="Every friday: Whiskey + any steak = 20% off"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">20 May, 2019</div>
                                                <h5><a href="post_standard.html">Every friday: Whiskey + any steak = 20% off</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="BBQ Party: second BBQ is 20% off"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">17 May, 2019</div>
                                                <h5><a href="post_standard.html">BBQ Party: second BBQ is 20% off</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="Summer Ground: Lounge music every evening"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">15 May, 2019</div>
                                                <h5><a href="post_standard.html">Summer Ground: Lounge music every evening</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="Get one burger? Take second with 40% Off!"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">10 MAY, 2019</div>
                                                <h5><a href="post_standard.html">Get one burger? Take second with 40% Off!</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->

                                        <div class="restbeef_event_item">
                                            <div class="restbeef_event_item_image">
                                                <a href="post_standard.html">
                                                    <img src="img/dummy/960x808.png" alt="Get hungry? Fast delivery to Anywhere!"/>
                                                </a>
                                            </div><!-- .restbeef_event_item_image -->
                                            <div class="restbeef_event_item_content">
                                                <div class="restbeef_event_date">05 May, 2019</div>
                                                <h5><a href="post_standard.html">Get hungry? Fast delivery to Anywhere!</a></h5>
                                            </div><!-- .restbeef_event_item_content -->
                                        </div><!-- .restbeef_event_item -->
                                    </div><!-- .restbeef_promo_block -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

