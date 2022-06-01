@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox', ['title' => $cData->category->title,'cData' => $cData])
    @include('inc.searchForm', ['placeholder' => $cData->category->title, 'type' => 3])
    <section class="sidebar-right uniPosts" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-md-12 text-right pr-0 pb-4">
                    <button onclick="$('.liste').hide(); $('._list').show(); $('.listbutton').removeClass('on'); $(this).addClass('on')" type="button" class="list-view listbutton" data-target="list"><i class="icon-list"></i></button>
                    <button onclick="$('.liste').hide(); $('.grid').show(); $('.listbutton').removeClass('on'); $(this).addClass('on')" type="button" class="grid-view on listbutton" data-target="grid"><i class="icon-grid "></i></button>
                </div>
                @include('inc.dormitoriesGridBox')
                @include('inc.dormitoriesListBox', ['display'=>'none'])
            </div>
        </div>
    </section>
    <script src="/js/postDropdown.js"></script>
@endsection
