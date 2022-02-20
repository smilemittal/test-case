<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
          content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="{{ url('assets/dashboard/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/dashboard/app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/css/pages/chat-application.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('assets/dashboard/app-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    <style type="text/css">
        .border-top-golden {
            border-top: 1px solid #fbc02d;
        }

        .border-top-light {
            border-top: 1px solid #fa62e7;
        }

        .card .card-title {
            font-weight: 700;
            letter-spacing: 0.05rem;
            font-size: 1.07rem;
        }
    </style>

    @stack('dashboard.scripts-head')
</head>

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"  data-color="bg-gradient-x-purple-blue" data-col="2-columns">

@include('dashboard.partials.site-header')
@include('dashboard.partials.site-sidebar')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row"></div>

        <div class="content-body">
            @yield('dashboard.content-view')
        </div>
    </div>
</div>

@include('dashboard.partials.site-footer')

<!-- BEGIN: Vendor JS-->
<script src="{{ url('assets/dashboard/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->
<script src="{{ url('assets/dashboard/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{ url('assets/dashboard/app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js')}}"
        type="text/javascript"></script>
<script src="{{ url('assets/dashboard/app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')}}"
        type="text/javascript"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('assets/dashboard/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{ url('assets/dashboard/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
        type="text/javascript"></script>
<!-- END: Page Vendor JS-->
<script src="{{ url('assets/dashboard/app-assets/js/scripts/charts/chartjs/line/line.js')}}"
        type="text/javascript"></script>
<!-- BEGIN: Theme JS-->
<script src="{{ url('assets/dashboard/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{ url('assets/dashboard/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END: Theme JS-->
<script src="{{ url('assets/dashboard/app-assets/js/scripts/charts/chartjs/line/line-area.js')}}"
        type="text/javascript"></script>

<script src="{{ url('assets/dashboard/app-assets/js/scripts/charts/chartjs/bar/column.js')}}"
        type="text/javascript"></script>
<!-- BEGIN: Page JS-->
<script src="{{ url('assets/dashboard/app-assets/js/scripts/pages/dashboard-analytics.js')}}"
        type="text/javascript"></script>
<!-- END: Page JS-->
<script type="text/javascript">
    function getlinechart() {
        $('#linechart').css('display', 'block');
        $('#lineareachart').css('display', 'none');
        $('#donate').css('display', 'none');
    }

    function getlineareachart() {
        $('#linechart').css('display', 'none');
        $('#lineareachart').css('display', 'block');
        $('#donate').css('display', 'none');
    }

    function donate() {
        $('#linechart').css('display', 'none');
        $('#lineareachart').css('display', 'none');
        $('#donate').css('display', 'block');
    }
</script>

@stack('dashboard.scripts-footer')
@include('common.chatbot')

</body>
<!-- END: Body-->

</html>
