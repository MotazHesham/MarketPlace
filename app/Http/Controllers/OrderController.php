<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer_order(){
        $user = User::find(auth()->user()->id);
        $data = $user->order;

    	return view('customer_view.orders.orders')->with('data',$data);
    }
}
