<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Product;
use App\Cart;

class CartsController extends Controller
{

=======
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\comment;
use App\Product;
use App\User;
use App\Cart;
use App\product_of_cart;
use DB;

class CartsController extends Controller
{
    public function customer_cart($id){
    	$userid =  auth()->user()->id;
        $cart = Cart::where('id_user',$userid)->get();
        if(count($cart) > 0){
            return view('customer_view.cart.cart')->with('cart',$cart[0]);
        }else{
            $new_cart = new Cart;
            $new_cart->id_user = $userid;
            $new_cart->save();
            return view('customer_view.cart.cart')->with('cart',$new_cart);
        }
    }

    public function update_quantity($quantity,$product_id,$cart_id){
        $cart = Cart::find($cart_id);
        $cart_product = $cart->product()->find($product_id);
        $cart_product->pivot->quntity = $quantity;
        $cart_product->pivot->save();
    }
    
>>>>>>> df7fee4060975723d315e94cd71e338291d8c518
}












