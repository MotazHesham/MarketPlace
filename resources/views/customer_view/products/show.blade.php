@extends('customer_view/layout_customer')

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
				<img id="img" src="/storage/uploads/beach.jpg" name="img">
			</div>
		</div>

		<div class="col">
			<div class="card">
			  <h5 class="card-header text-center">Item Info</h5>
			  <div class="card-body profile-info">
			    <div>Name : <span>name</span> </div>
			    <div>Description : <span>description</span> </div>
			    <div>Date : <span>date</span> </div>
			    <div>Price : <span>price</span> </div>
			    <div>Seller : <span><a href="#">seller name </a></span> </div>
			  </div>
			</div>
		</div>

	</div>
</div>


	 
<div class="container">
	 <div class="card" style="margin-top:20px;">
	  <div class="card-header text-center"><i class="fa fa-comments"></i> Comments</div>
	  	@Auth
		 <div class='comment-box'>
			 <span class='comment-owner'><image style='height:35px;width:35px;border-radius:50%' src="/storage/uploads/{{Auth::user()->img}}"></span>
			 <span class='comment-content'>
				 <form action='/comments/insert-comment' method='post' class='comment_form' >
				 	{{ csrf_field() }}
					 <input type='hidden' value='{{ $product->id }}' name='product_id'> 
					 <input type='hidden' value='{{Auth::user()->id}}' name='user_id'> 
					 <input type='text' name='written_comment' id='written_comment' autocomplete='off' placeholder='Write a comment...'>
				 </form>
			 </span>
		 </div>
		 @endAuth
		 <hr style='border-width:2px'>
			  <!-- fetch comments using ajax ^_- -->
			 <div id='fetch_comments' class='comment-box' data-itemid='{{ $product->id }}'></div>

	 </div>
 </div>

@endsection