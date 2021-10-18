@extends('layouts.master')

@section('title') MENU @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Menu Güncelleme Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/update-menu/{{$res->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Menüyü Güncelle</h4>
                <div class="row">

                    <div class="col-xl-6">



                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Kategori</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="category">
                                    <option selected>{{$res->category}}</option>
                                    <option>Çorbalar</option>
                                    <option>Ara Sıcaklar</option>
                                    <option>Ana Yemekler</option>
                                    <option>Tatlılar</option>
                                    <option>İçecekler</option>
                                </select>

                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name" class="col-md-3 col-form-label">Ad</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       value="{{$res->name}}"     id="name" name="name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="guest_number" class="col-sm-3 col-form-label">Fiyat</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="price"
                                       name="price" value="{{$res->price}}" autofocus required>

                                @error('guest_number')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                                <div class="alert-message" id="error" name="error"></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="message" class="col-sm-3 col-form-label">Açıklama</label>
                            <div class="col-sm-9">
                            <textarea id="description" class="form-control"  rows="4" name="description">{{$res->description}}</textarea>
                            </div></div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- end card -->
                    </div>




                    <!-- end col -->
                </div>
            </div>
        </form>
    </div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('/assets/js/pages/datatables.init.js') }}"></script>
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
