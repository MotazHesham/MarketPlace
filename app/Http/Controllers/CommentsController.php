<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    

	public function admin_comments_index(){
        return view('admin_view.comments.comments');
    }

}
