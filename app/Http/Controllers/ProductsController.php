<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{

    public function admin_products_index(){
        return view('admin_view.products.products');
    }

    public function seller_index_products(){
    	$categories = Category::all();
    	return view('seller_view.products.products')->with('categories',$categories);
    }

}
