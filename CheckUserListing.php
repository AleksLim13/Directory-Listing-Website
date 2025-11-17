<?php
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_NAME;

if(is_user_logged_in()){
	
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
	
	//End I:*
}
	else {
		
		  $current_user_id = get_current_user_id();
		    
		if ($current_user_id){
			
			$checkUserListing = "SELECT * FROM zvyq_wpforms_entries WHERE user_id = '$current_user_id' and form_id = '3588'";
			
			 $entriesGetResult = $conn->query($checkUserListing);
			
			 if ($entriesGetResult->num_rows > 0) {
				 echo '<div class="InfoFeedbackBox"><p>It looks like you already have a listing in our system.</p></div>';
				 //End I:*
			 }
			
			else {
				echo '[wpforms id="3588"]';
				//End E:*
			}
			//End I:*
		}
		
		//End E:*
	}

	 //End I:*
 }