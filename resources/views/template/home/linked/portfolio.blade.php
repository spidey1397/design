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
	<section class="page-header-section set-bg" data-setbg="{{url('img/header-bg.jpg')}}">
		<div class="container">
			<h1 class="header-title">Portfolio<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<li class="filter" data-filter="*">All</li>
				<li class="filter" data-filter=".photo">Photography</li>
				<li class="filter" data-filter=".design">Design</li>
				<li class="filter" data-filter=".iden">Identity</li>
				<li class="filter" data-filter=".corp">Corporate</li>
				<li class="filter" data-filter=".uxui">UI/UX</li>
			</ul>
		</div>
		<!-- portfolio items -->
		<div class="portfolio-warp spad">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-wide photo" data-setbg="{{url('img/portfolio/1.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/1.jpg')}}"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg design corp" data-setbg="{{url('img/portfolio/2.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/2.jpg')}}"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg iden photo uxui" data-setbg="{{url('img/portfolio/3.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/3.jpg')}}"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg corp design" data-setbg="{{url('img/portfolio/4.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/4.jpg')}}"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg uxui iden" data-setbg="{{url('img/portfolio/5.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/5.jpg')}}"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-long design corp" data-setbg="{{url('img/portfolio/6.jpg')}}"><a class="img-popup" href="{{url('img/portfolio/6.jpg')}}"></a></div>
			</div>
		</div>
		<div class="container">
			<div class="pagination">
				<a href="#">01</a>
				<a href="" class="active">02</a>
				<a href="">03</a>
			</div>
		</div>
	</div>
	<!-- Page section end -->

	<!-- Page section start -->
	<div class="page-section spad">
		<div class="container">
		@foreach ($projects as $project)
		<div>
		<h1>{{ $project->name }}</h1>
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
			
			@foreach ($project->categories as $category)
				<li class="filter" data-filter="*">{{ $category->name }}</li>
				@endforeach
				
			</ul>
			@foreach ($project->images as $image)
			<div>
			<p>{{ $image->name }}</p>
			</div>
			@endforeach
			</div>
			@endforeach
		</div>
	</div>
	<!-- Page section end -->



	@include('template.home.content.footer')



@include('template.home.script')
</body>
</html>