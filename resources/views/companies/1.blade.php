@extends('layouts.app')
@section('title', $cData->category->title." - ")
@section('desc',$cData->category->shortdescription)
@section('content')


    @include('inc.applyModalBox')
    @include('inc.bannerBox', ['title' => $cData->category->title,'cData' => $cData])
    @include('inc.searchForm', ['placeholder' => $cData->category->title, 'type' => 1])
        <section id="page-content" class="sidebar-right uniPosts" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="content col-lg-8 p-0">
                        <div id="blog" class="post-thumbnails">
                            @if($cData->type == 1)
                                @include('inc.universityCartBox')
                            @elseif($cData->type == 2)
                                @include('inc.programsCartBox')
                            @elseif($cData->type == 3)
                                @include('inc.entrepreneurCartBox')
                            @endif
                        </div>
                        @isset($cData->company->links)
                            {!! $cData->company->links !!}
                        @endisset
                    </div>
                    @include('inc.applyNowBox')
                </div>
            </div>
        </section>
    <script src="/js/postDropdown.js"></script>
@endsection
