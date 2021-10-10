<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title',config('app.name'))</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.layouts.head')
    @yield('css')

</head>
<body>
<div class="restbeef_site_wrapper fadeOnLoad">

    <div class="restbeef_header_wrapper restbeef_js_bg_image restbeef_height100"
         data-background="img/yildiz-hisar-sariyer-1.jpg">
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
