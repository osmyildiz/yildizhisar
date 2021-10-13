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
                GALERİ
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                GALLERY
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">


        <div class="restbeef_main_wrapper">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">
                            <div class="restbeef_single_post_pf restbeef_blog_pf_gallery" >
                                <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="8726">
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="0">
                                            <img src="img/dummy/740x700.png" alt="Post Image 01"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="1">
                                            <img src="img/dummy/740x700.png" alt="Post Image 02"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="2">
                                            <img src="img/dummy/740x700.png" alt="Post Image 03"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="3">
                                            <img src="img/dummy/740x700.png" alt="Post Image 04"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="4">
                                            <img src="img/dummy/740x700.png" alt="Post Image 05"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                    <div class="restbeef_grig_gallery_item">
                                        <a href="img/dummy/740x700.png" class="restbeef_pswp_slide" data-size="740x700" data-count="5">
                                            <img src="img/dummy/740x700.png" alt="Post Image 06"/>
                                        </a>
                                    </div><!-- .restbeef_grig_gallery_item -->
                                </div><!-- .restbeef_grig_gallery_wrapper -->
                            </div><!-- .restbeef_single_post_pf -->



                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->
    </div>
@endsection

