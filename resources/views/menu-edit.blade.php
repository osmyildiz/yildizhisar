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
                                    @foreach($kategori_all as $kategori)
                                        <option value="{{$kategori->id}}" {{$kategori->id == $kategori1->id?"selected":""}}>{{$kategori->name_tr}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name_tr" class="col-md-3 col-form-label">Ad(TR)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       value="{{$res->name_tr}}"     id="name_tr" autofocus name="name_tr">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name_en" class="col-md-3 col-form-label">Ad(EN)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       value="{{$res->name_en}}"     id="name_en" name="name_en">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price_tl" class="col-sm-3 col-form-label">Fiyat(TL)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="price_tl"
                                       name="price_tl" value="{{$res->price_tl}}" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price_usd" class="col-sm-3 col-form-label">Fiyat(USD)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="price_usd"
                                       name="price_usd" value="{{$res->price_usd}}" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description_tr" class="col-sm-3 col-form-label">Açıklama(TR)</label>
                            <div class="col-sm-9">
                            <textarea id="description_tr" class="form-control"  rows="4" name="description_tr">{{$res->description_tr}}</textarea>
                            </div></div>
                        <div class="row mb-4">
                            <label for="description_en" class="col-sm-3 col-form-label">Açıklama(EN)</label>
                            <div class="col-sm-9">
                                <textarea id="description_en" class="form-control"  rows="4" name="description_en">{{$res->description_en}}</textarea>
                            </div></div>
                        <div class="row mb-4">
                            <label for="priority" class="col-sm-3 col-form-label">Sıralama</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="priority"
                                       name="priority" value="{{$res->priority}}" required>

                            </div>
                        </div>
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
