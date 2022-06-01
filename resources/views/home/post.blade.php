@extends('layouts.app')
@section('title', $cData->company->name." - ")
@section('desc',$cData->company->shortdescription)
@section('content')
    <link href="/post.css?v={{rand(0,999)}}" rel="stylesheet">

    @include('inc.bannerBox', ['title' => $cData->company->name,'cData' => $cData])
    @isset($cData->company)
        <section class="reservation-form-over">
            <div class="container">
                <div class="row justify-content-center reservation-form align-items-center"
                     style="border-bottom: 2px solid red; ">
                    <div class="col-lg-2 pb-2" style="max-width: 200px; ">
                        @if(isset($cData->company->logos->file))
                            <img
                                src="{{url("/images/logos/".  $cData->company->logos->file)}}"
                                class="img-fluid no-img-effect"
                                alt=" TURKISH JAPANESE SCIENCE AND TECHNOLOGY UNIVERSITY | Turkish University Admissions Service">
                        @else
                            <img src="https://svgsilh.com/svg/1210524.svg" width="auto" height="90">
                        @endisset
                    </div>

                    <div class="col-lg-10 pb-3">
                        <div class="row">
                            <div class="col-lg-12 py-3">
                                <h2>{{$cData->company->name}}</h2>
                            </div>
                            <div class="col-lg-5">
                                <div class="media border-right height-100p">
                                    <div class="media-body">
                                        <span class="text-gray d-block">Rector:</span>
                                        <span class="h6">Prof. Dr. Bekir Sami Yılbaş</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="border-right height-100p">
                                    <span class="text-gray d-block">Location:</span>
                                    <span class="h6">
<a href="">
{{$cData->company->cities->name}}
</a>
</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="border-right height-100p">
                                    <span class="text-gray d-block">Since:</span>
                                    <span class="h6">2019</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <span class="text-gray d-block">Technopark:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endisset

    <section class="m-t-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="carousel postImages text-center" data-items="1" data-dots="false"><img
                            class="img-fluid rounded"
                            src="https://www.tuas.com.tr/UserImages/UniversitySliderImages/bolu-abant-izzet-baysal-university/bolu-abant-izzet-baysal-university-c6ee9e50-b83d-482d-9bf7-844755249a99.jpg"
                            alt="image"/>
                        <img class="img-fluid rounded"
                             src="https://www.tuas.com.tr/UserImages/UniversitySliderImages/bolu-abant-izzet-baysal-university/bolu-abant-izzet-baysal-university-9a1ad269-f564-46b6-899c-27e7dcf6fae1.jpg"
                             alt="image"/>
                        <img class="img-fluid rounded"
                             src="https://www.tuas.com.tr/UserImages/UniversitySliderImages/bolu-abant-izzet-baysal-university/bolu-abant-izzet-baysal-university-6ff1c229-cff8-4a3f-82f7-1ae58651eeea.jpg"
                             alt="image"/>
                        <img class="img-fluid rounded"
                             src="https://www.tuas.com.tr/UserImages/UniversitySliderImages/bolu-abant-izzet-baysal-university/bolu-abant-izzet-baysal-university-c8222da6-2c33-42f3-8f22-b553945d9f10.jpg"
                             alt="image"/>
                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="text-dark">
                            <div class="col-lg-12 text-light text-left">
                                <h3>Overview</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="pie-chart" data-percent="6" data-size="120"
                                                 data-width="4" data-color="#ed1b2e"><span
                                                    class="percent text-small"
                                                    style="width: 80px; height: 80px; line-height: 80px;">95</span>
                                                <canvas height="80" width="80"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row m-t-50">
                                                <div class="col-lg-12">
                                                    <img
                                                        src="https://www.tuas.com.tr/static/Student/assets/img/universities/graduated.png"
                                                        class="img-fluid" width="80" height="80" alt="">
                                                </div>
                                                <div class="col-lg-12">
                                                    <p>International Student Population Rate</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="pie-chart" data-percent="75" data-size="120"
                                                 data-width="4" data-color="#ed1b2e"><span
                                                    class="percent text-small"
                                                    style="width: 80px; height: 80px; line-height: 80px;">95</span>
                                                <canvas height="80" width="80"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row m-t-50">
                                                <div class="col-lg-12">
                                                    <img
                                                        src="https://www.tuas.com.tr/static/Student/assets/img/universities/tik-board.png"
                                                        class="img-fluid" width="80" height="80" alt="">
                                                </div>
                                                <div class="col-lg-12">
                                                    <p>Acceptance Rate</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="col-lg-12 text-dark text-left">
                            <h3>Feature Includes</h3>
                        </div>
                        <div class="col-lg-12 m-t-50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="counter small"><span data-speed="800" data-refresh-interval="50"
                                                                         data-to="6" data-from="0"
                                                                         data-seperator="true">12416</span></div>
                                        <a class="btn" data-target="#modal" data-toggle="modal" href="#"> <i
                                                class="fas fa-university fa-2x"></i>
                                            Campuss</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="counter small"><span data-speed="800" data-refresh-interval="23"
                                                                         data-to="26" data-from="0"
                                                                         data-seperator="true">365</span></div>
                                        <a class="btn" data-target="#modal" data-toggle="modal" href="#">
                                            <i class="fas fa-school fa-2x"></i>
                                            Faculty</a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="100" data-delay="100"
                                     data-type="%"
                                     style="width: 52%;">
                                    <div class="progress-title">271 Instructor</div>
                                    <span class="progress-type">%</span><span class="progress-number animated fadeIn">100</span>
                                </div>
                            </div>

                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200"
                                     data-type="%"
                                     style="width: 100%;">
                                    <div class="progress-title">519 Research Assistant</div>
                                    <span class="progress-type">%</span><span
                                        class="progress-number animated fadeIn">94</span>
                                </div>
                            </div>

                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="78" data-delay="300"
                                     data-type="%"
                                     style="width: 37%;">
                                    <div class="progress-title">194 Professor</div>
                                    <span class="progress-type">%</span><span
                                        class="progress-number animated fadeIn">78</span>
                                </div>
                            </div>

                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="65" data-delay="400"
                                     data-type="%"
                                     style="width: 28%;">
                                    <div class="progress-title">148 Associate Professor</div>
                                    <span class="progress-type">%</span><span
                                        class="progress-number animated fadeIn">65</span>
                                </div>
                            </div>

                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="78" data-delay="300"
                                     data-type="%"
                                     style="width: 2%;">
                                    <div class="progress-title">15 Foreign Academic</div>
                                    <span class="progress-type">%</span><span
                                        class="progress-number animated fadeIn">78</span>
                                </div>
                            </div>

                            <div class="p-progress-bar-container title-up small color">
                                <div class="p-progress-bar progress-animated" data-percent="65" data-delay="400"
                                     data-type="%"
                                     style="width: 73%;">
                                    <div class="progress-title">380 Doctor Faculty Member</div>
                                    <span class="progress-type">%</span><span
                                        class="progress-number animated fadeIn">65</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="col-lg-12 text-dark text-left">
                            <h3>Ranking</h3>
                        </div>
                        <div class="col-lg-12 m-t-50">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div class="counter small"><span data-speed="500" data-refresh-interval="50"
                                                                         data-to="1977" data-from="1600"
                                                                         data-seperator="true">12416</span></div>
                                        <p>IN WORLD</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div class="counter small"><span data-speed="500" data-refresh-interval="23"
                                                                         data-to="47" data-from="20"
                                                                         data-seperator="true">365</span></div>
                                        <p>IN TURKEY</p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div class="counter small"><span data-speed="500" data-refresh-interval="12"
                                                                         data-to="52" data-from="30"
                                                                         data-seperator="true">114</span></div>
                                        <p>IN PLATFORM</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="tabs p-r-20">
                            <ul class="nav nav-tabs nav-justified text-left" id="myTab">
                                <li class="nav-item"><a href="#day1" class="nav-link" data-toggle="tab"
                                                        aria-selected="true"><strong><i
                                                class="fas fa-align-justify"></i></strong>Description</a>
                                </li>
                                <li class="nav-item"><a href="#day2" class="nav-link active"
                                                        data-toggle="tab"><strong><i
                                                class="fas fa-university"></i></strong>Programs</a></li>
                                <li class="nav-item"><a href="#day3" class="nav-link" data-toggle="tab"><strong><i
                                                class="far fa-edit"></i></strong> Requirements </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="day1" class="tab-pane fade">
                                    <div class="p-10 border-bottom">
                                        <h4>University Description</h4>
                                        <p class="m-b-0">Bolu Abant İzzet Baysal University, one of the notewhorthy
                                            univesities in our country, located in an area surrounded by natural
                                            beauties between two metropolis İstanbul and Ankara, was founded on 3 July
                                            1992. The university, which has been developing rapidly since its
                                            foundation, has campuses in the city centre and three districts of Bolu
                                            (Gerede, Mengen, Mudurnu). The main campus of the university, namely İzzet
                                            Baysal Campus, is located in Gölköy, which is 8 km from the city center and
                                            surrounded by a unique natural beauty.The university comprises 16 faculties,
                                            1 institutes, 2 schools, 8 vocational schools and 15 research centers. 1.503
                                            faculty members and 772 administrative staff in the university are proud to
                                            provide a quality and modern educational setting for about 30.976
                                            students.Bolu Abant İzzet Baysal University is a third model as not being
                                            purely a state or foundation university but a state university supported by
                                            a foundation. Bolu Abant İzzet Baysal University has been supported by the
                                            foundation founded by İzzet Baysal, one of the greatest philanthropists in
                                            Turkey. The university has reached an excellent physical structure and
                                            superior technologic infrastructure with the facilities and equipment
                                            investment amounting to 262 million TL as of 2010 funded by İzzet Baysal
                                            Foundation and the state allocation. The Foundation not only supports the
                                            international achievements of academics but also provides scholarship to
                                            successful students.The university aims to become the most rapidly
                                            developing university to go beyond the modern civilization level as
                                            suggested by Mustafa Kemal Atatürk, the founder of Republic of Turkey. To
                                            this end, the university, prioritizing science at international standards,
                                            attaches outmost importance to the national and local needs in training and
                                            education. The university not only provides a research environment that
                                            follows scientific developments and technologies with an international
                                            competetion capacity but also continuoulsy keeps up with the developments to
                                            ensure the best opportunities for students.By this way, Bolu Abant Izzet
                                            Baysal University has covered a lot of ground since it was founded and has
                                            been one of the fastest developing universities.Mission: The mission of Bolu
                                            Abant İzzet Baysal University is to educate qualified human resource that
                                            will lay the foundations of national development in regional borders where
                                            industrialization and economic development increases rapidly and to play an
                                            effective role in regional development. The university also aims to
                                            contribute to technologic developments by establishing the infrastructure
                                            that will educate students who are inquiring, analytic, open to continuous
                                            improvement and development, follow and seek to go beyond modern
                                            civilization level.Vision: The vision of Bolu Abant İzzet Baysal University
                                            is to become a modern university which offers the society its experience in
                                            research, education and teaching by mobilizing all modern educational,
                                            teaching and technical opportunities to train productive people who improve
                                            themselves spiritually, mentally and physically. </p>
                                    </div>
                                </div>
                                <div id="day2" class="tab-pane fade active show">
                                    <div class="p-10 border-bottom">
                                        <div class="accordion accordion-shadow">
                                            <div class="ac-item">
                                                <h5 class="ac-title"> Undergraduate</h5>
                                                <div class="ac-content">
                                                    <p>A wonderful serenity has taken possession of my entire soul, like
                                                        these sweet
                                                        mornings of spring which I enjoy with my whole heart.</p>
                                                    <p>I am alone, and feel the charm of existence in this spot, which
                                                        was created for
                                                        the bliss of souls like mine. I am so happy, my dear friend, so
                                                        absorbed in the
                                                        exquisite sense of mere tranquil existence, that I neglect my
                                                        talents. I should
                                                        be incapable of drawing a single stroke at the present moment;
                                                        and yet I feel
                                                        that I never was a greater artist than now. </p>
                                                </div>
                                            </div>
                                            <div class="ac-item ac-active">
                                                <h5 class="ac-title"> Postgraduate</h5>
                                                <div class="ac-content">
                                                    <p>When, while the lovely valley teems with vapour around me, and
                                                        the meridian sun
                                                        strikes the upper surface of the impenetrable foliage of my
                                                        trees, and but a few
                                                        stray gleams steal into the inner sanctuary.</p>
                                                    <p>I throw myself down among the tall grass by the trickling stream;
                                                        and, as I lie
                                                        close to the earth, a thousand unknown plants are noticed by
                                                        me</p>
                                                </div>
                                            </div>
                                            <div class="ac-item">
                                                <h5 class="ac-title"> PhD</h5>
                                                <div class="ac-content">
                                                    <p>As it floats around us in an eternity of bliss; and then, my
                                                        friend, when
                                                        darkness overspreads my eyes, and heaven and earth seem to dwell
                                                        in my soul and
                                                        absorb its power, like the form of a beloved mistress</p>
                                                    <p>I often think with longing, Oh, would I could describe these
                                                        conceptions, could
                                                        impress upon paper all that is living so full and warm within
                                                        me, that it might
                                                        be the mirror of my soul, as my soul is the mirror of the
                                                        infinite God! O my
                                                        friend — but it is too much for my strength — I sink under the
                                                        weight of the
                                                        splendour of these visions!”</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="day3" class="tab-pane fade">
                                    <div class="p-10 border-bottom">
                                        <h4>REQUIRED DOCUMENTS FOR APPLICATION</h4>
                                        <p class="m-b-0">Please provide notarized translations of your documents if they
                                            are in any language other than English and Turkish.
                                        <ul>
                                            <li>Copy of your Passport with personal information page on it. If you don’t
                                                have a valid international passport at the time of application, please
                                                provide a copy of your national ID
                                            </li>
                                            <li>Copy of an official document certifying successful completion of high
                                                school (diploma or school leaving certificate) if available at the time
                                                of application. If not available, provide any document demonstrating
                                                your education status
                                            </li>
                                            <li>Copy of an official high school transcript showing all your courses
                                                taken during your high school study
                                            </li>
                                            <li>Exam results if you are applying with an exam (national or
                                                internationally recognized), such as SAT
                                            </li>
                                            <li>Copy of English language proficiency exam if available</li>
                                            <li>Copy of Turkish language proficiency exam for Turkish taught degree
                                                programs
                                            </li>
                                            <li>Letter of Intent</li>
                                            <li>Reference Letter</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="col-lg-12 text-dark text-left">
                            <h3>City Satisfaction</h3>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-2 text-center"><span class="pie-chart" data-color="#ed1b2e"
                                                                        data-percent="81" data-size="100"
                                                                        data-width="3"> <span
                                            class="percent text-small"></span> </span>
                                    <p>Access To Medical Services</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <div class="pie-chart" data-percent="81" data-size="100" data-color="#ed1b2e"
                                         data-width="3"><span class="percent text-small"></span></div>
                                    <p>Access To Mental Health Services</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <div class="pie-chart" data-percent="90" data-size="100" data-color="#ed1b2e"
                                         data-width="3"><span class="percent text-small"></span></div>
                                    <p>Sense Of Feeling Welcome In Country</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <div class="pie-chart" data-percent="90" data-size="100" data-color="#ed1b2e"
                                         data-width="3"><span class="percent text-small"></span></div>
                                    <p>Satisfactions With Overall Living Costs</p>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <div class="pie-chart" data-percent="90" data-size="100" data-color="#ed1b2e"
                                         data-width="3"><span class="percent text-small"></span></div>
                                    <p>Job Opportunities Available While A Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 cardBack">
                        <div class="row pricing-table">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="plan">
                                            <div class="plan-header">
                                                <h5>Time To Get Graduate Job</h5>
                                                <div class="plan-price">1.62<span>/mo</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="plan featured">
                                            <div class="plan-header">
                                                <h5>Average Graduate Income</h5>
                                                <div class="plan-price"><sup>$</sup>458.0<span>/mo</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="plan">
                                            <div class="plan-header">
                                                <h5>Average Alumni Income</h5>
                                                <div class="plan-price"><sup>$</sup>585.0<span>/mo</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @include('inc.applyNowBox')
            </div>
        </div>
    </section>
@endsection
