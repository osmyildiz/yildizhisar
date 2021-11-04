@extends('frontend.layouts.master')
@section('title','Rezervasyon')

@section('slider')
    <style>

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

        .menu-bnt {
            cursor: pointer;
        }
        .menu-bnt1 {
            cursor: pointer;
        }

        .menu-active {
            border-bottom: 10px solid #AB945E;
        }
    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title">Leziz yemeklerimiz sizi bekliyor</span>
                RESTORAN
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Our delicious meals are waiting for you</span>
                RESTAURANT
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">


        <!-- Content -->
        <div class="restbeef_main_wrapper restbeef_no_top_padding">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <!-- Team Member -->
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin"
                                 data-margin="-100px 0 0 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")
                                            <h2 class="align_center restbeef_js_padding"
                                                data-padding="0 0 0 0">
                                                <span style="font-size: 50px" class="restbeef_up_title">Hikayemiz</span>

                                            </h2>
                                            <p>Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer alan,
                                                harika mimarisi ve boğaz manzarasıyla kahvaltı, öğlen ve akşam
                                                yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri,
                                                seminer gibi özel günlerde de hizmet vermekteyiz.
                                                Yıldız Ana Restoran, Havuz başı Restoran, Alt Teras Restoran, şömineli
                                                toplantı salonlarımız bulunmaktadır. Havuz başı Restoranda; yaz
                                                aylarında 650, kış aylarında 130 kişiye hizmet verirken, Yıldız Ana
                                                Restoranda 450 kişiye hizmet vermekteyiz. 2021 Haziran ayında
                                                gerçekleşen tadilatımız itibariyle Yalı Tarım işletmesine geçmiş
                                                bulunmaktayız.
                                            </p>

                                        @else
                                            <h2 class="align_center restbeef_js_padding"
                                                data-padding="0 0 15px 0">
                                                <span style="font-size: 50px"
                                                      class="restbeef_up_title">Our History</span>

                                            </h2>
                                            <p>Located in Rumeli Fortress, right next to Fatih Sultan Mehmet Bridge,
                                                with its wonderful architecture and Bosphorus view, we serve breakfast,
                                                lunch and dinner as well as special occasions such as weddings,
                                                engagement parties, cocktails, graduation nights, seminars.
                                                We have Yıldız Main Restaurant, Poolside Restaurant, Lower Terrace
                                                Restaurant, meeting rooms with fireplace. At the poolside restaurant;
                                                While we serve 650 people in summer and 130 people in winter, we serve
                                                450 people in Yıldız Main Restaurant. As of our renovation in June 2021,
                                                we have moved to Yalı Tarım. </p>
                                        @endif
                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Team Grid -->
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
                                                <span style="font-size: 50px" class="restbeef_up_title">Lezzetli</span>
                                                YILDIZ HİSAR MENU
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
                                </div>
                            </div><!-- .restbeef_block -->

                            <div class="restbeef_block restbeef_js_margin">
                                <div style="box-shadow: none; padding: 37px 49px 0px 49px !important;"
                                     class="col-10 restbeef_content_box restbeef_js_margin">
                                    <div class="restbeef_block">

                                        <div style="" class="row">

                                            @if(app()->getLocale() == "tr")

                                                        @foreach($food_types as $key=>$type)


                                                            @if($key>=6)
                                                                <div class="col-2 text-center menu-bnt1 {{$key==6?"menu-active":""}}" id="{{$key+1}}">
                                                                    <h6 style="font-weight: normal;">{{$type->name_tr}}</h6></div>
                                                            @endif

                                                        @endforeach


                                            @else
                                                @foreach($food_types as $key=>$type)


                                                    @if($key>=6)
                                                        <div class="col-2 text-center menu-bnt1 {{$key==6?"menu-active":""}}" id="{{$key+1}}">
                                                            <h6 style="font-weight: normal;">{{$type->name_tr}}</h6></div>
                                                    @endif

                                                @endforeach

                                            @endif


                                        </div>

                                    </div><!-- .restbeef_block -->
                                </div>
                                <div class="row d-flex bottom-menu1" id="menu1-7" style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu7 as $key1=>$menu)
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
                                            @foreach($menu7 as $key1=>$menu)
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
                                </div>
                                <div class="row d-none bottom-menu1" id="menu1-8"
                                     style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu8 as $key1=>$menu)
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
                                            @foreach($menu8 as $key1=>$menu)
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
                                </div>
                                <div class="row d-none bottom-menu1" id="menu1-9"
                                     style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu9 as $key1=>$menu)
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
                                            @foreach($menu9 as $key1=>$menu)
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
                                </div>
                                @if(count($menu10)>0)
                                <div class="row d-none bottom-menu1" id="menu1-10"
                                     style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu10 as $key1=>$menu)
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
                                            @foreach($menu10 as $key1=>$menu)
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
                                </div>
                                @endif
                                @if(count($menu11)>0)
                                <div class="row d-none bottom-menu1" id="menu1-11"
                                     style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu11 as $key1=>$menu)
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
                                            @foreach($menu11 as $key1=>$menu)
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
                                </div>
                                @endif
                                @if(count($menu12)>0)
                                <div class="row d-none bottom-menu1" id="menu1-12"
                                     style="background-color: #F7F4EF;  padding: 25px;">
                                    <div class="col-6">
                                        <div class="restbeef_menu_list">

                                            @foreach($menu12 as $key1=>$menu)
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
                                            @foreach($menu12 as $key1=>$menu)
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
                                </div>
                                @endif


                            </div>


                            <!-- Our Gallery -->
                            <div class="restbeef_block">
                                <h2 class="restbeef_block_title align_center restbeef_js_margin"
                                    data-margin="0 0 40px 0">
                                    @if(app()->getLocale() == "tr")

                                        <span class="restbeef_up_title">Yeni Fotoğraflar</span>
                                        GALERİ
                                    @else
                                        <span class="restbeef_up_title">New Photos</span>
                                        Our Gallery
                                    @endif

                                </h2>
                                <div class="restbeef_block_inner">
                                    <div
                                        class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper"
                                        data-uniqid="624">
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y11.jpeg" class="restbeef_pswp_slide" data-size="1920x1280"
                                               data-count="0">
                                                <img src="img/y11.jpeg" alt="Gallery Image 01"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y9.jpeg" class="restbeef_pswp_slide" data-size="1920x1280"
                                               data-count="1">
                                                <img src="img/y9.jpeg" alt="Gallery Image 02"/>
                                            </a>
                                        </div>
                                        <div class="restbeef_grig_gallery_item">
                                            <a href="img/y10.jpeg" class="restbeef_pswp_slide" data-size="1920x1280"
                                               data-count="2">
                                                <img src="img/y10.jpeg" alt="Gallery Image 03"/>
                                            </a>
                                        </div>

                                    </div><!-- .restbeef_grig_gallery_wrapper -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
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
        $(".menu-bnt1").click(function () {
            $(".bottom-menu1").addClass("d-none").removeClass("d-flex")
            $(".menu-bnt1").removeClass("menuactive")
            let id = $(this).attr('id');
            if ($("#menu1-" + id).hasClass('d-none')) {
                $("#menu1-" + id).removeClass("d-none").addClass("d-flex")
                $(".menu-bnt1").removeClass("menu-active");
                $("#" + id).addClass("menu-active");
            } else {
                $("#menu1-" + id).addClass("d-none").removeClass("d-flex")
            }
        })
    </script>
@endsection


