<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Category;
use App\Comment;
use App\Product;
use App\User;
use DateTime;
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

    public function insert_comment(Request $request){
        $comment = new Comment;
        $comment->comment = $request->input('written_comment');
        $comment->id_product = $request->input('product_id');
        $comment->id_user = $request->input('user_id');
        $comment->save();
    }


    public function fetch_comments($id){
        $comments = Comment::where('id_product',$id)->orderBy('created_at','desc')->get();
        foreach($comments as $comment){
            echo "<span class='comment-owner'><image style='height:35px;width:35px;border-radius:50%' src='/storage/uploads/" . $comment->user->img . "'> " . $comment->user->name . "</span>";
            echo "<span class='comment-content'>";
                echo $comment->comment ;
                $date_comment = CommentsController::calculate_diff_date($comment->created_at);
                echo "<div class='text-right' style='font-size:13px;color:black'>" . $date_comment . "</div>";
            echo "</span>";
        }

    }

    public function calculate_diff_date($date){

        date_default_timezone_set('Africa/Cairo');

        $added_date = explode(" ", $date);
        $added_date_1 = explode("-", $added_date[0]);
        $added_date_2 = explode(":", $added_date[1]);
        $change_timeformat = date('h:i a ', strtotime($added_date[1]));//change time from 24h to 12h (am) or (pm)

        $strStart = ($date);  
        $strEnd = (date("Y-m-d H:i")); //current date
        $dteStart = new DateTime($strStart);
        $dteEnd   = new DateTime($strEnd);
          
          $dteDiff  = $dteStart->diff($dteEnd);

          $diffrence = explode(" ", $dteDiff->format("%Y-%M-%d %h:%i"));
          $diffrence_1 =explode("-", $diffrence[0]);
          $diffrence_2 =explode(":", $diffrence[1]);

          $ago = ''; 

          if($diffrence_1[0] != 0){
            $ago = CommentsController::getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . "," . $added_date_1[0]; 
            return $ago;
          }
          if($diffrence_1[1] != 0){
            $ago = CommentsController::getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . " at " .  $change_timeformat;
            return $ago;
          }
          if($diffrence_1[2] > 1){
            $ago = CommentsController::getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . " at " .  $change_timeformat;
            return $ago;
          }
          if($diffrence_1[2] == 1){
            $ago = "Yesterday at " . $change_timeformat ;
            return $ago;
          }
          if($diffrence_1[2] == 0){
            if($diffrence_2[0] == 0){
                if($diffrence_2[1]==0){
                    $ago = "1mins";
                    return $ago . " ago";
                }else{
                    $ago = $diffrence_2[1] . "mins";
                    return $ago . " ago";
                }
            }else{
                $ago = $diffrence_2[0] . "hrs";
                return $ago . " ago";
            }
          }

      }

      /* this function called by calculate_diff_date() 
            to get the month name  
      */
      public function getmonth_name($monthNum){
        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F');
        return $monthName;
      } 


}
