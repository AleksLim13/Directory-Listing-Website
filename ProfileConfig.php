<?php
$DbSearch = new DBSearchListing();
$DbSearch->DatabaseConnect();
$conn = $DbSearch->conn;

if(is_user_logged_in()){

		// Check connection
		if ($conn->connect_error) {

		  die("Connection failed: " . $conn->connect_error);

			//End I:*
		}

		else {

			$current_user_id = get_current_user_id();

			if ($current_user_id) {
			
				$textSearch_SQL = "SELECT * FROM zvyq_wpforms_entries WHERE user_id = '$current_user_id' and form_id = '$DbSearch->formID'";
				$entriesGetResult = $conn->query($textSearch_SQL);
				
				   if ($entriesGetResult->num_rows > 0) {
                  
							  //Output data of each row
							  while($row = $entriesGetResult->fetch_assoc()) {
								  
                              $DbSearch->entryId = $row["entry_id"];
						      $DbSearch = $DbSearch->MapSQLToVars($DbSearch, $conn); 
						      $DbSearch->DisplayLoggedInUserTherapistListing($DbSearch);

						  //End Out-W:*

								  //End W:*
							  }
					   
					  if(array_key_exists('EditProfileSubmitter', $_POST)) {
						    $newValue = filter_input(INPUT_POST, "InputEditProfileTitle");
						  	$DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->profTitle, $newValue);
						    $DbSearch->UpdateJSONTitleFormField($DbSearch, $conn, $current_user_id, $DbSearch->profTitle, $newValue);
						    $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->profTitle, $newValue);
						   //End I:*
					   }
					   
					   if(array_key_exists('EditSuffixSubmitter', $_POST)){
						   
						    $newValue = filter_input(INPUT_POST, "InputEditSuffix");
						   	$DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->profSuffix, $newValue);
						    $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->profSuffix, $newValue);
						   //End I:*
					   }
						  
						 if(array_key_exists('EditMentalRoleSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputEditMentalRole");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->healthRole, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->healthRole, $newValue);
						   //End I:*
					      }
					   
					    if(array_key_exists('EditGenderSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "SelectEditGender");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->gender, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->gender, $newValue);
						   //End I:*
					      }
					   
					    if(array_key_exists('EditEthnicitySubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputEditEthnicity");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->ethnicity, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->ethnicity, $newValue);
						   //End I:*
					      }
					   
					    if(array_key_exists('EditSexualSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "SelectEditSexual");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->sexualOrient, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->sexualOrient, $newValue);
						   //End I:*
					      }
					   
					    if(array_key_exists('EditPersonalDescriptionSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaPersonalDescriptionPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->pDescription, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->pDescription, $newValue);
						   //End I:*
					      }
					   
					    if(array_key_exists('EditQualificationsSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaQualificationsPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->qualifications, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->qualifications, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditSpecialtiesSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaSpecialtiesPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->specialties, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->specialties, $newValue);
					
						   //End I:*
					      }
					   
					     if(array_key_exists('EditTreatmentsSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaTreatmentsPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->treatmentApproaches, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->treatmentApproaches, $newValue);
					
						   //End I:*
					      }
					   
					        if(array_key_exists('EditClientFocusSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaClientFocusPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->clientFocus, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->clientFocus, $newValue);
					
						   //End I:*
					      }
					   
					     if(array_key_exists('EditAgeGroupSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "TextareaAgeGroupPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->ageGroup, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->ageGroup, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditDeliverySubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "SelectEditDelivery");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->deliveryMode, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->deliveryMode, $newValue);
					
						   //End I:*
					      }
					   
					     if(array_key_exists('EditPhoneNumberSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputPhoneNumberPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->phone, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->phone, $newValue);
					
						   //End I:*
					      }
					   
					     if(array_key_exists('EditWhatsAppSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputWhatsAppPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->WhatsApp, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->WhatsApp, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditEmailSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputEmailPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->email, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->email, $newValue);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('EditBizWebsiteSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputBizWebsitePopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->bizWebsite, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->bizWebsite, $newValue);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('EditLinkedInSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputLinkedInPopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->LinkedIn, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->LinkedIn, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditYouTubeSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputYouTubePopup");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->YouTube, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->YouTube, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditSessionPriceSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "SelectEditSessionPrice");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->price, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->price, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditCreditCardsSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "StrFinalCreditCards");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->creditCards, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->creditCards, $newValue);
					
						   //End I:*
					      }
					   
					   	   
					   if(array_key_exists('EditAltPaymentsSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "StrFinalAltPayments");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->altPayment, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->altPayment, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditProvincesSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "StrFinalProvinces");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->provinces, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->provinces, $newValue);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('EditCitiesSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "StrFinalCities");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->cities, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->cities, $newValue);
					
						   //End I:*
					      }
					   
					    
					    if(array_key_exists('EditAddressSubmitter', $_POST)){
							 $newValue = filter_input(INPUT_POST, "InputEditAddress");
							 $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->address, $newValue);
						     $result = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->address, $newValue);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('Img01BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage01($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('Img02BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage02($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('Img03BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage03($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('Img04BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage04($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('Img05BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage05($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					    if(array_key_exists('Img06BtnSubmitter', $_POST)){
							
						      $DbSearch->UploadOfficeImage06($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
					   
					   if(array_key_exists('EditProfPictureSubmitter', $_POST)){
							
						      $DbSearch->UploadProfilePicture($DbSearch, $conn, $current_user_id);
					
						   //End I:*
					      }
							
						}
					   
				    //End I:*	
			
							
				//End I:*
			}

				/*Warning: don't forget to close the connection by calling close function on connection object.*/
					$conn->close();

			/*. End of Alternate path for when DB connect is a success. */
			//End Out-E:*
		}
//End Out-I:*	
}

