@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox')
    @include('inc.searchForm', ['placeholder' => $cData->category->title, 'type' => 4])
    <section class="dashboardMenus faculties p-t-50">
        <div class="container p-0">
            <div>
                <div class="bg-images-1" style="background-image: url(/images/shape-47.png);">
                </div>
                <div class="bg-images-2" style="background-image: url(/images/shape-48.png);">
                </div>
            </div>
            <div class="heading-text">
                <div class="row clearfix text-center">
                    @foreach($cData->categories as $key=>$val)
                        @include('inc.categoryBox')
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <script src="/js/postDropdown.js"></script>

@endsection
