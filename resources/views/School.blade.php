<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebUni - Education Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('fassets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('fassets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('fassets/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('fassets/css/style.css') }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	{{ vite_assets() }}
</head>
<body>
	
	<div id="home"></div>


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('fassets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('fassets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('fassets/js/mixitup.min.js')}}"></script>
	<script src="{{ asset('fassets/js/circle-progress.min.js')}}"></script>
	<script src="{{ asset('fassets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('fassets/js/main.js')}}"></script>
</body>
</html>