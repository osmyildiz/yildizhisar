<style>
    .restbeef_header_socials_list > li > a > i {
        background: white;
        border-radius: 50%;
        padding: 6px;
        color: black;
        font-size: 19px !important;
    }

    .fa-facebook-f {
        padding: 6px 12px 6px 9px !important;
    }

    .restbeef_header_tagline {
        border-bottom: 2px solid #fff;
    }

    .restbeef_header_tagline ul li {
        font-size: 17px;
    }
</style>

<header class="restbeef_main_header">
    <div class="restbeef_header_inner">
        <div class="restbeef_header_tagline restbeef_container_wide">
            <div class="restbeef_header_contacts">
                <ul class="restbeef_header_contacts_list">
                    <li><i class="fa fa-map-marker"></i>Rumeli Hisarı, Halim Paşa Sok. No:5 34470 Sarıyer/İstanbul</li>
                    <li><i class="fa fa-phone"></i>(0212) 287 70 75</li>
                    <!--   <li><i class="fa fa-clock-o"></i>10:00 am - 11:00 pm</li>-->
                </ul><!-- .restbeef_header_contacts_list -->
            </div><!-- .restbeef_header_contacts -->

            <div class="restbeef_header_socials">
                <ul class="restbeef_header_socials_list">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube-play"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
                </ul><!-- .restbeef_header_socials_list -->
            </div><!-- .restbeef_header_socials -->
        </div><!-- .restbeef_header_tagline -->

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

            @include('frontend.layouts.menu')

        </div><!-- .restbeef_header_content -->

    </div><!-- .restbeef_header_inner -->
</header><!-- .restbeef_header -->

