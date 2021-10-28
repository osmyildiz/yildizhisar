@extends('layouts.master')

@section('title') ETKİNLİK @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Fotoğraf Düzenleme Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/update-photo/{{$photo->id}}" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Resim Düzenle</h4>
                <div class="row">

                    <div class="mb-4 row">
                        <label for="time" class="col-md-3 col-form-label">Kategori</label>

                        <div class="col-sm-9">
                            <select id="time" class="form-select" name="category">
                                <option  value="{{$kategori->id}}" selected>{{$kategori->name_tr}}</option>
                                @foreach($kategori_all as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->name_tr}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>



                        <div class="mb-3">
                            <label for="img1"></label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($photo->url)}}" alt=""
                                         style="display:block;" width="100" height="70">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="img1" name="img1">

                                </div>
                            </div>


                        </div>



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  {{$photo->is_active ==1?"checked":""}}>
                            <label class="form-check-label" for="is_active">
                                Aktif/Pasif
                            </label>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Güncelle</button>
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
