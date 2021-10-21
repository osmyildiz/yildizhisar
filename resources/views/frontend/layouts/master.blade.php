<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @if(app()->getLocale() == "tr")
        <title>Yıldız Hisar Sosyal Tesisleri</title>
    @else
        <title>Yıldız Hisar Restaurant</title>
    @endif
    <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/hisar_icon.png">
    @include('frontend.layouts.head')
    @yield('css')

</head>
<body>
<div class="restbeef_site_wrapper fadeOnLoad">


        @include('frontend.layouts.header')

        @yield('slider')
    </div><!-- .restbeef_header_wrapper -->
    <!-- Header -->

    <!-- Content -->

        @yield('content')
<!-- Footer Widgets -->
    @include('frontend.layouts.footer')

</div><!-- .restbeef_site_wrapper -->

<!-- JS Files -->
@include('frontend.layouts.script')
@yield('script')
</body>
</html>
