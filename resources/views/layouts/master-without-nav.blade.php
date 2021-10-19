<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        @if(app()->getLocale() == "tr")
            <title>Yıldız Hisar Sosyal Tesisleri</title>
        @else
            <title>Yıldız Hisar Restaurant</title>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Yıldız Hisar Restaurant" name="description" />
        <meta content="Düğün, Davet, Nişan, Nikah, Kına" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/img/hisar_icon.png">
        @include('layouts.head-css')
  </head>

    @yield('body')
    
    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>