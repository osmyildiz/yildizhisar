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


        <!-- Content -->
        <div class="restbeef_header_content restbeef_container_wide">
            <div class="restbeef_logo_part">
                <div class="restbeef_logo_cont">
                    <a href="index.html" class="restbeef_image_logo restbeef_retina"></a>
                </div>
            </div><!-- .restbeef_logo_part -->

            <div class="restbeef_mobile_menu_part">
                <a href="javascript:void(0)" class="restbeef_mobile_menu_toggler">
                    <span></span>
                </a><!-- .restbeef_mobile_menu_toggler -->
            </div><!-- .restbeef_mobile_menu_part -->

            <div class="restbeef_menu_part">
                <nav class="restbeef_nav">
                    <ul id="menu-main-menu" class="restbeef_menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="index.html">Home 01</a></li>
                                <li class="menu-item"><a href="index02.html">Home 02</a></li>
                                <li class="menu-item"><a href="index03.html">Home 03</a></li>
                            </ul><!-- .sub-menu -->
                        </li><!-- .menu-item-has-children -->

                        <li class="menu-item menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="about_us.html">About Us</a></li>
                                <li class="menu-item"><a href="our_events.html">Our Events</a></li>
                                <li class="menu-item"><a href="our_team.html">Our Team</a></li>
                                <li class="menu-item"><a href="team_member.html">Team Member</a></li>
                                <li class="menu-item"><a href="table_reservation.html">Table Reservation</a></li>
                                <li class="menu-item"><a href="food_delivery.html">Food Delivery</a></li>
                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                            </ul><!-- .sub-menu -->
                        </li><!-- .menu-item-has-children -->

                        <li class="menu-item menu-item-has-children">
                            <a href="#">Products</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="our_menu.html">Our Menu</a></li>
                                <li class="menu-item"><a href="product.html">Single Product</a></li>
                            </ul><!-- .sub-menu -->
                        </li><!-- .menu-item-has-children -->

                        <li class="menu-item menu-item-has-children current-menu-ancestor">
                            <a href="#">Stories</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blog_grid.html">Blog Grid</a></li>
                                <li class="menu-item"><a href="blog_masonry.html">Blog Masonry</a></li>
                                <li class="menu-item"><a href="blog_simple.html">Blog Simple</a></li>
                                <li class="menu-item"><a href="blog_sidebar.html">Blog with Sidebar</a></li>
                                <li class="menu-item menu-item-has-children current-menu-ancestor">
                                    <a href="#">Blog Posts</a>
                                    <ul class="sub-menu">
                                        <li><a href="post_standard.html">Standard Post</a></li>
                                        <li><a href="post_image.html">Image Post</a></li>
                                        <li class="current-menu-item"><a href="post_gallery.html">Gallery Post</a></li>
                                        <li><a href="post_video.html">Video Post</a></li>
                                    </ul><!-- .sub-menu -->
                                </li><!-- .menu-item-has-children -->
                            </ul><!-- .sub-menu -->
                        </li><!-- .menu-item-has-children -->

                        <li class="menu-item menu-item-has-children">
                            <a href="#">Contacts</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="contacts01.html">Fullwidth</a></li>
                                <li class="menu-item"><a href="contacts02.html">With Sidebar</a></li>
                            </ul><!-- .sub-menu -->
                        </li><!-- .menu-item-has-children -->

                    </ul><!-- .restbeef_menu -->
                    <a href="table_reservation.html" class="btn_restbeef btn_book_table">Book a Table</a>
                </nav><!-- .restbeef_nav -->
            </div><!-- .restbeef_menu_part -->

        </div><!-- .restbeef_header_content -->

    </div>
@endsection

