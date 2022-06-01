@extends('solaris.module')
@section('title',' - Üniversite Ekle')
@section('modulecontent')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <style>
        .select2-container .select2-selection--single {
            height: calc(2.25rem + 2px);
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
        }
    </style>
    <div class="portlet-box">
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <a href="/solaris/add/universities" class="btn btn-rounded btn-primary btn-sm m-r-5">Formu
                Sıfırla</a>
            <a href="/solaris/universities" class="btn btn-rounded btn-danger btn-sm">Tüm Üniversiteler</a>
        </div>
        <form class="form-horizontal dropzone" method="POST" action="/solaris/addpost" id="formData"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(!empty($cData->data)) <input type="hidden" name="degisID" value="{{$cData->data->id}}"> @endif
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Adı</label>
                        <input type="text" class="form-control" name="title"
                               value="@if(!empty($cData->data)){{$cData->data->title}}@endisset" autofocus>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="type">Şehir</label>
                        <select class="form-control" name="type"
                                onchange="$('#taba-'+this.value).tab('show');" id="categoryChanger">
                            @foreach($cData->cities as $key=>$val)
                                <option value="{{$val->id}}"
                                        @isset($cData->company) @if($cData->company->city_id == $val->id) selected @endif @endisset>
                                    {{$val->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title">Kuruluş Tarihi</label>
                        <input type="datetime-local" class="form-control" name="publishtime"
                               value="@if(!empty($cData->data)){{date("Y-m-d",strtotime($cData->data->publish_time))}}T{{date("H:i",strtotime($cData->data->publish_time))}}@else{{date("Y-m-d")."T".date("H:i")}}@endif"
                               autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Adres</label>
                        <textarea class="form-control" name="shortdescription"
                                  autofocus>@if(!empty($cData->data)){{$cData->data->shortdescription}}@endisset</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">Link</label>
                        <input type="text" class="form-control" name="link"
                               value="@if(!empty($cData->data)){{$cData->data->link}}@endisset"
                               autofocus>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="title">Özellikler</label>
                        <div class="form-group mb-0">
                            <div class="form-row">
                                @foreach(config('solaris.dormitoriesFeatures') as $key => $val)
                                    <div class="form-check mr-3">
                                        <input class="form-check-input mt-2" type="checkbox" value="{{$val}}"
                                               id="check-{{$val}}">
                                        <label class="form-check-label" for="check-{{$val}}">
                                            {{$val}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="universities">
                    <div class="form-row universitiesRow">
                        <div class="form-group col-md-6">
                            <label for="type">Üniversite</label>
                            <select id="SelExample" class="form-control" name="type"
                                    id="categoryChanger">
                                @foreach($cData->university as $key=>$val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="title">Yaya</label>
                            <input type="text" class="form-control" name="link"
                                   value=""
                                   autofocus>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="title">Araba</label>
                            <input type="text" class="form-control" name="link"
                                   value=""
                                   autofocus>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="title">Toplu Taşıma</label>
                            <input type="text" class="form-control" name="link"
                                   value=""
                                   autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <button type="button" class="btn btn-success d-block addNew float-right">
                            Yeni Ekle
                        </button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <textarea class="form-control" id="summary-ckeditor"
                                  name="description">@if(!empty($cData->data)){{$cData->data->description}}@endisset</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="document">Dosyalar</label>
                        <input type="file"
                               class="filepond"
                               name="file[]"
                               multiple
                               data-allow-reorder="true">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                Kaydet
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "/ckeditor/image_upload?_token={{ csrf_token() }}",
            filebrowserUploadMethod: 'form',
            height: 500
        });
        FilePond.registerPlugin(
            FilePondPluginImageCrop,
            FilePondPluginImagePreview,
            FilePondPluginFilePoster
        );

        // Get a reference to the file input element
        const inputElement = document.querySelector('.filepond');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            allowImageEdit: true,
            labelIdle: 'Sürükle ya da <span class="filepond--label-action"> seç </span>',
            styleImageEditButtonEditItemPosition: 'bottom',
            imageCropAspectRatio: '1:1',
            onreorderfiles: (files, origin, target) => {
                var images = []
                files.forEach(element => {
                    images.push(element.file.name)
                });
                $.ajax({
                    method: "POST",
                    url: "/solaris/sortfiles",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {file: images}
                })
                    .done(function (msg) {
                        console.log(msg);
                    });
            },
            server: {
                url: '/filepond/api',
                process: '/process',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                load: (source, load, error, progress, abort, headers) => {
                    var request = new Request(source);
                    fetch(request).then(function (response) {
                        response.blob().then(function (myBlob) {
                            load(myBlob)
                        });
                    });

                },
                remove: (source, load, error, options) => {
                    console.log(source);
                    console.log(options);

                    $.ajax({
                        method: "POST",
                        url: "/solaris/deletefile",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {file: source}
                    })
                        .done(function (msg) {
                            console.log(msg);
                        });
                    load();
                },
            }
            @isset($cData->data), files: [
                    @foreach($cData->data->files as $key=>$val)
                {
                    source: '{{config('solaris.site.url').Storage::url("images/userfiles/".$val->file)}}',
                    options: {
                        type: 'local',

                    },
                    metadata: {
                        poster: '{{config('solaris.site.url').Storage::url("images/userfiles/".$val->file)}}'
                    }
                }
                @if(!$loop->last),@endif
                @endforeach
            ],
            @endisset
        });
        $(document).ready(function () {
            $(".addNew").click(function (e) {
                e.preventDefault();
                if ($(".universities > div").length < 10) {
                    $(".universities").append('<div class="form-row universitiesRow"><div class="form-group col-md-6"><label for="type">Üniversite</label> <select id="SelExample" class="form-control" name="type"id="categoryChanger">@foreach($cData->university as $key=>$val)<option value="{{$val->id}}">{{$val->name}}</option>@endforeach</select></div><div class="form-group col-md-2"><label for="title">Yaya</label><input type="text" class="form-control" name="link[]" value="" autofocus> </div><div class="form-group col-md-2"><label for="title">Araba</label><input type="text" class="form-control" name="link" value="" autofocus> </div><div class="form-group col-md-2"><label for="title">Toplu Taşıma</label><input type="text" class="form-control" name="link" value="" autofocus> </div></div>');
                } else {
                    alert('You Reached the limits')
                }
            });
        });
        //Start Search Select Filter

        $(document).ready(function () {
            $("#SelExample").select2();
            $("#SelExample").select2("val", "1");
        });

        //End Search Select Filter
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection
0
