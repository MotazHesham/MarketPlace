@extends('customer_view/layout_customer')

@section('content')

	
	<div class="container text-center header-view">
		<h1><span>Shopping Cart</span></h1>
		<p></p>
	</div>

	<div class="row">

		<div class="col-md-7">
			<div class="shopping-cart">
			 
			  <!-- Products  -->
			  @foreach($cart->product as $product)
				  <div class="item" >

				    <div class="close">
				      <a href='/customer/cart/delete/{{ $product->id }}' class="far fa-times-circle" style="cursor: pointer;color: black"></a>
				    </div>
				 
				    <div class="image">
				      <img src="/storage/uploads/{{ $product->img }}" alt="" />
				    </div>
				 
				    <div class="Item-Name">
				      {{ $product->name }}
				    </div>
				 
				    <div class="quantity" id="quantity_{{ $product->id }}">

				      <button class="minus-btn" type="button" name="button" data-productid="{{ $product->id }}" data-cartid="{{  $cart->id  }}">
				        <i class="fas fa-minus"></i>
				      </button>

				      <input type="text" name="name" value="{{ $product->pivot->quntity }}" disabled="">

				      <button class="plus-btn" type="button" name="button" data-productid="{{ $product->id }}" data-cartid="{{  $cart->id  }}">
				        <i class="fas fa-plus"></i>
				      </button>
				      
				    </div>
				 	
				    <div style="display: none" class="product-price" id="product-price_{{$product->id}}">{{$product->price}}</div>

				    <div class="total-price-of-product" id="total-price-of-product_{{ $product->id }}">$<span>{{ ($product->price)*($product->pivot->quntity) }}</span></div>

				  </div>
			  @endforeach
			 
			</div>
		</div>	

		<div class="col-md-4 offset-md-1">
		    <div class="container">
		    	<div style="background-color: #67656512;padding: 25px;border-radius: 12px 50px 12px 50px;">
					<h4><span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span> Cart</h4>
					<hr>
					<div class="total_price_cart" style="background-color: #00800073;
														    padding: 12px;
														    border-radius: 10px 21px;
														    color: white;
														    font-weight: bold;">
						TOTAL: <b style="float: right;">$<span>30.00</span></b>
					</div>
				</div>	
		    </div>
		    <br>
		    <br>
		    <br>
		    <div class="container text-center">
		   	 <button id="order_now" href="" class="btn btn-info btn-large" style="border-radius: 50px"><i class="fas fa-angle-double-down"></i>  Order NOw</button>
		    </div>
		</div>

	</div>

		<hr class="mt-5">

	<!--  order form  -->
	<div id="order_form">
		<div class="container text-center mt-5 header-view" style="    background-color: #8080801c;
	    border-radius: 80px 10px;">
			<h1 style="padding: 11px;">Order <span>Now...</span></h1>
			<p></p>
		</div>

		<div class="container">
			<form action="/order/cart" method="post">
				{{ csrf_field() }}
			  	<div class="form-row">
				    <div class="form-group col-md-6">
				      <h3>Billing Address</h3>
				    </div>
				    <div class="form-group col-md-6">
				      <h3>Payment</h3>
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputname"><i class="fa fa-user" style="color: #00cc00"></i> Full Name</label>
				      <input type="text" class="form-control" id="inputname" placeholder="John" name="name" value="{{ old('name') }}">
				    </div>
				    <div class="form-group col-md-6 ">
				      <label for="inputcards">Accepted Cards</label>
				      <div>
				      	<i class="fab fa-cc-visa" style="color:navy;font-size: 35px"></i>
			            <i class="fab fa-cc-amex" style="color:blue;font-size: 35px"></i>
			            <i class="fab fa-cc-mastercard" style="color:red;font-size: 35px"></i>
			            <i class="fab fa-cc-discover" style="color:orange;font-size: 35px"></i>
				      </div>
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-3">
				      <label for="inputEmail4"><i class="fa fa-envelope" style="color: #00cc00"></i> Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="example@co.sc" name="email" value="{{ old('email') }}">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="inputtelephone"><i class="fas fa-phone" style="color: #00cc00"></i> Telephone</label>
				      <input type="text" class="form-control" id="inputtelephone" placeholder="020563" name="telephone" value="{{ old('telephone') }}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputcardname">Name on Card</label>
				      <input type="text" class="form-control" id="inputcardname" placeholder="John More Doe" name="card_name" value="{{ old('card_name') }}">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputaddress"><i class="far fa-address-card" style="color: #00cc00"></i> Address</label>
				      <input type="text" class="form-control" id="inputaddress" placeholder="542 W. 15th Street" name="address" value="{{ old('address') }}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputcardnum">Credit card number</label>
				      <input type="text" class="form-control" id="inputcardnum" placeholder="1111-2222-3333-4444" name="card_num" value="{{ old('card_num') }}">
				    </div>
				 </div>

				<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputcity"><i class="fas fa-city" style="color: #00cc00"></i> City</label>
				      <input type="text" class="form-control" id="inputcity" placeholder="New York" name="city" value="{{ old('city') }}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputexpmonth">Exp Month</label>
				      <input type="text" class="form-control" id="inputexpmonth" placeholder="September" name="exp_month" value="{{ old('exp_month') }}">
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-3">
				      <label for="inputstate">State</label>
				      <input type="text" class="form-control" id="inputstate" placeholder="NY" name="state" value="{{ old('state') }}">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="inputzip">Zip</label>
				      <input type="text" class="form-control" id="inputzip" placeholder="10001" name="zip" value="{{ old('zip') }}">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="inputexpyear">Exp Year</label>
				      <input type="text" class="form-control" id="inputexpyear" placeholder="2022" name="exp_year" value="{{ old('exp_year') }}">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="inputcvv">CVV</label>
				      <input type="text" class="form-control" id="inputcvv" placeholder="352" name="cvv" value="{{ old('cvv') }}">
				    </div>
				</div>

				<input type="hidden" name="total_price_cart"  id="total-price-hidden-input">
				<input type="hidden" name="id_user" value="{{ Auth::user()->id }}" >
				<input type="hidden" name="id_cart" value="{{ $cart->id }}" >

				<div class="form-group">
				    <input type="submit" class="btn btn-success btn-block"  value="CheckOut">
			    </div>
			</form>
		</div>
	</div>


@endsection