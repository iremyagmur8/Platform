<?php

function sanitize_output($buffer)
{

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('title') {{Config::get("solaris.site.name")}}</title>
    <!-- Stylesheets & Fonts -->
    <link href="/assetWeb/polo/css/plugins.css" rel="stylesheet">
    <link href="/assetWeb/polo/css/style.css" rel="stylesheet">

    <!-- Template color -->
    <link href="/assetWeb/polo/css/color-variations/purple.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <script src="/assetWeb/polo/js/jquery.js"></script>
    @isset($amp)
        <link rel="amphtml" href="{{$amp}}"/> @endisset
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{Config::get("solaris.site.google")}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{Config::get("solaris.site.google")}}');
    </script>
</head>

<body>


<!-- Body Inner -->

<div class="body-inner">
    <div id="topbar" @if (Auth::check()) @if(Auth()->user()->su == 1) class="adminPanel" @endif @endif>
        <div class="container">
            <div class="row align-items-center">
                @if (Auth::check())
                    @if(Auth()->user()->su == 1)
                        <div class="col-md-5">
                            <ul class="top-menu">
                                <li><a href="#"><i class="fas fa-map-marker-alt fa-fw"></i>Platform'a Hoşgeldiniz</a>
                                </li>
                                <li><a href="tel:+(90) 216 577 69 21"><i class="fas fa-phone fa-fw"></i>+(90) 216 577 69
                                        21</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-left m-t-5">
                            <div id="logo"><a href="/">{{Config::get("solaris.site.name")}}</a></div>
                        </div>
                        <div class="col-md-1 d-none d-sm-block ">
                            <ul class="top-menu text-right float-right">
                                <li>
                                    <div class="p-dropdown">
                                        <a class="btn btn-light btn-shadow btn-round"><i class="fas fa-user"></i></a>
                                        <div class="p-dropdown-content">
                                            <div class="widget-myaccount">
                                                <div class="d-block">
                                                    <img class="avatar avatar-lg"
                                                         src="https://openclipart.org/download/247324/abstract-user-flat-1.svg">
                                                </div>
                                                <span>Kullanıcı Adı</span>
                                                <p class="text-muted"></p>
                                                <ul class="text-left">
                                                    <li><a href="/my-profile"><i class="icon-user"></i>Profilim</a></li>
                                                    <li><a href="/solaris"><i class="fas fa-angle-double-right"></i>Solaris'e
                                                            git</a></li>
                                                    <li><a href="/settings"><i class="fas fa-cog"></i>Ayarlar</a></li>
                                                    <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Çıkış
                                                            Yap</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="col-md-12 text-center">
                        <div id="logo">
                            <a href="/">
                                <img src="/images/logo.png" class="logo-default" width="280">
                            </a>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
    <header id="header">
        <div class="header-inner">
            <div class="container">
{{--                <!--Logo-->--}}
{{--                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i--}}
{{--                                class="icon-x"></i></a>--}}
{{--                    <form class="search-form" action="search-results-page.html" method="get">--}}
{{--                        <input class="form-control" name="q" type="text" placeholder="Type &amp; Search...">--}}
{{--                        <span class="text-muted">Start typing &amp; press "Enter" or "ESC" to close</span>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="header-extras">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div id="mainMenu-trigger"><a class="lines-button x"><span class="lines"></span></a></div>

                <div id="mainMenu"
                     class="menu-lines menu-center  @if(Auth::check()) @if(Auth()->user()->su == 1) adminMenu @endif @endif">
                    <div class="container">
                        <nav>
                            <ul>
                                @foreach($vars->menu as $key=>$val)
                                    <li @if(count($val->childs)>0) class="dropdown"
                                        @endif @if (request("page") and request("page")==$val->id) class="current" @endif>

                                        <a href="@if($val->link){{$val->link}}@else{{"/".str_slug($val->title,"-")}}@endif ">
                                            @isset($val->shortdescription) <i
                                                class="{{$val->shortdescription}}"></i> @endisset
                                            {{$val->title}}
                                            @if(count($val->childs)>0)<i class="fas fa-chevron-down"></i> @endif
                                        </a>
                                        @if($val->id == 14)
                                            <ul class="dropdown-menu">
                                                @foreach($vars->academic as $key2=>$val2)
                                                    <li @if(count($val2->childs)>0) @if($val->title == 'Study')
                                                        class="dropdown-submenu" @endif @endif>
                                                        <a href="@if($val2->link){{$val->link}}@else/category/{{str_slug($val->title,"-")."/".str_slug($val2->title,"-")."/".$val2->id}}@endif">
                                                            @isset($val2->shortdescription) <i
                                                                class="{{$val2->shortdescription}}"></i> @endisset
                                                            {{$val2->title}}
                                                        </a>
                                                        @if(count($val2->childs)>0)
                                                            <ul class="dropdown-menu">
                                                                @foreach($val2->childs as $key3=>$val3)
                                                                    <li>
                                                                        <a href="@if($val3->link){{$val3->link}}@else/{{str_slug($val->title,"-")."/".str_slug($val2->title,"-")."/".$val2->id.".htm"}}@endif">
                                                                            @isset($val3->shortdescription) <i
                                                                                class="{{$val3->shortdescription}}"></i> @endisset
                                                                            {{$val3->title}}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            @if(count($val->childs)>0)
                                                <ul class="dropdown-menu">
                                                    @foreach($val->childs as $key2=>$val2)
                                                        <li @if(count($val2->childs)>0) class="dropdown-submenu" @endif>
                                                            <a href="@if($val2->link){{$val->link}}@else/{{str_slug($val->title,"-")."/".str_slug($val2->title,"-")."/".$val2->id}}@endif"">
                                                                @isset($val2->shortdescription) <i
                                                                    class="{{$val2->shortdescription}}"></i> @endisset
                                                                {{$val2->title}}
                                                            </a>
                                                            @if(count($val2->childs)>0)
                                                                <ul class="dropdown-menu">
                                                                    @foreach($val2->childs as $key3=>$val3)
                                                                        <li>
                                                                            <a href="@if($val3->link){{$val3->link}}@else/{{str_slug($val->title,"-")."/".str_slug($val2->title,"-")."/".str_slug($val3->title)."/".$val3->id}}@endif">
                                                                                @isset($val3->shortdescription) <i
                                                                                    class="{{$val3->shortdescription}}"></i> @endisset
                                                                                {{$val3->title}}
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                                @if(Auth::check())
                                    @if(Auth()->user()->su == 1)
                                        <li>
                                            <div>
                                                <a href="/logout" class="button-info-first"><i
                                                        class="fas fa-sign-out-alt"></i>&nbsp;ÇIKIŞ
                                                    YAP</a>
                                            </div>
                                        </li>

                                    @endif
                                @else
                                    <li class="dropdown">
                                        <a href=""><i class="fas fa-user-plus"></i>Register<i
                                                class="fas fa-chevron-down"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="/register/individual"><i
                                                        class="fas fa-user-graduate pr-2"></i>Individual</a>
                                            </li>
                                            <li>
                                                <a href="/register/institutional"><i
                                                        class="fas fa-handshake pr-1"></i>Institutional</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/login"><i class="fas fa-user-alt"></i>Login</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield("content")

<!-- Footer -->
    <footer id="footer">

        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-center">&copy; {{date("Y")}} {{Config::get("solaris.site.name")}} <br> Karip Network<a
                        href="#"
                        target="_blank"
                        rel="noopener"> </a>
               </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->

</div>
<!-- end: Body Inner -->

<!--<div id="cookieNotify" class="modal-strip cookie-notify background-dark" data-delay="1000" data-expire="1"
     data-cookie-name="cookiebar2020_1" data-cookie-enabled="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">
                {{Config::get("solaris.site.cookiedesc")}}
    </div>
    <div class="col-lg-4 text-right sm-text-center sm-center">

        <button type="button" class="btn btn-rounded btn-light btn-sm modal-confirm">
{{Config::get("solaris.site.cookiebutton")}}
    </button>
</div>
</div>
</div>
</div>-->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->

<script src="/assetWeb/polo/js/plugins.js"></script>

<!--Template functions-->
<script src="/assetWeb/polo/js/functions.js"></script>

<!--Template functions-->
<script src="/js/solaris.js"></script>

</body>

</html><?php ob_end_flush();?>
