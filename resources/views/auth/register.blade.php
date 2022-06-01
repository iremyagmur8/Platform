<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') {{Config::get("solaris.site.name")}}</title>
    <link href="/assetWeb/polo/css/plugins.css" rel="stylesheet">
    <link href="/assetWeb/polo/css/style.css" rel="stylesheet">
    <link href="/assetWeb/polo/css/color-variations/purple.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <script src="/assetWeb/polo/js/jquery.js"></script>
</head>
<body class="img register" style="align-items: center;display:grid;">
<section class="fullscreen"
         data-bg-parallax="https://images.pexels.com/photos/7652179/pexels-photo-7652179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    <div class="parallax-container img-loaded"
         data-bg="https://images.pexels.com/photos/7652179/pexels-photo-7652179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
         data-velocity="-.140"
         style="background: url(&quot;https://images.pexels.com/photos/7652179/pexels-photo-7652179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940&quot;);"
         data-ll-status="loaded"></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2 class="heading-section text-light" style="font-size: 38px; font-weight: 900;">Platform</h2>
            </div>
            <h4 class="main-title mb-3" style="color:#fff  !important ">Yeni Hesap Aç</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 center p-30 boxShadow b-r-6">
                <form class="form-transparent-grey" method="POST" action="{{ route('register') }}">
                    @if($errors->any())
                        <div class="alert alert-danger text-center">
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        </div>
                    @endif
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="{{$type}}"/>
                    <div class="row">

                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Adınız</label>
                            <input type="text" value="" name="name" placeholder="Adınız"
                                   class="form-control  @error('name') is-invalid @enderror">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Soyadınız</label>
                            <input type="text" value="" name="surname" placeholder="Soyadınız"
                                   class="form-control  @error('name') is-invalid @enderror">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" value="" name="email" placeholder="Email"
                                   class="form-control  @error('email') is-invalid @enderror">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Şifre</label>
                            <input id="password" type="password" placeholder="Şifre"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="sr-only">Şifre Tekrar</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   placeholder="Şifre Tekrar" name="password_confirmation" required
                                   autocomplete="new-password">
                        </div>

                        <div class="col-lg-12 form-group text-center">
                            <button class="btn" type="submit">Kayıt Ol</button>
                        </div>
                    </div>
                </form>
                <p class="small text-light">Zaten üye misiniz? <a href="/login" style="color: #ed1b2f !important;">Giriş Yap</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
</body>
