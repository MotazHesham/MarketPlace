<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    
    
    public function customer_categories(){
        $categories = Category::all();
        return view('customer_view.categories.categories')->with('categories',$categories);
    }


    public function admin_categories_index(){
        $categories = Category::all();
        return view('admin_view.categories.categories')->with('categories',$categories);
    }

    public function admin_categories_edit($id){
        $category = Category::find($id);
        return view('admin_view.categories.edit')->with('category',$category);
    }

    public function admin_categories_confirm_edit(Request $request, $id){

        $this->validate($request,[
                'name'=>'required|min:3|max:20',
                'description'=>'required|min:3|max:50',
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
            $Category = Category::find($id);
            $Category->name         = $request -> input('name');
            $Category->description  = $request -> input('description');
            if($request->hasFile('img')){
                $Category->img =$fileNameToStore;
            }
            $Category->save();

            return back()->with('success','Category updated');
    }

    public function admin_categories_destroy($id)
    {
        $Category = Category::find($id);
        $Category->delete(); 
        return back()->with('success','Category Removed');
    }
}
