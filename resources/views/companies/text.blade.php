@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox', ['title' => $cData->category->title,'cData' => $cData])

    <section id="page-content" class="sidebar-right uniPosts" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="content col-lg-8">
                    <div class="heading-text text-center">
                        <h4 class="howToApply">How to Apply
                        </h4>
                        <p class="page-manager">We are here to help you find and apply for your dream university in Turkey
                            <br><br>
                            The following steps explain the application process for undergraduate programmes available
                            in all Turkish universities. All applications are processed through the Turkish Universities
                            Application Service - Turkish University Admission Service portal
                        </p>
                    </div>
                </div>
                @include('inc.applyNowBox')
            </div>
        </div>
    </section>

@endsection
