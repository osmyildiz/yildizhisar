@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('css')
    <link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection


@section('content')

    <div class="container-fluid">

        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <!-- start page title -->

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Galeri</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Resimler</h4>
                        <p class="card-title-desc"> <code>Resimler için kategori(ler) seçiniz</code>.
                        </p>

                        <form action="{{route('admin.galleries.index')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Kategori</label>
                                <div class="col-md-8">
                                    <select class="select2 js-example-tags form-control" style="width: 100%"
                                            multiple="multiple"
                                            data-placeholder="Choose ..." name="category[]">
                                        @foreach($category as $item)
                                            <option value="{{$item->name}}">
                                                {{$item->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success">button</button>
                                </div>
                            </div>
                        </form>

                        <table id="dataable" class="table table-borderless dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Resimler</th>
                                <th><a href="{{route('admin.galleries.create')}}"
                                       class="btn btn-outline-secondary btn-sm " title="Yeni Ekle">
                                        <i class="far fa-plus-square"></i>
                                        Ekle
                                    </a></th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(count($categories) > 0)
                                @foreach($categories as $items)
                                    <tr>
                                        <td>
                                            <h1 style="color: #1a94ff"> Kategori : {{$items->name}}</h1>
                                        </td>
                                    </tr>
                                    @if(isset($items->images))
                                        @foreach($items->images as $item)

                                            <tr class="border-1" id="image-{{$item->id}}">
                                                <td>
                                                    <img src="{{asset($item->image)}}"
                                                         class="img-fluid " style="height: 100px" alt="">
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       onclick="deleteImage({{$item->id}})"
                                                       class="btn btn-outline-secondary btn-sm " title="Delete">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <!-- end page title -->

    </div> <!-- container-fluid -->


@endsection

@section('script')

    <script src="{{asset('assets/libs/select2/select2.min.js') }}"></script>

    <script>
        $(".js-example-tags").select2({
            tags: true
        });

        function deleteImage(id) {
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                method: "DELETE",
                url: "{{route('admin.galleries.destroy',1)}}",
                data: {id: id, _token: _token}
            })
                .done(function (data) {
                    if(data.success){
                        $('#image-'+id).remove();
                    }
                });

        }

    </script>




    {{--<script src="{{asset('assets/js/app.js')}}"></script>--}}
@endsection


