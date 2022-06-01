@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox', ['title' => $cData->category->title,'cData' => $cData])

    <section id="page-content" class="sidebar-right general-description" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="content col-lg-8 ">
                    <div class="heading-text text-left study-head head-weight">
                        @isset($cData->category->title)
                            <h4 class="text-center head-title">{{ $cData->category->title}} <h4>
                        @endisset

                        @isset($cData->category->description)
                            {!! $cData->category->description !!}
                        @endisset
                    </div>

                    @foreach($cData->posts as $key=>$val)
                        <span class="text-manager">{{$val->title}}</span>
                        {!! $val->description !!}
                        @isset($val->shortdescription, $val->link)
                            @php
                                $buttons=explode(",",$val->shortdescription);
                                $links=explode(",",$val->link);
                                $f=0;
                            @endphp
                            <div class="desc-buttons">
                                @foreach($buttons as $key=>$val)
                                    <a href="{{$links[$f]}}">
                                        <button class="btn button-light" type="submit"
                                                id="form-submit">{{$val}}</button>
                                    </a>
                                    @php($f++)
                                @endforeach
                            </div>
                        @endisset
                    @endforeach
                </div>
                @include('inc.applyNowBox')

            </div>
        </div>
    </section>

@endsection
