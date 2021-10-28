@extends('frontend.layouts.master')
@section('title','Events')

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
                <span class="restbeef_up_title">Bize daha yakından bakın.</span>
                Galeri
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Take a Closer Look at Us</span>
                GALLERY
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">

        <!-- Content -->
        <div class="restbeef_main_wrapper">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <!-- Grid Events -->
                            @if($data==1)
                            <div class="restbeef_block">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_events restbeef_events_2columns">
                                        @php
                                        $lang = app()->getLocale();
                                        if($lang =="tr"){
                                            $word = "galeri";
                                        }else{
                                        $word = "gallery";
                                        }

                                        @endphp

                                        @foreach($kategoriler as $kategori)

                                            <div class="restbeef_event_item">
                                                <div class="restbeef_e<vent_item_image">
                                                    <a href="{{$kategori->kapak_resmi}}">
                                                        <img src="{{$kategori->kapak_resmi}}" alt="dogum_gunu"/>
                                                    </a>
                                                </div><!-- .restbeef_event_item_image -->
                                                <div class="restbeef_event_item_content">
                                                    <a href="{{"/".$word."/".$kategori->id}}"> <div class="restbeef_event_date">{{$lang == "tr"?$kategori->name_tr:$kategori->name_en}}</div></a>
                                                </div>
                                            </div><!-- .restbeef_event_item -->
                                        @endforeach




                                    </div><!-- .restbeef_promo_block -->
                                </div><!-- .restbeef_block_inner -->
                            </div>
                                @endif<!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

