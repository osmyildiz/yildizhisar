<!-- Footer Widgets -->
<div class="restbeef_footer_widgets" style="background-color: #AB945E">
    <!-- Back to Top Button
    <a href="#" class="restbeef_back_to_top"><i class="fa fa-chevron-up"></i></a> -->
    <div class="restbeef_container">
        <div class="row">

            <div class="col-4 align_center">
                <div class="widget widget_text">
                    <h2><span class="restbeef_up_title"> @lang('static_text.about1')</span></h2>
                    <div class="textwidget">
                        <p>Rumeli Hisarı’nda Fatih Sultan Mehmet Köprüsü’nün hemen yanında yer alan, harika mimarisi ve boğaz manzarasıyla kahvaltı, öğlen ve akşam yemeklerinin yanı sıra düğün, nişan, kokteyl, mezuniyet geceleri, seminer gibi özel günlerde de hizmet vermekteyiz. </p>

                    </div><!-- .textwidget -->
                </div><!-- .widget_text -->
            </div><!-- .col-4 -->


            <div class="col-4 align_center">
                <div class="widget widget_in_touch">
                     <h3 class="restbeef_up_title">@lang('static_text.newsletter')</h3>
                    <div class="restbeef_in_touch">
                        <div class="restbeef_block_title align_center">
                            @if(session()->has('message'))
                                <div class="alert {{session('alert') ?? 'info'}} alert-dismissible fade show" >
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

                                    @if(session('alert')=="success")
                                        @if(app()->getLocale() == "tr")
                                            <p>Emailiniz kaydedildi.</p>
                                                @else
                                            <p>Your email has been saved.</p>
                                                @endif

                                    @elseif(session('alert')=="warning")
                                        @if(app()->getLocale() == "tr")
                                            <p>Bu email ile daha önce kayıt yapılmış.</p>
                                        @else
                                            <p>Already registered with this email.</p>
                                        @endif
                                    @else
                                        @if(app()->getLocale() == "tr")
                                            <p>Beklenmeyen bir hata oluştu. Lütfen tekrar deneyiniz.</p>
                                        @else
                                            <p>An unexpected error has occurred. Please try again.</p>
                                        @endif
                                    @endif
                                </div>
                            @endif
                        </div>
                        <form method="POST" class="restbeef_intouch_form" name="restbeef_intouch" action="/add-newsletter" enctype="multipart/form-data">
                            @csrf
                            <input  type="email" placeholder=@lang('static_text.email') name="email" required/>
                            <input type="submit" value=@lang('static_text.send')>
                        </form><!-- .restbeef_intouch_form -->
                        <ul class="restbeef_intouch_socials">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .restbeef_in_touch -->
                </div><!-- .widget_text -->
            </div><!-- .col-4 -->

            <div class="col-4 align_center">
                <div class="widget widget_text">
                    <h2 ><span class="restbeef_up_title">@lang('static_text.contact1')</span></h2>
                    <div class="textwidget">
                        <p>Rumeli Hisarı, Salih Bey Sk. No:6, <br> 34470 Sarıyer / İstanbul</p>
                        <p><span>Tel: </span>+90 212 287 70 45</p>
                        <p>@lang('static_text.open')</p>
                    </div><!-- .textwidget -->
                </div><!-- .widget_text -->
            </div><!-- .col-4 -->

        </div><!-- .row -->
    </div><!-- .restbeef_container -->
</div><!-- .restbeef_footer_widgets -->

<!-- Footer -->
<div class="restbeef_footer restbeef_container_wide">
    <div class="restbeef_copyright" style="font-size: 14px">
        &copy; 2021 Yıldız Hisar - Tüm Hakları Saklıdır
    </div><!-- .restbeef_copyright -->
    <div class="restbeef_copyright" style="font-size: 14px">
        <a style="font-size: 14px" href="/admin" >Gizlilik Politikası</a>

    </div><!-- .restbeef_footer_links -->
</div><!-- .restbeef_footer -->

