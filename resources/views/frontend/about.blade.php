@extends('frontend.layouts.master')
@section('title','About')
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
                <span class="restbeef_up_title">Bizi daha yakından tanıyın</span>
                HAKKIMIZDA
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Know us better</span>
                ABOUT US
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
                            <div class="restbeef_block restbeef_team_block restbeef_js_margin" data-margin="-100px 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")
                                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                                <span style="font-size: 50px" class="restbeef_up_title">Hikayemiz</span>

                                            </h2>

                                        @if($about)

                                               <p>
                                                   {{$about->about_first_text_tr}}

                                               </p>
                                            @else
                                                <p>İşletmemiz, Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer almaktadır. Muhteşem mimarisi ve benzersiz Boğaz manzarası eşliğinde kahvaltı, öğlen ve akşam yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri, seminer gibi özel günlerde de hizmet vermektedir. Yıldız Ana Restoran, Havuz Başı Restoran, Alt Teras Restoran ve şömineli toplantı salonları gibi farklı alanları sayesinde tüm ihtiyaçlarınızı karşılayabilecek bir tasarıma sahiptir. Havuz Başı Restoran yaz aylarında 650, kış aylarında 130; Yıldız Ana Restoran ise 450 kişiye hizmet verebilecek kapasiteye sahiptir. 2021 Haziran ayında gerçekleşen tadilatımız itibarıyla Yalı Tarım işletmesine geçmiş olan işletmemiz, Yıldız Teknik Üniversitesi mensuplarının yanı sıra, tüm misafirlerimize açıktır. </p>

                                            @endif


                                        @else
                                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                                <span style="font-size: 50px" class="restbeef_up_title">Our History</span>

                                            </h2>
                                            @if($about)

                                                <p>
                                                    {{$about->about_first_text_en}}

                                                </p>
                                            @else
                                                <p>Located in Rumeli Fortress, right next to Fatih Sultan Mehmet Bridge, with its wonderful architecture and Bosphorus view, we serve breakfast, lunch and dinner as well as special occasions such as weddings, engagement parties, cocktails, graduation nights, seminars.
                                                    We have Yıldız Main Restaurant, Poolside Restaurant, Lower Terrace Restaurant, meeting rooms with fireplace. At the poolside restaurant; While we serve 650 people in summer and 130 people in winter, we serve 450 people in Yıldız Main Restaurant. As of our renovation in June 2021, we have moved to Yalı Tarım. </p>

                                            @endif


                                             @endif
                                         </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Cheef Block -->
                            <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right" data-background="img/about3.jpg" data-margin="0 0 71px 0">
                                <div class="restbeef_block_inner">
                                    <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px">

                                        </div><!-- .col-6 -->
                                        <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                                            <div class="restbeef_content_box align_center">
                                               @if(app()->getLocale() == "tr")
                                                    <h2>
                                                        <span class="restbeef_up_title">Muhteşem Ambiyanslar</span>
                                                        Yıldız Hisar'da
                                                    </h2>
                                                    @if($about)

                                                        <p class="restbeef_js_margin" data-margin="0 0 43px 0">
                                                            {{$about->middle_text_tr}}

                                                        </p>
                                                    @else
                                                        <p class="restbeef_js_margin" data-margin="0 0 43px 0">

                                                            Yıldız Hisar Tesisleri, yaz aylarında teras dahil edilerek ve açılır tavan sisteminden faydalanarak oldukça şık bir ambiyansa sahiptir. Ayrıca, Davet ve Etkinlik için oldukça şık bir davet alanı daha sunmaktadır. Dilerseniz mekânın havuz başı alanında göze hitap eden, elegant ve romantik bir davet gerçekleştirebilirsiniz. Boğazın muhteşem görünümü bu alanda da davetinize eşlik edecek ve gecenizi aydınlatacaktır. Yıldız Hisar Tesisleri ağırlıklı olarak yemekli düğün ve davetlerde Türk mutfağının eşsiz lezzetlerini sunmaktadır. Bununla sınırlı kalmayıp ikramlarında Dünya mutfağına da yer vermektedir. Menü konusunda çeşitlilik sunarak, herkesi mutlu edebilmektedir. Oldukça profesyonel aşçılar ve mutfak ekibine sahip olan tesisimiz, davetlerinde ikram edilecek yemekler konusunda oldukça hassastır.

                                                        </p>
                                                    @endif



                                                @else
                                                    <h2>
                                                        <span class="restbeef_up_title">Magnificent Ambiances at</span>
                                                        YILDIZ Hisar
                                                    </h2>
                                                    @if($about)

                                                        <p class="restbeef_js_margin" data-margin="0 0 43px 0">
                                                            {{$about->middle_text_en}}

                                                        </p>
                                                    @else
                                                        <p class="restbeef_js_margin" data-margin="0 0 43px 0">

                                                            Yıldız Hisar Facilities have a very stylish ambiance by including the terrace in the summer months and making use of the sunroof system. It also offers a very stylish invitation area for Invitation and Event. If you wish, you can organize an elegant and romantic invitation in the poolside area of the venue. The magnificent view of the Bosphorus will accompany your invitation in this area as well and will illuminate your night. Yıldız Hisar Facilities mainly offer the unique tastes of Turkish cuisine in weddings and invitations with dinner. Not limited to this, it also includes world cuisine in its offerings. It can make everyone happy by offering a variety on the menu. Our facility, which has very professional cooks and kitchen team, is very sensitive about the meals to be served at their invitations.
                                                        </p>
                                                    @endif


                                                @endif


                                            </div><!-- .restbeef_content_box -->
                                        </div><!-- .col-6 -->
                                    </div>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                            <!-- Our Gallery -->

                            <div class="restbeef_block">
                                @if(app()->getLocale() == "tr")
                                    <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
                                        <span class="restbeef_up_title">Yeni Fotoğraflar</span>
                                        Galeri
                                    </h2>

                                @else
                                    <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
                                        <span class="restbeef_up_title">New Photos</span>
                                        Our Gallery
                                    </h2>

                                @endif

                            </div>


                                @if(count($categories)>0)

                                        <div class="owl-carousel owl-theme">
                                            @foreach($categories as $key=> $image)

                                                <div class="item gallery-img"><a href="{{asset($image->url)}}" data-size="1920x1280" >
                                                        <img class="owl-lazy" data-src="{{asset($image->url)}}" alt="Gallery Image 06"/>
                                                    </a></div>



                                            @endforeach
                                        </div>

                                @else
                                <div class="owl-carousel owl-theme">
                                <div class="item gallery-img"><a href="img/y6.jpeg" data-size="1920x1280" data-count="5">
                                        <img class="owl-lazy" data-src="img/y6.jpeg" alt="Gallery Image 06"/>
                                    </a></div>
                                <div class="item gallery-img"><a href="img/y6.jpeg" data-size="1920x1280" data-count="5">
                                        <img class="owl-lazy" data-src="img/y3.jpeg" alt="Gallery Image 06"/>
                                    </a></div>
                                <div class="item gallery-img"><a href="img/y6.jpeg" data-size="1920x1280" data-count="5">
                                        <img class="owl-lazy" data-src="img/y4.jpeg" alt="Gallery Image 06"/>
                                    </a></div>
                                <div class="item gallery-img"><a href="img/y6.jpeg" data-size="1920x1280" data-count="5">
                                        <img class="owl-lazy" data-src="img/y9.jpeg" alt="Gallery Image 06"/>
                                    </a></div>
                                <div class="item gallery-img"><a href="img/y6.jpeg" data-size="1920x1280" data-count="5">
                                        <img class="owl-lazy" data-src="img/y11.jpeg" alt="Gallery Image 06"/>
                                    </a></div>
                                    @endif
                            </div>



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
                rtl: true,
                lazyLoad:true,
                margin:10,
                nav:false,
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
                        items:3
                    },
                    1200:{
                        items: 3
                    }
                }
            });


    </script>
@endsection

