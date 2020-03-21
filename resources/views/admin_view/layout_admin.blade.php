<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="{{ asset('images/icon2.png') }}">
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
</head>
<body>

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

		<!-- Start NavBar -->

			@include('admin_view/navbar')

		<!-- End NavBar -->	

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

		<!-- start view sections -->
			<div class="page-content">
				<div class="container">
					@include('messages')
					@yield('content')
				</div>	
			</div>	
		<!-- end view sections -->

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/my_script_admin.js') }}"></script>	 
</body>
</html>