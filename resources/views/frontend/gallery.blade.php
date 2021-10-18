@extends('frontend.layouts.master')
@section('title','Rezervasyon')

@section('slider')
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title">Bize daha yakından bakın</span>
                GALERİ
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Take a closer look at us</span>
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

