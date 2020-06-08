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


	@include('template.home.section.hero')

    @include('template.home.section.intro')
	
    @include('template.home.section.service')
	
    @include('template.home.section.cta')

    @include('template.home.section.milestones')

    @include('template.home.section.project')
	
    @include('template.home.section.client')

	


	
    @include('template.home.content.footer')

    @include('template.home.script')

	
</body>
</html>