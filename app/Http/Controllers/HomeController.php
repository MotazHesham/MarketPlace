<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use App\Category;
use App\User;
use DB;
use app\order;
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
        if(auth()->user()){

            if( auth()->user()->role==0 ){
                return redirect('customer');
            }elseif( auth()->user()->role==1 ){
                return redirect('seller');
            }elseif( auth()->user()->role==2 ){
                return redirect('admin');
            }
        }    
    }


    public function statistics(){
       $count_comments = count (comment ::all());
        $count_products = count (product ::all());
        $count_users = count (user ::all());
        $count_pending_products = count(product ::where('approve',0)->get());
        $latest_5_users = user::orderby('created_at','Desc')->take(5)->get();
        $latest_5_comments = comment::orderby('created_at','Desc')->take(5)->get();
        $latest_5_products = product::orderby('created_at','Desc')->take(5)->get();
        $data = [
            'comments' => $count_comments,
             'products'=>$count_products  ,
            'users'=>$count_users,
            'pending'=>$count_pending_products,
            'user'=>$latest_5_users,
            'latest_comment'=>$latest_5_comments,
            'latest_products'=>$latest_5_products
        ];

        return view('admin_view/statistics/statistics')->with('data' , $data);


    }





}
