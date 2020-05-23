@extends('admin_view/layout_admin')

@include('functions')
@section('content')


<div class="container text-center header-view">
	<h1><span>{{$product->name}}</span> item </h1>
	<p>here you can see all info about that item...</p>
</div>

<div class="container">
	<div class="row">

		<div class="col">
			<div class="upload-img">
				<img id="img" src="/storage/uploads/{{$product->img}}" name="img">
			</div>
		</div>

		<div class="col">
			<div class="card">
			  <h5 class="card-header text-center">Item Info</h5>
			  <div class="card-body profile-info">
			    <div>Name : <span>{{$product->name}}</span> </div>
			    <div>Description : <span>{{$product->description}}</span> </div>
			    <div>Price : <span>{{$product->price}}</span> </div>
			    <div>Seller : <span><a href=" ">{{$product->user->name}} </a></span> </div>
			  </div>
			</div>
			@if($product->approve==0)
				<a href="/admin/products/approve/{{$product->id}}" style="color: white;" class="btn btn-primary btn-block"><i class="fas fa-lock-open"></i> approve</a> 
			@else
				<a href="#" class="btn btn-success btn-block"><i class="fas fa-check"></i> Approved</a>
			@endif
		</div>

	</div>
</div>


@endsection