<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function admin_accounts_index(){
        return view('admin_view.accounts.accounts');
    }

}
