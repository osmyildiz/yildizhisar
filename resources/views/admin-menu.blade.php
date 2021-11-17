@extends('layouts.master')

@section('title') MENÜ @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Menü Sayfası @endslot
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
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Menü Ekle</h4>
                    <form method="POST" class="form-horizontal" action="/add-menu" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Kategori</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="category" required>
                                    <option selected>Kategori Seçiniz</option>
                                    @foreach($kategori_all as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->name_tr}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name_tr" class="col-md-3 col-form-label">Yemek İsmi (TR)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="name_tr" name="name_tr">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name_en" class="col-md-3 col-form-label">Yemek İsmi (EN)</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="name_en" name="name_en">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price_tr" class="col-sm-3 col-form-label">Fiyat(TL)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="price_tr"
                                       name="price_tr">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price_en" class="col-sm-3 col-form-label">Fiyat(USD)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="price_en"
                                       name="price_en">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description_tr" class="col-sm-3 col-form-label">Açıklama(TR)</label>
                            <div class="col-sm-9">
                            <textarea id="description_tr" class="form-control"  rows="4" name="description_tr"
                                      ></textarea>
                            </div></div>
                        <div class="row mb-4">
                            <label for="description_en" class="col-sm-3 col-form-label">Açıklama(EN)</label>
                            <div class="col-sm-9">
                            <textarea id="description_en" class="form-control"  rows="4" name="description_en"
                                      ></textarea>
                            </div></div>
                        <div class="row mb-4">
                            <label for="priority" class="col-sm-3 col-form-label">Sıralama</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="priority"
                                       name="priority" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Kategori Ekle</h4>
                    <form method="POST" class="form-horizontal" action="/add-foodtype" enctype="multipart/form-data">
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
                        <div class="mb-4 row">
                            <label for="priority" class="col-md-3 col-form-label">Kategori Sıra No</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number"
                                       placeholder="Sıra"     id="priority" name="priority" required>
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
                                <th>Sıra No</th>
                                <th>Düzenle/Sil</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($kategori_all->count()==0)
                                <td colspan="8">Bugüne ait bir kayıt bulunamadı.</td>
                            @else

                                @foreach($kategori_all as $key=>$kategori)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$kategori->name_tr}}</td>
                                        <td>{{$kategori->name_en}}</td>
                                        <td>{{$kategori->priority}}</td>

                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('foodtype.edit',$kategori->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('foodtype.delete',$kategori->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
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

                    <h4 class="card-title">Menüler</h4>
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

                                @if($menu_all->count()!=0)

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
                            <th>Adı(TR)</th>
                            <th>Adı(EN)</th>
                            <th>Kategori</th>
                            <th>Fiyat(TL)</th>
                            <th>Fiyat(USD)</th>
                            <th>Açıklama(TR)</th>
                            <th>Açıklama(EN)</th>
                            <th>Sıralama</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($menu_all->count()==0)
                            <td colspan="8">Bugüne ait bir kayıt bulunamadı.</td>
                        @else

                            @foreach($menu_all as $key=>$menu)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$menu->name_tr}}</td>
                                    <td>{{$menu->name_en}}</td>
                                    <td>{{$menu->category}}</td>
                                    <td>{{$menu->price_tl}}</td>
                                    <td>{{$menu->price_usd}}</td>
                                    <td>{{$menu->description_tr}}</td>
                                    <td>{{$menu->description_en}}</td>
                                    <td>{{$menu->priority}}</td>



                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">

                                            <li class="list-inline-item px-1">
                                                <a href="{{route('menu.edit',$menu->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item px-1">
                                                <a href="{{route('menu.delete',$menu->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                        @endif

                        </tbody>

                    </table>
                    {{$menu_all->links("pagination::bootstrap-4")}}


                    @endif

                </div></div>



        </div>

    </div>
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
    <script type="text/javascript">

        function submitForm() {

            var selectedOption = $('#select-action').val();
            var url = "/admin-menu/"+selectedOption;

            location.href=url;
            return false;
        }
    </script>
@endsection
