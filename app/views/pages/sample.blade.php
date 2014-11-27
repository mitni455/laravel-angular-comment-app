<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Comment System</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
	</style>


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="pageController">
<div class="col-md-8 col-md-offset-2">
	<h1> Sample Blade </h1>
	<ul>
		<?php 
			$pages = Page::all();
		?>
		@foreach($pages as $page)
			<li>{{$page->title}}</li>
		@endforeach
	</ul>
</div>
</body>
</html>