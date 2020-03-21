<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use App\Category;
use App\User;
use DB;
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

            $user = User::find(auth()->user()->id);
            $user ->login_status = 1;
            $user->save();

            if( auth()->user()->role==0 ){
                return redirect('/');
            }elseif( auth()->user()->role==1 ){
                return redirect('seller');
            }elseif( auth()->user()->role==2 ){
                return redirect('admin');
            }
        }    
    }


    public function statistics(){
        return view('admin_view/statistics/statistics');
    }


}
