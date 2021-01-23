<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>Your Order Management Solution</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="{{ asset('biz/img/favicon.png') }}">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
        <link href="{{ asset('biz/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/cubeportfolio.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/magnific-popup.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/owl-carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/slicknav.min.css') }}" rel="stylesheet">
        

		<!-- Bizwheel Stylesheet -->
        <link href="{{ asset('biz/css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('biz/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('biz/css/responsive.css') }}" rel="stylesheet">
		<!-- Bizwheel Custom Modification -->
		<link href="{{ asset('/css/biz.css') }}" rel="stylesheet">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		[endif]-->

        <!-- Custom Styles -->
        @stack('styles')
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: abovestyle.bd@gmail.com</div>	
								<div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 06PM</div> 
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>															
								<div class="button">
								@if (Auth::check())
									<a href="/" class="bizwheel-btn">Dashboard</a>
									<a href="{{ route('logout') }}" 
										onclick="event.preventDefault();document.getElementById('logout-form').submit();"
									class="bizwheel-btn biz-btn-header" >Logout</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								@else
									<a href="{{ route('login') }}" class="bizwheel-btn">Login</a>
									<a href="{{ route('register') }}" class="bizwheel-btn biz-btn-header">Register</a>
								@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="/">
													<img src="{{ asset('biz/img/logo-as.png') }}" alt="#">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="/home">Home</a></li>
																<li><a href="services.html">Our Services</a></li>
																<li><a href="portfolio.html">Our Portfolio</a></li>
																<li class="icon-active"><a href="#">Blog</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Blog Grid</a></li>
																		<li><a href="blog-single.html">Blog Single</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Pages</a>
																	<ul class="sub-menu">
																		<li><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li>
																<li><a href="contact.html">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
		</header>
		<!--/ End Header -->
		<!-- Main -->
        <div id="app">

            <!-- Content -->
            @yield('content')

            <!-- Custom scripts -->
            @stack('scripts')

		</div>
		<!--/ End Main -->
		<!-- Footer -->
		<footer class="footer" style="background-image:url('biz/img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="{{ asset('biz/img/logo-as-white.png') }}" alt="logo">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>You take care of your business ad in Social Networking Platform, we will take care of your order.</p>
								</div>	
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<div class="button"><a href="#" class="bizwheel-btn">About Us</a></div>
							</div>		
							<!--/ End Footer About -->		
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Company</h3>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Pricing Plan</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Blog Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 15, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-3 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Contact</h3>
								<p>Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>+(600) 125-4985-214</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@yoursite.com</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>House Building Uttara</li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">AboveStyle</a>. All rights reseved.</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
		<!-- Jquery JS -->
        <script src="{{ asset('biz/js/jquery.min.js') }}"></script>
        <script src="{{ asset('biz/js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- Popper JS -->
        <script src="{{ asset('biz/js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
        <script src="{{ asset('biz/js/bootstrap.min.js') }}"></script>
		<!-- Modernizr JS -->
        <script src="{{ asset('biz/js/modernizr.min.js') }}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset('biz/js/scrollup.js') }}"></script>
		<!-- FacnyBox JS -->
        <script src="{{ asset('biz/js/jquery-fancybox.min.js') }}"></script>
		<!-- Cube Portfolio JS -->
        <script src="{{ asset('biz/js/cubeportfolio.min.js') }}"></script>
		<!-- Slick Nav JS -->
        <script src="{{ asset('biz/js/slicknav.min.js') }}"></script>
		<!-- Slick Slider JS -->
        <script src="{{ asset('biz/js/owl-carousel.min.js') }}"></script>
		<!-- Easing JS -->
        <script src="{{ asset('biz/js/easing.js') }}"></script>
		<!-- Magnipic Popup JS -->
        <script src="{{ asset('biz/js/magnific-popup.min.js') }}"></script>
		<!-- Active JS -->
        <script src="{{ asset('biz/js/active.js') }}"></script>
	</body>
</html>