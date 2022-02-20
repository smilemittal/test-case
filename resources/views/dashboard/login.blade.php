<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Login - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="{{ url('assets/frontassets/register/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/frontassets/register/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/app-assets/css/pages/login-register.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontassets/register/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <style>
        .register-wrp .card{
            background-color: rgba(255,255,255,0.6);
        }
        .register-wrp .card .card-header{
            background-color: transparent;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0 register-wrp">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center mb-1">
                                        <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                    </div>
                                    <div class="font-medium-5  text-center">
                                        Member Login
                                    </div>
                                </div>
                                <div class="card-content">

                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{ route('login.authenticate') }}" method="post">
                                            @csrf

                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input name="username" type="text" class="form-control " id="user-name" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>

                                                @error('username')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </fieldset>

                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input name="password" type="password" class="form-control " id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>

                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left"></div>
                                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 "><span>OR Sign Up Using</span></p>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook"><span class="ft-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter"><span class="ft-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram"><span class="ft-instagram"></span></a>
                                    </div>

                                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>Don't have an account ? <a href="{{ route('register.form') }}" class="card-link">Sign Up</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
