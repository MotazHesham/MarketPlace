<?php



/* this function calculate diffrence between
  the date i parse and the current date -> version 1.0
 */
	  function calculate_diff_date($date){

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
		  	$ago = getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . "," . $added_date_1[0]; 
		  	return $ago;
		  }
		  if($diffrence_1[1] != 0){
		  	$ago = getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . " at " .  $change_timeformat;
		  	return $ago;
		  }
		  if($diffrence_1[2] > 1){
		  	$ago = getmonth_name($added_date_1[1]) . " " . $added_date_1[2] . " at " .  $change_timeformat;
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
	  function getmonth_name($monthNum){
		$dateObj   = DateTime::createFromFormat('!m', $monthNum);
		$monthName = $dateObj->format('F');
		return $monthName;
	  }	

?>