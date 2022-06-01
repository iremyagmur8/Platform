@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    @include('inc.bannerBox')
    @include('inc.searchForm', ['placeholder' => $cData->category->title, 'type' => 3])

    <section>
        <div class="container listBox">
            <div class="col-lg-12">
                <ul class="list-group list-group-flush">
                    @foreach($cData->list as $key=>$val)
                        <li class="list-group-item pl-0"><a href="/departments/{{$val->id}}"><i class="fas fa-arrow-right text-primary mr-2"></i>{{$val->title}} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
