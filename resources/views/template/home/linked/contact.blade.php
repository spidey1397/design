<!DOCTYPE html>
<html lang="en">
<head>
	@include('template.home.layout')
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	@include('template.home.content.header')   


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="{{ asset('assets')}}/img/header-bg-2.jpg">
		<div class="container">
			<h1 class="header-title">Contact<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<section class="page-section pt100">
		<div class="container pb100">
			<div class="section-title pt-5">
				<h1>Get in touch</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 contact-info mb-5 mb-lg-0">
					<p>Address: 1481 Creekside Lane Avila Beach, CA 93424 </p>
					<p>Phone: +53 345 7953 32453</p>
					<p>Email: yourmail@gmail.com</p>
					<div class="cf-social">
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="contact-form">
						<input type="text" placeholder="Enter your name">
						<input type="text" placeholder="Enter your email address">
						<textarea placeholder="Message ..."></textarea>
						<button class="site-btn sb-dark">Send</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map-area" id="map-canvas"></div>
	</section>
	<!-- Page section end -->



	@include('template.home.content.footer')


@include('template.home.script')

</body>
</html>