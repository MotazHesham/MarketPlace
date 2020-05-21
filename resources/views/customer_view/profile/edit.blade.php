@extends('customer_view/layout_customer')

@section('content')



<div class="container text-center header-view">
	<h1>Edit [<span> {{ $user->name }} </span>] Profile </h1>
	<p>here you can edit your info ....like (name,age.....etc)</p>
</div>

<div class="edit-profile-div">

	<div class="container">

		<form action="/customer/profile/confirm/{{ $user->id }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
		  <div class="form-row"><!-- this has two [col] first for img and second for fields of the form   -->

		  	<!-- $$$$$$$$$$$$ Start first [col] Image $$$$$$$$$ -->
			    <div class="form-group col-lg-6 col-md-7 upload-img">

			    	<input type="file" id="upload" class="form-control" name="img" style="" />
			    	<img id="img" src="/storage/uploads/{{ $user->img }}" name="img" >
			    	<!-- overlay upload img  -->
			    	<div class="overlay-upload-img text-center">
			    		<div><i class="far fa-edit"></i> Update</div>
			    	</div>
			    </div>
		    <!-- $$$$$$$$$$$$ End first [col] Image $$$$$$$$$ -->



		   <!-- @@@@@@@@@@@ Start Second [col] form fields @@@@@@@@@@@-->
		    <div class="form-group col-lg-6 col-md-6">

				<!-- Fieldes (UserName & Password) -->
			  <div class="form-row">

			    <div class="form-group col-md-6">
			      <label for="inputUserName">Email</label>
			      <input type="text" class="form-control" name="email" value="{{ $user->email }}" id="inputUserName" required="required">
			    </div>

			    <div class="form-group col-md-6">
			      <label for="inputPassword">Password</label>
			      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="optional...">
			    </div>

			  </div>
			  <!-- ............................. -->

			  <!-- Fieldes (FullName & Gender & Age) -->
			  <div class="form-row">

				<div class="form-group col-lg">
			      <label for="inputFullName">FullName</label>
			      <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="inputFullName" required="required">
			    </div>

			  	<div class="form-group col-md-4">
			      <label for="inputState">Gender</label>
			      <select id="inputState" class="form-control" name="gender" > 
			      		<option value='Male'>Male</option>
			      		<option value='Female'>Female</option>
			      </select>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputAge">Age</label>
			      <input type="text" class="form-control" name="age" value="{{ $user->age }}" id="inputAge" required="required">
			    </div>

			  </div>  
			  <!-- ............................... -->

			  <!-- Fieldes (Button) -->
			  <button type="submit" class="btn btn-primary btn-block">Update</button>
			  <!-- .............. -->

		    </div>
		    <!-- @@@@@@@@@@@ End Second [col] form fields @@@@@@@@@@@--> 
		  	
		  </div><!-- end of div that has two [col] --> 

		</form>	

	</div><!-- end of div that has class (container) -->

</div><!-- end of div that has class (edit-profile-div) -->


@endsection