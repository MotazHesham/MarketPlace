<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function customer_cart(){
    	return view('customer_view.cart.cart');
    }
}
