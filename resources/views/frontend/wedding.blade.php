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
                <span class="restbeef_up_title">En güzel anılar burda başlar</span>
                DÜĞÜN ORGANİZASYONU
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">The most beautiful moments start here</span>
                WEDDING
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
                                 data-margin="-100px 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <div class="restbeef_content_box02 align_center">
                                        @if(app()->getLocale() == "tr")

                                            <p>
                                                Bazı anların tekrarı yoktur… Eşinizle hayatınızı birleştirdiğiniz düğün gününüz ise biricik ve sadece size özel olmalıdır. Bu yüzden hayallerinizi gerçekleştirebilmek, sizlere ve konuklarınıza unutulmaz bir deneyim yaşatmak için hem biz hem de eşsiz Boğaz manzaramız her daim hazır…
                                            </p>

                                @else

                                       <p>
                                           Some moments cannot be repeated… Your wedding day, when you unite your life with your spouse, should be unique and special only to you. That's why we and our unique Bosphorus view are always ready to make your dreams come true and to give you and your guests an unforgettable experience...
                                       </p>
                                @endif
                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 0 0">
                                @if(app()->getLocale() == "tr")
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title"></span>
                                        FİYAT TEKLİFİ ALIN!
                                    </h2>
                                @else
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title"></span>
                                        GET AN OFFER!
                                    </h2>
                                @endif



                                <!-- Contact Form -->
                                <form method="POST" class="form-horizontal" action="/add-form-web" enctype="multipart/form-data">
                                    @csrf
                                    <div class="restbeef_block restbeef_js_margin" data-margin="0 0 0 0">
                                        <div class="restbeef_block_inner">
                                            <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="date" data-placeholder="@lang('static_text.date')" name="res_date" min="<?= date('Y-m-d'); ?>"/>
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <select name="time">
                                                            <option value="" selected>@lang('static_text.time')</option>
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
                                                        </select>
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="number"  placeholder="@lang('static_text.guest_number')" name="guest_number" required />
                                                    </div><!-- .col-4 -->
                                                </div><!-- .row -->
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" placeholder="@lang('static_text.name')" name="name" required />
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="email" placeholder="@lang('static_text.email')" name="email"/>
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="number" placeholder="@lang('static_text.phone')" name="phone" required onKeyDown="limitText(this,10);"
                                                               onKeyUp="limitText(this,10);" />
                                                    </div><!-- .col-4 -->
                                                </div><!-- .row -->
                                                <textarea placeholder="@lang('static_text.message')" name="message"></textarea>
                                                <input type="submit" value="@lang('static_text.send')" />
                                            </form>
                                        </div>
                                    </div><!-- .restbeef_block -->

                                </form>


                            </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>
@endsection

