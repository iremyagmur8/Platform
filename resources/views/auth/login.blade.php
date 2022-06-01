
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">

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

</head>
<body class="img login" style="align-items: center;display:grid;">
<section class="fullscreen" data-bg-parallax="https://images.pexels.com/photos/5669601/pexels-photo-5669601.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    <div class="parallax-container img-loaded" data-bg="https://images.pexels.com/photos/5669601/pexels-photo-5669601.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" data-velocity="-.140" style="background: url(&quot;https://images.pexels.com/photos/5669601/pexels-photo-5669601.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940&quot;);" data-ll-status="loaded"></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2 class="heading-section text-light" style="font-size: 38px; font-weight: 900;">Platform</h2>
            </div>
            <h4 class="main-title mb-3" style="color:#fff  !important ">Giriş Yap</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 center p-30 boxShadow b-r-6">
                <div class="login-wrap p-0">
                    <form method="POST" class="login-form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <x-input id="email" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block form-control" placeholder="Email" type="email" name="email"
                                     :value="old('email')"
                                     required/>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control"
                                   placeholder="Parola"
                                   title="Parola"
                                   required>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="g-recaptcha"
                             data-sitekey="{{env('CAPTCHA_KEY')}}">
                        </div>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="form-group">
                            <div class="col-lg-12 form-group text-center">
                                <button class="btn" type="submit">Giriş Yap</button>
                            </div>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">
                                    <span style="color:White">Beni Hatırla</span>
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Parolamı Unuttum</a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <a href="/register/institutional" style="color:White">Kurumsal Olarak Kaydol&nbsp;<i class="fas fa-long-arrow-alt-right fa-fw"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div>
                                <a href="/register/individual" style="color:White">Bireysel Olarak Kaydol&nbsp;<i class="fas fa-long-arrow-alt-right fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
