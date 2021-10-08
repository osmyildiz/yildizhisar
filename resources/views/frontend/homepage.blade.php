@extends('frontend.layouts.master')
@section('title','Anasayfa')
@section('data-image')
    restbeef_header_wrapper restbeef_js_bg_image restbeef_height100 data-background="img/dummy/1920x1280.png"
@endsection
@section('slider')
    <div class="restbeef_header_title restbeef_container">
        <h1>
            <span class="restbeef_up_title">Best Steaks and Grill</span>
            Restbeef SteakHouse
        </h1>
        <p class="restbeef_header_description">
            We are making the original steaks based on traditional recipes. We use only fresh meat from <br>
            the best suppliers. Our staff are professionals, and we make everything to left our clients satisfied.
        </p>
        <a href="our_menu.html" class="restbeef_button restbeef_button_small restbeef_button_white">Watch Menu</a>
        <a href="table_reservation.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Book A Table</a>
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
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                <span class="restbeef_up_title">Freshly Taste</span>
                                New in our Menu
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_products restbeef_grig_3columns">
                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/dummy/740x700.png" alt="Product 01"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <del>$20</del><span>$15</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Season Menu
													</span>
                                                <a href="product.html">Spring Burger</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/dummy/740x700.png" alt="Product 02"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <span>$10</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Dessert Menu
													</span>
                                                <a href="product.html">Light Breeze</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/dummy/740x700.png" alt="Product 03"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <span>$25</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Steak Menu
													</span>
                                                <a href="product.html">Steak with fries</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->
                                </div><!-- .restbeef_recent_products -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Story Block -->
                        <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right" data-background="img/dummy/1920x1280.png" data-margin="0 0 71px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                        <div class="restbeef_content_box align_center">
                                            <h2>
                                                <span class="restbeef_up_title">Our Story</span>
                                                How We Begin
                                            </h2>
                                            <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">The Restbeef Steakhouse was est in 1989 in Chicago City. With more than 30 years of experience and base on traditional recipes, we understand how to best serve our customers through tried service principles. Instead of following trends, we set them. We create steaks and grill we’re proud to serve and deliver it fast, with a smile. No matter where you find us, we’re making sure each meal our clients enjoy is delicious and one-of-a-kind. Our steaks is always perfect and our professional team working hard to make you happy.</p>
                                            <a href="about_us.html" class="restbeef_button">Learn More About Us</a>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Testimonials Block -->
                        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 100px 0">
                            <div class="restbeef_block_inner">
                                <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                    <span class="restbeef_up_title">Our Clients Say</span>
                                    Testimonials
                                </h2>
                                <div class="restbeef_testimonials_wrapper restbeef_testimonials_grid restbeef_grig_3columns align_center">

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                John Smith
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            The Restbeef was one of the first restaurants I discovered upon moving to Chicago last summer. Perfect steaks, service on highest level. I recommend it to all people, who love tasty meat.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                Megan Knight
                                                <span class="restbeef_stars_review restbeef_stars_review4"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Love so much evening lounge music concert! It’s wonderful. But I’m vegetarian, so i don’t like meat, but there is a lot of salads and very tasty desserts, so i think everyone can find what to taste.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                Dolores Ford
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Best service i’ve ever seen in Chicago. Very polite staff, beautiful serving and serving dishes. Love their burgers. At weekends they have special offers, that’s are very affordable for me and very tasty!
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                Emmy Snow
                                                <span class="restbeef_stars_review restbeef_stars_review3"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Very wide range of salads to select, but i don’t like places, where people eat poor animals. But my boyfriend like steaks and beer. That place has very skilled staff and fantasitc salads. Desserts are also best.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                Frank Stewart
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Me and my girlfriend are in love with this place. Here we met at first time and go here every week to taste awesome steaks and drink some beer, listening fantastic lounge music. Strongly recommend!
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="img/dummy/120x120.png" alt="John Smith"/>
                                            <div class="restbeef_testimonials_author_name">
                                                Angela Kelly
                                                <span class="restbeef_stars_review restbeef_stars_review4"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Me and my friends like spend weekend evenings in the Restbeef. Relaxing lounge music, wide range wine card, perfect meat. What else people need after hard working week? Maybe just more action...
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                </div><!-- .restbeef_testimonials_wrapper -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Contact Block -->
                        <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left" data-background="img/dummy/1920x1280.png" data-margin="0 0 71px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_height100">
                                    <div class="col-6 restbeef_js_padding restbeef_align_middle" data-padding="50px 0 50px 50px">
                                        <div class="restbeef_content_box align_center">
                                            <h2>
                                                <span class="restbeef_up_title">Got Questions?</span>
                                                Get in touch with US
                                            </h2>
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
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">

                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Recent Posts Block -->
                        <div class="restbeef_block">
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 35px 0">
                                <span class="restbeef_up_title">Fresh News</span>
                                What is going on
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_posts restbeef_grig_3columns">

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="post_standard.html">
                                                <img src="img/dummy/740x700.png" alt="How to select wine"/>
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                25 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="post_standard.html">How to select wine</a>
                                            </h5>
                                            <p>In this article we will teach you to choose best wine. At first we must learn to determine which wine is suitable for what kind of dishes. We will start...</p>
                                            <a href="post_standard.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="post_video.html">
                                                <img src="img/dummy/740x700.png" alt="Master Class"/>
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                23 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="post_video.html">Master Class</a>
                                            </h5>
                                            <p>In this video master class you will learn, how to create tasty and awesome meal in your own kitchen. Our chef will explain you some secrets of cooking and serve...</p>
                                            <a href="post_video.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="post_image.html">
                                                <img src="img/dummy/740x700.png" alt="New Vegetarian Menu"/>
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                22 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="post_image.html">New Vegetarian Menu</a>
                                            </h5>
                                            <p>We love all our clients. So we had decided to add this new menu for our clients, who prefer vegetarian meal instead of meat. This new menu will...</p>
                                            <a href="post_image.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                </div><!-- .restbeef_recent_posts -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                    </div><!-- .restbeef_tiny -->
                </div><!-- .restbeef_content -->

            </div><!-- .restbeef_content_wrapper -->
        </div><!-- .restbeef_container -->
    </div><!-- .restbeef_main_wrapper -->
@endsection
