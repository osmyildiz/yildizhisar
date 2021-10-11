@extends('frontend.layouts.master')
@section('title','Rezervasyon')


@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">

        <!-- Header -->
        <div class="restbeef_header_wrapper restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <header class="restbeef_main_header">
                <div class="restbeef_header_inner">
                    <div class="restbeef_header_tagline restbeef_container_wide">
                        <div class="restbeef_header_contacts">
                            <ul class="restbeef_header_contacts_list">
                                <li><i class="fa fa-map-marker"></i>817 N California Ave, Chicago, IL 60622</li>
                                <li><i class="fa fa-phone"></i>+1 (234) 555 - 67 - 89</li>
                                <li><i class="fa fa-clock-o"></i>10:00 am - 11:00 pm</li>
                            </ul><!-- .restbeef_header_contacts_list -->
                        </div><!-- .restbeef_header_contacts -->

                        <div class="restbeef_header_socials">
                            <ul class="restbeef_header_socials_list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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

                                    <li class="menu-item menu-item-has-children current-menu-ancestor">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about_us.html">About Us</a></li>
                                            <li class="menu-item"><a href="our_events.html">Our Events</a></li>
                                            <li class="menu-item"><a href="our_team.html">Our Team</a></li>
                                            <li class="menu-item"><a href="team_member.html">Team Member</a></li>
                                            <li class="menu-item current-menu-item"><a href="table_reservation.html">Table Reservation</a></li>
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

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Stories</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="blog_grid.html">Blog Grid</a></li>
                                            <li class="menu-item"><a href="blog_masonry.html">Blog Masonry</a></li>
                                            <li class="menu-item"><a href="blog_simple.html">Blog Simple</a></li>
                                            <li class="menu-item"><a href="blog_sidebar.html">Blog with Sidebar</a></li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Blog Posts</a>
                                                <ul class="sub-menu">
                                                    <li><a href="post_standard.html">Standard Post</a></li>
                                                    <li><a href="post_image.html">Image Post</a></li>
                                                    <li><a href="post_gallery.html">Gallery Post</a></li>
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

                </div><!-- .restbeef_header_inner -->
            </header><!-- .restbeef_header -->

            <div class="restbeef_header_title restbeef_container">
                <h1>
                    <span class="restbeef_up_title">Take Your Place</span>
                    Table reservation
                </h1>
            </div><!-- .restbeef_header_title -->
        </div><!-- .restbeef_header_wrapper -->

        <!-- Content -->
        <div class="restbeef_main_wrapper restbeef_no_bottom_padding">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 80px 0">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 align_center">
                                        <p>If you plan your leisure in advance and do not want to get into a situation when the planned dinner is canceled due to the lack of free seats, reserve a table in advance. You can reserve a table by filling out the form below.</p>
                                    </div><!-- .col-6 -->
                                    <div class="col-3"></div>
                                </div>
                            </div><!-- .restbeef_block -->

                            <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="date" data-placeholder="Select Date" name="your_date"/>
                                            </div><!-- .col-4 -->
                                            <div class="col-4">
                                                <select name="your_time">
                                                    <option value="" selected>Select Time</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">10:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                </select>
                                            </div><!-- .col-4 -->
                                            <div class="col-4">
                                                <select name="your_guests">
                                                    <option value="" selected>Guests Number</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div><!-- .col-4 -->
                                        </div><!-- .row -->
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="text" placeholder="Enter your Name" name="your_name"/>
                                            </div><!-- .col-4 -->
                                            <div class="col-4">
                                                <input type="email" placeholder="Enter your Email" name="your_email"/>
                                            </div><!-- .col-4 -->
                                            <div class="col-4">
                                                <input type="tel" placeholder="Enter your Phone" name="your_phone"/>
                                            </div><!-- .col-4 -->
                                        </div><!-- .row -->
                                        <textarea placeholder="Enter your Message" name="your_text"></textarea>
                                        <input type="submit" value="Submit your reservation"/>
                                    </form>
                                </div>
                            </div><!-- .restbeef_block -->

                            <!-- Our Benefits -->
                            <div class="restbeef_block restbeef_js_margin restbeef_iconbox_block" data-margin="0 0 90px 0">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 50px 0">
                                    <span class="restbeef_up_title">Why We</span>
                                    Our Benefits
                                </h2>
                                <div class="restbeef_block_inner">
                                    <div class="row restbeef_js_padding" data-padding="0 0 70px 0">
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-cutlery"></i>
                                                <h4>Freshly Cooked</h4>
                                                <p>Our steaks are always fresh and perfect, because we use only best meat from proven suppliers.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-users"></i>
                                                <h4>Professional Team</h4>
                                                <p>We understand how to best serve our customers through tried and true service principles.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-truck"></i>
                                                <h4>Quick Delivery</h4>
                                                <p>Quick and quality delivering. You may sure, that your order will be fresh, just like from a fire.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-glass"></i>
                                                <h4>Wide range drinks</h4>
                                                <p>No matter what you prefer: strong whiskey, light beer or tasty wine. We have all of this and more.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-clock-o"></i>
                                                <h4>Save your time</h4>
                                                <p>We know the cost of the time, so we cooking for you really fast, but always with the best quality.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_iconbox align_center">
                                                <i class="fa fa-music"></i>
                                                <h4>Live Music</h4>
                                                <p>Every evening you can enjoy not only perfect steaks, but also wonderful lounge live music.</p>
                                            </div>
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Map Block -->
                            <div class="restbeef_block restbeef_fullwidth">
                                <div class="restbeef_block_inner">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.3328051086087!2d-87.69806900863756!3d41.89617020860313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2d554908856b%3A0xdf66e425af0a9c7d!2zODE3IE4gQ2FsaWZvcm5pYSBBdmUsIENoaWNhZ28sIElMIDYwNjIyLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1560427235999!5m2!1sru!2sua" width="1920" height="545" style="border:0" allowfullscreen></iframe>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

        <!-- Footer Widgets -->
        <div class="restbeef_footer_widgets">
            <!-- Back to Top Button -->
            <a href="#" class="restbeef_back_to_top"><i class="fa fa-chevron-up"></i></a>
            <div class="restbeef_container">
                <div class="row">

                    <div class="col-4 align_center">
                        <div class="widget widget_text">
                            <h2><span class="restbeef_up_title">About Us</span></h2>
                            <div class="textwidget">
                                <p>The Restbeef Steakhouse was est in 1989 in Chicago City. With more than 30 years of experience and base on traditional recipes, we understand how to best serve our customers through tried and true service principles.</p>
                            </div><!-- .textwidget -->
                        </div><!-- .widget_text -->
                    </div><!-- .col-4 -->

                    <div class="col-4 align_center">
                        <div class="widget widget_in_touch">
                            <h3 class="restbeef_up_title">Stay in Touch</h3>
                            <div class="restbeef_in_touch">
                                <form class="restbeef_intouch_form" name="restbeef_intouch">
                                    <input type="email" placeholder="Enter Your Email" />
                                    <input type="submit" value="Subscribe" />
                                </form><!-- .restbeef_intouch_form -->
                                <ul class="restbeef_intouch_socials">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div><!-- .restbeef_in_touch -->
                        </div><!-- .widget_text -->
                    </div><!-- .col-4 -->

                    <div class="col-4 align_center">
                        <div class="widget widget_text">
                            <h2><span class="restbeef_up_title">Contacts</span></h2>
                            <div class="textwidget">
                                <p>817 N California Ave Chicago, IL 60622</p>
                                <p>+1 (234) 555 - 67 - 89</p>
                                <p>Everyday from 10am - 11pm</p>
                            </div><!-- .textwidget -->
                        </div><!-- .widget_text -->
                    </div><!-- .col-4 -->

                </div><!-- .row -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_footer_widgets -->

        <!-- Footer -->
        <div class="restbeef_footer restbeef_container_wide">
            <div class="restbeef_copyright">
                &copy; 2019 Restbeef Steakhouse. All Rights Reserved.
            </div><!-- .restbeef_copyright -->
            <div class="restbeef_footer_links">
                <ul class="restbeef_footer_links_list">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Delivery Information</a></li>
                </ul>
            </div><!-- .restbeef_footer_links -->
        </div><!-- .restbeef_footer -->

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
    <script src="{{ URL::asset('/js/photoswipe.min.js') }}"></script>
    <script src="{{ URL::asset('/js/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ URL::asset('/js/theme.js') }}"></script>

@endsection

