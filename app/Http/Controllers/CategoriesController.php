<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    

    public function customer_index_category(){
        $categories = Category::all();
        return view('customer_view.categories.categories')->with('categories',$categories);
    }


    public function admin_categories_index(){
        return view('admin_view.categories.categories');
    }


}
