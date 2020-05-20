@extends('customer_view/layout_customer')

@section('content')

<div class="container text-center header-view">
	<h1>User<span> Name </span> </h1>
	<p></p>
</div>
<div class="container">
	<div class="row">

		<div class="col">
			<div class="upload-img">
				<img id="img" src="/storage/uploads/beach.jpg" name="img">
			</div>
		</div>

		<div class="col">
			<div class="card">
			  <h5 class="card-header text-center"><span>role</span></h5>
			  <div class="card-body profile-info">
			    <div>Full Name : <span>name</span> </div>
			    <div>Email : <span>email</span> </div>
			    <div>Age : <span>age</span> </div>
			    <div>Gender : <span>gender</span> </div>
			  </div>
			  <a href="" class="btn btn-success" style="color:white"><i class="far fa-edit"></i> Edit</a>
			</div>
		</div>

	</div>
</div>	


@endsection