@extends('admin_view/layout_admin')

@section('content')


<div class="container text-center header-view">
	<h1>Edit <span>Product</span></h1>
	<p>here you can add new items to specific category and view it to all customers .....</p>
</div>

<div class="container">

	<form action="/admin/products/confirm/{{ $data['product']->id }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">
	  <div class="form-row"><!-- this has two [col] first for img and second for fields of the form   -->

	  	<!-- $$$$$$$$$$$$ Start first [col] Image $$$$$$$$$ -->
	  	<div class="form-group col-lg-6 col-md-7 upload-img">

	    	
	    	<input type="file" id="upload" class="form-control" name="img" style="" />
	    	<img id="img" src="/storage/uploads/{{ $data['product']->img }}" name="img">
	    	<!-- overlay upload img  -->
	    	<div class="overlay-upload-img text-center">
	    		<div><i class="far fa-edit"></i> Edit</div>
	    	</div>

	    </div>
		<!-- $$$$$$$$$$$$ End first [col] Image $$$$$$$$$ -->


		<!-- @@@@@@@@@@@ Start Second [col] form fields @@@@@@@@@@@-->
	    <div class="form-group col-lg-6 col-md-6">

	      <!-- Fieldes (Name & country_made) -->
		  <div class="form-row">

		    <div class="form-group col">
		      <label for="inputName">Name</label>
		      <input type="text" class="form-control" name="name" id="inputName" required="required" value="{{ $data['product']->name }}">
		    </div>
		  </div>
		  <!-- ............................. -->

		  <!-- Fieldes (Description & Price) -->
		  <div class="form-row">

			<div class="form-group col">
		      <label for="inputDesc">Description</label>
		      <input type="text" class="form-control" name="description" id="inputDesc"  value="{{ $data['product']->description }}" required="required">
		    </div>

		    <div class="form-group col">
		      <label for="inputprice">Price</label>
		      <input type="text" class="form-control" name="price" id="inputprice"  value="{{ $data['product']->price }}" required="required">
		    </div>

		  </div>  
		  <!-- ............................... -->

		  <!-- Fieldes Categoris -->
		  <div class="form-row">

		    <div class="form-group col">
		      <label for="inputcategory">Categories</label>
		      <select id="inputcategory" class="form-control" name="category" >
		      	 	@foreach ($data['categories'] as $category )
		      	 		<option value='{{ $category->id }}' <?php if($category->id == $data['product']->id_category){ echo "selected";}?>>{{ $category->name }}</option>
		      	 	@endforeach
		      </select>
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
</div>






@endsection
