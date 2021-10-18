@extends('layouts.master')

@section('title') HAKKIMIZDA @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Hakkımızda Sayfası @endslot
    @endcomponent
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
                <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ Session::get($msg) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
        @endforeach
    </div>

    <div class="card">
        <form method="POST" class="form-horizontal" action="/update-about-page" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Hakkımızda Sayfası Düzenle</h4>
            <p>Buradaki verileri değiştirerek hakkımızda sayfasını düzenleyebilirsiniz</p>
                <div class="row">

                    <div class="col-xl-12">


                        <div class="row mb-12">
                            <label for="message" class="col-sm-3 col-form-label">Hakkımızda Üst Bölüm Türkçe</label>
                            <div class="col-sm-9">
                            <textarea id="message" class="form-control" rows="10" name="about_first_text_tr">{{$about->about_first_text_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="message" class="col-sm-3 col-form-label">Hakkımızda Üst Bölüm İngilizce</label>
                            <div class="col-sm-9">
                            <textarea id="message" class="form-control" rows="10" name="about_first_text_en"
                                      >{{$about->about_first_text_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="message" class="col-sm-3 col-form-label">Hakkımızda Orta Bölüm Türkçe</label>
                            <div class="col-sm-9">
                            <textarea id="message" class="form-control"  rows="10" name="middle_text_tr"
                                      >{{$about->middle_text_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="message" class="col-sm-3 col-form-label">Hakkımızda Orta Bölüm İngilizce</label>
                            <div class="col-sm-9">
                            <textarea id="message" class="form-control"  rows="10" name="middle_text_en"
                                      >{{$about->middle_text_en}}</textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="avatar">1.Resim</label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($about->img1)}}" alt=""
                                         style="display:block;" width="30%" height="30%">
                                </div>
                            </div>

                            <div class="input-group">
                                <input type="file" class="form-control" id="img1" name="img1" autofous>

                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="avatar">2.Resim</label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($about->img2)}}" alt=""
                                         style="display:block;" width="30%" height="30%">
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="file" class="form-control" id="img2" name="img2" autofous>

                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($about->img3)}}" alt=""
                                         style="display:block;" width="30%" height="30%">
                                </div>
                            </div>

                            <label for="avatar">3.Resim</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="img3" name="img3" autofous>

                            </div>
                        </div>




                        <div class="row justify-content-end">
                            <div class="col-sm-12">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                </div>
                            </div>
                        </div>



                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
            </div>
        </form>
    </div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
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
