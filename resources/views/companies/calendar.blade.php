@extends('layouts.app')
@section('title')
@section('desc')
@section('content')
    <link href='/assetWeb/polo/plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet'/>
    @include('inc.bannerBox')
    @include('inc.searchForm', ['placeholder' => 'University', 'type' => 4])
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div id="calendar"></div>
                </div>
            </div>
            <!-- end: Calendar -->
        </div>
    </section>
    <section id="page-content">
        <div class="container">
            <div class="row">
                @isset($cData->company)
                    @foreach($cData->company as $key=>$val)
                        <div
                            class="col-lg-4 m-b-50 animated visible @if($loop->iteration %3 == 0) fadeInRight @elseif($loop->iteration %3 == 2) fadeIn @else fadeInLeft @endif"
                            data-animate="fadeIn">
                            <div class="card shadow-3 text-center">
                                <div class="card-header p-4">
                                    @if(isset($val->logos->file))
                                        <img
                                            src="{{url("images/logos/". $val->logos->file)}}" width="auto"
                                            height="90" alt="">
                                    @else
                                        <img width="auto" height="90" src="https://svgsilh.com/svg/1210524.svg" alt="">
                                    @endif
                                </div>
                                <div class="card-body px-1 py-3 d-flex align-items-center m-auto flex-column">
                                    @isset($val->name) <a
                                        href="/category/{{str_slug($val->name,"-")."/".$val->id}}"
                                        style="font-size: 1.3rem;letter-spacing: 0;color:#202428">{{$val->name}}</a> @endisset
                                    <p style="color: #fd3635">
                                        Application Dates
                                    </p>
                                    <p class="mb-0">
                                        <i class="far fa-calendar-alt text-danger mr-1"></i>
                                        22.06.2020 /
                                        24.07.2020
                                    </p>
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


    <script src="/js/postDropdown.js"></script>
    <script src='/assetWeb/polo/plugins/moment/moment.min.js'></script>
    <script src='/assetWeb/polo/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src='/assetWeb/polo/plugins/fullcalendar/gcal.min.js'></script>

    <script type='text/javascript'>
        $(document).ready(function () {
            $(function () {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,listYear'
                    },
                    googleCalendarApiKey: 'AIzaSyC57jOkmvJllvtzVxDw6O4o1rn_9C1dIIs',
                    events: {
                        googleCalendarId: 'themeforest@inspiro-media.com',
                    }
                });
            });
        });
    </script>
@endsection
