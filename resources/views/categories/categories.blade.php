@extends('layout')

@section('content')

	
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Product Card
   </h3>

   <div class="row">
      <div class="col-md-4">
         <div class="card 1">
            <img class="card-img-top" src="img\mobile.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Mobiles</h5>
               <p class="card-text">we have many types of this product</p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card 2">
            <img class="card-img-top" src="img\laptop.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Laptops</h5>
               <p class="card-text"><?php Echo"we have many types of this product" ?></p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card 3">
            <img class="card-img-top" src="img\watch.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Watches</h5>
               <p class="card-text">we have many types of this product</p>
               <a href="http://www.google.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
   </div>
   <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
 
    </body>
</html>



@endsection