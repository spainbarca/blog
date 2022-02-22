{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>SpainBarca &amp; UI Framework</title>

  <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
  <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

  <!-- Fonts and Styles -->
  @yield('css_before')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">

  <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
  @yield('css_after')

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
  </script>
</head>

<body>
    <div id="page-container">
              <main id="main-container">
    <div class="bg-image" style="background-image: url('media/photos/photo19@2x.jpg');">
      <div class="row g-0 justify-content-center bg-primary-dark-op">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
          <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
            <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
              <div class="mb-2 text-center">
                <a class="link-fx fw-bold fs-1" href="index.html">
                  <span class="text-dark">Spain</span><span class="text-primary">Barca</span>
                </a>
                <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
              </div>
              <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST" novalidate="novalidate">
                <div class="mb-4">
                  <div class="input-group input-group-lg">
                    <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Username">
                    <span class="input-group-text">
                      <i class="fa fa-user-circle"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="input-group input-group-lg">
                    <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password">
                    <span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
                  </div>
                </div>
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked="">
                    <label class="form-check-label" for="login-remember-me">Remember Me</label>
                  </div>
                  <div class="fw-semibold fs-sm py-1">
                    <a href="javascript:void(0)">Forgot Password?</a>
                  </div>
                </div>
                <div class="text-center mb-4">
                  <button type="submit" class="btn btn-hero btn-primary">
                    <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                  </button>
                </div>
              </form>
            </div>
            <div class="block-content bg-body">
              <div class="d-flex justify-content-center text-center push">
                <a class="item item-circle item-tiny me-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xwork active" data-toggle="theme" data-theme="{{ mix('/css/themes/xwork.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xmodern" data-toggle="theme" data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xeco" data-toggle="theme" data-theme="{{ mix('/css/themes/xeco.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xsmooth" data-toggle="theme" data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xinspire" data-toggle="theme" data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xdream" data-toggle="theme" data-theme="{{ mix('/css/themes/xdream.css') }}" href="#"></a>
                <a class="item item-circle item-tiny me-1 bg-xpro" data-toggle="theme" data-theme="{{ mix('/css/themes/xpro.css') }}" href="#"></a>
                <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="{{ mix('/css/themes/xplay.css') }}" href="#"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </main>
      </div>

    <iframe src="chrome-extension://kbbdabhdfibnancpjfhlkhafgdilcnji/./html/sources.html" allow="camera" style="display: none;"></iframe><iframe src="chrome-extension://kbbdabhdfibnancpjfhlkhafgdilcnji/./html/audiosources.html" allow="microphone" style="display: none;"></iframe><style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style></body>

<!-- Dashmix Core JS -->
<script src="{{ mix('js/dashmix.app.js') }}"></script>

  <!-- Laravel Original JS -->
  <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

<script src="js/lib/jquery.min.js"></script>
<script src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="js/pages/op_auth_signin.min.js" gapi_processed="true"></script>


@yield('js_after')

</html>

