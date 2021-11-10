@extends('frontend.layouts.master')
@section('title','Events')

@section('slider')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding: 50px 62px 0px 62px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0, 0.8);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
            padding: 0 0 0 0;
            width: 100%;
            max-width: 80%;
            border: 5px solid;
            border-color: white;
            padding: 10px 10px 5px 10px;
        }

        .slide {
            display: none;
            text-align: center;
        }

        .image-slide {
            width: 70%;
            max-width: 70%;
        }

        .modal-preview {
            width: 100%;
        }

        .dots {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        img.preview,
        img.modal-preview {
            opacity: 1;
        }

        img.active {
            opacity: 0.6;
        }

        .preview:hover,
        .modal-preview:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.5), 0 9px 20px 0 rgba(0, 0, 0, 1);
        }
        /* Content */

        .content {
            border: 5px solid;
            border-color: black;
            background-color: white;
            padding: 10px;
        }

        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .previous,
        .next {
            cursor: pointer;
            position: absolute;
            top: 60%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 2%;
            border-radius: 3px 0 0 3px;
        }

        .previous:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @media screen and (max-width: 1050px) {
            .col {
                width: 50%;
            }
            .modal {
                padding: 30px 32px 0px 32px;
            }
            .modal-content {
                margin-top: 100px;
                max-width: 800px;
            }
        }

        @media screen and (max-width: 700px) {
            .modal {
                padding: 30px 10px 0px 10px;
            }
        }


    </style>
    <div class="restbeef_header_title restbeef_container">
        @if(app()->getLocale() == "tr")

            <h1>
                <span class="restbeef_up_title">Bize daha yakından bakın.</span>
                Galeri
            </h1>
        @else
            <h1>
                <span class="restbeef_up_title">Take a Closer Look at Us</span>
                GALLERY
            </h1>
        @endif

    </div><!-- .restbeef_header_title -->
@endsection
@section('content')

    <div class="restbeef_site_wrapper fadeOnLoad">

        <!-- Content -->
        <div class="restbeef_main_wrapper">
            <div class="restbeef_container">
                <div class="restbeef_content_wrapper restbeef_no_sidebar">


                    <!-- Content Inner -->
                    @if($data==0)

                        @if(app()->getLocale() == "tr")
                                    <div class="restbeef_recent_post card-width ">
                                        <div class="restbeef_recent_post_content ">
                                            <h5></h5>
                                            <h5>Yeni fotoğraflarımız çok yakında eklenecektir.</h5>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div>
                        @else
                                    <div class="restbeef_recent_post card-width ">
                                        <div class="restbeef_recent_post_content ">
                                            <h5></h5>
                                            <h5>New photos will be added soon. </h5>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div>
                        @endif


                    @else
                    <div class="restbeef_content">
                        <div class="restbeef_tiny">
                            <div class="restbeef_single_post_pf restbeef_blog_pf_gallery" >
                                <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="8726">

                                    @foreach($photos as $key=>$photo)
                                    <div class="restbeef_grig_gallery_item">

                                            <img id="myImg" src="{{$photo->url}}" class="img-fluid" onclick="openLightbox();toSlide({{$key+1}})"
                                                 alt="Post Image {{$key}}"
                                                 style="width: 400px; height: 400px; object-fit: cover; object-position: 50% 0;"/>

                                    </div><!-- .restbeef_grig_gallery_item -->
                                    @endforeach

                                </div><!-- .restbeef_grig_gallery_wrapper -->
                            </div><!-- .restbeef_single_post_pf -->

                        </div><!-- .restbeef_tiny -->
                        <div id="Lightbox" class="modal">
                            <span class="close pointer" onclick="closeLightbox()"></span>
                            <div class="modal-content">
                                @foreach($photos as $key=>$photo)
                                    <div class="slide">
                                        <img src="{{$photo->url}}" class="image-slide" style="width: 100%;height: 50%" />
                                    </div>
                                @endforeach
                                <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
                                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                            </div>
                    </div><!-- .restbeef_content -->
                    @endif
                </div><!-- .restbeef_content_wrapper -->


            </div><!-- .restbeef_container -->
        </div>

    </div>

    <script>
        let slideIndex = 1;
        showSlide(slideIndex);

        function openLightbox() {
            document.getElementById('Lightbox').style.display = 'block';
        };

        function closeLightbox() {
            document.getElementById('Lightbox').style.display = 'none';
        };

        function changeSlide(n) {
            showSlide(slideIndex += n);
        };

        function toSlide(n) {
            showSlide(slideIndex = n);
        };

        function showSlide(n) {
            const slides = document.getElementsByClassName('slide');
            let modalPreviews = document.getElementsByClassName('modal-preview');

            if (n > slides.length) {
                slideIndex = 1;
            };

            if (n < 1) {
                slideIndex = slides.length;
            };

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            };

            for (let i = 0; i < modalPreviews.length; i++) {
                modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
            };

            slides[slideIndex - 1].style.display = 'block';
            modalPreviews[slideIndex - 1].className += ' active';
        };
    </script>
@endsection

