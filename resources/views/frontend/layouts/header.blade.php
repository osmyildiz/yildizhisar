<div class="restbeef_header_wrapper restbeef_js_bg_image restbeef_height100"
     data-background="img/yildiz-hisar-sariyer-1.jpg">

<header class="restbeef_main_header">

    <div class="restbeef_header_inner">
        <div class="restbeef_header_tagline restbeef_container_wide" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="restbeef_header_contacts">
                <ul class="restbeef_header_contacts_list">
                    <li><i class="fa fa-map-marker"></i>Rumeli Hisarı, Halim Paşa Sok. No:5 34470 Sarıyer/İstanbul</li>
                    <li><i class="fa fa-phone"></i>(0212) 287 70 75</li>
                    <!--   <li><i class="fa fa-clock-o"></i>10:00 am - 11:00 pm</li>-->
                </ul><!-- .restbeef_header_contacts_list -->
            </div><!-- .restbeef_header_contacts -->

            <div class="restbeef_header_socials">
                <ul class="restbeef_header_socials_list">
                    <li><a href="https://www.facebook.com/yildizhisarcom/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/yildizhisarcom"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/yildizhisarcom"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/yıldız-hisar"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="{{route('lang', ["locale" => Session::get('locale') == "en" ? "tr" : "en"])}}" class="btn_restbeef btn_lang" >
                            {{ Session::get('locale') == "en" ? "TR" : "EN" }}
                        </a></li>
                    <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
                </ul><!-- .restbeef_header_socials_list -->
            </div><!-- .restbeef_header_socials -->
        </div><!-- .restbeef_header_tagline -->

        <div class="restbeef_header_content restbeef_container_wide">
            <div class="restbeef_logo_part">
                <div class="restbeef_logo_cont">
                    <a href="/" class="restbeef_image_logo restbeef_retina"></a>
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

