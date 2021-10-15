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
                İLETİŞİM
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                CONTACT
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">


        <!-- Content -->
        <div class="restbeef_main_wrapper restbeef_no_bottom_padding">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <!-- Contact Icons -->
                            <div class="restbeef_block restbeef_js_margin" data-margin="0 0 110px 0">
                                <div class="restbeef_block_inner align_center">
                                    <div class="row restbeef_keep_tablet_row">
                                        <div class="col-4">
                                            <div class="restbeef_contact_info_wrapper">
                                                <h2>
                                                    <span class="restbeef_up_title">Working Hours</span>
                                                </h2>
                                                <div class="restbeef_contact_info">
                                                    <h6>Weekdays</h6>
                                                    From 10:00 to 23:00
                                                </div><!-- .restbeef_contact_info -->
                                                <div class="restbeef_contact_info">
                                                    <h6>Weekend</h6>
                                                    From 10:00 to 23:00
                                                    <br>
                                                    or to the last client
                                                </div><!-- .restbeef_contact_info -->
                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_contact_info_wrapper">
                                                <h2>
                                                    <span class="restbeef_up_title">Contact Info</span>
                                                </h2>
                                                <div class="restbeef_contact_info">
                                                    <h6>Our Phone</h6>
                                                    +1 (234) 555 - 67 - 89
                                                </div><!-- .restbeef_contact_info -->
                                                <div class="restbeef_contact_info">
                                                    <h6>Our Location</h6>
                                                    817 N California Ave,
                                                    <br>
                                                    Chicago, IL 60622
                                                </div><!-- .restbeef_contact_info -->
                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_contact_info_wrapper">
                                                <h2>
                                                    <span class="restbeef_up_title">Stay in Touch</span>
                                                </h2>
                                                <div class="restbeef_contact_info">
                                                    <h6>Social Links</h6>
                                                    <ul class="restbeef_contact_socials">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    </ul>
                                                </div><!-- .restbeef_contact_info -->
                                                <div class="restbeef_contact_info">
                                                    <h6>Email and Support</h6>
                                                    <strong>General:</strong> <a href="mailto:restbeef@pixel-mafia.com">restbeef@pixel-mafia.com</a>
                                                    <br>
                                                    <strong>Clients Support:</strong> <a href="mailto:support@pixel-mafia.com">support@pixel-mafia.com</a>
                                                </div><!-- .restbeef_contact_info -->
                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <!-- Contact Form -->
                            <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
                                <h2 class="restbeef_block_title align_center">
                                    <span class="restbeef_up_title">Got Questions?</span>
                                    Get IN TOUCH WITH US
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="row restbeef_keep_tablet_row">
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

                            <!-- Map Block -->
                            <div class="restbeef_block restbeef_fullwidth">
                                <div class="restbeef_block_inner">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.030937094061!2d29.052250715214413!3d41.09017067929267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caca06b29c9be7%3A0x1c410cdfc7d4fdf4!2sYildiz%20Technical%20University%20Hisar%20Facilities!5e0!3m2!1sen!2str!4v1634040789774!5m2!1sen!2str" width="1920" height="545" style="border:0;" allowfullscreen></iframe>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->
                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection
