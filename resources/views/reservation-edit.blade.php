@extends('layouts.master')

@section('title') REZERVASYON @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Rezervasyon Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/edit-reservation/{{$res->id}}" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Yeni Rezervasyon Ekle</h4>
                <div class="row">

                    <div class="col-xl-6">


                        <div class="mb-4 row">
                            <label for="res_date" class="col-md-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="{{$res->res_date}}"
                                       id="res_date" name="res_date">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Saat</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="time">
                                    <option selected>{{$res->time}}</option>
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
                                value={{$res->guest_number}} name="guest_number"  autofocus required>

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
                                      >{{$res->message}}</textarea>
                        </div></div>


                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">Ad Soyad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                       value={{$res->name}} name="name"  autofocus required>

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
                                       name="phone" value={{$res->phone}} autofocus required>

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
                                <input type="email" class="form-control" id="email" name="email" value={{$res->email}}>
                            </div>
                        </div>





                        <div class="row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Yenile</button>
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
