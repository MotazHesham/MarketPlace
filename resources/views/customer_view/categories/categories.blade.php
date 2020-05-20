@extends('customer_view/layout_customer')

@section('content')

<div class="container text-center header-view">
	<h1>All <span>Categories</span></h1>
	<p>here you can see all categories ... Choose whatever you want to browse</p>
</div>

<hr>

<div class="category-view">
  
	<div class="row">


		<div class="col">


			<div class="text-center our-categories-text">
				<p style="">BROWSE PRODUCTS BY</p>
	   			<h1 style="">OUR CATEGORIES</h1>
			</div>
  
			<div class="row our-categories justify-content-md-center">

			@foreach($categories as $category)
		<a href="customer/products/of/category/{{$category->id}}">
						<div class="col mt-4">
						 	<div style="position: relative;">
						 		<div class="category-overlay">
						 			<p class="text-center" style="">{{$category->name}}</p>
						 		</div>
								<img src="/storage/uploads/{{$category->img}}" class="card-img" alt="...">
						  	</div>
						</div>	
					</a>
			@endforeach


			</div>

		</div>

		<div class="col category-image">
			<img class="float-right" src="{{ asset('images/web_shopping.svg') }}" style="">
		</div>

	</div>

</div>

@endsection