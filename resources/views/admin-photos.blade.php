@extends('layouts.master')

@section('title') MENÜ @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Galeri Sayfası @endslot
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
    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Resim Ekle</h4>
                    @if($data==0)
                        <p>Henüz bir kategori yok. Önce bir kategori ekleyiniz.</p>
                    @else
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/add-photo">
                    @csrf

                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Kategori</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="category" required>
                                    <option value="0" selected>Kategori Seçiniz</option>
                                    @foreach($kategori_all as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->name_tr}}</option>
                                    @endforeach
                                </select>

                            </div>



                        </div>
                        <div>

                            <input required type="file" class="form-control" name="image[]" id="images" multiple="multiple" >
                        </div>
                        <p>Maximum 2MB resim kullanınız. Resimlerin büyük olması web sitesinin açılma hızını yavaşlatır.</p>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Resim Ekle</button>
                        </div>

                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Kategori Ekle</h4>
                    <form method="POST" class="form-horizontal" action="/add-photo_category" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="name_tr" class="col-md-3 col-form-label">Kategori Adı(TR)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       placeholder="Adı?"     id="name_tr" name="name_tr" required>
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name_en" class="col-md-3 col-form-label">Kategori Adı(EN)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       placeholder="Adı?"     id="name_en" name="name_en" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="img1">Kapak Resmi</label>
                            <div class="media">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="category_img" name="category_img">

                                </div>
                            </div>


                        </div>


                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Kategori Ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Kategoriler</h4>
                    <p class="card-title-desc">Tüm kategorileri bu tablodan inceleyebilirsiniz.
                    </p>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Adı(TR)</th>
                                <th>Kategori Adı(EN)</th>
                                <th>Kapak Resmi</th>
                                <th>Düzenle/Sil</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($data==0)
                                <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                            @else

                                @foreach($kategori_all as $key=>$kategori)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$kategori->name_tr}}</td>
                                        <td>{{$kategori->name_en}}</td>
                                        <td><img src="{{url($kategori->kapak_resmi)}}" alt=""
                                                 style="display:block;" width="100" height="70"></td>

                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photocategory.edit',$kategori->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photocategory.delete',$kategori->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
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

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Resimler</h4>
                    <p class="card-title-desc">Tüm menüleri bu tablodan inceleyebilirsiniz.
                    </p>
                    <form method="POST" class="form-horizontal" onsubmit="return submitForm()" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="mb-4 row">
                                    <label for="time" class="col-md-3 col-form-label">Kategori</label>
                                    @if($data==0)
                                        <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                                    @else

                                    <div class="col-sm-9">
                                        <select id="select-action" class="form-select" name="action">
                                            <option value="{{$kategori1->id}}" selected>{{$kategori1->name_tr}}</option>
                                            @foreach($kategori_all as $kategori)
                                                @if($kategori->id !=$kategori1->id)
                                                <option value="{{$kategori->id}}">{{$kategori->name_tr}}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                @if($photo_all->count()!=0)

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">


                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Getir</button>
                                        </div>
                                    </div>
                                </div>
                                @endif



                                <!-- end card -->
                            </div>
                            <!-- end col -->


                        </div>
                </div>
                </form>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Adı(TR)</th>
                                <th>Kategori Adı(EN)</th>
                                <th>Url</th>
                                <th>Aktif/Pasif</th>
                                <th>Düzenle/Sil</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($photo_all->count()==0)
                                <td colspan="8">Bugüne ait bir kayıt bulunamadı.</td>
                            @else

                                @foreach($photo_all as $key=>$photo)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$photo->name_tr}}</td>
                                        <td>{{$photo->name_en}}</td>
                                        <td>{{$photo->url}}</td>
                                        <td><img src="{{url($photo->url)}}" alt=""
                                                 style="display:block;" width="100" height="70"></td>
                                        <td>{{$photo->is_active==1?"Aktif":"Pasif"}}</td>



                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photo.edit',$photo->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photo.delete',$photo->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                            </tbody>

                        </table>
                        {{$photo_all->links("pagination::bootstrap-4")}}


                        @endif

                    </div></div>



            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->
    <div class="d-flex justify-content-center"></div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
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
    <script type="text/javascript">

        function submitForm() {

            var selectedOption = $('#select-action').val();
            var url = "/admin-photos/"+selectedOption;

            location.href=url;
            return false;
        }
    </script>


@endsection
