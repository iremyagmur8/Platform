@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox')
    <section id="page-content">
        <div class="container">
            <div class="row">
                @isset($cData->university)
                    @foreach($cData->university as $key=>$val)
                        <div
                            class="col-lg-4 animated visible @if($loop->iteration %3 == 0) fadeInRight @elseif($loop->iteration %3 == 2) fadeIn @else fadeInLeft @endif"
                            data-animate="fadeIn">
                            <div class="card shadow-3 text-center">
                                <div class="card-header p-4">
                                    @if(isset($val->universities->logos->file))
                                        <img
                                            src="{{url("images/logos/". $val->universities->logos->file)}}" width="auto"
                                            height="90" alt="">
                                    @else
                                        <img width="auto" height="90" src="https://svgsilh.com/svg/1210524.svg" alt="">
                                    @endif
                                </div>
                                <div class="card-body py-4 d-flex align-items-center m-auto">
                                    @isset($val->universities->name) <a
                                        href="/category/{{str_slug($val->universities->name,"-")."/".$val->universities->id}}"
                                        style="font-size: 1.3rem;letter-spacing: 0;color:#202428">{{$val->universities->name}}</a> @endisset
                                </div>
                                <div class="card-footer text-muted apply_now">
                                    <a href="#">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>

@endsection
