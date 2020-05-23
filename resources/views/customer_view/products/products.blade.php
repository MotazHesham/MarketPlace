@extends('customer_view/layout_customer')

@section('content')

	@php
		use App\Category;
		$parmeter = explode("/",url()->current());
		$category = Category::find($parmeter[7]);
	@endphp
	
	<div class="container text-center header-view">
		<h1><span>{{$category->name}}</span> Category</h1>
		<p>here you can see all your product of this category</p>
	</div>

	<div class="product_view ">
		<div class="row justify-content-md-center">

			<div>
				<div class="col">
					@foreach($data as $data)
						<div class="card product_part" style="width: 18rem;" style="position: relative;">

							<img class="card-img-top" src="/storage/uploads/{{$data->img}}" alt="Card image cap" style="height: 160px">
							
							<div class="card-body">
								<h5 class="card-title">{{$data->name}}</h5>
								<p class="card-text">{{$data->description}}</p>
								<div class="overlay_product text-center">
									<a href="/customer/product/details/{{$data->id}}" class="btn btn-success"><i class="fab fa-pagelines"></i> View</a>
								</div>
							</div>

						</div>
					@endforeach
				</div>
			</div>
			
		</div>
	</div>


@endsection