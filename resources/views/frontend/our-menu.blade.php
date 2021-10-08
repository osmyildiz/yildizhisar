@extends('frontend.layouts.master')
@section('title','Our Menu')
@section('css')
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
@endsection
@section('slider')
    <div class="restbeef_header_slider owl-carousel owl-theme">
        <div class="item restbeef_header_slide restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <div class="restbeef_header_slide_content restbeef_container">
                <h1>
                    <span class="restbeef_up_title">New In Menu</span>
                    Ribs Barbecue
                </h1>
                <p>Pork ribs in a traditional marinade, baked on the coals.<br>Served with cherry tomatoes, special sauce and greens.</p>
                <a href="product.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Learn More</a>
            </div><!-- .restbeef_header_slide_content -->
        </div><!-- .restbeef_header_slide -->

        <div class="item restbeef_header_slide restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <div class="restbeef_header_slide_content restbeef_container">
                <h1>
                    <span class="restbeef_up_title">Breakfast Menu</span>
                    Strawberry Pancakes
                </h1>
                <p>Thin and crispy pancakes with strawberry jam<br>and pieces of fresh strawberries and mint.</p>
                <a href="product.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Learn More</a>
            </div><!-- .restbeef_header_slide_content -->
        </div><!-- .restbeef_header_slide -->

        <div class="item restbeef_header_slide restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <div class="restbeef_header_slide_content restbeef_container">
                <h1>
                    <span class="restbeef_up_title">Desserts Menu</span>
                    Tropical Ice cream
                </h1>
                <p>Fantastic ice cream made by special recipe with adding<br>mix of tropical fruits.Served in glass with chocolate.</p>
                <a href="product.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Learn More</a>
            </div><!-- .restbeef_header_slide_content -->
        </div><!-- .restbeef_header_slide -->

        <div class="item restbeef_header_slide restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <div class="restbeef_header_slide_content restbeef_container">
                <h1>
                    <span class="restbeef_up_title">Salads Menu</span>
                    Mediterranean Snack
                </h1>
                <p>Fresh special tomatoes, sliced on circles, with special<br>bazilic sauce, olive oil, white cheese and grapes.</p>
                <a href="product.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Learn More</a>
            </div><!-- .restbeef_header_slide_content -->
        </div><!-- .restbeef_header_slide -->

        <div class="item restbeef_header_slide restbeef_js_bg_image" data-background="img/dummy/1920x1280.png">
            <div class="restbeef_header_slide_content restbeef_container">
                <h1>
                    <span class="restbeef_up_title">Steaks Menu</span>
                    Chicago Steak
                </h1>
                <p>Our firm steak made from perfect meat according to <br>company's recipe with unique sauce for fantastic taste.</p>
                <a href="product.html" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Learn More</a>
            </div><!-- .restbeef_header_slide_content -->
        </div><!-- .restbeef_header_slide -->
    </div><!-- .restbeef_header_slider -->
@endsection
@section('content')
    <div class="restbeef_main_wrapper restbeef_no_top_padding restbeef_no_bottom_padding">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">

                        <!-- Steaks Menu Block -->
                        <div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
                            <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="img/dummy/800x1200.png">

                            </div><!-- .col-4 -->

                            <div class="col-8">
                                <div class="restbeef_block">
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title">Traditional</span>
                                        Steaks Menu
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">
                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Big Steak House</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$70</del> $55
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Very huge steak for good company with grilled potatoes, grilled corn, fresh greenery and sauce on your choose.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            600/200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Chicago Steak</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$30</del> $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Our firm steak made from perfect meat according to the company's recipe with unique sauce for fantastic taste.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Ribeye Steak</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Awesome steak from the rib primal section. Traditional recipe with perfect quality and, sure, sauce on choose.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Steak with fries</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Awesome beef steak by traditional recipes with crispy and melting fries and, also, branded tomato sauce.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/100/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">New York Steak</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Most delicious steak of the highest degree of marbling fillet. Served with grilled corn, greenery and firm sauce.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/100/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Filet Mignon</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $35
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Delicate and juicy, prepared with love by the masters of their craft. A real celebration of taste for your stomach.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            250/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Amigo Steak</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            If you like really hot steaks - this is your choice. Served with greenery and cherry tomatoes. VERY STRONG!
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Pork Steak</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            If you are tired of beef, you can make a variety by ordering this pork steak. Highest quality and taste.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            250/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->

                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block -->
                            </div><!-- .col-8 -->

                        </div><!-- .restbeef_menu_block -->

                        <!-- Grill Menu Block -->
                        <div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
                            <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="img/dummy/800x1200.png">

                            </div><!-- .col-4 -->

                            <div class="col-8">
                                <div class="restbeef_block">
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title">Delicious Menu</span>
                                        Grill Aand Burger
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">
                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Ribs Barbecue</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$70</del> $55
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Pork ribs in a traditional marinade, baked on the coals. Served with cherry tomatoes, special sauce and greens.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            600/100/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Grilled Sausages</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$30</del> $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Best companion for our craft beer. Hot, juicy and crispy. Wide range of traditional sauces also available for you.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Chicken Wings</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Crispy chicken wings in our firm marinade cooked by our grill masters. Taste amazing with pint of fresh beer.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Sweet Corn</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            If you prefer vegetables this sweet grilled corn is best choice. Served with special firm sweet sour sauce.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">King Fish</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Freshly grilled fish cooked according to the traditional recipe with rustic potatoes. Also with sauce on choose.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/100/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                            </div><!-- .restbeef_menu_list -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">
                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Royale Burger</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$20</del> $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Two juicy beef patties made from minced meat according to the company's recipe with fresh bacon.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Spring Burger</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$20</del> $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Beef patty, cooked from minced meat, iceberg salad, fresh vegetables, and all this is laid in fragrant buns.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Ciabatta Burger</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $20
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Traditional Italian bread, tomato paste, mozzarella cheese, red onion, ground beef and mixed greens.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Chicken Burger</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Amazing chicken cotelette, cherry tomatoes, mixed greens and honey mustard sauce with fragrant buns.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">O'Fish Burger</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $20
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Grilled fish fillet with special firm sauce, mixed greens, fresh vegetables and traditional fragrant buns.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->

                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block -->
                            </div><!-- .col-8 -->

                        </div><!-- .restbeef_menu_block -->

                        <!-- Salads Menu Block -->
                        <div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
                            <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="img/dummy/800x1200.png">

                            </div><!-- .col-4 -->

                            <div class="col-8">
                                <div class="restbeef_block">
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title">Tasty and Healthy</span>
                                        Salads and Snacks
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Greek salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$20</del> $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Caesar salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$25</del> $20
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with romaine, olive oil, crushed garlic, Dijon mustard, lemon juice, Parmesan cheese and croutons.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Restbeef Salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with grilled beef fillet, cherry tomatoes, mozzarella cheese, red onion, mixed greens and corn.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Mediterranean salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with salmon fillet, basil, flax grains, cherry tomatoes and special cream sauce. Served in glass.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">
                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Rustic Salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with cucumber, tomatoes, iceberg lettuce, boiled potatoes and olive oil. Served with toasted bread.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Crab Louis salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $35
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with king crab, avocado, hard boiled eggs and tomato with Louis dressing, based on mayonnaise.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Grilled Salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $25
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Is made with cherry tomato, cucumbers, iceberg lettuce, grilled beef meat and dressed with special firm sauce.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Chicken salad</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $30
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Made with grilled chicken fillet, leaf lettuce, cherry tomatoes, quail egg, dressed with honey mustard sauce.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200/30g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->

                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block -->
                            </div><!-- .col-8 -->

                        </div><!-- .restbeef_menu_block -->

                        <!-- Desserts Menu Block -->
                        <div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
                            <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="img/dummy/800x1200.png">

                            </div><!-- .col-4 -->

                            <div class="col-8">
                                <div class="restbeef_block">
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title">Sweet Part</span>
                                        Desserts Menu
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">
                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Light Breeze</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            A wonderful dessert. Light souffle on amazing cracker inside with pieces of fruit and chocolate petals.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Strawberry pancakes</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$15</del> $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Thin and crispy pancakes with strawberry jam and pieces of fresh strawberries and mint.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            100/50/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Fruit Mix</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            This is a fresh mix of kiwi, strawberry, orange, grapes dressed with whipped cream and served in a glass.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Blueberry pie</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Amazing pie with blueberry filling by traditional recipes. Good decision for fresh fruit tea or hot chocolate.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Magic Strawberries</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$20</del> $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Amazing selected strawberries with soft whipped cream. Served in layers in a glass.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/100g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Fruit Cheesecake</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <del>$15</del> $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            This sweet dessert consisting with two cheese layers and fruit jam inside. Flavored with chocolate powder.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">French croissant</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Amazing delicate and crunchy croissant with a wide assortment of filling jam to choose from.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Tropical Ice cream</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $15
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Fantastic ice cream made by special recipe with adding mix of tropical fruits. Served in glass with chocolate.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150/50g
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->

                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block -->
                            </div><!-- .col-8 -->

                        </div><!-- .restbeef_menu_block -->

                        <!-- Bar Menu Block -->
                        <div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
                            <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="img/dummy/800x1200.png">

                            </div><!-- .col-4 -->

                            <div class="col-8">
                                <div class="restbeef_block">
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title">Strong &amp; Sweet</span>
                                        Bar Menu
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Ballantine’s Scotch</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <span>$95</span>$5
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Strong and perfect Scotland scotch. Served with Ice. 40% vol. Product of Scotland.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            100cl / 50ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Jack Daniel’s</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <span>$70</span><span>$45</span>$5
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Sour mash whiskey. Classic male drink from Tennessee. 40% vol. Made in U.S.A.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            75cl / 50cl / 50ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Craft Beer</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <span>$5</span>$3
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Special craft beer from our personal brewer. There are three types to choose: dark, light and blanched beer.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            50cl / 33cl
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Red Wine</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            <span>$49</span>$10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Fantastic light red wine form Europe. Perfect choice for meat meal and cheese dishes. 12.5% vol.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            75cl / 150ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->
                                        </div><!-- .col-6 -->
                                        <div class="col-6">
                                            <div class="restbeef_menu_list">

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Fresh Fruit tea</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $10
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Highest quality tea with pieces of tropical fruits. Served in a half-liter glass teapot.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            50cl
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Coffee</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $5
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Coffee in assortiment. Different types of coffee to meet the needs of most customers. Also can include milk.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            150ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Hot Chocolate</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $5
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Sweet, hot, warming. Real hot chocolate cooked according to traditional recipes. Also can include milk.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            200ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->

                                                <div class="restbeef_menu_item">
                                                    <div class="restbeef_menu_item_head">
                                                        <h5><a href="product.html">Fruit Juice</a></h5>
                                                        <h5 class="restbeef_menu_price">
                                                            $3
                                                        </h5><!-- .restbeef_menu_price -->
                                                    </div><!-- .restbeef_menu_item_head -->
                                                    <div class="restbeef_menu_item_content">
                                                        <div class="restbeef_menu_item_description">
                                                            Fruit juice in assortiment. Different types of fruit juice from quality brand companies.
                                                        </div><!-- .restbeef_menu_item_description -->
                                                        <div class="restbeef_menu_item_weight">
                                                            250ml
                                                        </div><!-- .restbeef_menu_item_weight -->
                                                    </div><!-- .restbeef_menu_item_content -->
                                                </div><!-- .restbeef_menu_item -->
                                            </div><!-- .restbeef_menu_list -->

                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block -->
                            </div><!-- .col-8 -->

                        </div><!-- .restbeef_menu_block -->

                    </div><!-- .restbeef_tiny -->
                </div><!-- .restbeef_content -->

            </div><!-- .restbeef_content_wrapper -->
        </div><!-- .restbeef_container -->
    </div><!-- .restbeef_main_wrapper -->
@endsection
@section('script')
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
@endsection
