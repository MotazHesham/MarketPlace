<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

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
        $category_name = $category->name;
        $data = [
            'category_name' => $category_name
        ];
        return view('customer_view.products.products')->with('data',$data);
    }

    public function customer_product_details($id){
        $product = Product::find($id);
        return view('customer_view.products.show')->with('product',$product);
    }

    public function admin_products_edit($id){
    	$product = Product::find($id);
        $categories = Category::all();
        $data = [
            'product' => $product, 
            'categories' => $categories 
        ];

        return view('admin_view.products.edit')->with('data',$data);
    }

    public function admin_products_confirm_edit(Request $request,$id){
    	 $this->validate($request,[
                'name'=>'required|min:3|max:20',
                'description'=>'required|min:3|max:100',
                'price'=>'required|integer',
                'img'=>'image|max:1999'
            ]);

            //handel file upload 
            if($request->hasFile('img')){
                //get filename with the extention
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                //get just filename
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //get just extention
                $extention=$request->file('img')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore=$filename.'_'.time().'.'.$extention;
                //upload the image
                $path=$request->file('img')->storeAs('public/uploads',$fileNameToStore);

            }

            //update Category
            $Product = Product::find($id);
            $Product->name         = $request -> input('name');
            $Product->description  = $request -> input('description');
            $Product->price        = $request -> input('price');
            $Product->id_category  = $request -> input('category');
            if($request->hasFile('img')){
                $Product->img =$fileNameToStore;
            }
            $Product->save();

            return back()->with('success','Product updated');
    }

     public function admin_product_destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete(); 
        return back()->with('success','Product Removed');
    }

}
