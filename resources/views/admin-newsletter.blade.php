@extends('layouts.master')

@section('title') E-BÜLTEN @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') E-BÜLTEN @endslot
    @endcomponent



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">E-Bülten Kayıtları</h4>
                    <p class="card-title-desc">Gelen tüm e-bülten taleplerini bu tablodan inceleyebilirsiniz.
                    </p>

                    <div class="table-responsive">

                    <table id="today_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Tarih</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($all_newsletter->count()==0)
                            <td colspan="8">Henüz gönderilmiş bir form yok.</td>
                            @else

                        @foreach($all_newsletter as $key=>$form)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$form->email}}</td>
                                <td>{{$form->created_at}}</td>
                            </tr>
                        @endforeach

                            @endif

                        </tbody>

                    </table>
                    {{$all_newsletter->links("pagination::bootstrap-4")}}




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
