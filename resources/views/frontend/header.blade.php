<!DOCTYPE html>
<html lang="en">

<head>
	<!--
    Basic Page Needs
    ==================================================
    -->
	<meta charset="utf-8">
	<title>{{config('app.name')}}</title>
	<link rel="shortcut icon" href="{{ url('assets/frontassets/logo/favicon.jpg')}}" type="image/x-icon">

	<!--
    Mobile Specific Metas
    ==================================================
    -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--
    CSS
    ==================================================
    -->
	<!-- Bootstrap-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/bootstrap.min.css')}}">
	<!-- Animation-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/animate.css')}}">
	<!-- Morris -->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/morris.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/responsive.css')}}">
	<!-- FontAwesome-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/font-awesome.min.css')}}">
	<!-- Icon font-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/icon-font.css')}}">
	<!-- Owl Carousel-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/owl.carousel.min.css')}}">
	<!-- Owl Theme -->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/owl.theme.default.min.css')}}">
	<!-- Colorbox-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/colorbox.css')}}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/style.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ url('assets/frontassets/css/responsive.css')}}">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
	<!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
</head>

<body>

	<div class="body-inner">
		<div class="site-top">
			<div class="topbar-transparent with-bg" id="top-bar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-9 col-sm-12">
							<ul class="top-info" style="width: 1000px;">
								<li><span class="info-icon"><i class="icon icon-phone3"></i></span>
									<div class="info-wrapper">
										<p class="info-title"> (+ 44) 207 712 1576 </p>
									</div>
								</li>
								<li><span class="info-icon"><i class="icon icon-envelope"></i></span>
									<div class="info-wrapper">
										<p class="info-title">support@kannexa.com</p>
									</div>
								</li>
								<li class="last"><span class="info-icon"><i class="icon icon-map-marker2"></i></span>
									<div class="info-wrapper">
										<p class="info-title">1, Canada Square, Canary Wharf, London, E14 5AB United Kingdom</p>
									</div>
								</li>
							</ul>
							<!-- Ul end-->
						</div>
						<!-- Top info end-->
						<div class="col-lg-3 col-md-3 col-sm-12 text-lg-right text-md-center">
							<ul class="top-social">
								<li>
									<a title="Facebook" href="https://www.facebook.com/">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="https://twitter.com/">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
									<a title="Android" href="https://www.android.com/">
										<span class="social-icon"><i class="fa fa-android"></i></span>
									</a>
									<a title="Apple" href="https://www.apple.com/">
										<span class="social-icon"><i class="fa fa-apple"></i></span>
									</a>
									<a title="Instagram" href="https://www.instagram.com/">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>
								</li>
								<!-- List End -->
							</ul>
							<!-- Top Social End -->
						</div>
						<!--Col end-->
					</div>
					<!-- Content row end-->
				</div>
				<!-- Container end-->
			</div>
			<!-- Topbar end-->

			<header class="header-standard header-transparent" id="header">
				<div class="container">
					<div class="site-nav-inner">
						<nav class="navbar navbar-expand-lg">
							<div class="navbar-brand navbar-header">
								<div class="logo">
									<a href="{{ url('/')}}">
										<img src="{{ url('assets/frontassets/logo/logo.png')}}" alt="" style="">
									</a>
								</div>
								<!-- logo end-->
							</div>
							<!-- Navbar brand end-->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
							<!-- End of Navbar toggler-->
							<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="active"><a href="{{ url('/')}}">Home</a></li>
									<!-- Home li end-->
									<li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Company<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="{{ route('about')}}">About Us</a></li>
											<li><a href="{{ route('team')}}">Our Team</a></li>
											
											<li><a href="{{ route('testimonial')}}">Testimonial</a></li>
											<li><a href="{{ route('career')}}">Career</a></li>
											
										</ul>
									</li>
									<!-- Pages li end-->
									<li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Our Services<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
		                                 <li><a href="{{ route('service','prosumerplatform')}}">Prosumer Platform</a></li>
		                                 <li><a href="{{ route('service','moneymanagement')}}">Money Management</a></li>
		                                 <li><a href="{{ route('service','productiveapplications')}}">Productive Applications</a></li>
		                                 <li><a href="{{ route('service','accountingcompliance')}}">Accounting & Compliance</a></li>
		                                 <li><a href="{{ route('service','enterprisesolution')}}">Enterprise Solution </a></li>

		                              	</ul>
									</li>
									<!-- Service li end-->
									<li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Features<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											 <li><a href="{{ route('fetures','moneytransfer')}}">Money transfer</a></li>
			                                 <li><a href="{{ route('fetures','exchangerate')}}">Exchange Rate</a></li>
			                                 <li><a href="{{ route('fetures','comparerates')}}">Compare Rates</a></li>
			                                 <li><a href="{{ route('fetures','membershiptype')}}">Membership Type</a></li>
			                                 <li><a href="{{ route('fetures','openbankaccount')}}">Open Bank Account</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Resources<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											
											<li><a href="{{ route('pricing')}}">Pricing Table</a></li>
											<li><a href="{{ route('faq')}}">Faq</a></li>
										</ul>
									</li>
									<!-- Features li end-->

									<!-- News li end-->
									<li><a href="{{ route('contact')}}">Contact</a></li>
									<li><a class="slider btn btn-m btn-primary" href="{{ route('login.form')}}">Login</a></li>
                           			<li><a class="slider btn btn-m btn-border" href="{{ route('register.form')}}">Sign Up</a></li>
								</ul>
								<!--Nav ul end-->
							</div>
						</nav>
						<!-- Collapse end-->

						<!-- Site search end-->
					</div>
					<!-- Site nav inner end-->
				</div>
				<!-- Container end-->
			</header>
			<!-- Header end-->
		</div>
