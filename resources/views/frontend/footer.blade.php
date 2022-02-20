<footer class="footer" id="footer">
<div class="footer-top">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-lg-4 footer-box"><i class="icon icon-map-marker2"></i>
					<div class="footer-box-content">
						<h3>Head Office</h3>
						<p>1, Canada Square, Canary Wharf, London, E14 5AB United Kingdom</p>
					</div>
				</div>
				
				<div class="col-lg-4 footer-box"><i class="icon icon-phone3"></i>
					<div class="footer-box-content">
						<h3>Call Us</h3>
						<p>(+ 44) 207 712 1576 </p>
					</div>
				</div>
				
				<div class="col-lg-4 footer-box"><i class="icon icon-envelope"></i>
					<div class="footer-box-content">
						<h3>Mail Us</h3>
						<p>support@kannexa.com</p>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="footer-main bg-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 footer-widget footer-about">
					<div class="footer-logo">
						<a href="{{ url('/')}}">
							<img src="{{ url('assets/frontassets/logo/footer-logo.png')}}" alt="" style="">
						</a>
					</div>
					<p>We are a award winning multinational company. We believe in quality and standard worldwide.</p>
					<div class="footer-social">
						<ul>
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.android.com/"><i class="fa fa-android"></i></a></li>
							<li><a href="https://www.apple.com/"><i class="fa fa-apple"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					
				</div>
				
				<div class="col-lg-4 col-md-12 footer-widget">
					<h3 class="widget-title">Useful Links</h3>
					<ul class="list-dash">
						<li><a href="{{ route('about')}}">About Us</a></li>
						<li><a href="{{ route('service','prosumerplatform')}}">Our Services</a></li>
						<li><a href="{{ route('team')}}">Our Team</a></li>
						
						
						<li><a href="{{ route('career')}}">Career</a></li>
						<li><a href="{{ route('blog') }}">Our Blog</a></li>
						<li><a href="{{ route('contact')}}">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-12W footer-widget">
					<h3 class="widget-title">Subscribe</h3>
					<div class="newsletter-introtext">Don’t miss to subscribe to our new feeds, kindly fill the form below.</div>
					<form class="newsletter-form" id="newsletter-form" action="#" method="post">
						<div class="form-group">
							<input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email Address" autocomplete="off">
							<button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="copyright-info"><span>Copyright © 2018 Kannexa. All Rights Reserved.</span></div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="{{ route('about')}}">About</a></li>
							<li><a href="{{ route('privacy')}} ">Privacy Policy</a></li>
							<li><a href="{{ route('terms')}}">Terms & Condition</a></li>
							
							<li><a href="{{ route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>

</footer>


<div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">

	<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
		
	</button>
	
</div>
<div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
	<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
		
	</button>

</div>



<script type="text/javascript" src="{{ url('assets/frontassets/js/jquery.js')}}"></script>

<script type="text/javascript" src="{{ url('assets/frontassets/js/popper.min.js')}}"></script>
<!-- Bootstrap jQuery-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/owl.carousel.min.js')}}"></script>
<!-- Counter-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/waypoints.min.js')}}"></script>
<!-- Color box-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/jquery.colorbox.js')}}"></script>
<!-- Smoothscroll-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/smoothscroll.js')}}"></script>
<!-- Google Map API Key-->
<script type="text/javascript"
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
<!-- Google Map Plugin-->
<script type="text/javascript" src="{{ url('assets/frontassets/js/gmap3.js')}}"></script>
<!-- For Chart-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script type="text/javascript" src="{{ url('assets/frontassets/js/morris.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/frontassets/js/packery.js')}}"></script>
<script type="text/javascript">
    Morris.Area({
        element: 'graph',
        behaveLikeLine: true,
        lineColors: ['#e36217', '#2154cf', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
        data: [{
            x: '2012',
            y: 9,
            z: 7
        },
            {
                x: '2013',
                y: 6,
                z: 8
            },
            {
                x: '2014',
                y: 6,
                z: 5
            },
            {
                x: '2015',
                y: 8,
                z: 10
            }
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        labels: ['Y', 'Z']
    });
</script>

<script type="text/javascript" src="{{ url('assets/frontassets/js/custom.js')}}"></script>
@include('common.chatbot')
</div>

</body>

</html>
