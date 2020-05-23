<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class UsersController extends Controller
{

    public function admin_accounts_index(){
        $users = DB::select("SELECT * From users WHERE role != 2 ORDER BY created_at DESC");
        Return view ('admin_view.accounts.accounts')->with('users' , $users);
    }

    public function customer_profile($id){

        $user = User::find($id);
    	return view('customer_view.profile.profile')->with('user' , $user);
    }

    public function customer_edit_profile($id){
        $user = User::find($id);
    	return view('customer_view.profile.edit')->with('user' , $user);;
    }
    public function customer_profile_confirm_edit(Request $request, $id){

        $this->validate($request,[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'age'  => 'max:20',
                'img'=>'image|max:1999',
                'password'=> 'max:20'
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

            //update
            $user = user::find($id);
            $user->name         = $request -> input('name');
            $user->gender       = $request -> input('gender');
            $user->age          = $request -> input('age');
            $user->email        = $request -> input('email');
            if($request->hasFile('img')){
                $user->img =$fileNameToStore;
            }
            //check if user need to update his password
            if(!empty($request->input('password'))){ $user->password = bcrypt($request->input('password')); }
            $user->save();

            return back()->with('success','user updated');
    }

    public function delete_user($id)
    {
        User::find($id)->delete();
        return back();
    }


    /* Admin */

     public function admin_edit_profile($id){
        $user = User::find($id);
        return view('admin_view.editprofile')->with('user' , $user);;
    }
    public function admin_profile_confirm_edit(Request $request, $id){

        $this->validate($request,[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'age'  => 'max:20',
                'img'=>'image|max:1999',
                'password'=> 'max:20'
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

            //update
            $user = user::find($id);
            $user->name         = $request -> input('name');
            $user->gender       = $request -> input('gender');
            $user->age          = $request -> input('age');
            $user->email        = $request -> input('email');
            if($request->hasFile('img')){
                $user->img =$fileNameToStore;
            }
            //check if user need to update his password
            if(!empty($request->input('password'))){ $user->password = bcrypt($request->input('password')); }
            $user->save();

            return back()->with('success','user updated');
    }



}
