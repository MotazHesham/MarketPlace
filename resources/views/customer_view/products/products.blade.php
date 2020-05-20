@extends('customer_view/layout_customer')

@section('content')

	
	<div class="container text-center header-view">
		<h1> <span>{{ $data['category_name'] }}</span> Category</h1>
		<p>here you can see all your product of this category</p>
	</div>

	<div class="product_view ">
		<div class="row justify-content-md-center">

			<div>
				<div class="col">
					<div class="card product_part" style="width: 18rem;" style="position: relative;">
						<img class="card-img-top" src="/storage/uploads/beach.jpg" alt="Card image cap" style="height: 160px">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">details</p>
							<div class="overlay_product text-center">
								<a href="#" class="btn btn-success"><i class="fab fa-pagelines"></i> View</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>


@endsection