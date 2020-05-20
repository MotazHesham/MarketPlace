@extends('customer_view/layout_customer')

@section('content')

	
	<div class="container text-center header-view">
		<h1>Lates Orders</h1>
		<p></p>
	</div>

	<div class="row">

		<div class="col-md-7">
			<div class="shopping-cart">

				<div style="background-color: #535a5373;
						    padding: 12px;
						    border-radius: 10px 21px;
						    color: white;
						    font-weight: bold;
						    width: 60%;
						    margin-left: auto;
						    margin-right: auto;
						    margin-top: 15px;">
					Order Date: <b style="float: right;"><span>date</span></b>
				</div>
			 
			  <!-- Products  -->
				  <div class="item" >

				    <div class="image">
				      <img src="/storage/uploads/beach.jpg" alt="" />
				    </div>
				 
				    <div class="Item-Name">
				      name
				    </div>
				 
				    <div class="quantity" >

				      <input style="width: 70px" type="text" name="name" value="2 item" disabled="">
				      
				    </div>
				 
				    <div class="total-price" >$<span>1234</span></div>

				  </div>
			 
			</div>
		</div>	

		<div class="col-md-4 offset-md-1">
		    <div class="container">
		    	<div style="background-color: #67656512;padding: 25px;border-radius: 12px 50px 12px 50px;">
					<h4><span class="price" style="color:black"><i class="fas fa-truck" style="color: #569a91"></i></span> Order</h4>
					<hr>

						<p style="padding: 10px">Telephone: <b>312</b></p>
						<p style="padding: 10px">Address: <b>4wq</b></p>
						<p style="padding: 10px">City: <b>asdf</b></p>
						<p style="padding: 10px">State: <b>gasdf</b></p>
					<div style="background-color: #00800073;
														    padding: 12px;
														    border-radius: 10px 21px;
														    color: white;
														    font-weight: bold;">
						TOTAL: <b style="float: right;">$<span>price</span></b>
					</div>
				</div>	
		    </div>
		</div>

	</div>

	<hr class="mt-5 mb-5">


@endsection