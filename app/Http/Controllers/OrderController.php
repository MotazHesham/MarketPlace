<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer_order(){
        $user = User::find(auth()->user()->id);
        $data = $user->order;
    	return view('customer_view.orders.orders')->with('data',$data);
    }

    public function order_form(Request $request){
    	$this->validate($request,[
            'name'          => 'required|string|max:255|min:3',
            'email'         => 'required|email|max:255|min:3',
            'address'       => 'required|string|max:255|min:3',
            'telephone'     => 'required|string|max:255|min:3',
            'city'          => 'required|string|max:255|min:3',
            'state'         => 'required|string|max:255|min:2',
            'zip'           => 'required|integer',
            'card_name'     => 'required|string|max:255|min:3',
            'card_num'      => 'required|string|max:255|min:3',
            'exp_month'     => 'required|string|max:255|min:3',
            'exp_year'      => 'required|integer',
            'cvv'           => 'required|integer'
        ]);

        //request order 
        $Order = new Order;
        $Order->name = $request->input('name');
        $Order->email               = $request -> input('email');
        $Order->address             = $request -> input('address');
        $Order->city                = $request -> input('city');
        $Order->state               = $request -> input('state');
        $Order->zip                 = $request -> input('zip');
        $Order->card_name           = $request -> input('card_name');
        $Order->card_num            = $request -> input('card_num');
        $Order->exp_month           = $request -> input('exp_month');
        $Order->telephone           = $request -> input('telephone');
        $Order->exp_year            = $request -> input('exp_year');
        $Order->cvv                 = $request -> input('cvv');
        $Order->total_price_cart    = $request -> input('total_price_cart');
        $Order->id_user             = $request -> input('id_user');
        $Order->save();

        //attach product to order_product table ...and detach products from cart
        $cart = Cart::find($request -> input('id_cart'));
        foreach($cart->product as $c_product){
            $Order->product()->attach($c_product->id,['quntity' => $c_product->pivot->quntity]);
            $cart->product()->detach($c_product->id);
        }

        return back()->with('success','Order Requested');
    }

}
