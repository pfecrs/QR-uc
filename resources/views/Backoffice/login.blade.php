<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from huro.cssninja.io/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 12:54:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> QR université centrale</title>
    <link rel="icon" type="image/png" href={{asset('img/header.png')}} />

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

            <!-- Wrapper -->
            <div class="auth-wrapper-inner columns is-gapless">

                <!-- Image section (hidden on mobile) -->
                <div class="column login-column is-8 h-hidden-mobile h-hidden-tablet-p hero-banner">
                    <div class="hero login-hero is-fullheight is-app-grey">
                        <div class="hero-body">
                            <div class="columns">
                                <div class="column is-10 is-offset-1">
                                    <img class="light-image has-light-shadow has-light-border" src={{asset('img/cover.png')}}  halt="">
                                    <img class="dark-image has-light-shadow" src={{asset('img/cover.png')}} alt="">
                                </div>
                            </div>
                        </div>
                        <div class="hero-footer">
                            <p class="has-text-centered"></p>
                        </div>
                    </div>
                </div>

                <!-- Form section -->
                <div class="column is-4">
                    <div class="hero is-fullheight is-white">
                        <div class="hero-heading">
                            <label class="dark-mode ml-auto">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                            <div class="auth-logo">
                                <a href="index-2.html">
                                    <img class="top-logo light-image" src={{asset('img/logo.png')}} alt="">
                                    <img class="top-logo dark-image" src={{asset('img/logo.png')}} alt="">
                                </a>
                            </div>
                        </div>
                        <div class="hero-body">
                            <div class="container">
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="auth-content">
                                            <h2>Welcome Back.</h2>
                                            <p>Please sign in to your account</p>
                                            <a href="auth-signup-2.html">I do not have an account yet </a>
                                        </div>
                                        <div class="auth-form-wrapper">
                                            <!-- Login Form -->
                                            <form action="{{route('handleAdminLogin')}}" method="post">
                                                @csrf
                                            
                                                <div id="signin-form" class="login-form">
                                                    <!-- Input -->
                                                    <div class="field">
                                                        <div class="control has-icon">
                                                            <input class="input" type="text" name="login" placeholder="Login">
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
                                                            <input type="checkbox" class="is-switch">
                                                            <i></i>
                                                        </label>
                                                        <div class="setting-meta">
                                                            <span>Remember Me</span>
                                                        </div>
                                                    </div>

                                                    <!-- Submit -->
                                                    <div class="control login">
                                                        <button class="button h-button is-primary is-bold is-fullwidth is-raised">Sign In</button>
                                                    </div>

                                                    <div class="forgot-link has-text-centered">
                                                        <a>Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="forgot-link has-text-right">
            <div class="content has-text-right ">
                <p>
                  2021 © Design and Development by : <strong><a href="https://thorsys.co">Thor System</a></strong> &nbsp; &nbsp; &nbsp;
             
                </p>
               
              </div>
        </div>

        <!-- Concatenated plugins -->
        <script src={{asset('Backoffice/assets/js/app.js')}}></script>

        <!-- Huro js -->
        <script src={{asset('Backoffice/assets/js/functions.js')}}></script>
        <script src={{asset('Backoffice/assets/js/auth.js')}}></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 12:54:47 GMT -->
</html>