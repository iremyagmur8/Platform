@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox', ['title' => $cData->category->title,'cData' => $cData])

    <section id="page-content" class="sidebar-right accordionTexts" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="content @if($cData->check !== 'true') col-lg-8 @else col-lg-12 @endif">
                    <div class="heading-text text-center study-head head-weight">
                        @isset($cData->category->title)
                            <h4 class="head-title">{{$cData->category->title}}</h4>
                        @endisset
                        @isset($cData->category->description)
                            <span>{!! $cData->category->description !!}</span>
                        @endisset
                    </div>
                    @isset($cData->posts)
                        <div class="accordion accordion-shadow">
                            @foreach($cData->posts as $key=>$val)
                                <div
                                    class=" @if($cData->check === 'true') p-t-20 p-b-20 @endif ac-item @if($loop->iteration == 1) ac-active @endif">
                                    @isset($val->files[0]->file)
                                        <img
                                            class="no-img-effect float-left m-r-20"
                                            src="{{Storage::url('/images/userfiles/'. $val->files[0]->file)}}"
                                            style="max-height:40px; margin-left:auto; padding-bottom:.2rem;"
                                            alt="Premium Application Service">
                                    @endisset
                                    @isset($val->title) <h5
                                        class="ac-title  @if($cData->check === 'true') text-red  @endif">{{$val->title}}</h5>@endisset
                                    <div class="ac-content @if($cData->check === 'true') mt-4 @endif ">
                                        @isset($val->shortdescription)<p>{{$val->shortdescription}}</p> @endisset
                                        @isset($val->description) {!! $val->description !!} @endisset
                                        @isset($val->tag)  <a href="{{$val->link}}">
                                            <button class="btn button-light w-100" type="submit"
                                                    id="form-submit">{{$val->tag}}</button>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endisset
                </div>
                @if($cData->check !== 'true')
                    @include('inc.applyNowBox')
                @endif
            </div>
        </div>
    </section>

@endsection
