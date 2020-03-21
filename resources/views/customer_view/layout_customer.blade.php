<!DOCTYPE html>
<html>
<head>
	<title>homePage</title>
	<link rel="icon" href="{{ asset('images/icon2.png') }}">
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
</head>
<body>

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

		<!-- Start NavBar -->

			@include('customer_view/navbar')

		<!-- End NavBar -->

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

		<!-- start carousel -->

			@include('customer_view/carousel')

		<!-- end carousel -->

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

		<!-- start views -->

			<div class="main-raised">
				@include('messages')
				@yield('content')
			</div>	

		<!-- end views -->

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

		<!-- start footer -->

			<footer class="text-center mt-5">
		        <p>Made with <a href="#" target="_blank">ZzZ</a> by Creative Team</p>
		    </footer>

		<!-- end footer -->

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	


	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/my_script_chat.js') }}"></script>
	<script src="{{ asset('js/my_script.js') }}"></script>
</body>
</html>