@extends('customer_view/layout_customer')

@include('functions')
@section('content')

<div class="container text-center header-view">
	<h1>User <span> {{$user->name}} </span> </h1>
	<p></p>
</div>
<div class="container">
	<div class="row">

		<div class="col">
			<div class="upload-img">
				<img id="img" src="/storage/uploads/{{$user->img}}" name="img">
			</div>
		</div>

		<div class="col">
			<div class="card">
				@php
					If($user->role == 0)
                    $role = "Customer" ;
                    If($user->role == 1)
                    $role = "Seller" ;
                    If($user->role == 2)
                    $role = "Admin" ;
				@endphp
				<h5 class="card-header text-center"><span>{{$role}}</span></h5>
				
			  <div class="card-body profile-info">
			    <div>Full Name : <span>{{$user->name}}</span> </div>
			    <div>Email : <span>{{$user->email}}</span> </div>
			    <div>Age : <span>{{$user->age}}</span> </div>
			    <div>Gender : <span>{{$user->gender}}</span></div>
			  </div>
			  <a href="/customer/profile/edit/{{$user->id}}" class="btn btn-success" style="color:white"><i class="far fa-edit"></i> Edit</a>
			</div>

		</div>

	</div>
</div>	


@endsection