@extends('layouts.master')

@section('title') HAKKIMIZDA @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') İletişim Sayfası @endslot
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
        <form method="POST" class="form-horizontal" action="/update-contact-page" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">İletişim Sayfası Düzenle</h4>
            <p>Buradaki verileri değiştirerek İletişim sayfasını düzenleyebilirsiniz</p>
                <div class="row">

                    <div class="col-xl-12">
                        <div class="row mb-12">
                        <label for="working_hours_weekdays_tr" class="col-sm-3 col-form-label">Haftaiçi Çalışma Saatleri TR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="working_hours_weekdays_tr"
                                   value="{{$contact->working_hours_weekdays_tr}}" autofocus required>

                        </div>
                        </div>
                        <div class="row mb-12">
                        <label for="working_hours_weekdays_en" class="col-sm-3 col-form-label">Haftaiçi Çalışma Saatleri EN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="working_hours_weekdays_en"
                                   value="{{$contact->working_hours_weekdays_en}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="working_hours_weekend_tr" class="col-sm-3 col-form-label">Haftasonu Çalışma Saatleri TR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="working_hours_weekend_tr"
                                   value="{{$contact->working_hours_weekend_tr}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="working_hours_weekend_en" class="col-sm-3 col-form-label">Haftasonu Çalışma Saatleri EN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="working_hours_weekend_en"
                                   value="{{$contact->working_hours_weekend_en}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="phone" class="col-sm-3 col-form-label">Telefon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone"
                                   value="{{$contact->phone}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="address" class="col-sm-3 col-form-label">Adres</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address"
                                   value="{{$contact->address}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="contact_us_email_1" class="col-sm-3 col-form-label">1.Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_us_email_1"
                                   value="{{$contact->contact_us_email_1}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="contact_us_email_text_tr_1" class="col-sm-3 col-form-label">1.Email Başlık TR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_us_email_text_tr_1"
                                   value="{{$contact->contact_us_email_text_tr_1}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                        <label for="contact_us_email_text_en_1" class="col-sm-3 col-form-label">1.Email Başlık EN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_us_email_text_en_1"
                                   value="{{$contact->contact_us_email_text_en_1}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="contact_us_email_2" class="col-sm-3 col-form-label">2.Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="contact_us_email_2"
                                       value="{{$contact->contact_us_email_2}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="contact_us_email_text_tr_2" class="col-sm-3 col-form-label">2.Email Başlık TR</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="contact_us_email_text_tr_2"
                                       value="{{$contact->contact_us_email_text_tr_2}}" autofocus required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="contact_us_email_text_en_2" class="col-sm-3 col-form-label">2.Email Başlık EN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="contact_us_email_text_en_2"
                                       value="{{$contact->contact_us_email_text_en_2}}" autofocus required>

                            </div>
                        </div>



                        <div class="row justify-content-end">
                            <div class="col-sm-12">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                </div>
                            </div>
                        </div>



                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
            </div>
        </form>
    </div>



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
