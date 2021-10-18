@extends('frontend.layouts.master')
@section('title','Rezervasyon')



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
    <style>

        body > div > div.restbeef_header_wrapper.restbeef_js_bg_image.restbeef_height100 > div > h1 {
            font-size: 75px;
        }

        .restbeef_header_description {
            font-size: 40px;
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
                <span class="restbeef_up_title">En güzel anlar için</span>
                Rezervasyon yaptırın
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Take Your Place</span>
                Table reservation
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_site_wrapper fadeOnLoad">

        <!-- Header -->

        <!-- Content -->
        <div class="restbeef_main_wrapper restbeef_no_bottom_padding">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">

                    <!-- Content Inner -->

                    <div class="restbeef_content">
                        <div class="restbeef_tiny">

                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 80px 0">
                                <div class="row">
                                    <div class="col-3"></div>

                                    <div class="col-6 align_center">
                                        @if(session()->has('message'))
                                            <div class="alert {{session('alert') ?? 'info'}} alert-dismissible fade show">
                                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

                                                @if(session('alert')=="success")
                                                    @lang('static_text.reservation_success')
                                                    @else
                                                    @lang('static_text.reservation_error')
                                                @endif
                                            </div>
                                        @endif
                                        <p>@lang('static_text.table_sentence')</p>
                                    </div><!-- .col-6 -->
                                    <div class="col-3"></div>
                                </div>
                            </div><!-- .restbeef_block -->
                            <form method="POST" class="form-horizontal" action="/add-form-web" enctype="multipart/form-data">
                                @csrf
                            <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
                                <div class="restbeef_block_inner">
                                    <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="date" data-placeholder="@lang('static_text.date')" name="res_date" min="<?= date('Y-m-d'); ?>"/>
                                            </div><!-- .col-4 -->
                                            <div class="col-4">
                                                <select name="time">
                                                    <option value="" selected>@lang('static_text.time')</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
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
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
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
                                        <input type="submit" value="@lang('static_text.reservation_submit_text')" />
                                    </form>
                                </div>
                            </div><!-- .restbeef_block -->

                            </form>
                            <!-- Map Block -->
                            <div class="restbeef_block restbeef_fullwidth">
                                <div class="restbeef_block_inner">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.030937094061!2d29.052250715214413!3d41.09017067929267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caca06b29c9be7%3A0x1c410cdfc7d4fdf4!2sYildiz%20Technical%20University%20Hisar%20Facilities!5e0!3m2!1sen!2str!4v1634040789774!5m2!1sen!2str" width="1920" height="545" style="border:0;" allowfullscreen></iframe>
                                      </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->

                        </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

        <!-- Footer Widgets -->

    <script>
        $(".menu-bnt").click(function () {
            $(".bottom-menu").addClass("d-none-x").removeClass("d-flex-x")
            $(".menu-bnt").removeClass("menuactive")
            let id = $(this).attr('id');
            if ($("#bottom-menu" + id).hasClass('d-none')) {
                $("#bottom-menu" + id).removeClass("d-none-x").addClass("d-flex-x")
                $("#"+ id).addClass("menuactive");
            } else {
                $("#bottom-menu" + id).addClass("d-none-x").removeClass("d-flex-x")
            }
        })
    </script>
    <script src="{{ URL::asset('/js/photoswipe.min.js') }}"></script>
    <script src="{{ URL::asset('/js/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ URL::asset('/js/theme.js') }}"></script>

        <script language="javascript" type="text/javascript">
            function limitText(limitField, limitNum) {
                if (limitField.value.length > limitNum) {
                    limitField.value = limitField.value.substring(0, limitNum);
                }
            }


        </script>
        <script>
            $(document).ready(function(){

                $('.alert-success').fadeIn().delay(3000).fadeOut('slow');
                $('.alert-danger').fadeIn().delay(3000).fadeOut('slow');
            });
        </script>

@endsection

