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
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title"><!--En güzel anılar burda başlar--></span>
                {{$wedding->name_tr}}
            </h1>

        @else
            <h1>
                <span class="restbeef_up_title"><!--En güzel anılar burda başlar--></span>
                {{$wedding->name_en}}
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
                                                {{$wedding->main_text_tr}}
                                            </p>

                                @else

                                       <p>
                                           {{$wedding->main_text_en}}

                                           </p>
                                @endif
                                    </div><!-- .restbeef_content_box -->
                                </div><!-- .restbeef_block_inner -->
                            </div><!-- .restbeef_block -->


                            <div class="restbeef_block restbeef_js_margin restbeef_intro_block" data-margin="0 0 0 0">
                                @if(app()->getLocale() == "tr")
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title"></span>
                                        FİYAT TEKLİFİ ALIN
                                    </h2>
                                @else
                                    <h2 class="restbeef_block_title align_center">
                                        <span class="restbeef_up_title"></span>
                                        GET AN OFFER
                                    </h2>
                                @endif
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



                                <!-- Contact Form -->
                                <form method="POST" class="form-horizontal" action="/send-offer" enctype="multipart/form-data">
                                    @csrf
                                    <div class="restbeef_block restbeef_js_margin" data-margin="0 0 0 0">
                                        <div class="restbeef_block_inner">
                                                <input type="hidden" id="offer_name" name="offer_name" value="{{$wedding->name_tr}}">

                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" placeholder="@lang('static_text.firstname')" name="name" required />
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="text" placeholder="@lang('static_text.lastname')" name="surname" required />
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="email" placeholder="@lang('static_text.email')" name="email" required />
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="number" placeholder="@lang('static_text.phone')" name="phone" required onKeyDown="limitText(this,10);"
                                                               onKeyUp="limitText(this,10);" />
                                                    </div><!-- .col-4 -->
                                                    <div class="col-4">
                                                        <input type="date" data-placeholder="@lang('static_text.date1')" name="res_date" min="<?= date('Y-m-d'); ?>" required/>
                                                    </div><!-- .col-4 -->
                                                <!--<div class="col-4">
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
                                                    </div> .col-4 -->
                                                    <div class="col-4">
                                                        <input type="number"  placeholder="@lang('static_text.guest_number')" name="guest_number" required />
                                                    </div><!-- .col-4 -->
                                                </div><!-- .row -->
                                                <div class="row">


                                                </div><!-- .row -->
                                                <textarea placeholder="@lang('static_text.message')" name="message" required ></textarea>
                                                <input type="submit" value="@lang('static_text.send')" />

                                        </div>
                                    </div><!-- .restbeef_block -->

                                </form>


                            </div><!-- .restbeef_tiny -->
                    </div><!-- .restbeef_content -->

                </div><!-- .restbeef_content_wrapper -->
            </div><!-- .restbeef_container -->
        </div><!-- .restbeef_main_wrapper -->

    </div>

            <script language="javascript" type="text/javascript">
                function limitText(limitField, limitNum) {
                    if (limitField.value.length > limitNum) {
                        limitField.value = limitField.value.substring(0, limitNum);
                    }
                }


        </script>

@endsection

