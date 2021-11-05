@extends('layouts.master')

@section('title') REZERVASYON @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Düğün Davet Sayfaları @endslot
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
        <form method="POST" class="form-horizontal" action="/add-wedding" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Yeni Düğün Davet Sayfası Ekle</h4>
                <div class="row">

                    <div class="col-xl-6">


                        <div class="row mb-4">
                            <label for="name_tr" class="col-sm-3 col-form-label">Organizasyon Adı(TR)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_tr" name="name_tr" placeholder="organizasyon Adı?" autofocus required>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="main_text_tr" class="col-sm-3 col-form-label">İçerik (TR)</label>
                            <div class="col-sm-9">
                            <textarea id="main_text_tr" class="form-control" rows="5" name="main_text_tr"
                             required></textarea>
                        </div></div>

                        <div class="row mb-4">
                            <label for="img1" class="col-sm-3 col-form-label">Header Resmi (1800x1200 ve katları şeklinde olmalıdır)</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="img1" name="img1" autofous required>

                            </div>
                        </div>



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="formCheck2">
                                Aktif
                            </label>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Yeni Sayfa Ekle</button>
                                </div>
                            </div>
                        </div>


                        <!-- end card -->
                    </div>

                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="row mb-4">
                            <label for="name_en" class="col-sm-3 col-form-label">Organizasyon Adı(EN)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_en" name="name_en" placeholder="Organizasyon Adı?" autofocus required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="main_text_en" class="col-sm-3 col-form-label">İçerik (TR)</label>
                            <div class="col-sm-9">
                            <textarea id="main_text_en" class="form-control" rows="5" name="main_text_en" required></textarea>
                            </div></div>

                    </div>
                    <!-- end card body -->

                    <!-- end col -->
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Düğün Davet Organizasyonları</h4>
                    <p class="card-title-desc">Düğün Davet menüsü altında yeralan organizasyonları bu tablodan inceleyebilirsiniz.
                    </p>

                    <div class="table-responsive">

                    <table id="today_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Adı (TR)</th>
                            <th>Adı (EN)</th>
                            <th>İçerik (TR)</th>
                            <th>İçerik (EN)</th>
                            <th>Header Resim</th>
                            <th>Aktif/Pasif</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($weddings->count()==0)
                            <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                            @else

                        @foreach($weddings as $key=>$wedding)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$wedding->name_tr}}</td>
                                <td>{{$wedding->name_en}}</td>
                                <td>{{$wedding->main_text_tr}}</td>
                                <td>{{$wedding->main_text_en}}</td>
                                @if(isset($wedding->url))
                                <td><img src="{{url($wedding->url)}}" alt="" style="display:block;" width="100" height="70"></td>
                                @else
                                    <td></td>
                                    @endif
                                <td>{{$wedding->is_active==1?"Aktif":"Pasif"}}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">

                                        <li class="list-inline-item px-1">
                                            <a href="{{route('wedding.edit',$wedding->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        @endforeach

                            @endif

                        </tbody>

                    </table>



                </div></div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->
    <div class="d-flex justify-content-center"></div>


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
