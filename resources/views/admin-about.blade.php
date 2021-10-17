@extends('layouts.master')

@section('title') HAKKIMIZDA @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Hakkımızda Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/add-reservations" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Yeni Rezervasyon Ekle</h4>
                <div class="row">

                    <div class="col-xl-6">


                        <div class="mb-4 row">
                            <label for="res_date" class="col-md-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="{{date("Y-m-d")}}"
                                       id="res_date" name="res_date">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Saat</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="time">
                                    <option selected>Saat Seçiniz</option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                    <option>12:30</option>
                                    <option>13:00</option>
                                    <option>13:30</option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                    <option>18:30</option>
                                    <option>19:00</option>
                                    <option>19:30</option>
                                    <option>20:00</option>
                                    <option>20:30</option>
                                    <option>21:00</option>
                                    <option>21:30</option>
                                    <option>22:00</option>
                                    <option>22:30</option>
                                    <option>23:00</option>
                                    <option>23:30</option>

                                </select>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="guest_number" class="col-sm-3 col-form-label">Kişi Sayısı</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('guest_number') is-invalid @enderror" id="guest_number"
                                value="{{ old('guest_number') }}" name="guest_number" placeholder="Kişi Sayısı?" autofocus required>

                                @error('guest_number')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                                <div class="alert-message" id="error" name="error"></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="message" class="col-sm-3 col-form-label">Not</label>
                            <div class="col-sm-9">
                            <textarea id="message" class="form-control" maxlength="225" rows="3" name="message"
                                      placeholder="Maksimum 255 karakter"></textarea>
                        </div></div>


                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">Ad Soyad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                       value="{{ old('name') }}" name="name" placeholder="Ad Soyad?" autofocus required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                                <div class="alert-message" id="error" name="error"></div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="phone" class="col-sm-3 col-form-label">Telefon</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                       onKeyDown="limitText(this,10);"
                                       onKeyUp="limitText(this,10);"
                                       value="{{ old('phone') }}" name="phone" placeholder="Telefon?" autofocus required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                                <div class="alert-message" id="error" name="error"></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email?">
                            </div>
                        </div>





                        <div class="row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Rezerve Et</button>
                                </div>
                            </div>
                        </div>

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

                    <h4 class="card-title">Rezervasyonlar</h4>
                    <p class="card-title-desc">Bugüne ait rezervasyonları bu tablodan inceleyebilirsiniz.
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>

                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Kişi Sayısı</th>
                            <th>Ad Soyad</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($res_today as $res)
                            <tr>

                                <td>{{$res->res_date}}</td>
                                <td>{{$res->time}}</td>
                                <td>{{$res->guest_number}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->message}}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">

                                        <li class="list-inline-item px-1">
                                            <a href="{{route('reservation.edit',$res->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item px-1">
                                            <a href="{{route('reservation.delete',$res->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tüm Rezervasyonlar</h4>
                    <p class="card-title-desc">Tarih sıralı olarak gelir.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>

                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Kişi Sayısı</th>
                            <th>Ad Soyad</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($res_all as $res)
                            <tr>

                                <td>{{$res->res_date}}</td>
                                <td>{{$res->time}}</td>
                                <td>{{$res->guest_number}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->message}}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">

                                        <li class="list-inline-item px-1">
                                            <a href="{{route('reservation.edit',$res->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item px-1">
                                            <a href="{{route('reservation.delete',$res->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

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
