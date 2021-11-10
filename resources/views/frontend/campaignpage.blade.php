@extends('frontend.layouts.master')
@section('title','Events')
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
                <span class="restbeef_up_title"></span>
                <p>{{$campaign->name_tr}}</p>
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title"></span>
                <p>{{$campaign->name_en}}</p>
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')
    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_no_sidebar">
    <div class="restbeef_tiny">

        <!-- Grid Blog -->
        <div class="restbeef_block">
            <div class="restbeef_block_inner">
                <div class="restbeef_simple_blog">

                    <div class="restbeef_blog_item">
                        <div class="restbeef_simple_blog_pf restbeef_blog_pf_standard">
                            <a href="{{$campaign->img1}}" class="restbeef_blog_pf_link">
                                <img src="{{$campaign->img1}}" alt="kampanya"/>
                            </a><!-- .restbeef_blog_pf_link -->
                        </div><!-- .restbeef_simple_blog_pf -->
                    </div><!-- .restbeef_blog_item -->

                </div><!-- .restbeef_promo_block -->
            </div><!-- .restbeef_block_inner -->
        </div><!-- .restbeef_block -->
    </div>
            </div>
        </div>

    </div>

@endsection

