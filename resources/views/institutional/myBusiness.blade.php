@extends('layouts.panel')
@section('title','')
@section('desc','')
@section('content')
    <section class="page-title-two p-0">
        <div class="title-box text-center bg-color2">
            <div>
                <div class="bg-images-1" style="background-image: url(/images/shape-70.png);"></div>
                <div class="bg-images-2" style="background-image: url(/images/shape-71.png);"></div>
            </div>
            <div class="container">
                <div class="title">
                    <h1>My Business</h1>
                </div>
            </div>
        </div>
        <div class="lower-content">
            <div class="container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Anasayfa&nbsp;</a></li>
                    <i class="fas fa-arrow-right"></i>
                    <li>My Business</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Account details</span>
                            <p class="text-muted">You will receive an email notification to confirm this action in
                                order to completed changes.</p>
                        </div>
                        <div class="card-body inputFile">
                            <form method="POST" id="companyData" action="/company">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="form-label w-100">Lütfen Logo
                                            Yükleyiniz.</label>
                                        <input style="padding-left: 0;" id="dosyaEkle" type="file" required=""
                                               data-dosya="transkriptinizi-ekleyiniz"
                                               name="logo"
                                               class="form-control-file transkriptinizi-ekleyiniz">
                                        <label tabindex="0" for="dosyaEkle"
                                               class="input-file-trigger text-light">Select a file...</label>
                                        <div class="mesaj-transkriptinizi-ekleyiniz"></div>
                                        <small class="">Lütfen Word, excel, pdf, jpg, png formatında ve 1 MB
                                            aşmayacak şekilde dosya yükleyiniz.</small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputFirstName"
                                               placeholder="Name *" name="name"
                                               value="{{$cData->company?$cData->company->name:""}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="postDropdown">
                                                <div class="select">
                                                    <span>Commercial Title</span>
                                                    <i class="fa fa-chevron-left"></i>
                                                </div>
                                                <input type="hidden" name="commercial_title"
                                                       value="{{$cData->company?$cData->company->commercial_title:""}}">
                                                <ul class="postDropdown-menu">
                                                    <li>x</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-control-sm"
                                               placeholder="Vergi No" maxlength="11" name="tax_number"
                                               value="{{$cData->company?$cData->company->tax_number:""}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" class="form-control" id="inputPhone"
                                               placeholder="Phone Number *" name="phone"
                                               value="{{$cData->company?$cData->company->phone:""}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="mail"
                                               placeholder="Enter your email" required=""
                                               value="{{$cData->company?$cData->company->mail:""}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        @include("inc.myBusiness.cities")
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        @include("inc.myBusiness.towns")
                                    </div>
                                    <div class="form-group col-md-6">
                                        @include("inc.myBusiness.districts")
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        @include("inc.myBusiness.neighborhoods")
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="address"
                                               placeholder="Enter your Address" required=""
                                               value="{{$cData->company?$cData->company->address:""}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    @if($cData->auth == 1)
                                        <button class="btn btn-b" type="submit" onclick="save()">Save</button>
                                    @else
                                        <button class="btn btn-success" type="submit" onclick="update()">Update</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/postDropdown.js"></script>
    <script>
        function update() {
            var spp = $('#companyData').serialize();
            console.log(spp);
            $.ajax({
                url: "/company",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: spp,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    if (response != 0) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Succesfully upload',
                        });
                    } else {
                        alert('file not uploaded');
                    }
                }
            })
        }
    </script>


@endsection
