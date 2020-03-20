@extends('admin_view/layout_admin')

@section('content')


<div class="container">
   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Product Card
   </h3>

   <div class="row">
      <div class="col-md-4">
         <div class="card 1">
            <img class="card-img-top" src="/storage/uploads/mobile.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Mobiles</h5>
               <p class="card-text">we have many types of this product</p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card 2">
            <img class="card-img-top" src="/storage/uploads/laptop.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Laptops</h5>
               <p class="card-text"><?php Echo"we have many types of this product" ?></p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card 3">
            <img class="card-img-top" src="/storage/uploads/watch.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Watches</h5>
               <p class="card-text">we have many types of this product</p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
   </div>
   <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">




@endsection