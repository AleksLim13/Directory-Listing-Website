<?php

$DbSearch = new DBSearchListing();
$DbSearch->DatabaseConnect();

$conn = $DbSearch->conn;

// Check connection
if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
	
	//End I:*
}

else {
	
	$DbSearch->BuildTextSearchBox();
	
	$DbSearch = $DbSearch->ConfigFilterVars($DbSearch);
	
	if(isset($_POST['IsFilterFormSubmitted']) && !array_key_exists('ListSearchSubmitter', $_POST) && $DbSearch->VarSQL_FilterString !== $DbSearch->VarSQL_FilterStringProto) {
	
		   $FiltersCustomSearchGetResult = $conn->query($DbSearch->VarSQL_FilterString);
			 
			 if($FiltersCustomSearchGetResult->num_rows > 0){

				echo $FiltersCustomSearchGetResult->num_rows;
				 
				  while($row = $FiltersCustomSearchGetResult->fetch_assoc()) {
				
				   $DbSearch->entryId = $row["entry_id"];
				   
				  $DbSearch = $DbSearch->MapSQLToVars($DbSearch, $conn);
	
				  $DbSearch->BuildListingEntrySnippets($DbSearch);
				 
				 //End W:*
			 }
				//End I:*
			 }
			 
			 else {
				echo '<div class="InfoFeedbackBox"><p>No matches for that filter pattern. Please try a different variation of filter selections.</p></div>';

			 }
			 
		
		//End I:*
	}
		     
		if(array_key_exists('ListSearchSubmitter', $_POST)) {
			
			 $searchTerm = filter_input(INPUT_POST, "ListSearchValue");
			
			if($searchTerm !== ""){

				try {
					
					$searchTerm = "%" . $searchTerm . "%";

					 $textSearch_SQL = "SELECT * FROM zvyq_wpforms_entries WHERE fields LIKE ? and form_id = '$DbSearch->formID'";

					 $stmt = $conn->prepare($textSearch_SQL);
                    $stmt->bind_param("s", $searchTerm);

					$stmt->execute();
                    $result = $stmt->get_result();
							  
				   if ($result->num_rows > 0) {
		
					  //Output data of each row
					  while($row = $result->fetch_assoc()) {
					
				  /*3 Step process follows and repeats with new value and variable assignment.*/
				   $DbSearch->entryId = $row["entry_id"];
				   
			       $DbSearch = $DbSearch->MapSQLToVars($DbSearch, $conn);
					   
				   $DbSearch->BuildListingEntrySnippets($DbSearch);
				  
				  //End Out-W:*
						  
						  //End W:*
					  }
					   
					//End I:*
					}
			
			  else {
				    $searchTerm = str_replace("%", "", $searchTerm); 
					echo '<div class="InfoFeedbackBox"><p>No entries found for search term: ' . $searchTerm . '</p></div>';
				}
					// Code that may throw an exception
				} catch (ExceptionType $e) {
					    echo "Error: " . $e->getMessage();
				
					// Code to handle the exception
				} finally {
					// Optional: Code that always executes, regardless of exceptions
				}

				//End Main Out-I:*
			}
			
			else{
				
				/*Search Box was empty*/
				
		    $DbSearch = $DbSearch->ConfigFilterVars($DbSearch);
          
			/* For condition when search box is empty so either value equals empty string or isset returns false. The start of filters alternate path search logic branch. */
		 if ($_POST['ListSearchValue'] === "" && $DbSearch->VarSQL_FilterString !== "" && $DbSearch->VarSQL_FilterString !== $DbSearch->VarSQL_FilterStringProto){
			 
			   $FiltersCustomSearchGetResult = $conn->query($DbSearch->VarSQL_FilterString);
			 
			 if($FiltersCustomSearchGetResult->num_rows > 0){
				 
				  while($row = $FiltersCustomSearchGetResult->fetch_assoc()) {
				 
				  /*3 Step process follows and repeats with new value and variable assignment.*/
				   $DbSearch->entryId = $row["entry_id"];
				   
				  $DbSearch = $DbSearch->MapSQLToVars($DbSearch, $conn);
	
				  $DbSearch->BuildListingEntrySnippets($DbSearch);
				 
				 //End W:*
			 }
			
				 /*Id custom filter search rows > 0*/
				 //End I:*
			 }
			 
			 else {
			echo '<div class="InfoFeedbackBox"><p>No matches for that filter pattern. Please try a different variation of filter selections.</p></div>';
			 }
		    
			 //End I:*
			 }
				
				else{
					echo '<div class="InfoFeedbackBox"><p>Make a text search by typing a prompt into the search bar or configure some filters to get started.</p> </div>';
				}
			
				/*Search Box was empty*/
				//End E:*
			}
			
			/*List Search Submitter triggered*/
			//End Out-I:*
		}
	   
	    if(array_key_exists('ListingEntrySelector', $_POST)) {
			
					$DbSearch->DisplayTherapistListingSelection();
			
			//End I:*
		}
	
		/*Warning: don't forget to close the connection by calling close function on connection object.*/
			$conn->close();
			
	/*. End of Alternate path for when DB connect is a success. */
	//End Out-E:*
}