@extends('frontend.layouts.master')
@section('title','Nisan')

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
                <span class="restbeef_up_title"><!--En güzel anılar burda başlar--></span>
                KAMPANYALAR
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"><!--The most beautiful moments start here--></span>
                CAMPAIGNS
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

                                            <p>{{$campaign->main_text_tr}}</p>
                                             @else

                                            <p>{{$campaign->main_text_en}}</p>

                                        @endif

                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Team Member -->
                            @if(app()->getLocale() == "tr")

                                <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 0 0">


                                    <div class="restbeef_main_wrapper">
                                        <div class="restbeef_container">
                                            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                                                <!-- Content Inner -->
                                                <div class="restbeef_content">
                                                    <div class="restbeef_tiny">


                                                        <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                            <div class="restbeef_block_inner">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <img src="{{$campaign->menu1_img}}" alt="menu1" />
                                                                    </div><!-- .col1-6 -->
                                                                    <div class="col-6">
                                                                        <div class="restbeef_team_block_content align_center">
                                                                            <h2>
                                                                                <span class="restbeef_up_title">MENÜ 01</span>

                                                                                {{$campaign->menu1_fiyat_tr}}
                                                                            </h2>
                                                                            <div class="restbeef_poduct_description">
                                                                                <p>{{$campaign->menu1_tr}}</p>

                                                                            </div>
                                                                        </div><!-- .restbeef_team_block_content -->
                                                                    </div><!-- .col1-6 -->
                                                                </div><!-- .row -->
                                                            </div><!-- .restbeef_block_inner -->
                                                        </div><!-- .restbeef_block -->

                                                        <!-- Team Member -->
                                                        <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                            <div class="restbeef_block_inner">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <img src="{{$campaign->menu1_img}}" alt="menu2" />
                                                                    </div><!-- .col1-6 -->
                                                                    <div class="col-6">
                                                                        <div class="restbeef_team_block_content align_center">
                                                                            <h2>
                                                                                <span class="restbeef_up_title">Menü 02</span>
                                                                                {{$campaign->menu2_fiyat_tr}}
                                                                            </h2>
                                                                            <div class="restbeef_poduct_description">

                                                                                <p>{{$campaign->menu2_tr}}
                                                                                </p>
                                                                            </div>
                                                                        </div><!-- .restbeef_team_block_content -->
                                                                    </div><!-- .col1-6 -->
                                                                </div><!-- .row -->
                                                            </div><!-- .restbeef_block_inner -->
                                                        </div><!-- .restbeef_block -->

                                                        <div class="restbeef_block restbeef_team_block restbeef_team_summary">

                                                            <div class="restbeef_block_inner">


                                                                <div class="restbeef_recent_posts restbeef_grig_1columns">
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                AÇIKLAMA
                                                                            </h5>

                                                                            <div class="align_left">
                                                                                <p >
                                                                                    {{$campaign->aciklama_tr}}
                                                                                </p>
                                                                            </div>






                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                Kış Paketine Dahil Olan Hizmetler
                                                                            </h5>

                                                                            <div class="align_left">
                                                                                <p >
                                                                                    {{$campaign->pakete_dahil_tr}}
                                                                                </p>
                                                                            </div>






                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>





                                                                    <!-- .restbeef_recent_post -->

                                                                    <div class="restbeef_recent_post card-width ">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                MÜZİK HİZMETİ
                                                                            </h5>



                                                                            <p>{{$campaign->muzik_tr}}
                                                                            </p>


                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                DEKORASYON HİZMETİ
                                                                            </h5>

                                                                            <p>
                                                                                {{$campaign->dekorasyon_tr}}
                                                                            </p>

                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width" >

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Video ve Fotoğraf Hizmeti
                                                                            </h5>
                                                                            <p>{{$campaign->video_tr}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Karşılama Kokteyli
                                                                            </h5>


                                                                            <p>{{$campaign->karsilama_tr}}
                                                                            </p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Vestiyer
                                                                            </h5>
                                                                            <p>{{$campaign->vestiyer_tr}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->


                                                                    </div>

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Menü Tadımı
                                                                            </h5>


                                                                            <p>{{$campaign->menu_tadimi_tr}}</p>

                                                                        </div>


                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Vale Parking
                                                                            </h5>


                                                                            <p>{{$campaign->vale_tr}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Ödeme Planı
                                                                            </h5>


                                                                            <p>{{$campaign->odeme_tr}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                Rezervasyon Durumu
                                                                            </h5>



                                                                            <p>{{$campaign->rezervasyon_tr}}</p>


                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>




                                                                    <!-- .restbeef_recent_post -->

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div><!-- .restbeef_block -->

                                                </div><!-- .restbeef_tiny -->
                                            </div><!-- .restbeef_content -->

                                        </div><!-- .restbeef_content_wrapper -->
                                    </div><!-- .restbeef_container -->
                                </div><!-- .restbeef_main_wrapper -->     <!-- Delivery Steps -->

                            @else

                                <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 0 0">


                                    <div class="restbeef_main_wrapper">
                                        <div class="restbeef_container">
                                            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                                                <!-- Content Inner -->
                                                <div class="restbeef_content">
                                                    <div class="restbeef_tiny">


                                                        <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                            <div class="restbeef_block_inner">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <img src="{{$campaign->menu1_img}}" alt="menu1" />
                                                                    </div><!-- .col1-6 -->
                                                                    <div class="col-6">
                                                                        <div class="restbeef_team_block_content align_center">
                                                                            <h2>
                                                                                <span class="restbeef_up_title">MENÜ 01</span>

                                                                                {{$campaign->menu1_fiyat_en}}
                                                                            </h2>
                                                                            <div class="restbeef_poduct_description">
                                                                                <p>{{$campaign->menu1_en}}</p>

                                                                            </div>
                                                                        </div><!-- .restbeef_team_block_content -->
                                                                    </div><!-- .col1-6 -->
                                                                </div><!-- .row -->
                                                            </div><!-- .restbeef_block_inner -->
                                                        </div><!-- .restbeef_block -->

                                                        <!-- Team Member -->
                                                        <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="0 0 0 0">
                                                            <div class="restbeef_block_inner">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <img src="{{$campaign->menu1_img}}" alt="menu2" />
                                                                    </div><!-- .col1-6 -->
                                                                    <div class="col-6">
                                                                        <div class="restbeef_team_block_content align_center">
                                                                            <h2>
                                                                                <span class="restbeef_up_title">Menü 02</span>
                                                                                {{$campaign->menu2_fiyat_en}}
                                                                            </h2>
                                                                            <div class="restbeef_poduct_description">

                                                                                <p>{{$campaign->menu2_en}}
                                                                                </p>
                                                                            </div>
                                                                        </div><!-- .restbeef_team_block_content -->
                                                                    </div><!-- .col1-6 -->
                                                                </div><!-- .row -->
                                                            </div><!-- .restbeef_block_inner -->
                                                        </div><!-- .restbeef_block -->

                                                        <div class="restbeef_block restbeef_team_block restbeef_team_summary">

                                                            <div class="restbeef_block_inner">


                                                                <div class="restbeef_recent_posts restbeef_grig_1columns">
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                AÇIKLAMA
                                                                            </h5>

                                                                            <div class="align_left">
                                                                                <p >
                                                                                    {{$campaign->aciklama_en}}
                                                                                </p>
                                                                            </div>






                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                Kış Paketine Dahil Olan Hizmetler
                                                                            </h5>

                                                                            <div class="align_left">
                                                                                <p >
                                                                                    {{$campaign->pakete_dahil_en}}
                                                                                </p>
                                                                            </div>






                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>





                                                                    <!-- .restbeef_recent_post -->

                                                                    <div class="restbeef_recent_post card-width ">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                MÜZİK HİZMETİ
                                                                            </h5>



                                                                            <p>{{$campaign->muzik_en}}
                                                                            </p>


                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                DEKORASYON HİZMETİ
                                                                            </h5>

                                                                            <p>
                                                                                {{$campaign->dekorasyon_en}}
                                                                            </p>

                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width" >

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Video ve Fotoğraf Hizmeti
                                                                            </h5>
                                                                            <p>{{$campaign->video_en}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Karşılama Kokteyli
                                                                            </h5>


                                                                            <p>{{$campaign->karsilama_en}}
                                                                            </p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div><!-- .restbeef_recent_post -->
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Vestiyer
                                                                            </h5>
                                                                            <p>{{$campaign->vestiyer_en}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->


                                                                    </div>

                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Menü Tadımı
                                                                            </h5>


                                                                            <p>{{$campaign->menu_tadimi_en}}</p>

                                                                        </div>


                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Vale Parking
                                                                            </h5>


                                                                            <p>{{$campaign->vale_en}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content">
                                                                            <h5>

                                                                            </h5>
                                                                            <h5>
                                                                                Ödeme Planı
                                                                            </h5>


                                                                            <p>{{$campaign->odeme_en}}</p>
                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>
                                                                    <div class="restbeef_recent_post card-width">

                                                                        <div class="restbeef_recent_post_content ">
                                                                            <h5>

                                                                            </h5>

                                                                            <h5>
                                                                                Rezervasyon Durumu
                                                                            </h5>



                                                                            <p>{{$campaign->rezervasyon_en}}</p>


                                                                        </div><!-- .restbeef_recent_post_content -->
                                                                    </div>




                                                                    <!-- .restbeef_recent_post -->

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div><!-- .restbeef_block -->

                                                </div><!-- .restbeef_tiny -->
                                            </div><!-- .restbeef_content -->

                                        </div><!-- .restbeef_content_wrapper -->
                                    </div><!-- .restbeef_container -->
                                </div><!-- .restbeef_main_wrapper -->     <!-- Delivery Steps -->


                        @endif

                            <!-- Contact Form -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

