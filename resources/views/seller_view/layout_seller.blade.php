<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_seller_style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
</head>
<body>
	header seller <a href="{{ url('logout') }}">logout</a>
	<hr>

		<!-- start views -->
			@yield('content')
		<!-- end views -->

	<hr>
	footer

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js.js') }}"></script>
</body>
</html>