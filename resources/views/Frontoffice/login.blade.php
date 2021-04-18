<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from huro.cssninja.io/auth-login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 12:54:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Qr université Centrale</title>
    <link rel="icon" type="image/png" href={{asset('Backoffice/assets/img/favicon.png')}} />

    <!--Core CSS -->
    <link rel="stylesheet" href={{asset('Backoffice/assets/css/app.css')}}>
    <link rel="stylesheet" href={{asset('Backoffice/assets/css/main.css')}}>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

</head>

<body>
    <div id="huro-app" class="app-wrapper">

        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <div class="auth-wrapper">

            <div class="auth-wrapper-inner is-single">

                <!--Fake navigation-->
                <div class="auth-nav">
                    <div class="left"></div>
                    <div class="center">
                        <a href="index-2.html" class="header-item">
                            <img class="light-image" src={{asset('img/header.png')}} alt="">
                            <img class="dark-image" src={{asset('img/header.png')}} alt="">
                        </a>
                    </div>
                    <div class="right">
                        <label class="dark-mode ml-auto">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>
                    </div>
                </div>

                <!--Single Centered Form-->
                <div class="single-form-wrap">

                    <div class="inner-wrap">
                        <!--Form Title-->
                        <div class="auth-head">
                            <h2>Bienvenue.</h2>
                            <br>
                            <p>Connectez-vous à votre compte s'il vous plaît</p>
                            {{-- <a href="auth-signup-3.html">I do not have an account yet </a> --}}
                        </div>

                        <!--Form-->
                  
                            
                        <div class="form-card">

                            <form action="{{route('handlelogin')}}" method="post">
                                @csrf
                                <div id="signin-form" class="login-form">
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" type="text" name="login"  placeholder="Username">
                                            <span class="form-icon">
                                                    <i data-feather="user"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" type="password" name="password" placeholder="Password">
                                            <span class="form-icon">
                                                    <i data-feather="lock"></i>
                                                </span>
                                        </div>
                                    </div>

                                    <div class="setting-item">
                                        <label class="form-switch is-primary">
                                            <input type="checkbox" class="is-switch" id="busy-mode-toggle">
                                            <i></i>
                                        </label>
                                        <div class="setting-meta">
                                            <span>Remember Me</span>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="control login">
                                        <button class="button h-button is-danger is-bold is-fullwidth is-raised">Sign In</button>
                                    </div>


                                </div>
                            </form>
                        </div>

                        <div class="forgot-link has-text-centered">
                            <a>Forgot Password?</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Concatenated plugins -->
        <script src={{asset('Backoffice/assets/js/app.js')}}></script>

        <!-- Huro js -->
        <script src={{asset('Backoffice/assets/js/functions.js')}}></script>
        <script src={{asset('Backoffice/assets/js/auth.js')}}></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/auth-login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 12:54:47 GMT -->
</html>































