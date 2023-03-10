@extends('layouts.master')

@section('title') ETKİNLİK @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Etkinlik Düzenleme Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/edit-event/{{$event->id}}" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Etkinlik Düzenle</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="row mb-4">
                            <label for="name_tr" class="col-sm-3 col-form-label">Etkinlik Adı (TR)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_tr" value="{{$event->name_tr}}" name="name_tr"  autofocus required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name_en" class="col-sm-3 col-form-label">Etkinlik Adı (EN)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_en" value="{{$event->name_en}}" name="name_en"  autofocus required>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="main_text_tr" class="col-sm-3 col-form-label">İçerik (TR)</label>
                            <div class="col-sm-9">
                            <textarea id="main_text_tr" class="form-control" rows="5" name="main_text_tr"
                                      >{{$event->main_text_tr}}</textarea>
                        </div></div>
                        <div class="row mb-4">
                            <label for="main_text_en" class="col-sm-3 col-form-label">İçerik (EN)</label>
                            <div class="col-sm-9">
                            <textarea id="main_text_en" class="form-control" rows="5" name="main_text_en"
                            >{{$event->main_text_en}}</textarea>
                            </div></div>

                        <div class="row mb-4">
                            <label for="name_en" class="col-sm-3 col-form-label">Sayfadaki Sırası</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="priority" value="{{$event->priority}}" name="priority" required>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="img1">Etkinlik Resmi (570x380 ve katları şeklinde olmalıdır)</label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($event->img1)}}" alt=""
                                         style="display:block;" width="100" height="70">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="img1" name="img1" autofous>

                                </div>
                            </div>


                        </div>



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  {{$event->is_active ==1?"checked":""}}>
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
