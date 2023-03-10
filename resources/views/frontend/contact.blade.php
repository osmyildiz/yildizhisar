@extends('frontend.layouts.master')
@section('title','Contact')

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
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 0.83;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {background-color: #04AA6D;}
        .alert.info {background-color: #2196F3;}
        .alert.warning {background-color: #ff9800;}

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
    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title">Bize Ula????n</span>
                ??LET??????M
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">How to Find</span>
                Our Contacts
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
                                                @if(app()->getLocale() == "tr")
                                                    <h2>
                                                        <span class="restbeef_up_title">??al????ma Saatleri</span>
                                                    </h2>
                                                    <div class="restbeef_contact_info">
                                                        <h6>Hafta i??i & Hafta Sonu</h6>
                                                        {{$contact->working_hours_weekdays_tr}}
                                                    </div><!-- .restbeef_contact_info -->

                                                @else
                                                    <h2>
                                                        <span class="restbeef_up_title">Working Hours</span>
                                                    </h2>
                                                    <div class="restbeef_contact_info">
                                                        <h6>Weekdays & Weekend</h6>
                                                        {{$contact->working_hours_weekdays_en}}
                                                    </div><!-- .restbeef_contact_info -->

                                                @endif

                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_contact_info_wrapper">
                                                @if(app()->getLocale() == "tr")
                                                    <h2>
                                                        <span class="restbeef_up_title">??leti??im Bilgileri</span>
                                                    </h2>
                                                    <div class="restbeef_contact_info">
                                                        <h6>Telefon</h6>
                                                        {{$contact->phone}}

                                                    </div><!-- .restbeef_contact_info -->
                                                    <div class="restbeef_contact_info">
                                                        <h6>Adres</h6>
                                                        {{$contact->address}}
                                                    </div><!-- .restbeef_contact_info -->
                                                @else
                                                    <h2>
                                                        <span class="restbeef_up_title">Contact Info</span>
                                                    </h2>
                                                    <div class="restbeef_contact_info">
                                                        <h6>Our Phone</h6>
                                                        {{$contact->phone}}
                                                    </div><!-- .restbeef_contact_info -->
                                                    <div class="restbeef_contact_info">
                                                        <h6>Our Location</h6>
                                                        {{$contact->address}}
                                                    </div><!-- .restbeef_contact_info -->
                                                @endif

                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                        <div class="col-4">
                                            <div class="restbeef_contact_info_wrapper">
                                                @if(app()->getLocale() == "tr")
                                                    <h2>
                                                        <span class="restbeef_up_title">Bizimle ??leti??imde Kal??n</span>
                                                    </h2>
                                                    <div class="restbeef_contact_info">
                                                        <h6>SOSYAL Medyadan Bizi Takip Edin</h6>
                                                        <ul class="restbeef_contact_socials">
                                                            <li><a href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="{{$contact->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="{{$contact->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="{{$contact->linkedin}}"><i class="fab fa-linkedin"></i></a></li>

                                                        </ul>
                                                    </div><!-- .restbeef_contact_info -->
                                                    <div class="restbeef_contact_info">
                                                        <h6>Bize Ula????n</h6>
                                                        <a href="mailto:info@yildizhisar.com">{{$contact->contact_us_email_1}}</a>

                                                    @else
                                                            <h2>
                                                                <span class="restbeef_up_title">Stay in Touch</span>
                                                            </h2>
                                                            <div class="restbeef_contact_info">
                                                                <h6>SOCIAL LINKS</h6>
                                                                <ul class="restbeef_contact_socials">
                                                                    <li><a href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="{{$contact->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="{{$contact->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="{{$contact->linkedin}}"><i class="fab fa-linkedin"></i></a></li>

                                                                </ul>
                                                            </div><!-- .restbeef_contact_info -->
                                                            <div class="restbeef_contact_info">
                                                                <h6>Contact Us</h6>
                                                                <a href="mailto:info@yildizhisar.com">{{$contact->contact_us_email_1}}</a>

                                                                @endif
                                                </div><!-- .restbeef_contact_info -->
                                            </div><!-- .restbeef_contact_info_wrapper -->
                                        </div><!-- .col1-4 -->
                                    </div><!-- .row -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <!-- Contact Form -->

                                    <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
                                        <h2 class="restbeef_block_title align_center">
                                            <span class="restbeef_up_title">T??m sorular??n??z i??in</span>
                                            B??Z??MLE ??LET??????ME GE????N??Z
                                        </h2>
                                        <div class="restbeef_block_title align_center">
                                            @if(session()->has('message'))
                                                <div class="alert {{session('alert') ?? 'info'}} alert-dismissible fade show">
                                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

                                                    @if(session('alert')=="success")
                                                        @lang('static_text.form_success')
                                                    @else
                                                        @lang('static_text.form_error')
                                                    @endif
                                                </div>
                                            @endif
                                        </div>

                                        <form method="POST" class="form-horizontal" action="/add-form-web" enctype="multipart/form-data">
                                            @csrf
                                        <div class="restbeef_block_inner">
                                            <div class="row restbeef_keep_tablet_row">
                                                <div class="col-2"></div>
                                                <div class="col-8">

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="text" placeholder=@lang('static_text.firstname') name="name" required/>
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="text" placeholder=@lang('static_text.lastname') name="surname" required/>
                                                            </div>

                                                        </div><!-- .row -->
                                                    <div class="row">

                                                        <div class="col-6">
                                                            <input type="number" placeholder=@lang('static_text.phone') name="phone" required onKeyDown="limitText(this,10);"
                                                                   onKeyUp="limitText(this,10);"/>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="email" placeholder=@lang('static_text.email') name="email" required />
                                                        </div>
                                                    </div><!-- .row -->
                                                        <textarea placeholder="@lang('static_text.message')" name="message" required></textarea>
                                                        <input type="submit" value="@lang('static_text.send')"/>

                                                </div><!-- .col-8 -->
                                                <div class="col-2"></div>
                                            </div>
                                        </div>
                                        </form>
                                    </div><!-- .restbeef_block -->

                                <!-- Map Block -->

                            <!-- Map Block -->
                            <div class="restbeef_block restbeef_fullwidth">
                                <div class="restbeef_block_inner">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d751.7558758826452!2d29.05265932922161!3d41.0903330987058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caca046b576153%3A0x4fb4e8066952decb!2sY%C4%B1ld%C4%B1z%20Teknik%20%C3%9Cniversitesi%20Hisar%20Yerle%C5%9Fim%20Birimi!5e0!3m2!1str!2str!4v1634761471571!5m2!1str!2str" width="1920" height="545" style="border:0;" allowfullscreen></iframe>
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->
                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
        <script  type="text/javascript">
            function limitText(limitField, limitNum) {
                if (limitField.value.length > limitNum) {
                    limitField.value = limitField.value.substring(0, limitNum);
                }
            }


        </script>

@endsection

