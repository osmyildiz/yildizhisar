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
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Resimler</h4>
                        <p class="card-title-desc"><code>Resimler için kategori(ler) seçiniz</code>.</p>
                        <form action="{{route('admin.galleries.index')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Kategori</label>
                                <div class="col-md-8">
                                    <select class="select2 js-example-tags form-control" style="width: 100%"
                                            multiple="multiple"
                                            data-placeholder="Seçiniz ..." name="category[]">
                                        @foreach($category as $item)
                                            <option value="{{$item->name}}">
                                                {{$item->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Kategori(ler) Getir</button>
                                </div>
                            </div>
                        </form>
                        <a href="{{route('admin.galleries.create')}}"
                           class="btn btn-primary " title="Yeni Ekle" style="float: right">
                            <i class="far fa-plus-square"></i>
                            Resim Ekle
                        </a>
                        <table id="dataable" class="table table-borderless dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Resimler</th>
                                <th></th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(count($categories) > 0)
                                @foreach($categories as $items)
                                    <tr>
                                        <td>
                                            <h5 style="color: #1a94ff"> Kategori :
                                                <span class="badge badge-soft-primary"> {{$items->name}}</span></h5>
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
                                                       class="btn btn-danger btn-sm " title="Delete">
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
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Kategoriler</th>
                                <th>
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal"> + Ekle
                                    </button>
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <!-- sample modal content -->
                                                <div id="myModal" class="modal fade" tabindex="-1"
                                                     aria-labelledby="myModalLabel" style="display: none;"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                <h4>Kategori Ekle</h4>
                                                                <input type="text" class="form-control"
                                                                       id="new-cat"><br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-secondary waves-effect"
                                                                        data-bs-dismiss="modal">Kapat
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-primary waves-effect waves-light"
                                                                        onclick="addCategory()">Ekle
                                                                </button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div> <!-- end preview-->

                                        </div>
                                        <!-- end card body -->
                                    </div>
                                </th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(count($category) > 0)
                                @foreach($category as $item)
                                    <tr id="category-{{$item->id}}">
                                        <td>
                                            <input type="text" value="{{$item->name}}" id="cat-{{$item->id}}"
                                                   class="form-control form-control-sm" disabled="true"
                                            >
                                            <a href="#" onclick="updateCategory({{$item->id}})" id="btn-{{$item->id}}"
                                               style="display: none">Onayla</a>
                                        </td>
                                        <td>
                                            <a href="#" onclick="editCategory({{$item->id}})">Düzenle</a> /
                                            <a href="#" onclick="deleteCategory({{$item->id}})">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
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
                    if (data.success) {
                        $('#image-' + id).remove();
                    }
                });

        }

        function deleteCategory(id) {
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                method: "POST",
                url: "{{route('admin.category.delete')}}",
                data: {id: id, _token: _token}
            })
                .done(function (data) {
                    if (data.success) {
                        $('#category-' + id).remove();
                    }
                });

        }

        function editCategory(id) {
            $('#cat-' + id).removeAttr('disabled')
            $('#btn-' + id).css('display', 'inline')
        }

        function updateCategory(id) {
            const name = $('#cat-' + id).val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                method: "POST",
                url: "{{route('admin.category.update')}}",
                data: {id: id, name: name, _token: _token}
            })
                .done(function (data) {
                    if (data.success) {
                        $('#cat-' + id).prop('disabled', true)
                        $('#btn-' + id).css('display', 'none')
                    }
                });
        }

        function addCategory() {
            const name = $('#new-cat').val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                method: "POST",
                url: "{{route('admin.category.add')}}",
                data: {name: name, _token: _token}
            })
                .done(function (data) {
                    if (data.success) {
                        location.reload();
                    }
                });
        }

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>




    {{--<script src="{{asset('assets/js/app.js')}}"></script>--}}
@endsection


