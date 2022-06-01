@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')

    @isset($cData->place[1])
        <div id="slider" class="inspiro-slider" data-height-xs="360">
            @foreach($cData->place[1] as $key=>$val)
                <div class="slide"
                     style="@isset($val->files[0]->file)
                         background-image:url({{Storage::url("images/userfiles/". $val->files[0]->file)}});"
                    @endisset>
                    <div class="container">
                        <div class="slide-captions">
                            <!-- Captions -->
                            @isset($val->title)<h2
                                data-caption-animation="rotateInUpLeft">{{$val->title}}</h2> @endisset
                            @isset($val->shortdescription)
                                <h3 data-caption-animation="rotateInUpLeft"
                                    data-caption-delay="300">{{$val->shortdescription}}!</h3>
                            @endisset
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset

    @isset($cData->place[2][0])
        <section class="background-grey text-center p-t-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        @isset($cData->place[2][0]->title) <h3
                            style="font-weight: 400;">{{$cData->place[2][0]->title}}</h3> @endisset
                        @isset($cData->place[2][0]->description)
                            <p>{!! $cData->place[2][0]->description !!}</p> @endisset
                    </div>
                    @isset($cData->place[2][0]->buttontext)
                        <div class="col-lg-3">
                            <a type="button" class="btn btn-rounded">{{$cData->place[2][0]->buttontext}}</a>
                        </div>
                    @endisset
                </div>
            </div>
        </section>
    @endisset
    <a href=""></a>
    @isset($cData->place[3])
        <section class="p-b-80 p-t-40 background-grey">
            <div class="container p-0">
                <div class="inner-content">
                    <div class="arrow" style="background-image: url(/images/arrow-1.png);">
                    </div>
                    <div class="row clearfix">
                        @foreach($cData->place[3] as $key=>$val)
                            <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                                <div class="processing-block-two">
                                    <div class="inner-box text-center">
                                        <figure class="icon-box">
                                            <img src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                                                 alt=""></figure>
                                        <h3>{{$val->title}}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endisset
    @isset($cData->place[4])
        <section class="place4 p-t-0">
            <div class="grid-articles grid-articles-v2">
                @foreach($cData->place[4] as $key=>$val)
                    <article class="post-entry">
                        <a href="#" class="post-image"><img alt=""
                                                            src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">{{$val->title}}</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    @endisset
    @isset($cData->place[5])
        <section class="page-content place5 m-t-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-b-30">
                        <div class="description">
                            @isset($cData->place[5][0]->title)   <h2>{{$cData->place[5][0]->title}}</h2> @endisset
                            @isset($cData->place[5][0]->shortdescription) {{$cData->place[5][0]->shortdescription}} @endisset
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="carousel team-members team-members-shadow" data-items="5">
                            @foreach($cData->place[5] as $key=>$val)
                                @if(!$loop->first)
                                    <div class="team-member">
                                        @isset($val->files[0]->file)
                                            <div class="team-image m-b-10 m-t-20">
                                                <img src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}">
                                            </div>
                                        @endisset
                                        @isset($val->title)
                                            <div class="team-desc">
                                                <h3>{{$val->title}}</h3>
                                            </div>
                                        @endisset
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset
    @isset($cData->place[6])
        <section class="text-light place6 m-t-50"
                 @isset($cData->place[6][0]->files[0]->file) style="background:url({{Storage::url("images/userfiles/". $cData->place[6][0]->files[0]->file)}});" @endisset>
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    @isset($cData->place[6][0]->title)
                        <div class="col-lg-5 m-0 p-0">
                            <div class="col-lg-12 animated fadeIn visible" data-animate="fadeIn">
                                <div class="heading-text heading-section">
                                    <h4>{{$cData->place[6][0]->title}}</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <a type="button" class="btn btn-rounded">Find a university</a>
                                    </div>
                                    <div class="col-lg-5 ">
                                        <a type="button" class="btn btn-rounded bgColor2">Find a program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset
                    <div class="col-lg-7 p-t-50">
                        <div class="row">
                            @foreach($cData->place[6] as $key=>$val)
                                @if(!$loop->first)
                                    <div class="col-lg-6 animated flipInY visible" data-animate="flipInY"
                                         data-animate-delay="100">
                                        <div class="icon-box effect small clean">
                                            @isset($val->files[0]->file)
                                                <div class="icon">
                                                    <a href="#"><img
                                                            src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                                                            width="50" alt=""></a>
                                                </div>
                                            @endisset
                                            @isset($val->title)<h3>{{$val->title}}</h3> @endisset
                                            @isset($val->shortdescription)<p>{{$val->shortdescription}}</p>@endisset
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset
    <section class="py-5">
        <div class="container">
            <div class="description mb-3">
                <h2>Dormitories</h2>
            </div>
            @include('inc.dormitoriesGridBox')

        </div>
    </section>
    <section class="p-t-150 p-b-200"
             style="background-image:url(/images/background-4.png); background-position:71% 22%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="m-b-10">Get in Touch with Us</h2>
                            <p class="lead">Our Headquarters are in Australia, USA, Europe, Asia, Africa </p>
                        </div>
                        <div class="col-lg-6 m-b-30">
                            <address>
                                <strong>Headquarters:</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <strong>Phone:</strong> (+1) 1234 56789
                            <br>
                            <strong>Fax:</strong> (+1) 12 3456 78910
                            <br>
                            <strong>Email:</strong> info@inspiro-media.com
                        </div>
                        <div class="col-lg-6 m-b-30">
                            <address>
                                <strong>Headquarters:</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <strong>Phone:</strong> (+1) 1234 56789
                            <br>
                            <strong>Fax:</strong> (+1) 12 3456 78910
                            <br>
                            <strong>Email:</strong> info@inspiro-media.com
                        </div>
                        <div class="col-lg-12 m-b-30">
                            <h4>We are social</h4>
                            <div class="social-icons social-icons-light social-icons-colored-hover">
                                <ul>
                                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="social-behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li class="social-flickr"><a href="#"><i class="fab fa-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                          method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" required name="widget-contact-form-name"
                                       class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" required name="widget-contact-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" required name="widget-contact-form-message" rows="8"
                                      class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light" type="submit" id="form-submit"><i
                                    class="fa fa-paper-plane"></i>&nbsp;Send message
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact -->

    <!-- Subscribe form -->
    <section class="background-colored text-center p-t-50 p-b-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="widget widget-newsletter">
                        <form class="widget-subscribe-form" action="include/subscribe-form.php" role="form"
                              method="post" novalidate>
                            <h3 class="text-light">Subscribe to our Newsletter</h3>


                            <div class="input-group mb-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                </div>
                                <input type="email" required name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="Enter your Email">

                                <div class="input-group-append">
                                    <button type="submit" id="widget-subscribe-submit-button" class="btn btn-light">
                                        Subscribe
                                    </button>
                                </div>

                            </div>


                            <small class="text-light">Stay informed on our latest news!</small>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
