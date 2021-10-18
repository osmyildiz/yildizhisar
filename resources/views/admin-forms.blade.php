@extends('layouts.master')

@section('title') REZERVASYON @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') İletişim Formları @endslot
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



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">İletişim Formları</h4>
                    <p class="card-title-desc">Gelen tüm mesajları bu tablodan inceleyebilirsiniz.
                    </p>

                    <div class="table-responsive">

                    <table id="today_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tarih</th>
                            <th>Ad Soyad</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($all_forms->count()==0)
                            <td colspan="8">Henüz gönderilmiş bir form yok.</td>
                            @else

                        @foreach($all_forms as $key=>$form)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$form->created_at}}</td>
                                <td>{{$form->name." ".$form->surname}}</td>
                                <td>{{$form->phone}}</td>
                                <td>{{$form->email}}</td>
                                <td>{{$form->message}}</td>
                            </tr>
                        @endforeach

                            @endif

                        </tbody>

                    </table>
                    {{$all_forms->links("pagination::bootstrap-4")}}




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

@endsection
