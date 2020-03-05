<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(auth()->user() && auth()->user()->role==0){
            return view('home');
        }elseif(auth()->user() && auth()->user()->role==1){
            return view('seller_view/layout_seller');
        }elseif(auth()->user() && auth()->user()->role==2){
            return view('admin_view/layout_admin');
        }
    }
}
