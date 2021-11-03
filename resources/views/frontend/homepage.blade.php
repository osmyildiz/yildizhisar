@extends('frontend.layouts.master')
@section('title','Yıldız Hisar')
@section('data-image')
    restbeef_header_wrapper restbeef_js_bg_image restbeef_height100 data-background="img/yildiz-hisar-sariyer-1.jpg"
@endsection
@section('slider')
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 0.83;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {
            background-color: #04AA6D;
        }

        .alert.info {
            background-color: #2196F3;
        }

        .alert.warning {
            background-color: #ff9800;
        }

        .closebtn {
            padding-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 20px;
            line-height: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
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



        body > div > div.restbeef_main_wrapper > div > div > div > div > div.restbeef_block.restbeef_js_bg_image.restbeef_height100.restbeef_fullwidth.restbeef_js_margin.restbeef_home01_block.restbeef_content_on_right > div > div > div:nth-child(2) > div > h2 > span {
            color: #AD965F;
            padding-bottom: 24px;
            font-size: 55px;
        }

        .rezervasyon-text {
            font-size: 23px !important;
        }

        .menu-bnt {
            cursor: pointer;
        }

        .menu-active {
            border-bottom: 10px solid #AB945E;
        }
    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")
            <h1>
                <span class="restbeef_up_title"></span>
                BOĞAZ MANZARASI EŞLİĞİNDE
            </h1>
            <p class="restbeef_header_description">
                Etkinlik - Davet - Restoran
            </p>
            <a href="/galeri1" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Galeri</a>
            <a href="{{route('contact')}}" style=" border: 1px solid white;"
               class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">İletişim</a>
        @else
            <h1>
                <span class="restbeef_up_title">Unforgettable Moment</span>
                with the Bosphorus view
            </h1>
            <p class="restbeef_header_description">
                Event & Wedding & Restaurant
            </p>
            <a href="/galeri1" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Gallery</a>
            <a href="{{route('contact')}}" style=" border: 1px solid white;"
               class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">Contact Us</a>
        @endif

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
                            @if(app()->getLocale() == "tr")
                                <h2  class="align_center restbeef_js_padding"
                                    data-padding="0 0 15px 0">
                                    <span style="font-size: 50px" class="restbeef_up_title">Eşsiz Lezzetler</span>
                                    Yıldız Hisar'da
                                </h2>
                            @else
                                <h2 class="align_center restbeef_js_padding"
                                    data-padding="0 0 15px 0">
                                    <span style="font-size: 50px" class="restbeef_up_title">Unique Tastes at</span>
                                    Yıldız Hisar
                                </h2>
                            @endif

                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_products restbeef_grig_3columns">
                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="">
                                                <img src="img/fish2.jpg" alt="Product 01"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"><img style="height: 50px" src="img/yildiz_icon.png" alt=""></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Season Menu
													</span>-->
                                                <a href="{{route('restaurant')}}"
                                                   class="card-menu-text">@lang('static_text.restaurant')</a>

                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="">
                                                <img src="img/yildiz-hisar-009.jpg" alt="Product 02"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <
                                            <div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"> <span style="background-color: transparent;"><img style="height: 50px" src="img/yildiz_icon.png" alt=""></span></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Dessert Menu
													</span>-->
                                                <a href="{{route('wedding')}}"
                                                   class="card-menu-text">@lang('static_text.invitation')</a>

                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="">
                                                <img src="img/yildiz-hisar-011.jpg" alt="Product 03"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price" style="box-shadow: none">
                                                <span style="background-color: transparent;"> <span style="background-color: transparent;"><img style="height: 50px" src="img/yildiz_icon.png" alt=""></span></span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4><!--
													<span class="restbeef_up_title">
														Steak Menu
													</span>-->
                                                <a href="{{route('events')}}"
                                                   class="card-menu-text">@lang('static_text.events')</a>

                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->
                                </div><!-- .restbeef_recent_products -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Story Block -->
                        <div
                            class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right"
                            data-background="img/yildiz-hisar-009.jpg" data-margin="0 0 71px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                        <div class="restbeef_content_box align_center">
                                            @if(app()->getLocale() == "tr")
                                                <h2>
                                                    <span class="restbeef_up_title">Yıldız Hisar</span>
                                                    Hakkımızda
                                                </h2>
                                                <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">
                                                    Yıldız Hisar, harika mimarisi ve boğaz manzarasının yanı sıra
                                                    kahvaltı, öğle ve akşam yemekleri, kokteyl, mezuniyet geceleri,
                                                    seminer gibi özel günlerde hizmet vermektedir.</p>
                                                <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">
                                                    Eşsiz lezzetleriyle boğazın mavi sularını ve esintisini
                                                    hissedebileceğiniz en güzel konumlardan birisi olan Rumeli Hisa'ında
                                                    hatırlalardan çıkmayan anlar için sizleri bekliyoruz.</p>
                                                <a href="{{route('contact')}}"
                                                   class="restbeef_button rezervasyon-text">İletişim</a>

                                            @else
                                                <h2>
                                                    <span class="restbeef_up_title">Yıldız Hisar</span>
                                                    About Us
                                                </h2>
                                                <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">The
                                                    In addition to its magnificent architecture and Bosphorus view,
                                                    Yıldız Hisar serves on special occasions such as breakfast, lunch
                                                    and dinner, cocktails, graduation nights and seminars. </p>
                                                <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">The
                                                    We are waiting for you for unforgettable moments in Rumeli Hisa, one
                                                    of the most beautiful locations where you can feel the blue waters
                                                    and breeze of the Bosphorus with its unique flavors. </p>
                                                <a href="/table_rezervations"
                                                   class="restbeef_button rezervasyon-text">Book a Table</a>

                                            @endif
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Testimonials Block -->
                        <div class="restbeef_block restbeef_js_margin">
                            <div style="box-shadow: none; padding: 37px 49px 0px 49px !important;"
                                 class="col-10 restbeef_content_box restbeef_js_margin">
                                @if(app()->getLocale() == "tr")
                                    <div class="restbeef_block">
                                        <h2 class="restbeef_block_title align_center">
                                            <span style="font-size: 50px" class="restbeef_up_title">Lezzetli</span>
                                            YILDIZ HİSAR MENU
                                        </h2>
                                        <div style="" class="row">

                                            @foreach($food_types as $key=>$type)


                                                @if($key<6)
                                                    <div class="col-2 text-center menu-bnt {{$key==0?"menu-active":""}}" id="{{$key+1}}">
                                                        <h6 style="font-weight: normal;">{{$type->name_tr}}</h6></div>
                                                @endif

                                            @endforeach
                                        </div>

                                    </div><!-- .restbeef_block -->

                                @else
                                    <div class="restbeef_block">
                                        <h2 class="restbeef_block_title align_center">
                                            <span style="font-size: 50px" class="restbeef_up_title">Delicious</span>
                                            YILDIZ HISAR MENU
                                        </h2>
                                        <div style="" class="row">


                                            @foreach($food_types as $key=>$type)


                                                @if($key<6)
                                                    <div class="col-2 text-center menu-bnt {{$key==0?"menu-active":""}}" id="{{$key+1}}">
                                                        <h6 style="font-weight: normal;">{{$type->name_en}}</h6></div>
                                                @endif

                                            @endforeach
                                        </div>

                                    </div><!-- .restbeef_block -->
                                @endif

                            </div>


                            <div class="row d-flex bottom-menu" id="menu-1" style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu1 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu1 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                            <div class="row d-none bottom-menu" id="menu-2" style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu2 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu2 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                            <div class="row d-none bottom-menu" id="menu-3"
                                 style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu3 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu3 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                            <div class="row d-none bottom-menu" id="menu-4"
                                 style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu4 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu4 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                            <div class="row d-none bottom-menu" id="menu-5"
                                 style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu5 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu5 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                            <div class="row d-none bottom-menu" id="menu-6"
                                 style="background-color: #F7F4EF;  padding: 25px;">
                                <div class="col-6">
                                    <div class="restbeef_menu_list">

                                        @foreach($menu6 as $key1=>$menu)
                                            @if($key1%2==0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach


                                    </div><!-- .restbeef_menu_list -->
                                </div><!-- .col-6 -->
                                <div class="col-6">
                                    <div class="restbeef_menu_list">
                                        @foreach($menu6 as $key1=>$menu)
                                            @if($key1%2!=0)
                                                @if(app()->getLocale() == "tr")
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_tr}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_tl}} TL
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_tr}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>

                                                @else
                                                    <div class="restbeef_menu_item">
                                                        <div class="restbeef_menu_item_head">
                                                            <h5>{{$menu->name_en}}</h5>
                                                            <h5 style="color: #AB945E" class="restbeef_menu_price">
                                                                {{$menu->price_usd}} USD
                                                            </h5><!-- .restbeef_menu_price -->
                                                        </div><!-- .restbeef_menu_item_head -->
                                                        <div class="restbeef_menu_item_content">
                                                            <div
                                                                    class="restbeef_menu_item_description">
                                                                {{$menu->description_en}}
                                                            </div>
                                                        </div><!-- .restbeef_menu_item_content -->

                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                    </div><!-- .restbeef_menu_list -->

                                </div><!-- .col-6 -->
                                <a style="display: block; margin: 20px auto;" href="\restoran" class="galeri restbeef_button restbeef_button_small restbeef_button_white">Daha Fazla Göster</a>

                            </div>
                        </div>

                        <!-- Contact Block -->
                        <div
                            class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left"
                            data-background="img/fish3.jpg" data-margin="0 0 -92px 0">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_height100">
                                    <div class="col-5 restbeef_js_padding restbeef_align_middle">
                                        <div class="restbeef_content_box align_center">
                                            @if(app()->getLocale() == "tr")
                                                <h2>
                                                    <span class="restbeef_up_title"></span>
                                                    BİZE ULAŞIN
                                                </h2>

                                            @else
                                                <h2>
                                                    <span class="restbeef_up_title"></span>
                                                    CONTACT US
                                                </h2>

                                            @endif
                                            <div class="restbeef_block_title align_center">
                                                @if(session()->has('message'))
                                                    <div
                                                        class="alert {{session('alert') ?? 'info'}} alert-dismissible fade show">
                                                        <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none';">&times;</span>

                                                        @if(session('alert')=="success")
                                                            @lang('static_text.form_success')
                                                        @else
                                                            @lang('static_text.form_error')
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>

                                            <form method="POST" class="form-horizontal" action="/add-form-web"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">

                                                        <input type="text" placeholder="@lang('static_text.firstname')"
                                                               name="name" required/>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" placeholder=@lang('static_text.lastname')
                                                            name="surname" required/>
                                                    </div>
                                                </div><!-- .row -->
                                                <div class="row">
                                                    <div class="col-6">

                                                        <input type="number" placeholder="@lang('static_text.phone')"
                                                               name="phone" onKeyDown="limitText(this,10);"
                                                               onKeyUp="limitText(this,10);" required/>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="email" placeholder=@lang('static_text.email')
                                                            name="email" required/>
                                                    </div>
                                                </div><!-- .row -->
                                                <textarea placeholder="@lang('static_text.message')"
                                                          name="message" required></textarea>
                                                <input
                                                    style="background-color: #AB945E; font-size: 22px; font-weight: normal"
                                                    type="submit" value=@lang('static_text.send')>
                                            </form>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">

                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->
                    </div><!-- .restbeef_tiny -->
                </div><!-- .restbeef_content -->

            </div><!-- .restbeef_content_wrapper -->
        </div><!-- .restbeef_container -->
    </div><!-- .restbeef_main_wrapper -->
    <script>

        $(".menu-bnt").click(function () {
            $(".bottom-menu").addClass("d-none").removeClass("d-flex")
            $(".menu-bnt").removeClass("menuactive")
            let id = $(this).attr('id');
            if ($("#menu-" + id).hasClass('d-none')) {
                $("#menu-" + id).removeClass("d-none").addClass("d-flex")
                $(".menu-bnt").removeClass("menu-active");
                $("#" + id).addClass("menu-active");
            } else {
                $("#menu-" + id).addClass("d-none").removeClass("d-flex")
            }
        })

    </script>
    <script language="javascript" type="text/javascript">
        function limitText(limitField, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }


    </script>
@endsection

