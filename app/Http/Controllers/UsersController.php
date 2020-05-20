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

    public function customer_profile(){
    	return view('customer_view.profile.profile');
    }

    public function customer_edit_profile($id){
    	return view('customer_view.profile.edit');
    }

    public function delete_user($id)
    {
        User::find($id)->delete();
        return back();
    }



}
