@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('css')
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css"/>
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
                    <h4 class="mb-sm-0 font-size-18">Galeri Resim Ekleme</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{route('admin.galleries.store')}}" class="dropzone" id="dropzone" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-12 col-form-label">
                                   Kategori(ler)  <code> (Birden fazla kategori şeçebilir ve oluşturabilirsiniz.Yeni Kategori için
                                        yazdıktan sonra enter basınız) </code></label>

                                <div class="col-md-10">
                                    <select class="select2 js-example-tags form-control" style="width: 100%"
                                            multiple="multiple"
                                            data-placeholder="Choose ..." name="category[]">
                                        @foreach($category as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <h4 class="card-title">Galeri</h4>
                            <p class="card-title-desc">Birden fazla resim seçebilirsiniz</p>

                            <div>

                                <div class="fallback">

                                </div>
                                <div class="dz-message needsclick" id="document-dropzone">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Resim Yükle.(Sürükle Burak)</h4>
                                </div>

                                <input type="hidden" id="documents" name="documents" value="">


                            </div>

                        </div>

                    </div>

                </div> <!-- end col -->

            </div> <!-- end row -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Gönder
                </button>
            </div>
        </form>
    </div> <!-- container-fluid -->


@endsection

@section('script')
    <script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/select2.min.js') }}"></script>
    <script type="text/javascript">
        var documents = [];
        Dropzone.options.dropzone =
            {
                maxFilesize: 10,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 60000,
                success: function (file, response) {
                    documents.push(response)
                    $('#documents').val(documents)
                },
                removedfile: function (file) {
                    console.log(file)
                },
                init: function () {

                },
                error: function (file, response) {
                    return false;
                }
            };


        $(".js-example-tags").select2({
            tags: true
        });

    </script>
    <!-- Plugins js -->






@endsection


