@extends('frontend.layouts.master')
@section('title','Rezervasyon')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('slider')
    <style>
        .gallery-img img{
            float: left;
            width: 300px;
            height: 300px;
            object-fit: cover;
        }
    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title"></span>
                DOĞUM GÜNÜ
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                BIRTHDAY PARTY
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
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="-100px 0 0 0">
                                <div class="restbeef_block_inner">

                                    <div class="restbeef_content_box02">
                                        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 0 0">
                                            <div class="restbeef_block_inner">
                                                <blockquote>
                                                    @if(app()->getLocale() == "tr")

                                                        <p>Sevdikleriniz ile beraber geçireceğiniz unutulmaz anıların birikeceği hem gösterişli hem de şık görünümüyle istediğiniz kombin ile uyumlu hale getirebileceğiniz mekan alternatifi Yıldız Hisar’da!
                                                            Tüm ayrıntıları sizin için düşünülmüş Boğaz manzarasında doğum günü organizasyonu için bize ulaşın.
                                                            Özel günlerinizi birlikte dizayn edelim!
                                                        </p>

                                                    @else

                                                        <p>Yildiz Hisar is an alternative to the place where you can make unforgettable memories with your loved ones, which you can harmonize with the combination you want with its flashy and stylish appearance!
                                                            Contact us for a birthday organization with a view of the Bosphorus, all details of which have been thought for you.
                                                            Let's design your special days together!
                                                        </p>
                                                    @endif
                                                </blockquote>
                                            </div><!-- .restbeef_block_inner -->
                                        </div><!-- .restbeef_block -->

                                         </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->

                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script language="javascript" type="text/javascript">

            $(".owl-carousel").owlCarousel({

                loop:true,
                rtl: false,
                lazyLoad:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    800:{
                        items: 3
                    },
                    1000:{
                        items:2
                    },
                    1200:{
                        items: 3
                    }
                }
            });


    </script>
@endsection

