<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend_customer_style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
</head>
<body>

	<!-- Start NavBar -->

		<nav class="navbar navbar-expand-lg fixed-top  ">

		  <a class="navbar-brand" href="index.php" style="color:#FFF">
		    <span style="color:#9fb0a9">M</span>arket<span style="color:#9fb0a9">P</span>lace
		  </a>

		  <!-- for mobile view -->
		  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="index.php">HomePage </a>
		      </li>

		      <li class="nav-item dropdown categories-menu">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Categories
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        	<a class="dropdown-item" href="#">Mobiles</a>
		        	<a class="dropdown-item" href="#">telephone</a>
		        	<a class="dropdown-item" href="#">laptops</a>
		        </div>
		      </li>


		    </ul>


		    <ul class="navbar-nav ml-auto right-items-nav">
		          	
		          	@guest
		           <li class="nav-item">
		             <a class="nav-link navbar-login" style="display: inline;" href="{{ url('login') }}">Login</a>
		              | 
		             <a class="nav-link navbar-register" style="display: inline;" href="{{ url('register') }}">Register</a>
		           </li>
		           @else
		           <li class="nav-item">
		             <a href="cart" class="fa fa-shopping-cart" style="color:white;cursor:pointer;font-size: 30px;margin-top: 10px;margin-right: -20px;"></a>
		           </li>
		           <li class="user-img-nav nav-item dropdown profile-image-menu dropleft">
		             <img src="{{ asset('images/shape.jpg')}}" class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		             <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top: 53px;right: 12px;">
		               <div class="text-center"><i class="fa fa-user" style="color:violet"></i> {{Auth::user()->name}}</div>
		               <div class="dropdown-divider"></div>
		               <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
		               <a class="dropdown-item" href="#">Orders</a>
		               <a class="dropdown-item" href="{{ url('logout') }}">Sign Out</a>
		             </div>    
		           </li>
		           @endguest
		    </ul>
		    
		  </div>
		</nav>

	<!-- End NavBar -->

	<!-- start carousel -->

		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('images/trolley.jpg')}}" class="d-block w-100" alt="...">
				</div>
			</div>
			<div class="overlay-Carousel"></div>
		</div>


	<!-- end carousel -->


		<!-- start views -->
			@yield('content')
		<!-- end views -->

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br>
	footer

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js.js') }}"></script>
</body>
</html>