<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend_style.css') }}">
</head>
<body>
	header admin <a href="{{ url('logout') }}">logout</a>
	<hr>

		<!-- start view sections -->
			
			@yield('content')

		<!-- end view sections -->

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/backend_js.js') }}"></script>	 
</body>
</html>