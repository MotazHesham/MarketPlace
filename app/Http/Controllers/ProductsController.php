<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function admin_products_index(){
    	$products = Product::all();
        return view('admin_view.products.products')->with('products',$products);
    }

    public function seller_index_products(){
    	$categories = Category::all();
    	return view('seller_view.products.products')->with('categories',$categories);
    }

    public function product_of_category($id){
        $category = Category::find($id);
        $data=DB::table('products')->where([

            ['id_category','=',$id],
            ['approve','=',1]
        ])
            ->get();

        return view ('customer_view.products.products')->with('data', $data);

    }

    public function customer_product_details($id){
        $product = Product::find($id);
        return view('customer_view.products.show')->with('product',$product);
    }

    public function admin_product_details($id){
        $product = Product::find($id);
        return view('Admin_view.products.show')->with('product',$product);
    }


    public function admin_products_approve($id){
    	$product = Product::find($id);
        $product->approve = 1 ;
        $product->save();
        return back()->with('success','Product approved');
    }

    
     public function admin_product_destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete(); 
        return back()->with('success','Product Removed');
    }




}
