<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Comment;
use App\Product;
use App\User;
use DB;

class CommentsController extends Controller
{
    

	public function admin_comments_index(){
        $comments = Comment::all();
        return view('admin_view.comments.comments')->with('comments',$comments);
    }
    public function admin_comments_destroy($id)
    {
        $comment = comment::find($id);
        $comment->delete(); 
        return back()->with('success','comment Removed');
    }


}
