@extends('layouts.master')

@section('title') KAMPANYALAR @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Kampanyalar Sayfası @endslot
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
                <h4 class="card-title mb-4">Kampanyalar Sayfası Düzenle</h4>
            <p>Buradaki verileri değiştirerek Kampanyalar sayfasını düzenleyebilirsiniz</p>
                <div class="row">

                    <div class="col-xl-12">
                        <div class="row mb-12">
                            <label for="main_text_tr" class="col-sm-3 col-form-label">Kampanyalar Üst Bölüm (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="main_text_tr" name="main_text_tr" class="form-control" rows="4">{{$campaign->main_text_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="main_text_en" class="col-sm-3 col-form-label">Kampanyalar Üst Bölüm (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="main_text_en" name="main_text_en" class="form-control" rows="4">{{$campaign->main_text_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu1_tr" class="col-sm-3 col-form-label">Menü 1 (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="menu1_tr" name="menu1_tr" class="form-control" rows="4">{{$campaign->menu1_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu1_en" class="col-sm-3 col-form-label">Menü 1 (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="menu1_en" name="menu1_en" class="form-control" rows="4">{{$campaign->menu1_en}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-12">
                        <label for="menu1_fiyat_tr" class="col-sm-3 col-form-label">Menü-1 Fiyatı (TR)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="menu1_fiyat_tr"
                                   value="{{$campaign->menu1_fiyat_tr}}"  required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu1_fiyat_en" class="col-sm-3 col-form-label">Menü-1 Fiyatı (EN)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="menu1_fiyat_en"
                                       value="{{$campaign->menu1_fiyat_en}}"  required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu2_tr" class="col-sm-3 col-form-label">Menü 2 (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="menu2_tr" name="menu2_tr" class="form-control" rows="4">{{$campaign->menu2_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu2_en" class="col-sm-3 col-form-label">Menü 2 (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="menu2_en" name="menu2_en" class="form-control" rows="4">{{$campaign->menu2_en}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-12">
                            <label for="menu2_fiyat_tr" class="col-sm-3 col-form-label">Menü-2 Fiyatı (TR)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="menu2_fiyat_tr"
                                       value="{{$campaign->menu2_fiyat_tr}}" required>

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu2_fiyat_en" class="col-sm-3 col-form-label">Menü-2 Fiyatı (EN)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="menu2_fiyat_en"
                                       value="{{$campaign->menu2_fiyat_en}}" required>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="img1">Menü-1 Resim</label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($campaign->menu1_img)}}" alt=""
                                         style="display:block;" width="30%" height="30%">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="menu1_img" name="menu1_img">

                                </div>
                            </div>


                        </div>

                        <div class="mb-3">
                            <label for="avatar">Menü-2 Resim</label>
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{url($campaign->menu2_img)}}" alt=""
                                         style="display:block;" width="30%" height="30%">
                                </div>
                                <div class="input-group">
                                <input type="file" class="form-control" id="menu2_img" name="menu2_img">
                                </div>

                            </div>

                        </div>
                        <div class="row mb-12">
                            <label for="aciklama_tr" class="col-sm-3 col-form-label">Açıklama (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="aciklama_tr" name="aciklama_tr" class="form-control" rows="4">{{$campaign->aciklama_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="aciklama_en" class="col-sm-3 col-form-label">Açıklama (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="aciklama_en" name="aciklama_en" class="form-control" rows="4">{{$campaign->aciklama_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="pakete_dahil_tr" class="col-sm-3 col-form-label">Pakete Dahil (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="pakete_dahil_tr" name="pakete_dahil_tr" class="form-control" rows="4">{{$campaign->pakete_dahil_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="pakete_dahil_en" class="col-sm-3 col-form-label">Pakete Dahil (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="pakete_dahil_en" name="pakete_dahil_en" class="form-control" rows="4">{{$campaign->pakete_dahil_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="muzik_tr" class="col-sm-3 col-form-label">Müzik Paketi (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="muzik_tr" name="muzik_tr" class="form-control" rows="4">{{$campaign->muzik_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="muzik_en" class="col-sm-3 col-form-label">Müzik Paketi (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="muzik_en" name="muzik_en" class="form-control" rows="4">{{$campaign->muzik_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="dekorasyon_tr" class="col-sm-3 col-form-label">Dekorasyon Paketi (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="dekorasyon_tr" name="dekorasyon_tr" class="form-control" rows="4">{{$campaign->dekorasyon_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="dekorasyon_en" class="col-sm-3 col-form-label">Dekorasyon Paketi (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="dekorasyon_en" name="dekorasyon_en" class="form-control" rows="4">{{$campaign->dekorasyon_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="video_tr" class="col-sm-3 col-form-label">Video ve Fotoğraf Paketi (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="video_tr" name="video_tr" class="form-control" rows="4">{{$campaign->video_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="video_en" class="col-sm-3 col-form-label">Video ve Fotoğraf Paketi (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="video_en" name="video_en" class="form-control" rows="4">{{$campaign->video_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="karsilama_tr" class="col-sm-3 col-form-label">Karşılama (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="karsilama_tr" name="karsilama_tr" class="form-control" rows="2">{{$campaign->karsilama_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="karsilama_en" class="col-sm-3 col-form-label">Karşılama (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="karsilama_en" name="karsilama_en" class="form-control" rows="2">{{$campaign->karsilama_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="vestiyer_tr" class="col-sm-3 col-form-label">Vestiyer (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="vestiyer_tr" name="vestiyer_tr" class="form-control" rows="2">{{$campaign->vestiyer_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="vestiyer_en" class="col-sm-3 col-form-label">Vestiyer (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="vestiyer_en" name="vestiyer_en" class="form-control" rows="2">{{$campaign->vestiyer_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu_tadimi_tr" class="col-sm-3 col-form-label">Menu Tadımı (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="menu_tadimi_tr" name="menu_tadimi_tr" class="form-control" rows="2">{{$campaign->menu_tadimi_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="menu_tadimi_en" class="col-sm-3 col-form-label">Menu Tadımı (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="menu_tadimi_en" name="menu_tadimi_en" class="form-control" rows="2">{{$campaign->menu_tadimi_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="vale_tr" class="col-sm-3 col-form-label">Vale (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="vale_tr" name="vale_tr" class="form-control" rows="2">{{$campaign->vale_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="vale_en" class="col-sm-3 col-form-label">Vale (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="vale_en" name="vale_en" class="form-control" rows="2">{{$campaign->vale_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="odeme_tr" class="col-sm-3 col-form-label">Ödeme (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="odeme_tr" name="odeme_tr" class="form-control" rows="2">{{$campaign->odeme_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="odeme_en" class="col-sm-3 col-form-label">Ödeme (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="odeme_en" name="odeme_en" class="form-control" rows="2">{{$campaign->odeme_en}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="rezervasyon_tr" class="col-sm-3 col-form-label">Rezervasyon Durumu (TR)</label>
                            <div class="col-sm-9">
                                <textarea id="rezervasyon_tr" name="rezervasyon_tr" class="form-control" rows="2">{{$campaign->rezervasyon_tr}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="rezervasyon_en" class="col-sm-3 col-form-label">Rezervasyon Durumu (EN)</label>
                            <div class="col-sm-9">
                                <textarea id="rezervasyon_en" name="rezervasyon_en" class="form-control" rows="2">{{$campaign->rezervasyon_en}}</textarea>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  {{$campaign->is_active ==1?"checked":""}}>
                            <label class="form-check-label" for="is_active">
                                Aktif/Pasif
                            </label>
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
