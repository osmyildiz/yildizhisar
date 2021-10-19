<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @if(app()->getLocale() == "tr")
        <title>Yıldız Hisar Sosyal Tesisleri</title>
    @else
        <title>Yıldız Hisar Restaurant</title>
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Yıldız Hisar Sosyal Tesisleri" name="description" />
    <meta content="Yıldız Hisar" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/img/hisar_icon.png">
    @include('layouts.head-css')
</head>
@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
    @include('layouts.topbar')
    @include('layouts.sidebar1')



        <!--  -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
</body>

</html>
