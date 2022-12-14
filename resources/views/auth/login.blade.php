<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-31.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 03:54:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xmee | Login and Register Form Html Templates</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout31">
        <span class="fxt-shape fxt-animation-active"></span>
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <a href="login-31.html" class="fxt-logo"><img src="{{ asset('img/logo-31.png') }}" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">We're a Digital Agency.</h1>
                    </div>
                    <div class="fxt-login-option">
                        <ul>
                            <li class="fxt-transformY-50 fxt-transition-delay-6"><a href="#">Sing in with Google</a></li>
                            <li class="fxt-transformY-50 fxt-transition-delay-7"><a href="#">Sing in with Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-page-switcher">
                    <h2 class="fxt-page-title mr-3">Login</h2>
                    <ul class="fxt-switcher-wrap">
                        <li><a href="login-31.html" class="fxt-switcher-btn active">Login</a></li>
                        <li><a href="register-31.html" class="fxt-switcher-btn">Register</a></li>
                    </ul>
                </div>
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                        <form method="POST" action="{{ route('login') }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="fxt-checkbox-wrap">
                                            <div class="fxt-checkbox-box mr-3">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1" class="ps-4">Keep me logged in</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="fxt-switcher-text">Forgot Password</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="fxt-btn-fill">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="fxt-switcher-description">Don't have an account?<a href="register-31.html" class="fxt-switcher-text ms-1">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-31.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 03:54:57 GMT -->
</html>