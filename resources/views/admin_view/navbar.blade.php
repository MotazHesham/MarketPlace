
<div class="Side_Navbar">
      <div class="img-sidebar" style="background-image: url('{{ asset('images/beach.jpg')  }}'); background-size: cover">
         <div class="text-center">
           <a class="navbar-brand" href="index.php" style="color:#FFF">
            <span style="color:#9fb0a9">M</span>arket<span style="color:#9fb0a9">P</span>lace
           </a>   
        </div>               
      </div>
     
      <div class="sidebar-links">
        <a class="nav-link" href="/admin">
          <span class="fa fa-home mr-3"></span>Dashboard
        </a>
        <a class="nav-link" href="/admin/categories">
          <span class="fa fa-gift mr-3"></span>Categories
        </a>
        <a class="nav-link" href="/admin/accounts">
          <span class="fa fa-users mr-3"></span>Members
        </a>
        <a class="nav-link" href="/admin/products">
          <span class="fa fa-tag mr-3"></span>Products
        </a>
        <a class="nav-link" href="/admin/comments">
          <span class="fa fa-comments mr-3"></span>Comments
        </a>
        <!-- <a class="nav-link" href="../index.php" target="_blanc">
          <span class="fa fa-hashtag mr-3"></span>Visit Shop
        </a> -->
        <div style="color: #95d0e2;margin-top: 20px;margin-bottom: 5px;font-size: x-large;font-family: 'Lobster', cursive;margin-left: 22%;">
           <img src="/storage/uploads/{{Auth::user()->img}}" style="width: 50px;height: 50px;border-radius: 50px">  <b style="color: white;font-weight: 400;">  {{ Auth::user()->name }}</b>
        </div>
        <a class="nav-link" href="/admin/profile/edit/{{ Auth::user()->id }}">
          <span class="fa fa-cog mr-3"></span>EditProfile
        </a>
        
        <a class="nav-link" href="{{ url('logout') }}">
            <span class="fa fa-sign-out-alt mr-3"></span>Logout
        </a>
     </div>
</div>  