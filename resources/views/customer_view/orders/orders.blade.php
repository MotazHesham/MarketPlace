@extends('customer_view/layout_customer')

@include('functions')
@section('content')

	
	<div class="container text-center header-view">
		<h1>Lates Orders</h1>
		<p></p>
	</div>
	@foreach($data as $order)
	<div class="row">

     
		<div class="col-md-7">
			<div class="shopping-cart">

				<div style="background-color: #38a779d9;
						    padding: 12px;
						    border-radius: 10px 21px;
						    color: white;
						    font-weight: bold;
						    width: 60%;
						    margin-left: auto;
						    margin-right: auto;
						    margin-top: 15px;
						    text-align: center;">
					Order Items
				</div>
			 
			  <!-- Products  -->
			    @foreach($order->product as $product)
				  <div class="item" >

				    <div class="image">
				      <img src="/storage/uploads/{{ $product->img }}" alt="" />
				    </div>
				 
				    <div class="Item-Name">
				      {{ $product->name }}
				    </div>
				 
				    <div class="quantity" >

				      <input style="width: 70px" type="text" name="name" value="{{ $product->pivot->quntity }} item" disabled="">
				      
				    </div>
				 
				    <div class="total-price-of-product" >$<span>{{ ($product->price) * ($product->pivot->quntity) }}</span></div>

				  </div>
			 	@endforeach
			</div>
		</div>	

		<div class="col-md-4 offset-md-1">
		    <div class="container">
		    	<div style="background-color: #67656512;padding: 25px;border-radius: 12px 50px 12px 50px;">
					<h4><span class="price" style="color:black"><i class="fas fa-truck" style="color: #569a91"></i></span> Order
						</h4>
					<hr>

						<p style="padding: 10px">Telephone: <b>{{ $order->telephone }}</b></p>
						<p style="padding: 10px">Address: <b>{{ $order->address}}</b></p>
						<p style="padding: 10px">City: <b>{{ $order->city }}</b></p>
						<p style="padding: 10px">State: <b>{{ $order->state }}</b></p>
					<div style="background-color: #00800073;
														    padding: 12px;
														    border-radius: 10px 21px;
														    color: white;
														    font-weight: bold;">
						TOTAL: <b style="float: right;">$<span>{{$order->total_price_cart}}</span></b>
					</div>
				</div>	
		    </div>
		</div>

	</div>


	<hr class="mt-5 mb-5">

	@endforeach



@endsection