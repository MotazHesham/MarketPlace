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
        <a class="nav-link" href="/seller">HomePage </a>
      </li>

      <li class="nav-item dropdown categories-menu">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	@foreach($categories as $category)
            <a class="dropdown-item" href="#">{{ $category->name }}</a>
          @endforeach
        </div>
      </li>
      @Auth
        <li class="nav-item ">
	    	<a class="nav-link" href="#">MyStore</a>
	  	</li>
	  	<li class="nav-item ">
	    	<a class="nav-link" href="#">RequestedOrders</a>
	  	</li>
      @endauth
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
             <a data-userid="{{ Auth::user()->id }}" id="open_contacts" class="fab fa-facebook-messenger" style="color:white;cursor:pointer;font-size: 30px;margin-top: 10px;margin-right: -20px;"></a>
           </li>
           <li class="nav-item">
             <a href="cart" class="fa fa-shopping-cart" style="color:white;cursor:pointer;font-size: 30px;margin-top: 10px;margin-right: -20px;"></a>
           </li>
           <li class="user-img-nav nav-item dropdown profile-image-menu dropleft">
             <img src="/storage/uploads/{{ Auth::user()->img }}" class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top: 53px;right: 12px;">
               <div class="text-center"><i class="fa fa-user" style="color:violet"></i> {{Auth::user()->name}}</div>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
               <a class="dropdown-item" href="{{ url('logout') }}">Sign Out</a>
             </div>    
           </li>
           @endguest
    </ul>
    
  </div>
</nav>