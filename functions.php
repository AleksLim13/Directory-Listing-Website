<?php 
// Include WordPress functions if not already included
require_once(ABSPATH . 'wp-admin/includes/image.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/media.php');

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ); 

function my_theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
  wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style') ); 
}

function SearchFiltersPopupConfig(){

      ?>
  
   <script>


        var webpage = document.getElementById("page");
        var strfiltersPopup = '<div class="SearchFiltersPopupBox"><div class="SearchFiltersCloseIconBox" onclick="GoCloseFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="15px" width="15px" title="SearchFiltersPopupCloseIcon" /></div><div class="FiltersPopupInsideMenu"><p onclick="GoGenderFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-IconsGender-White.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Gender</p><p onclick="GoEthnicityFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-IconsCulture-White.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Ethnicity</p><p onclick="GoSexualityFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-SexualityyIcon-White-1.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Sexuality</p><p onclick="GoMentalRoleFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupMentalRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Health Role</p><p onclick="GoQualificationsFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupQualificationsRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Qualifications</p><p onclick="GoSpecialtiesFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupSpecialtiesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Specialties</p><p onclick="GoTreatmentsFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupTreatmentIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Treatment</p><p onclick="GoDeliveryModeFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupDeliveryModeIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Delivery Mode</p><p onclick="GoProvincesFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupProvincesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Provinces</p><p onclick="GoCitiesFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FiltersInsidePopupCitiesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Cities</p><p class="GlobalFilterSubitBtn" onclick="ApplyGlobalFilters();">Apply Filters</p><div id="SearchFiltersConfigInsideBoxPopup"></div></div></div>';
        var nodeFiltersPopup = document.createElement("div");
        nodeFiltersPopup.innerHTML = strfiltersPopup;
        webpage.appendChild(nodeFiltersPopup);

		 var webpage = document.getElementById("page");
        var strGlobFilterForm = '<form id="SearchFiltersForm" method="post" action="https://findcouplestherapistnearme.com/search-listing/"><input type="hidden" name="IsFilterFormSubmitted" id="IsFilterFormSubmitted" /> <input type="hidden" name="GlobalFiltersTherapistGender" id="GlobalFiltersTherapistGender" ><input type="hidden" name="GlobalFiltersTherapistSexuality" id="GlobalFiltersTherapistSexuality" ><input type="hidden" name="GlobalFiltersTherapistEthnicity" id="GlobalFiltersTherapistEthnicity" ><input type="hidden" name="GlobalFiltersMentalHealthRole" id="GlobalFiltersMentalHealthRole" ><input type="hidden" name="GlobalFiltersQualifications" id="GlobalFiltersQualifications" ><input type="hidden" name="GlobalFiltersSpecialties" id="GlobalFiltersSpecialties" ><input type="hidden" name="GlobalFiltersTreatmentApproach" id="GlobalFiltersTreatmentApproach" ><input type="hidden" name="GlobalFiltersDeliveryMode" id="GlobalFiltersDeliveryMode" ><input type="hidden" name="GlobalTargetProvinces" id="GlobalFiltersGlobalTargetProvinces" ><input type="hidden" name="GlobalFiltersTargetCity" id="GlobalFiltersTargetCity" ></form>';
        var nodeGlobFilterForm = document.createElement("div");
		nodeGlobFilterForm.innerHTML = strGlobFilterForm;
		webpage.appendChild(nodeGlobFilterForm);

		function ApplyGlobalFilters(){

				var filtersForm = document.getElementById("SearchFiltersForm");
				filtersForm.submit();

			//End FUNC:*
		}

		function GoQuickFilterGender(){
           GoAllFiltersPopup();
		   GoGenderFilterPopup();
			//End FUNC:*
		}

		function GoQuickFilterEthnicity(){
            GoAllFiltersPopup();
			GoEthnicityFilterPopup();
			//End FUNC:*
		}

		function GoQuickFilterProvinces(){
               GoAllFiltersPopup();
			   GoProvincesFilterPopup();
			//End FUNC:*
		}

		function GoCloseFilterPopup(){

							var targetMenuDrop = document.querySelector(".SearchFiltersPopupBox");
							targetMenuDrop.style.display = "none";

					//End FUNC:*
				}

				function GoCloseInsideFilterPopup(){

							var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
							targetMenuDrop.style.display = "none";

					//End FUNC:*
				}

	   function GoSexualityFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:Center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlaySexualityIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px" > Sexuality</h5> <div style="border:none;"> <div><input type="radio" name="TherapistSexuality" value="Straight" id="Straight" style="margin-right:3px;"><label style="margin-right:5px;" for="Straight">Straight</label></div> <div><input type="radio" name="TherapistSexuality" value="Lesbian" id="Lesbian" style="margin-right:3px;"><label style="margin-right:5px;" for="Lesbian">Lesbian</label></div> <div><input type="radio" name="TherapistSexuality" value="Gay" id="Gay" style="margin-right:3px;"><label style="margin-right:5px;" for="Gay">Gay</label></div> <div><input type="radio" name="TherapistSexuality" value="Bisexual" id="Bisexual" style="margin-right:3px;"><label style="margin-right:5px;" for="Bisexual">Bisexual</label></div> <div><input type="radio" name="TherapistSexuality" value="Transexual" id="Transexual" style="margin-right:3px;"><label style="margin-right:5px;" for="Transexual">Transexual</label></div> <div><input type="radio" name="TherapistSexuality" value="Queer" id="Queer" style="margin-right:3px;"><label style="margin-right:5px;" for="Queer">Queer</label></div> <div><button class="ThemeBtnStyles" onclick="ApplySexualityFilterWithJS();">Filter</button></div><div style="margin-top:15px;"><button onclick="AddSexualityToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div> </div> </div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

		function GoGenderFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"> <img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-Gender-Royalblue-1.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Gender</h5> <div style="border:none;"><div><input type="radio" name="TherapistGender" value="Male" id="Male" style="margin-right:3px;"><label style="margin-right:5px;" for="Male">Male</label></div> <div><input type="radio" name="TherapistGender" value="Female" id="Female" style="margin-right:3px;"><label style="margin-right:5px;" for="Female">Female</label></div> <div><input type="radio" name="TherapistGender" value="Transgender" id="Transgender" style="margin-right:3px;"><label style="margin-right:5px;" for="Transgender">Transgender</label></div>  <div><input type="radio" name="TherapistGender" value="AnotherGender" id="AnotherGender" style="margin-right:3px;"><label style="margin-right:5px;" for="AnotherGender">Another Gender</label></div> <div><input type="radio" name="TherapistGender" value="Unknown" id="Unknown" style="margin-right:3px;"><label style="margin-right:5px;" for="Unknown">Unknown</label></div><div><button onclick="ApplyGenderFilterWithJS();" class="ThemeBtnStyles" type="button">Filter</button></div> <div style="margin-top:15px;"><button onclick="AddGenderToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div></div> </div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

		function GoEthnicityFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"> <img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-Ethnicity-Royablue.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Ethnicity</h5> <div><input type="radio" name="TherapistEthnicity" value="White" id="White" style="margin-right:3px;"><label style="margin-right:5px;" for="White">White</label></div> <div><input type="radio" name="TherapistEthnicity" value="Black" id="Black" style="margin-right:3px;"><label style="margin-right:5px;" for="Black">Black<label></label></label></div> <div><input type="radio" name="TherapistEthnicity" value="Asian" id="Asian" style="margin-right:3px;"><label style="margin-right:5px;" for="Asian">Asian<label></label></label></div> <div><input type="radio" name="TherapistEthnicity" value="Indian" id="Indian" style="margin-right:3px;"><label style="margin-right:5px;" for="Indian">Indian<label></label></label></div> <div><input type="radio" name="TherapistEthnicity" value="European" id="European" style="margin-right:3px;"><label style="margin-right:5px;" for="European">European<label></label></label></div> <div><button onclick="ApplyEthnicityFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div> <div style="margin-top:15px;"><button onclick="AddEthnicityToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div> </div>  </div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

		function GoMentalRoleFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayMentalRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Health Role</h5> <label style="display:none;" for="mental-health-role">Select Role:</label><select id="mental-health-role" name="MentalHealthRole" style="border:1px black solid;"> <option value="Select">Select</option> <option value="Psychologist">Psychologist</option> <option value="Psychiatrist">Psychiatrist</option> <option value="Clinical Social Worker">Clinical Social Worker</option> <option value="Mental Health Counselor">Mental Health Counselor</option> <option value="Marriage Family Therapist">Marriage and Family Therapist</option> <option value="Addictions Counsellor">Addiction Counselor</option> <option value="Psychotherapist">Psychotherapist</option> <option value="Behavioral Therapist">Behavioral Therapist</option> <option value="Art Therapist">Art Therapist</option> <option value="Occupational Therapist">Occupational Therapist (Mental Health)</option> <option value="Peer Support Worker">Peer Support Worker</option> <option value="Grief Counselor">Grief Counselor</option> </select> <div style="margin-top:15px;"> <button onclick="ApplyMentalRoleFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div><div style="margin-top:15px;"><button onclick="AddMentalRoleToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div></div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

			function GoQualificationsFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"> <img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /> </div> <h5 style="display: flex; justify-content: center"> <img style="margin-right: 5px" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayQualificationsRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px" /> Qualifications </h5> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterPHD" value="PHD" /><label for="GlobalFilterPHD">PHD</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterMA" value="MA" /><label for="GlobalFilterMA">MA</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterBA" value="BA" /><label for="GlobalFilterBA">BA</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterBSC" value="BSC" /><label for="GlobalFilterBSC">BSC</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterDIP" value="DIP" /><label for="GlobalFilterDIP">DIP</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterOCGC" value="OCGC" /><label for="GlobalFilterOCGC">OCGC</label></div> <div><input type="radio" name="GlobalFilterQualificationsInput" id="GlobalFilterSelf" value="Self Taught" /><label for="GlobalFilterSelf">Self Taught</label></div> <div style="margin-top: 15px"> <button onclick="ApplyQualificationsRoleFilterWithJS();" class="ThemeBtnStyles" type="submit" > Filter </button> </div> <div style="margin-top: 15px"> <button onclick="AddQualificationsToAllFilterWithJS();" class="ThemeBtnStyles" type="submit"> Add to Filters </button> </div> </div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

		function GoSpecialtiesFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="marginleftfive filterBoxSet"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlaySpecialtiesRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Specialties</h5> <select id="SelectGlobalFilterSpecialties" name="SelectGlobalFilterSpecialties"> <option value="Select">Select</option> <option value="Anxiety">Anxiety</option> <option value="Depression">Depression</option> <option value="Stress">Stress</option> <option value="OCD">Obsessive Compulsive Disorder (OCD)</option> <option value="ADHD">Attention Deficit Hyperactive Disorder (ADHD)</option> <option value="Addictions Counsellor">Addiction Counselor</option> <option value="Bipolar Disorder">Bipolar Disorder</option> <option value="Eating Disorders">Eating Disorders</option> <option value="Substance Abuse">Substance Abuse</option> <option value="Grief and Loss">Grief and Loss</option> <option value="Low Self Esteem">Low Self-Esteem</option> <option value="Anger Management">Anger Management</option> <option value="Relationship Issues">Relationship Issues</option><option value="Panic Disorder">Panic Disorder</option>	<option value="Sleep Disorders">Sleep Disorders</option></select> <div style="margin-top:15px;"> <button onclick="ApplySpecialtiesFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div> <div style="margin-top:15px;"><button onclick="AddSpecialtiesToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div></div>';
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}


		function GoTreatmentsFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayTreatmentsRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Treatment</h5><select id="SelectGlobalFilterTreatments" name="SelectGlobalFilterTreatments"> <option value="Select">Select</option> <option value="CBT">Cognitive Behavior Therapy (CBT)</option> <option value="DBT">Dialectical Behavior Therapy (DBT)</option> <option value="Mindfulness">Minfulness Therapy</option> <option value="Psychodynamic">Psychodynamic Therapy</option> <option value="Humanistic">Humanistic Therapy</option> <option value="ACT">Acceptance and Commitment Therapy (ACT)</option> <option value="SFBT">Solution-Focused Brief Therapy (SFBT)</option> <option value="Narrative Therapy">Narrative Therapy</option> <option value="Motivational Interviewing">Motivational Interviewing</option> <option value="Family Systems">Family Systems Therapy</option> <option value="Play Therapy">Play Therapy</option> <option value="Exposure Therapy">Exposure Therapy</option> <option value="Interpersonal Therapy">Interpersonal Therapy</option> <option value="Art Therapy">Art Therapy</option></select> <div style="margin-top:15px;"><button onclick="ApplyTreatmentsFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div> <div style="margin-top:15px;"><button onclick="AddTreatmentsToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div></div>'; 
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

			function GoDeliveryModeFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayDeliveryRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px">  Delivery Mode</h5>  <div><input type="radio" name="DeliveryMode" value="Online" id="DM_Online" style="margin-right:3px;"><label style="margin-right:5px;" for="DM_Online">Online</label></div> <div><input type="radio" name="DeliveryMode" value="In-Person" id="DM_In-Person" style="margin-right:3px;"><label style="margin-right:5px;" for="DM_In-Person">In Person</label></div> <div><input type="radio" name="DeliveryMode" value="Mixed Hybrid" id="DM_MixedHybrid" style="margin-right:3px;"><label style="margin-right:5px;" for="DM_MixedHybrid">Mixed</label></div> </div> <div style="margin-top:15px;margin-left:5px;"><button onclick="ApplyDeliveryModeFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div> <div style="margin-top:15px;margin-left:5px;"><button onclick="AddDeliveryModeToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div> </div>'; 
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

			function GoProvincesFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayProvincesRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Provinces</h5><select id="SelectGlobalFilterProvinces" name="SelectGlobalFilterProvinces"> <option value="Select">Select</option> <option value="Alberta">Alberta</option> <option value="British Columbia">British Columbia</option> <option value="Manitoba">Manitoba</option> <option value="New Brunswick">New Brunswick</option> <option value="Newfoundland and Labrador">Newfoundland and Labrador</option> <option value="Nova Scotia">Nova Scotia</option> <option value="Ontario">Ontario</option> <option value="Prince Edward Island">Prince Edward Island</option> <option value="Quebec">Quebec</option> <option value="Saskatchewan">Saskatchewan</option> <option value="Northwest Territories">Northwest Territories</option> <option value="Nunavut">Nunavut</option> <option value="Yukon">Yukon</option></select> <div style="margin-top:15px;"><button onclick="ApplyProvincesFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div> <div style="margin-top:15px;"><button onclick="AddProvincesToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div></div>'; 
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}

		
			function GoCitiesFilterPopup(){

             var targetMenuDrop = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 targetMenuDrop.style.display = "block";
			 targetMenuDrop.innerHTML = "";
		     var strGenderPopup = '<div class="filterBoxSet marginleftfive"> <div class="SearchFiltersCloseIconBox" onclick="GoCloseInsideFilterPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersPopupCloseIcon-1.png" alt="SearchFiltersPopupCloseIcon" height="10px" width="10px" title="SearchFiltersPopupCloseIcon" /></div> <h5 style="display:flex;justify-content:center;"><img style="margin-right:5px;" decoding="async" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchFiltersInsideOverlayCitiesRoleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="20px" height="20px"> Cities</h5> <select name="TargetCity" id="FilterCity"> <option value="Select">Select</option> <option value="Toronto">Toronto</option> <option value="Montreal">Montreal</option> <option value="Calgary">Calgary</option> <option value="Ottawa">Ottawa</option> <option value="Edmonton">Edmonton</option> <option value="Mississauga">Mississauga</option> <option value="Winnipeg">Winnipeg</option> <option value="Vancouver">Vancouver</option> <option value="Brampton">Brampton</option> <option value="Hamilton">Hamilton</option> <option value="Quebec City">Quebec City</option> <option value="Surrey">Surrey</option> <option value="Laval">Laval</option> <option value="Halifax">Halifax</option> <option value="London">London</option> <option value="Markham">Markham</option> <option value="Vaughan">Vaughan</option> <option value="Gatineau">Gatineau</option> <option value="Saskatoon">Saskatoon</option> <option value="Longueuil">Longueuil</option> <option value="Kitchener">Kitchener</option> <option value="Burnaby">Burnaby</option> <option value="Windsor">Windsor</option> <option value="Regina">Regina</option> <option value="Richmond">Richmond</option> </select> <div style="margin-top:15px;"><button onclick="ApplyCitiesFilterWithJS();" class="ThemeBtnStyles" type="submit">Filter</button></div><div style="margin-top:15px;"><button onclick="AddCitiesToAllFilterWithJS();" class="ThemeBtnStyles" type="submit">Add to Filters</button></div>  </div>'; 
             var nodeGenderPopup = document.createElement("div");
			 nodeGenderPopup.innerHTML = strGenderPopup;
			 targetMenuDrop.appendChild(nodeGenderPopup);

			//End FUNC:*
		}


		function AddGenderToAllFilterWithJS(){
                  
             var therapistGenderInput = document.getElementById("GlobalFiltersTherapistGender");
             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

					if(document.getElementById('Male').checked){
					  
                        therapistGenderInput.value = "Male";
						
				     }

					 if(document.getElementById('Female').checked){
				
					therapistGenderInput.value = "Female";
				     }

					 if(document.getElementById('Transgender').checked){
					therapistGenderInput.value = "Transgender";
				     }

					 if(document.getElementById('AnotherGender').checked){
					  therapistGenderInput.value = "Another Gender";
				     }

					 if(document.getElementById('Unknown').checked){
					therapistGenderInput.value = "Unknown";
				     }

					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyGenderFilterWithJS(){

			var therapistGenderInput = document.getElementById("GlobalFiltersTherapistGender");
        
						if(document.getElementById('Male').checked){
					  
                        therapistGenderInput.value = "Male";
						
				     }

					 if(document.getElementById('Female').checked){
				
					therapistGenderInput.value = "Female";
				     }

					 if(document.getElementById('Transgender').checked){
					therapistGenderInput.value = "Transgender";
				     }

					 if(document.getElementById('AnotherGender').checked){
					  therapistGenderInput.value = "Another Gender";
				     }

					 if(document.getElementById('Unknown').checked){
					therapistGenderInput.value = "Unknown";
				     }
					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}

		
		function AddSexualityToAllFilterWithJS(){
                  
             	var therapistSexualityInput = document.getElementById("GlobalFiltersTherapistSexuality");

				
						if(document.getElementById('Straight').checked){
					  
                        therapistSexualityInput.value = "Straight";
						
				     }

					 
					 if(document.getElementById('Lesbian').checked){
				
					therapistSexualityInput.value = "Lesbian";
				     }

					  if(document.getElementById('Gay').checked){
					therapistSexualityInput.value = "Gay";
				     }

					  if(document.getElementById('Bisexual').checked){
					therapistSexualityInput.value = "Bisexual";
				     }

					 
					 if(document.getElementById('Transexual').checked){
					therapistSexualityInput.value = "Transexual";
				     }

					 if(document.getElementById('Queer').checked){
					therapistSexualityInput.value = "Queer";
				     }
					 

					 var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplySexualityFilterWithJS(){

		 	var therapistSexualityInput = document.getElementById("GlobalFiltersTherapistSexuality");

			if(document.getElementById('Straight').checked){
					  
                        therapistSexualityInput.value = "Straight";
						
				     }

					  if(document.getElementById('Lesbian').checked){
				
					therapistSexualityInput.value = "Lesbian";
				     }

					  if(document.getElementById('Gay').checked){
					therapistSexualityInput.value = "Gay";
				     }


					 if(document.getElementById('Bisexual').checked){
					therapistSexualityInput.value = "Bisexual";
				     }

					 if(document.getElementById('Transexual').checked){
					therapistSexualityInput.value = "Transexual";
				     }

					 if(document.getElementById('Queer').checked){
					therapistSexualityInput.value = "Queer";
				     }

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();

			//End FUNC:*
		}

		function AddEthnicityToAllFilterWithJS(){
                  
             var therapistEthnicityInput = document.getElementById("GlobalFiltersTherapistEthnicity");
             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

			 
	                 if(document.getElementById('White').checked){
					  
                        therapistEthnicityInput.value = "White";
						
				     }

					 if(document.getElementById('Black').checked){
				
					therapistEthnicityInput.value = "Black";
				     }

					 if(document.getElementById('Asian').checked){
					therapistEthnicityInput.value = "Asian";
				     }

					 if(document.getElementById('Indian').checked){
					  therapistEthnicityInput.value = "Indian";
				     }

					 if(document.getElementById('European').checked){
					therapistEthnicityInput.value = "European";
				     }

					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyEthnicityFilterWithJS(){

			var therapistEthnicityInput = document.getElementById("GlobalFiltersTherapistEthnicity");
        
					if(document.getElementById('White').checked){
					  
                        therapistEthnicityInput.value = "White";
						
				     }

					 if(document.getElementById('Black').checked){
				
					therapistEthnicityInput.value = "Black";
				     }

					 if(document.getElementById('Asian').checked){
					therapistEthnicityInput.value = "Asian";
				     }

					 if(document.getElementById('Indian').checked){
					  therapistEthnicityInput.value = "Indian";
				     }

					 if(document.getElementById('European').checked){
					therapistEthnicityInput.value = "European";
				     }

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}

				
		function AddMentalRoleToAllFilterWithJS(){
                  
             var therapistMentalRoleSelect = document.getElementById("GlobalFiltersMentalHealthRole");

             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 var targetSelect = document.getElementById("mental-health-role");
			 therapistMentalRoleSelect.value = targetSelect.value;

		
				targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyMentalRoleFilterWithJS(){

			  var therapistMentalRoleSelect = document.getElementById("GlobalFiltersMentalHealthRole");

             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 var targetSelect = document.getElementById("mental-health-role");
			 therapistMentalRoleSelect.value = targetSelect.value;

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}

			function AddQualificationsToAllFilterWithJS(){
                  
			var therapistQualificationsInput = document.getElementById("GlobalFiltersQualifications");
			var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

                      if(document.getElementById('GlobalFilterPHD').checked){
					  
                        therapistQualificationsInput.value = "PHD";
						
				     }

					 if(document.getElementById('GlobalFilterMA').checked){
				
					therapistQualificationsInput.value = "MA";
				     }

					 if(document.getElementById('GlobalFilterBA').checked){
					therapistQualificationsInput.value = "BA";
				     }

					 if(document.getElementById('GlobalFilterBSC').checked){
					  therapistQualificationsInput.value = "BSC";
				     }

					 if(document.getElementById('GlobalFilterDIP').checked){
					therapistQualificationsInput.value = "DIP";
				     }

					  if(document.getElementById('GlobalFilterOCGC').checked){
					therapistQualificationsInput.value = "OCGC";
				     }

					  if(document.getElementById('GlobalFilterSelf').checked){
					therapistQualificationsInput.value = "Self Taught";
				     }

					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyQualificationsRoleFilterWithJS(){
           
			var therapistQualificationsInput = document.getElementById("GlobalFiltersQualifications");
        
                      if(document.getElementById('GlobalFilterPHD').checked){
					  
                        therapistQualificationsInput.value = "PHD";
						
				     }

					 if(document.getElementById('GlobalFilterMA').checked){
				
					therapistQualificationsInput.value = "MA";
				     }

					 if(document.getElementById('GlobalFilterBA').checked){
					therapistQualificationsInput.value = "BA";
				     }

					 if(document.getElementById('GlobalFilterBSC').checked){
					  therapistQualificationsInput.value = "BSC";
				     }

					 if(document.getElementById('GlobalFilterDIP').checked){
					therapistQualificationsInput.value = "DIP";
				     }

					  if(document.getElementById('GlobalFilterOCGC').checked){
					therapistQualificationsInput.value = "OCGC";
				     }

					  if(document.getElementById('GlobalFilterSelf').checked){
					therapistQualificationsInput.value = "Self Taught";
				     }

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}

					function AddSpecialtiesToAllFilterWithJS(){
                  
             var therapistSpecialtiesInput = document.getElementById("GlobalFiltersSpecialties");

			var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

			 var targetSelect = document.getElementById("SelectGlobalFilterSpecialties");
			 therapistSpecialtiesInput.value = targetSelect.value;

				targetInsideContainer.style.display = "none";

			//End FUNC:*
		}

		function ApplySpecialtiesFilterWithJS(){

            var therapistSpecialtiesInput = document.getElementById("GlobalFiltersSpecialties");

			var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

			 var targetSelect = document.getElementById("SelectGlobalFilterSpecialties");
			 therapistSpecialtiesInput.value = targetSelect.value;

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}

			function AddTreatmentsToAllFilterWithJS(){
                  
              var therapistTreatmentsInput = document.getElementById("GlobalFiltersTreatmentApproach");

             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 var targetSelect = document.getElementById("SelectGlobalFilterTreatments");
			 therapistTreatmentsInput.value = targetSelect.value;

				targetInsideContainer.style.display = "none";

			//End FUNC:*
		}

		function ApplyTreatmentsFilterWithJS(){

         var therapistTreatmentsInput = document.getElementById("GlobalFiltersTreatmentApproach");

             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 var targetSelect = document.getElementById("SelectGlobalFilterTreatments");
			 therapistTreatmentsInput.value = targetSelect.value;

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();

			//End FUNC:*
		}

			function AddDeliveryModeToAllFilterWithJS(){
                  
             var therapistDeliveryModeInput = document.getElementById("GlobalFiltersDeliveryMode");

             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

					if(document.getElementById('DM_Online').checked){
					  
                        therapistDeliveryModeInput.value = "Online";
						
				     }

					 if(document.getElementById('DM_In-Person').checked){
				
					therapistDeliveryModeInput.value = "In person";
				     }

					 if(document.getElementById('DM_MixedHybrid').checked){
					    therapistDeliveryModeInput.value = "Mixed";
				     }

					 targetInsideContainer.style.display = "none";

			//End FUNC:*
		}

		function ApplyDeliveryModeFilterWithJS(){

			var therapistDeliveryModeInput = document.getElementById("GlobalFiltersDeliveryMode");
        
					if(document.getElementById('DM_Online').checked){
					  
                        therapistDeliveryModeInput.value = "Online";
						
				     }

					 if(document.getElementById('DM_In-Person').checked){
				
					therapistDeliveryModeInput.value = "In person";
				     }

					 if(document.getElementById('DM_MixedHybrid').checked){
					therapistDeliveryModeInput.value = "Mixed";
				     }

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();


			//End FUNC:*
		}
	
		function AddProvincesToAllFilterWithJS(){
                  
             var therapistProvincesInput = document.getElementById("GlobalFiltersGlobalTargetProvinces");

			     var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");
			 var targetSelect = document.getElementById("SelectGlobalFilterProvinces");
			 therapistProvincesInput.value = targetSelect.value;

		
					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyProvincesFilterWithJS(){

			 var therapistProvincesInput = document.getElementById("GlobalFiltersGlobalTargetProvinces");
				 
			 var targetSelect = document.getElementById("SelectGlobalFilterProvinces");
			 therapistProvincesInput.value = targetSelect.value;

			var targetFilterForm = document.getElementById("SearchFiltersForm");
			targetFilterForm.submit();


			//End FUNC:*
		}


		function AddCitiesToAllFilterWithJS(){
                  
               var therapistCitiesInput = document.getElementById("GlobalFiltersTargetCity");
             var targetInsideContainer = document.getElementById("SearchFiltersConfigInsideBoxPopup");

				var targetSelect = document.getElementById("FilterCity");

			 therapistCitiesInput.value = targetSelect.value;

					 targetInsideContainer.style.display = "none";


			//End FUNC:*
		}

		function ApplyCitiesFilterWithJS(){

			
			var therapistCitiesInput = document.getElementById("GlobalFiltersTargetCity");
        
			 var targetSelect = document.getElementById("FilterCity");

			 therapistCitiesInput.value = targetSelect.value;

					 var targetFilterForm = document.getElementById("SearchFiltersForm");
					 targetFilterForm.submit();

			//End FUNC:*
		}

     </script>

     <?php

    //End FUNC:*
}

add_action('wp_footer', 'SearchFiltersPopupConfig');

function MyHeaderConfig(){


  ?>
  
   <script>
      /*
     Author: Aleksandar Lim - BA, DIP, OCC
     Year: 2025
     Activity: Header Setup
     * */

    var mastHead = document.getElementById("masthead");
    var siteBranding = document.querySelector(".site-branding");
    var siteNav = document.getElementById("site-navigation");
    var siteBrand = document.querySelector("header > div");
    var headBtn = document.getElementById("header-buttons");
    var siteDesc = document.getElementsByClassName("site-description");
    var EleSiteLogo = document.querySelector(".site-logo");

	var listdomLogo = document.querySelector(".custom-logo");
    var strOldFCTLogo = '<div><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/03/cropped-cropped-cropped-Designer-2FCT-1-1.jpeg" alt="BlueFCTSquareLogo" height="50px" width="50px" title="BlueFCTSquareLogo" /></div>';
	var nodeOldFCTSquare = document.createElement("div");
	nodeOldFCTSquare.innerHTML = strOldFCTLogo;

	if(listdomLogo){
		listdomLogo.replaceWith(nodeOldFCTSquare);
	}

	var mobileNav = document.querySelector(".menu-main-menu-container");
    var strMobSULink = '<a id="MobSignUpLink" class="mobNavLink" href="https://findcouplestherapistnearme.com/sign-up/">Sign Up</a>';
	var strMobAddListLink = '<a id="MobAddListLink" class="mobNavLink" href="https://findcouplestherapistnearme.com/add-listing/">Add Listing</a>';
    var node_MobSULink = document.createElement("a");
	var node_MobAddListLink = document.createElement("a");

    var strMenuBtn = '<div id="MenuBtn"><div><div class="ThemeBtnStyles" onclick="GoMenuDropdown();">Menu</div></div><div id="MenuDropdown"><p><a href="https://findcouplestherapistnearme.com/media">Media</a></p></div></div>';
    var nodeMenuBTN = document.createElement("div");
    nodeMenuBTN.innerHTML = strMenuBtn;
    var targetLoginBtn = document.querySelector(".listdomer-user");
	var targetLogoutBtn = document.getElementById("UserLogoutBtn");
    var strMediaBtn = '<div><a class="mobNavLink" href="https://findcouplestherapistnearme.com/media">Media</a></div>';
    var nodeMediaBtn = document.createElement("div");
    nodeMediaBtn.innerHTML = strMediaBtn;

	var strMainNavBox = '<div id="MainNavBox"><div><button id="UserLoginBtn" onclick="GoLogin();">Login</button></div><div id="MenuBtn"><div><div class="ThemeBtnStyles" onclick="GoMenuDropdown();">Menu</div></div><div id="MenuDropdown"><p><a href="https://findcouplestherapistnearme.com/media">Media</a></p></div></div><div style="margin-top:-5px;margin-bottom:0px;margin-left:5px;"><p id="TherapistTitleAboveSignUp" style="margin:0px;">Therapists</p><button style="padding:0px;margin:0px;" class="ThemeBtnStyles" id="SignUpAndGetListBtn" onclick="GoSignUp();">Sign Up and Get Listed</button></div><div>';
	var nodeMainNavBox =  document.createElement("div");
	nodeMainNavBox.innerHTML = strMainNavBox;

    node_MobSULink.innerHTML = strMobSULink;
	node_MobAddListLink.innerHTML = strMobAddListLink;

    if(mobileNav !== null){
       mobileNav.appendChild(node_MobSULink);
       mobileNav.appendChild(nodeMediaBtn);
       }

    var addListBtn = document.querySelector(".listdomer-add-listing");
    var strAddList = '<div style="margin-top:-20px;"><p id="TherapistTitleAboveSignUp">Therapists</p><button style="padding:0px;" class="ThemeBtnStyles" id="SignUpAndGetListBtn" onclick="GoSignUp();">Sign Up and Get Listed</button></div>';
    var addListDiv = document.createElement("div");

    addListDiv.innerHTML = strAddList;

    if(addListBtn !== null && targetLogoutBtn === null){
       addListBtn.replaceWith(addListDiv);
       }

    var loginBtnID = document.querySelector("#listdomer-user-button");
    var loginBtnCL = document.querySelector(".listdomer-user-button");

    var nodeLoginBtn = document.createElement("div");

    var strLoginBtn = '<button id="UserLoginBtn" onclick="GoLogin();">Login</button>';
    nodeLoginBtn.innerHTML = strLoginBtn;

    function GoLogin(){
        window.location.href = "https://findcouplestherapistnearme.com/login";
    }

    if(loginBtnID !== null && targetLogoutBtn === null){
       loginBtnID.replaceWith(nodeLoginBtn);
       }

    if(loginBtnCL !== null && targetLogoutBtn == null){
       loginBtnCL.replaceWith(nodeLoginBtn);
       }

	   if(headBtn){
		headBtn.appendChild(nodeMainNavBox);
	
	   }

       function GoSignUp(){
           window.location.href = "https://findcouplestherapistnearme.com/sign-up";
          //End FUNC:*

       }

       function GoMenuDropdown(){
         
			var targetMenuDrop = document.getElementById("MenuDropdown");
              
				if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
                   
				   
                   targetMenuDrop.style.display = "block";
                   
				   }
                
                else {
                  targetMenuDrop.style.display = "none";
                }

        //End FUNC:*
       }

    var TopLeftTitle = '<div id="TopeLeftTitleBox"><a href="https://findcouplestherapistnearme.com/"><img class="" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/06/FCTLogo-FontPuzzle.png" alt="FCTLogo-FontPuzzle" title="FCTLogo-FontPuzzle" width="100%" height="100%" /></a></div>';
    var TopLeftTitleDiv = document.createElement("div");

    TopLeftTitleDiv.innerHTML = TopLeftTitle;

    if(EleSiteLogo !== null){
       EleSiteLogo.replaceWith(TopLeftTitleDiv);
       }

       if (targetLoginBtn){
          targetLoginBtn.after(nodeMenuBTN);
       }

   </script>

   <?php
   
  //End FUNC:*
}

add_action('wp_footer', 'MyHeaderConfig');

function UserUISetup(){
  
  $DbSearch = new DBSearchListing();
  $DbSearch->DatabaseConnect();

   $conn = $DbSearch->conn;
  
  $listingExists = $DbSearch->DoesUserHaveTherapistListing();
  
  if(is_user_logged_in() && !$listingExists){
    
         ?>
     
     <script>
       
      var strMobAddListLink = '<a style="font-size:20px;" class="mobNavLink MobAddListLink" href="https://findcouplestherapistnearme.com/add-listing/">Add Listing</a>';
      var mobileNav = document.querySelector(".menu-main-menu-container");
      var node_MobAddListLink = document.createElement("a");
	  node_MobAddListLink.innerHTML = strMobAddListLink;
      var strMediaBtn = '<div><a href="https://findcouplestherapistnearme.com/media">Media</a></div>';
      var nodeMediaBtn = document.createElement("div");
      nodeMediaBtn.innerHTML = strMediaBtn;
       var strMenuBtn = '<div id="MenuBtn" style="margin-left:5px;"><div><div class="ThemeBtnStyles" onclick="GoMenuDropdown();">Menu</div></div><div id="MenuDropdown"><p><a href="https://findcouplestherapistnearme.com/media">Media</a></p></div></div>';
      var nodeMenuBTN = document.createElement("div");
      nodeMenuBTN.innerHTML = strMenuBtn;
       
       if(mobileNav !== null){
         console.log("Mobile Nav Not Null");

	   mobileNav.appendChild(node_MobAddListLink);
   
       }
       else {
        console.log("Mobile Nav Null");
       }

      var loginBtn = document.getElementById("UserLoginBtn");
      var signUpBtn = document.getElementById("SignUpAndGetListBtn");

      var nodeLogoutBtn = document.createElement("div");
      var nodeAddListBtn = document.createElement("div");

	  var mobSignUpLink = document.getElementById("MobSignUpLink");
	  mobSignUpLink.remove();
	
      var strLogoutBtn = '<a name="UserLogoutBtn" href="<?php echo wp_logout_url(home_url()); ?>" class="ThemeBtnStyles" id="UserLogoutBtn" type="submit">Logout</a>';
      var strAddListBtn = '<button class="ThemeBtnStyles" id="UserAddListBtn" onclick="GoAddList();">Add Listing</button>';

      function GoLogout(){

       window.location.href = '<?php echo wp_logout_url(home_url()); ?>'; 
      }

      function GoAddList(){
          window.location.href = 'https://findcouplestherapistnearme.com/add-listing';
      }

      nodeLogoutBtn.innerHTML = strLogoutBtn;
      nodeAddListBtn.innerHTML = strAddListBtn;

      loginBtn.replaceWith(nodeLogoutBtn);
      signUpBtn.replaceWith(nodeAddListBtn);
       
              if (targetLogoutBtn){
          targetLogoutBtn.parentNode.after(nodeMenuBTN);
       }
       
   
    </script>

         <?php

    //End I:*
	}
  
  if(is_user_logged_in() && $listingExists){
    
       ?>
     
     <script>
       
      var strMobProfileLink = '<a style="font-size:20px;" class="mobNavLink MobAddListLink" href="https://findcouplestherapistnearme.com/profile/">User Listing</a>';
      var mobileNav = document.querySelector(".menu-main-menu-container");
      var node_MobProfileLink = document.createElement("a");
	  node_MobProfileLink.innerHTML = strMobProfileLink;
      var strMediaBtn = '<div><a href="https://findcouplestherapistnearme.com/media">Media</a></div>';
      var nodeMediaBtn = document.createElement("div");
      nodeMediaBtn.innerHTML = strMediaBtn;
       var strMenuBtn = '<div id="MenuBtn" style="margin-left:5px;"><div><div class="ThemeBtnStyles" onclick="GoMenuDropdown();">Menu</div></div><div id="MenuDropdown"><p><a href="https://findcouplestherapistnearme.com/media">Media</a></p></div></div>';
      var nodeMenuBTN = document.createElement("div");
      nodeMenuBTN.innerHTML = strMenuBtn;
       
       if(mobileNav !== null){
         console.log("Mobile Nav Not Null");

	   mobileNav.appendChild(node_MobProfileLink);
  
         
       }
       else {
        console.log("Mobile Nav Null");
       }

      var loginBtn = document.getElementById("UserLoginBtn");
      var signUpBtn = document.getElementById("SignUpAndGetListBtn");

      var nodeLogoutBtn = document.createElement("div");
      var nodeProfileBtn = document.createElement("div");

	  var mobSignUpLink = document.getElementById("MobSignUpLink");
	  mobSignUpLink.remove();
	
      var strLogoutBtn = '<a name="UserLogoutBtn" href="<?php echo wp_logout_url(home_url()); ?>" class="ThemeBtnStyles" id="UserLogoutBtn" type="submit">Logout</a>';
      var strProfileBtn = '<button class="ThemeBtnStyles" id="UserProfileBtn" style="width:150px;" onclick="GoProfile();">User Listing</button>';

      function GoLogout(){

       window.location.href = '<?php echo wp_logout_url(home_url()); ?>'; 
      }

      function GoProfile(){
          window.location.href = 'https://findcouplestherapistnearme.com/profile';
      }

      nodeLogoutBtn.innerHTML = strLogoutBtn;
      nodeProfileBtn.innerHTML = strProfileBtn;

      loginBtn.replaceWith(nodeLogoutBtn);
      signUpBtn.replaceWith(nodeProfileBtn);
       
              if (targetLogoutBtn){
          targetLogoutBtn.parentNode.after(nodeMenuBTN);
       }
       
        </script>

         <?php
    
  //End E:*
  }
  
  
  //End FUNC:*
}

add_action('wp_footer', 'UserUISetup');


function enqueue_child_theme_scripts() {
    // Register and enqueue the custom script
    wp_enqueue_script(
        'custom-script', // Handle name
        get_stylesheet_directory_uri() . '/JS/FixFooterSpacingIssues.js', // Path to the JS file
        array('jquery'), // Dependencies (optional)
        '1.0', // Version (optional)
        true // Load in footer (true) or header (false)
    );
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');

if ( ! class_exists( 'My_Custom_Class' ) ) {
    class My_Custom_Class {

        // Property
        private $message;

        // Constructor
        public function __construct( ) {
          

            // Hook into WordPress
            add_action( 'wp_footer', array( $this, 'display_message' ) );
        }

        // Method to display message
        public function display_message() {
            echo '<div style="text-align:center; padding:10px; background:#f0f0f0;">' 
                 . esc_html( $this->message ) . 
                 '</div>';
        }
    }
}

if ( ! class_exists( 'DBSearchListing' ) ) {
  
    class DBSearchListing {

      // Property
        public $message;
        public $conn;
        public $servername = DB_HOST;
        public $username = DB_USER;
        public $password = DB_PASSWORD;
        public $database = DB_NAME;

      
      		  /*Each number is an id of the column value for the feilds table - Listing Data Elements. */
			 
		     public $profTitle = "100";
			 public $profPicture = "101";
		     public $profSuffix = "2";
				     
		    /* Personal Details */
		     public $gender = "19";
		     public $ethnicity = "21"; 
		     public $sexualOrient = "93"; 
	     
		     /*Topics*/
		     public $healthRole = "22"; 
		     public $pDescription = "14";
		     public $qualifications = "15"; 
		     public $specialties = "25"; 
		     public $treatmentApproaches = "26"; 
		
		      /* Target Audience and Delivery*/
		     public $clientFocus = "28"; 
		     public $deliveryMode = "30";
		     public $sessionSet = "46";
		 
		      /* Contact Methods */
		     public $phone = "38";
		     public $email = "39";
		     public $bizWebsite = "40"; 
		      
		    /* Brass Tax */
		     public $price = "47"; 
		     public $creditCards = "48"; 
		     public $altPayment = "49"; 
		 
		    /* Locations */
		     public $provinces = "53"; 
		     public $cities = "54"; 
		     public $address = "99";
		
		     /* Inticers */
		     public $officeImg01 = "59"; 
		     public $officeImg02 = "60"; 
		     public $officeImg03 = "61"; 
		     public $officeImg04 = "62"; 
		     public $officeImg05 = "63"; 
		     public $officeImg06 = "64";
		   		
		      /*Value changes and determines id of value from form with column called name. */
		      public $fieldID = "";
		
		     /*Set the target form here by variable assignment that changes dynamically per use-case.*/
		     public $formID = "3588";
	
			public $profTitleReturned;
			public $profPictureReturned;
            public $firstNameReturned;
			public $lastNameReturned;

            public $profSuffixReturned;

            public $pDescriptionReturned;
            public $qualificationsReturned;
            public $genderReturned;
            public $ethnicityReturned;
            public $healthRoleReturned;
            public $sexualOrientReturned;   
            public $specialtiesReturned;
            public $treatmentApproachesReturned;
            public $clientFocusReturned;
            public $deliveryModeReturned;
            public $phoneReturned;
            public $emailReturned;
            public $bizWebsiteReturned;
            public $sessionSetReturned;
            public $priceReturned;
            public $creditCardsReturned;
            public $altPaymentReturned;
            public $provincesReturned;
            public $citiesReturned;
            public $addressReturned;
            public $officeImg01Returned;
            public $officeImg02Returned;
            public $officeImg03Returned;
            public $officeImg04Returned;
            public $officeImg05Returned;
            public $officeImg06Returned;

            public $VarSQL_FilterString;
            public $VarSQL_FilterStringProto;
      
      public function DatabaseConnect(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
      //End FUNC:*
      }
      
      public function BuildTextSearchBox(){

		?>

         <script>

			  function GoAllFiltersPopup(){

							var targetMenuDrop = document.querySelector(".SearchFiltersPopupBox");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}


		 </script>

        <?php

        echo '<div class="FindTherapistHeader"><h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/SearchBoxHeaderIcon-ColoredMagnified.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Find Your Therapist</h5></div>';
        echo '<form action="https://findcouplestherapistnearme.com/search-listing/" method="post" style="width:100%">';
        echo '<table id="TableSearchBox"><td width="95%"><div class="DBMessage"><input id="ListSearchBox" name="ListSearchValue" type="text"/> </div></td><td width="5%"><button style="background-color:blue;" class="ThemeBtnStyles" type="submit" name="ListSearchSubmitter">Submit</button></td></table>';
        echo '<div class="FiltersDropBar"><div class="SearchFiltersTop4BtnBox"><p onclick="GoQuickFilterGender();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-Gender-Royalblue-1.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Gender</p><p onclick="GoQuickFilterEthnicity();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-Ethnicity-Royablue.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Ethnicity</p><p onclick="GoQuickFilterProvinces();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-Provinces-Royalblue.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Provinces</p><p onclick="GoAllFiltersPopup();"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/FCT-Profile-Icons-AllFilters-Royalblue.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> All Filters</p></div></div>';
        echo '</form>';
        
      //End FUNC:*
      }
      
      public function SQLGetFieldValue($conn, $fieldID, $formID, $entryId){
	
				   $getValueByFeildID_SQL = "SELECT value FROM zvyq_wpforms_entry_fields WHERE field_id = '$fieldID' and form_id = '$formID' and entry_id = '$entryId'";
		           $feildValueGetResult = $conn->query($getValueByFeildID_SQL);
				   
				  /*use this - End Result*/
				   $resultValue = "";
				  
				   if ($feildValueGetResult->num_rows > 0) {
		
					  //Output data of each row
					  while($row = $feildValueGetResult->fetch_assoc()) {
						   $resultValue = $row["value"];
						  //End W:*
					  }
					   
					//End I:*
					}
	
	return $resultValue;
	
	//End FUNC:*
}
          public function MapSQLToVars($DbSearch, $conn){
        
                   $DbSearch->fieldID = $DbSearch->profTitle;
				   $DbSearch->profTitleReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);

					/******************************************************************************************///Block 2:Profile Suffix

					 $DbSearch->fieldID = $DbSearch->profPicture;
				   $DbSearch->profPictureReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);

					/******************************************************************************************///Block 2:Profile Picture
				   $DbSearch->fieldID = $DbSearch->profSuffix;
				   $DbSearch->profSuffixReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
 
				  /******************************************************************************************///Block 8: $pDescription
				   
				   $DbSearch->fieldID = $DbSearch->pDescription;
				   $DbSearch->pDescriptionReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
						  
				  /******************************************************************************************///Block 9: $qualifications
				   $DbSearch->fieldID = $DbSearch->qualifications;
				  $DbSearch->qualificationsReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  		  
				  /******************************************************************************************///Block 10: $gender
				   $DbSearch->fieldID = $DbSearch->gender;
				  $DbSearch->genderReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
	  
				    /******************************************************************************************///Block 11: $ethnicity
				   $DbSearch->fieldID = $DbSearch->ethnicity;
				   $DbSearch->ethnicityReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 12: $healthRole
				   $DbSearch->fieldID = $DbSearch->healthRole;
				  $DbSearch->healthRoleReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 
				  /******************************************************************************************///Block 12: $sexualOrient
				   $DbSearch->fieldID = $DbSearch->sexualOrient;
				  $DbSearch->sexualOrientReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 
				   /******************************************************************************************///Block 14: $specialties
				  
				   $DbSearch->fieldID = $DbSearch->specialties;
				   $DbSearch->specialtiesReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 15: $treatmentApproaches
				  
				   $DbSearch->fieldID = $DbSearch->treatmentApproaches;
				  $DbSearch->treatmentApproachesReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
	
				   /******************************************************************************************///Block 16: $clientFocus
				  
				   $DbSearch->fieldID = $DbSearch->clientFocus;
				   $DbSearch->clientFocusReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 	  
				    /******************************************************************************************///Block 17: $deliveryMode
				  
				   $DbSearch->fieldID = $DbSearch->deliveryMode;
				   $DbSearch->deliveryModeReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 20: $phone
				  
				   $DbSearch->fieldID = $DbSearch->phone;
				  $DbSearch->phoneReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 	  
				  /******************************************************************************************///Block 21: $email
				  
				   $DbSearch->fieldID = $DbSearch->email;
				   $DbSearch->emailReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
			
				  /******************************************************************************************///Block 22: $bizWebsite
				  
				   $DbSearch->fieldID = $DbSearch->bizWebsite;
				  $DbSearch->bizWebsiteReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 26: $sessionSet
				  
				   $DbSearch->fieldID = $DbSearch->sessionSet;
				   $DbSearch->sessionSetReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
						  
				  /******************************************************************************************///Block 28: $price
				  
				   $DbSearch->fieldID = $DbSearch->price;
				   $DbSearch->priceReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 
				  /******************************************************************************************///Block 29: $creditCards
				  
				   $DbSearch->fieldID = $DbSearch->creditCards;
				   $DbSearch->creditCardsReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
			  
				  /******************************************************************************************///Block 30: $altPayment
				  
				   $DbSearch->fieldID = $DbSearch->altPayment;
				  $DbSearch->altPaymentReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 31: $provinces
				  
				   $DbSearch->fieldID = $DbSearch->provinces;
				  $DbSearch->provincesReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				 
				  /******************************************************************************************///Block 32: $cities
				  
				   $DbSearch->fieldID = $DbSearch->cities;
				  $DbSearch->citiesReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 33: $address
				  
				   $DbSearch->fieldID = $DbSearch->address;
				  $DbSearch->addressReturned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);

				  /******************************************************************************************///Block 34: $officeImg01
				  
				   $DbSearch->fieldID = $DbSearch->officeImg01;
				  $DbSearch->officeImg01Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);

				  /******************************************************************************************///Block 35: $officeImg02
				  
				  $DbSearch->fieldID = $DbSearch->officeImg02;
				  $DbSearch->officeImg02Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 36: $officeImg03
				  $DbSearch->fieldID = $DbSearch->officeImg03;
				  $DbSearch->officeImg03Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 37: $officeImg04
			      $DbSearch->fieldID = $DbSearch->officeImg04;
				  $DbSearch->officeImg04Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 38: $officeImg05
				  
				    $DbSearch->fieldID = $DbSearch->officeImg05;
				  $DbSearch->officeImg05Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 39: $officeImg06
				  
				   $DbSearch->fieldID = $DbSearch->officeImg06;
				  $DbSearch->officeImg06Returned = $DbSearch->SQLGetFieldValue($conn, $DbSearch->fieldID, $DbSearch->formID, $DbSearch->entryId);
				  
				  /******************************************************************************************///Block 40: $worksMonday
		     
			

                   /******************************************************************************************///End Mapping Fields To Vars

                   return $DbSearch;
	//End FUNC:*
}
      
       public function BuildListingEntrySnippets($DbSearch){
        
        if($DbSearch->profTitleReturned !== ""){

                 echo '<form class="listingEntry" action="/search-listing" method="post">';

				   echo '<div class="TherapistListingSnippetHeader"><h2><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/UserTherapistListing.png" alt="UserTherapistListing" title="UserTherapistListing" width="25px" height="25px" /> Therapist Listing</h2></div>';
				   
				    echo '<div class="EntrySnippetLayoutBox">';
				   echo '<div class="ProfilePicSetBox-Col01">';
				   echo '<h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileIDTitleIcon.png" alt="ProfileIDTitleIcon" title="ProfileIDTitleIcon" width="25px" height="25px" /> Profile Picture</h5>';

				  if($DbSearch->profPictureReturned == ''){
				   $DbSearch->profPictureReturned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
					//End I:*
				  }

				  echo '<div class="SnippetSearchParentProfPictureBox"><div class="SnippetSearchProfPictureBox"><img src="'.$DbSearch->profPictureReturned.'" alt="outProfPictureReturned" title="outProfPictureReturned" height="100%" width="100%" /></div></div>';
				  echo '<div><input type="hidden"  name="profPictureReturned" value="' . $DbSearch->profPictureReturned . '" /></div>';
				  echo '</div>';
				  
				  echo '<div class="ProfileTitleSetBox-Col02">';
				  echo '<div><h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileTitleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Title</h5></div>';
				  echo '<p>' . $DbSearch->profTitleReturned . '</p>';
				  echo '<div><input type="hidden"  name="profileTitleReturned" value="' . $DbSearch->profTitleReturned . '" /></div>';
				  
				  echo '<h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileCredentialsIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Profile Suffix</h5>';
				  echo '<p>' . $DbSearch->profSuffixReturned . '</p>';
				  echo '<div><input type="hidden"  name="profileSuffixReturned" value="' . $DbSearch->profSuffixReturned . '" /></div>';

				  echo '<h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileDescriptionIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Description</h5>';
				  echo '<p class="EntrySnippetDescriptionOverBox">' . $DbSearch->pDescriptionReturned . '</p>';
				  echo '<div ><input type="hidden"  name="pDescriptionReturned"  value="' . $DbSearch->pDescriptionReturned . '" /></div>';
				  echo '</div>';
				  echo '</div>';

				  echo '<div ><input type="hidden"  name="qualificationsReturned"  value="' . $DbSearch->qualificationsReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="genderReturned"  value="' . $DbSearch->genderReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="ethnicityReturned"  value="' . $DbSearch->ethnicityReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="healthRoleReturned"  value="' . $DbSearch->healthRoleReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="sexualOrientReturned"  value="' . $DbSearch->sexualOrientReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="specialtiesReturned"  value="' . $DbSearch->specialtiesReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="treatmentApproachesReturned"  value="' . $DbSearch->treatmentApproachesReturned. '" /></div>';
				   echo '<div ><input type="hidden"  name="clientFocusReturned"  value="' . $DbSearch->clientFocusReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="deliveryModeReturned"  value="' . $DbSearch->deliveryModeReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="phoneReturned"  value="' . $DbSearch->phoneReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="emailReturned"  value="' . $DbSearch->emailReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="bizWebsiteReturned"  value="' . $DbSearch->bizWebsiteReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="sessionSetReturned"  value="' . $DbSearch->sessionSetReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="priceReturned"  value="' . $DbSearch->priceReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="creditCardsReturned"  value="' . $DbSearch->creditCardsReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="altPaymentReturned"  value="' . $DbSearch->altPaymentReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="provincesReturned"  value="' . $DbSearch->provincesReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="citiesReturned"  value="' . $DbSearch->citiesReturned. '" /></div>';
				  echo '<div ><input type="hidden"  name="addressReturned"  value="' . $DbSearch->addressReturned. '" /></div>';
				   echo '<div ><input type="hidden"  name="officeImg01Returned"  value="' . $DbSearch->officeImg01Returned. '" /></div>';
				  echo '<div ><input type="hidden"  name="officeImg02Returned"  value="' . $DbSearch->officeImg02Returned. '" /></div>';
				  echo '<div ><input type="hidden"  name="officeImg03Returned"  value="' . $DbSearch->officeImg03Returned. '" /></div>';
				  echo '<div ><input type="hidden"  name="officeImg04Returned"  value="' . $DbSearch->officeImg04Returned. '" /></div>';
				  echo '<div ><input type="hidden"  name="officeImg05Returned"  value="' . $DbSearch->officeImg05Returned. '" /></div>';
				  echo '<div ><input type="hidden"  name="officeImg06Returned"  value="' . $DbSearch->officeImg06Returned. '" /></div>';
		
				  echo '<div><button type="submit" name="ListingEntrySelector" class="ListingEntrySelector">View</button></div>';
				  echo '</form>';
      
			//End I:*
		}
		
	
      //End FUNC:*
      }
      
          public function ConfigFilterVars($DbSearch){
          
            $var_Space= " ";
		    $DbSearch->VarSQL_FilterString = "SELECT * FROM zvyq_wpforms_entries WHERE fields LIKE '%$var_Space%'";
			$DbSearch->VarSQL_FilterStringProto = "SELECT * FROM zvyq_wpforms_entries WHERE fields LIKE '%$var_Space%'";
		    $Var_FiltersSetList = [];

        		    if (isset($_POST['GlobalFiltersTherapistGender']) && !empty($_POST['GlobalFiltersTherapistGender']) && $_POST['GlobalFiltersTherapistGender'] !== "") {

			$filter_SelectedGender = $_POST['GlobalFiltersTherapistGender'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE'%$filter_SelectedGender%'";
			}
		
		    if (isset($_POST['GlobalFiltersTherapistSexuality']) && !empty($_POST['GlobalFiltersTherapistSexuality']) && $_POST['GlobalFiltersTherapistSexuality'] !== "") {

			$filter_SelectedSexuality = $_POST['GlobalFiltersTherapistSexuality'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedSexuality%'";
				
			}
		
		    if (isset($_POST['GlobalFiltersTherapistEthnicity']) && !empty($_POST['GlobalFiltersTherapistEthnicity']) && $_POST['GlobalFiltersTherapistEthnicity'] !== "") {

			$filter_SelectedEthnicity = $_POST['GlobalFiltersTherapistEthnicity'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedEthnicity%'";
			}
		
		    if (isset($_POST['GlobalFiltersMentalHealthRole']) && !empty($_POST['GlobalFiltersMentalHealthRole']) && $_POST['GlobalFiltersMentalHealthRole'] !== "Select" && $_POST['GlobalFiltersMentalHealthRole'] !== "") {
          
			$filter_SelectedHealthRole = $_POST['GlobalFiltersMentalHealthRole'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedHealthRole%'";

			}
		
		    if (isset($_POST['GlobalFiltersQualifications']) && !empty($_POST['GlobalFiltersQualifications']) && $_POST['GlobalFiltersQualifications'] !== "Select" && $_POST['GlobalFiltersQualifications'] !== "") {

		    $filter_SelectedQualifications = $_POST['GlobalFiltersQualifications'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedQualifications%'";

			}
		   
		    if (isset($_POST['GlobalFiltersSpecialties']) && !empty($_POST['GlobalFiltersSpecialties']) && $_POST['GlobalFiltersSpecialties'] !== "Select" && $_POST['GlobalFiltersSpecialties'] !== "") {

			$filter_SelectedSpecials = $_POST['GlobalFiltersSpecialties'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedSpecials%'";
			}
				
		     if (isset($_POST['GlobalFiltersTreatmentApproach']) && !empty($_POST['GlobalFiltersTreatmentApproach']) && $_POST['GlobalFiltersTreatmentApproach'] !== "Select" && $_POST['GlobalFiltersTreatmentApproach'] !== "") {

			$filter_SelectedTreatments = $_POST['GlobalFiltersTreatmentApproach'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedTreatments%'";

			}
		   
		    if (isset($_POST['GlobalFiltersDeliveryMode']) && !empty($_POST['GlobalFiltersDeliveryMode']) && $_POST['GlobalFiltersDeliveryMode'] !== "") {

			$filter_SelectedDeliveryMode = $_POST['GlobalFiltersDeliveryMode'];
            $DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedDeliveryMode%'";
			}
		
		    if (isset($_POST['GlobalTargetProvinces']) && !empty($_POST['GlobalTargetProvinces']) && $_POST['GlobalTargetProvinces'] !== "Select" && $_POST['GlobalTargetProvinces'] !== "") {

			$filter_SelectedProvince = $_POST['GlobalTargetProvinces'];
            $DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedProvince%'";
			}
		
		    if (isset($_POST['GlobalFiltersTargetCity']) && !empty($_POST['GlobalFiltersTargetCity']) && $_POST['GlobalFiltersTargetCity'] !== "Select" && $_POST['GlobalFiltersTargetCity'] !== "") {

			$filter_SelectedCity = $_POST['GlobalFiltersTargetCity'];
			$DbSearch->VarSQL_FilterString .= " AND fields LIKE '%$filter_SelectedCity%'";

			}
		
        
        return $DbSearch;
	
        //End FUNC:*
      }
      
        public function DisplayTherapistListingSelection(){
        
           echo '<script>';
					   echo 'var listingEntry = document.getElementsByClassName("listingEntry");';
					   echo 'for (var i = 0; i < listingEntry.length; i++){listingEntry[i].remove();}';
					   echo '</script>';

					   echo '<div id="ViewListOutput">';

					   echo '<ul>';
			
			           echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/user.png" width="25px" height="25px">Personal Details</h2>';

					      echo '<li>';
					   $outProfPicture = filter_input(INPUT_POST, "profPictureReturned");
			           echo '<h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileIDTitleIcon.png" alt="ProfileIDTitleIcon" title="ProfileIDTitleIcon" width="25px" height="25px" /> Profile Picture</h5>';
			           if($outProfPicture === ""){
							$outProfPicture = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
					   echo '<div class="SnippetSearchParentProfPictureBox"><div class="SnippetSearchProfPictureBox"><img src="'.$outProfPicture.'" alt="outProfPictureReturned" title="outProfPictureReturned" height="100%" width="100%" /></div></div>';

					   echo '</li>';

					   echo '<li>';

					   $outProfTitle = filter_input(INPUT_POST, "profileTitleReturned");
			           echo '<div><h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileTitleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Title</h5></div>';
			           if($outProfTitle === ""){
							$outProfTitle = '<span style="opacity:0;">No Response</span>';
						}
					   echo '<p >' . $outProfTitle . '</p>';
					   echo '</li>';

			           echo '<li>';
			 
					   echo '<div>';
					   $outProfSuffix = filter_input(INPUT_POST, "profileSuffixReturned");
			           if($outProfSuffix === ""){
							$outProfSuffix = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileCredentialsIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Credentialls, Pronouns</h5>';
			           echo '<p >' . $outProfSuffix . '</p>';
					   echo '</div>';
					   echo '</li>';
			          
			           echo '<li>';
			           echo '<div>';
					   $outHealthRoleReturned = filter_input(INPUT_POST, "healthRoleReturned");
			           if($outHealthRoleReturned === ""){
							$outHealthRoleReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileMentalHealthRoleIconHeads.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Health Role</h5>';
			           echo '<p >' . $outHealthRoleReturned. '</p>';
					   echo '</div>';
			           echo '</li>';
			       
			                echo '<li class="ThreeColGrid GenderEthincitySexualBox">';
			
			           echo '<div>';
					   $outGenderReturned = filter_input(INPUT_POST, "genderReturned");
			           if($outGenderReturned === ""){
							$outGenderReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/FCT-Profile-Icons-Gender-3.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Therapist Gender</h5>';
			           echo '<p style="background:none;border-right:none;">' . $outGenderReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div>';
					   $outEthnicityReturned = filter_input(INPUT_POST, "ethnicityReturned"); 
			            if($outEthnicityReturned === ""){
							$outEthnicityReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			        echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileEthnicityIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Therapist Ethnicity</h5>';
			           echo '<p>' . $outEthnicityReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div>';
					   $outSexualOrientReturned = filter_input(INPUT_POST, "sexualOrientReturned");
			           if($outSexualOrientReturned === ""){
							$outSexualOrientReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/FCT-Profile-Icons-Sexuality-3.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Sexual Orientation</h5>';
			           echo '<p>' . $outSexualOrientReturned. '</p>';
					   echo '</div>';

			           echo '</li>';
			
	                  
			           echo '<li><h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/skills.png" width="25px" height="25px">Specialties</h2></li>';
			           			
			           echo '<div class="Out4x4GridOverflow">';
					   $outPDescriptionReturned = filter_input(INPUT_POST, "pDescriptionReturned");
			           if($outPDescriptionReturned === ""){
							$outPDescriptionReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileDescriptionIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Personal Description</h5>';
			           echo '<p style="background:none;border:none;">' . $outPDescriptionReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div class="Out4x4GridOverflow">';
					   $outQualificationsReturned = filter_input(INPUT_POST, "qualificationsReturned");
			           if($outQualificationsReturned === ""){
							$outQualificationsReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileQualificationsIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Qualifications</h5>';
			           echo '<p style="background:none;border:none;">' . $outQualificationsReturned. '</p>';
					   echo '</div>';
			             
			           echo '<div class="Out4x4GridOverflow">';
					   $outSpecialtiesReturned = filter_input(INPUT_POST, "specialtiesReturned");
			           if($outSpecialtiesReturned === ""){
							$outSpecialtiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileSpecialtiesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Specialties</h5>';
			           echo '<p style="background:none;border:none;">' . $outSpecialtiesReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div class="Out4x4GridOverflow">';
					   $outTreatmentApproachesReturned = filter_input(INPUT_POST, "treatmentApproachesReturned");
			           if($outTreatmentApproachesReturned === ""){
							$outTreatmentApproachesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileTreatmentIcons.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Treatment Approaches</h5>';
			           echo '<p style="background:none;border:none;">' . $outTreatmentApproachesReturned. '</p>';
					   echo '</div>';

			           echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/crowd-of-users.png" width="25px" height="25px">Target Audience</h2>';
			           echo '<li>';
			           echo '<div>';
					   $outClientFocusReturned = filter_input(INPUT_POST, "clientFocusReturned");
			           if($outClientFocusReturned === ""){
							$outClientFocusReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCustomerICon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Client Focus</h5>';
			           echo '<p >' . $outClientFocusReturned. '</p>';
					   echo '</div>';
			
			           echo '</li>';
			 
			             echo '<li class="TwoColGrid DeliveryModeSessionSet">';
			 
			           echo '<div>';
					   $outDeliveryModeReturned = filter_input(INPUT_POST, "deliveryModeReturned");
			           if($outDeliveryModeReturned === ""){
							$outDeliveryModeReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileInterviewIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Delivery Mode</h5>';
			           echo '<p>' . $outDeliveryModeReturned. '</p>';
					   echo '</div>'; 
			              
			             echo '<div>';
					   $outSessionSetReturned = filter_input(INPUT_POST, "sessionSetReturned");
			           if($outSessionSetReturned === ""){
							$outSessionSetReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCouplesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Couples</h5>';
			           echo '<p>' . $outSessionSetReturned. '</p>';
					   echo '</div>'; 
			  
			            echo '</li>';
			
			             echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/phone.png" width="25px" height="25px">Contact</h2>';
			 
			            echo '<li class="ThreeColGrid">';
			            echo '<div>';
					   $outPhoneReturned = filter_input(INPUT_POST, "phoneReturned");
			          if($outPhoneReturned === ""){
							$outPhoneReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfilePhoneIcon.png" width="25px" height="25px"> Phone Number</h5>';
			           echo '<p class="OutputLinkBox">' . $outPhoneReturned. '</p>';
					   echo '</div>'; 
			 
			           echo '<div>';
					   $outEmailReturned = filter_input(INPUT_POST, "emailReturned");
			          if($outEmailReturned === ""){
							$outEmailReturned = 'example@gmail.com';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileEmailIcon.png" width="25px" height="25px"> Email</h5>';
					   echo '<p class="OutputLinkBox" style="border-left:none;">' . '<a class="DisplayOutputLink" href="mailto:' . $outEmailReturned. '">' . $outEmailReturned . '</a></p>';
					   echo '</div>';

					    echo '<div>';
					   $outBizWebsiteReturned = filter_input(INPUT_POST, "bizWebsiteReturned");
			           if($outBizWebsiteReturned === ""){
							$outBizWebsiteReturned = 'https://www.example.com';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCompanyIcon.png" width="25px" height="25px"> Business Website</h5>';
					 echo '<p class="OutputLinkBox" style="border-left:none">' . '<a class="DisplayOutputLink" href="' . $outBizWebsiteReturned. '">' . $outBizWebsiteReturned . '</a></p>';
					   echo '</div>';
			           echo '</li>';
			 
			         echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/credit-card.png" width="25px" height="25px">Payments</h2>';
			 
			          echo '<li>';
					   $outPriceReturned = filter_input(INPUT_POST, "priceReturned");
			            if($outPriceReturned === ""){
							$outPriceReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfilePriceIcon.png" width="25px" height="25px" /> Price</h5>';
			           echo '<p>' . $outPriceReturned. '</p>';
					   echo '</li>'; 
			 
			            echo '<li class="TwoColGrid DeliveryModeSessionSet">';
			            echo '<div>';
					   $outCreditCardsReturned = filter_input(INPUT_POST, "creditCardsReturned");
			           if($outCreditCardsReturned === ""){
							$outCreditCardsReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCreditsCradsIcon.png" width="25px" height="25px" /> Credit Cards</h5>';
			           echo '<p>' . $outCreditCardsReturned. '</p>';
					   echo '</div>'; 
			 
			            echo '<div>';
					   $outAltPaymentReturned = filter_input(INPUT_POST, "altPaymentReturned");
			           if($outAltPaymentReturned === ""){
							$outAltPaymentReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileAltPayIcon.png" width="25px" height="25px" /> Alternate Payments</h5>';
			           echo '<p>' . $outAltPaymentReturned. '</p>';
					   echo '</div>';
			            echo '</li>';
			
			            echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/location.png" width="25px" height="25px">Locations</h2>';
			 
			            echo '<li class="TwoColGrid DeliveryModeSessionSet">';
			           echo '<div>';
					   $outProvincesReturned = filter_input(INPUT_POST, "provincesReturned");
			           if($outProvincesReturned === ""){
							$outProvincesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileProvincesIcon.png" width="25px" height="25px" /> Provinces</h5>';
			           echo '<p>' . $outProvincesReturned. '</p>';
					   echo '</div>'; 
			 
			           echo '<div>';
					   $outCitiesReturned = filter_input(INPUT_POST, "citiesReturned");
			           if($outCitiesReturned === ""){
							$outCitiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCityIcon.png" width="25px" height="25px" /> Cities</h5>';
			           echo '<p>' . $outCitiesReturned. '</p>';
					   echo '</div>';  
			            echo '</li>';
			 
			            echo '<li>';
					   $outAddressReturned = filter_input(INPUT_POST, "addressReturned");
			           if($outCitiesReturned === ""){
							$outCitiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			          echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileAddyIcon.png" width="25px" height="25px" /> Address</h5>';
			           echo '<p >' . $outAddressReturned. '</p>';
					   echo '</li>'; 
			 
			           echo '<li>';

			           echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/OfficeEnv.png" width="25px" height="25px">Sesson Environment</h2>';
			           echo '<div class="ThreeColGrid OfficeImagesBox">';
			         
			          echo '<div style="padding:25px;">';

					   $outOfficeImg01Returned = filter_input(INPUT_POST, "officeImg01Returned");
			           if($outOfficeImg01Returned === ""){
							$outOfficeImg01Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #01</h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg01Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%"/></div>';
					  echo '</div>';
			 
			            echo '<div style="padding:25px;">';
					   $outOfficeImg02Returned = filter_input(INPUT_POST, "officeImg02Returned");
			           if($outOfficeImg02Returned === ""){
							$outOfficeImg02Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #02</h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg02Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%" /></div>';
			     		echo '</div>';
			 
			          echo '<div style="padding:25px;">';
					   $outOfficeImg03Returned = filter_input(INPUT_POST, "officeImg03Returned");
			            if($outOfficeImg03Returned === ""){
							$outOfficeImg03Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			          echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #03</h5>';
			          echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg03Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%"/></div>';
					 echo '</div>';

			           echo '<div style="padding:25px;">';
					   $outOfficeImg04Returned = filter_input(INPUT_POST, "officeImg04Returned");
			           if($outOfficeImg04Returned === ""){
							$outOfficeImg04Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #04</h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg04Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%" /> </div>';
					   echo '</div>';
			 
			           echo '<div style="padding:25px;">';
					   $outOfficeImg05Returned = filter_input(INPUT_POST, "officeImg05Returned");
			           if($outOfficeImg05Returned === ""){
							$outOfficeImg05Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #05</h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg05Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%" /></div>';
			           echo '</div>';
			 
			           echo '<div style="padding:25px;">';
					   $outOfficeImg06Returned = filter_input(INPUT_POST, "officeImg06Returned");
			           if($outOfficeImg06Returned === ""){
							$outOfficeImg06Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #06</h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg06Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%" /></div>';
			           echo '</div>';
			 
			           echo '</div>';

					   echo '</li>'; 

			 
					   echo '</ul>';
					   echo '</div>';
      
        //End FUNC:*
      }
      
         public function DisplayLoggedInUserTherapistListing($DbSearch){
			
			       ?>
  
			    <script> 

				function GoEditProfileTitle(){

							var targetMenuDrop = document.getElementById("EditTitlePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
				function GoEditProfileSuffix(){

							var targetMenuDrop = document.getElementById("EditSuffixPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}
                  
                  
                  function TestSaveProfileSuffix(){
                    
                     var target = document.getElementById("InputEditSuffix").value;
                     document.cookie = "suffix=" + target + ";" + "path=/";
					 window.location.href = window.location.href;
                    
                  //End F:*
                  }

						function GoEditHealthRole(){

							var targetMenuDrop = document.getElementById("EditMentalRolePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

                function GoEditGender(){

							var targetMenuDrop = document.getElementById("EditGenderPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
                function GoEditEthnicity(){

							var targetMenuDrop = document.getElementById("EditEthnicityPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
                function GoEditSexual(){

							var targetMenuDrop = document.getElementById("EditSexualPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				   function GoEditPersonalDescription(){

							var targetMenuDrop = document.getElementById("EditPersonalDescriptionPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				 function GoEditQualifications(){

							var targetMenuDrop = document.getElementById("EditQualificationsPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					 function GoEditSpecialties(){

							var targetMenuDrop = document.getElementById("EditSpecialtiesPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					 function GoEditTreatments(){

							var targetMenuDrop = document.getElementById("EditTreatmentsPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
					 function GoEditClientFocus(){

							var targetMenuDrop = document.getElementById("EditClientFocusPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditAgeGroup(){

							var targetMenuDrop = document.getElementById("EditAgeGroupPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
				function GoEditDelivery(){

							var targetMenuDrop = document.getElementById("EditDeliveryPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				
				function GoEditPhone(){

							var targetMenuDrop = document.getElementById("EditPhoneNumberPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditWhatsApp(){

							var targetMenuDrop = document.getElementById("EditWhatsAppPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditEmail(){

							var targetMenuDrop = document.getElementById("EditEmailPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditBizWebsite(){

							var targetMenuDrop = document.getElementById("EditBizWebsitePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditLinkedIn(){

							var targetMenuDrop = document.getElementById("EditLinkedInPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditYouTube(){

							var targetMenuDrop = document.getElementById("EditYouTubePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditPrice(){

							var targetMenuDrop = document.getElementById("EditSessionPricePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditCreditCards(){

							var targetMenuDrop = document.getElementById("EditCreditCardsPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditAltPayments(){

							var targetMenuDrop = document.getElementById("EditAltPaymentsPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditProvinces(){

							var targetMenuDrop = document.getElementById("EditProvincesPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditCities(){

							var targetMenuDrop = document.getElementById("EditCitiesPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

				function GoEditAddress(){

							var targetMenuDrop = document.getElementById("EditAddressPopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg01(){

							var targetMenuDrop = document.getElementById("EditImg01Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg02(){

							var targetMenuDrop = document.getElementById("EditImg02Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg03(){

							var targetMenuDrop = document.getElementById("EditImg03Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg04(){

							var targetMenuDrop = document.getElementById("EditImg04Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg05(){

							var targetMenuDrop = document.getElementById("EditImg05Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

					function GoEditImg06(){

							var targetMenuDrop = document.getElementById("EditImg06Popup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}

						function GoEditProfilePicture(){

							var targetMenuDrop = document.getElementById("EditProfPicturePopup");
              
							if(targetMenuDrop.style.display === "" || targetMenuDrop.style.display === "none"){
							
							
							targetMenuDrop.style.display = "block";
							
							}
							
							else {
							targetMenuDrop.style.display = "none";
							}

					//End FUNC:*
				}


				function BuildCreditCardsString(){

					 var resultStr = '';

					 if(document.getElementById("Visa").checked === true){
						resultStr += "Visa,";
						//End I:*
					 }
					  if(document.getElementById("MasterCard").checked === true){
						resultStr += " MasterCard,";
						//End I:*
					 }
					  if(document.getElementById("American Express").checked === true){
						resultStr += " American Express,";
						//End I:*
					 }

					  if(document.getElementById("Discover").checked === true){
						resultStr += " Discover.";
						//End I:*
					 }

					 if(resultStr !== ''){
                          document.getElementById("StrFinalCreditCards").value = resultStr;
                          document.getElementById("EditCreditCardsPopup").submit();

						//End I:*
					 }

					//End FUNC:*
				}

				function BuildAltPaymentsString(){

					 var resultStr = '';

					 if(document.getElementById("E-Transfer").checked === true){
						resultStr += "E-Transfer,";
						//End I:*
					 }
					  if(document.getElementById("Debit").checked === true){
						resultStr += " Debit,";
						//End I:*
					 }
					  if(document.getElementById("Cash").checked === true){
						resultStr += " Cash,";
						//End I:*
					 }

					  if(document.getElementById("Gift Cards").checked === true){
						resultStr += " Gift Cards,";
						//End I:*
					 }

					 if(document.getElementById("Payment Plans").checked === true){
						resultStr += " Payment Plans.";
						//End I:*
					 }

					 if(resultStr !== ''){
                          document.getElementById("StrFinalAltPayments").value = resultStr;
                          document.getElementById("EditAltPaymentsPopup").submit();

						//End I:*
					 }

					//End FUNC:*
				}

				function BuildProvincesString(){

					 var resultStr = '';

					 if(document.getElementById("Alberta").checked === true){
						resultStr += "Alberta,";
						//End I:*
					 }
					  if(document.getElementById("British Columbia").checked === true){
						resultStr += " British Columbia,";
						//End I:*
					 }
					  if(document.getElementById("Manitoba").checked === true){
						resultStr += " Manitoba,";
						//End I:*
					 }

					  if(document.getElementById("New Brunswick").checked === true){
						resultStr += " New Brunswick,";
						//End I:*
					 }

					 if(document.getElementById("Newfoundland").checked === true){
						resultStr += " Newfoundland,";
						//End I:*
					 }

					  if(document.getElementById("Labrador").checked === true){
						resultStr += " Labrador,";
						//End I:*
					 }

					   if(document.getElementById("Nova Scotia").checked === true){
						resultStr += " Nova Scotia,";
						//End I:*
					 }

					  if(document.getElementById("Ontario").checked === true){
						resultStr += " Ontario,";
						//End I:*
					 }

					  if(document.getElementById("Prince Edward Island").checked === true){
						resultStr += " Prince Edward Island,";
						//End I:*
					 }

					 
					  if(document.getElementById("Quebec").checked === true){
						resultStr += " Quebec,";
						//End I:*
					 }

					 if(document.getElementById("Saskatchewan").checked === true){
						resultStr += " Saskatchewan.";
						//End I:*
					 }

					 if(resultStr !== ''){
                          document.getElementById("StrFinalProvinces").value = resultStr;
                          document.getElementById("EditProvincesPopup").submit();

						//End I:*
					 }

					//End FUNC:*
				}

				function BuildAltPaymentsString(){

					 var resultStr = '';

					 if(document.getElementById("E-Transfer").checked === true){
						resultStr += "E-Transfer,";
						//End I:*
					 }
					  if(document.getElementById("Debit").checked === true){
						resultStr += " Debit,";
						//End I:*
					 }
					  if(document.getElementById("Cash").checked === true){
						resultStr += " Cash,";
						//End I:*
					 }

					  if(document.getElementById("Gift Cards").checked === true){
						resultStr += " Gift Cards,";
						//End I:*
					 }

					 if(document.getElementById("Payment Plans").checked === true){
						resultStr += " Payment Plans.";
						//End I:*
					 }

					 if(resultStr !== ''){
                          document.getElementById("StrFinalAltPayments").value = resultStr;
                          document.getElementById("EditAltPaymentsPopup").submit();

						//End I:*
					 }

					//End FUNC:*
				}

				function BuildCitiesString(){

					 var resultStr = '';

					 if(document.getElementById("Toronto").checked === true){
						resultStr += "Toronto,";
						//End I:*
					 }

                       if(document.getElementById("Montreal").checked === true){
						resultStr += " Montreal,";
						//End I:*
					 }

					 if(document.getElementById("Ottawa").checked === true){
						resultStr += " Ottawa,";
						//End I:*
					 }

					  if(document.getElementById("Vancouver").checked === true){
						resultStr += " Vancouver,";
						//End I:*
					 }

					 
					  if(document.getElementById("St Johns").checked === true){
						resultStr += " St Johns,";
						//End I:*
					 }

					if(document.getElementById("Edmonton").checked === true){
						resultStr += " Edmonton,";
						//End I:*
					 }

					 if(document.getElementById("Winnipeg").checked === true){
						resultStr += " Winnipeg,";
						//End I:*
					 }

					 
					   if(document.getElementById("Hamilton").checked === true){
						resultStr += " Hamilton,";
						//End I:*
					 }

					 if(document.getElementById("Calgary").checked === true){
						resultStr += " Calgary,";
						//End I:*
					 }
					  
					 if (document.getElementById("Kitchener Waterloo").checked === true){
						resultStr += " Kitchener Waterloo.";
						//End I:*
					 }

					   

					 if(resultStr !== ''){
                          document.getElementById("StrFinalCities").value = resultStr;
                          document.getElementById("EditCitiesPopup").submit();

						//End I:*
					 }

					//End FUNC:*
				}

				function SaveEditSuffixValue(){
                    var target = document.getElementById("InputEditSuffix").value;
					console.log(target);
                  
					//End FUNC:*
				}
				

				</script>

             
				<?php
           
					   echo '<div id="ViewListOutput">';

					   echo '<ul>';

					     echo '<li>';
						 echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/user.png" width="25px" height="25px">Personal Details</h2>';
						echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileIDTitleIcon.png" alt="ProfileIDTitleIcon" title="ProfileIDTitleIcon" width="25px" height="25px" />Profile Picture <span onclick="GoEditProfilePicture();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';

									echo '<div class="OutProfPictureFormBox">';
							$outProfPictureReturned = $DbSearch->profPictureReturned;
								if($outProfPictureReturned === ""){
									$outProfPictureReturned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
								}
							echo '<div class="ProfilePictureBox"><img src="'.$outProfPictureReturned.'" alt="outProfPictureReturned" title="outProfPictureReturned" height="100%" width="100%"/></div>';
							
							echo '</div>';
							echo '<form class="EditProfilePopup" id="EditProfPicturePopup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
							echo '<label for="fileProfilePicture">Choose a file:</label>';
								echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileProfilePicture" name="fileProfilePicture"></div>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditProfPictureSubmitter">Upload</button>';
								echo '</form>';
					   echo '</li>';
			 
			
					   echo '<li>';
							echo '<div>';
								
								$outProfTitle = $DbSearch->profTitleReturned;
								echo '<h5><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileTitleIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Title <span onclick="GoEditProfileTitle();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
								if($outProfTitle === ""){
										$outProfTitle = '<span style="opacity:0;">No Response</span>';
									}
								echo '<p>' . $outProfTitle . '</p>';
								echo '<form class="EditProfilePopup" id="EditTitlePopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEditProfileTitle">Profile Title</label></h5>';
								echo '<div><input type="text" name="InputEditProfileTitle" id="InputEditProfileTitle"/></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditProfileSubmitter">Save</button>';
								echo '</form>';
							echo '</div>';
					   echo '</li>';

					  
			           echo '<li>';
			 
					   echo '<div>';
					   $outProfSuffix = $DbSearch->profSuffixReturned;
			           if($outProfSuffix === ""){
							$outProfSuffix = '<span style="opacity:0;">No Resonse</span>';
							
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileCredentialsIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" />Credentialls, Pronouns <span onclick="GoEditProfileSuffix();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outProfSuffix . '</p>';
					   echo '<form class="EditProfilePopup" id="EditSuffixPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEditSuffix">Profile Suffix</label></h5>';
								echo '<div><input type="text" name="InputEditSuffix" id="InputEditSuffix"/></div>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditSuffixSubmitter">Save</button>';
								echo '</form>';
					echo '</div>';
           
					echo '</li>';
			      
					echo '<li>';
			           echo '<div>';
					   $outHealthRoleReturned = $DbSearch->healthRoleReturned;
			           if($outHealthRoleReturned === ""){
							$outHealthRoleReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileMentalHealthRoleIconHeads.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Health Role <span onclick="GoEditHealthRole();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span> </h5>';
			           echo '<p>' . $outHealthRoleReturned. '</p>';
					   echo '<form class="EditProfilePopup" id="EditMentalRolePopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEditMentalRole">Mental Health Role</label></h5>';
								echo '<div><input type="text" name="InputEditMentalRole" id="InputEditMentalRole"/></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditMentalRoleSubmitter">Save</button>';
					
								echo '</form>';
					   echo '</div>';

			        echo '</li>';
			       
			                echo '<li class="ThreeColGrid">'; 
			
			           echo '<div>';
					   $outGenderReturned = $DbSearch->genderReturned;
			           if($outGenderReturned === ""){
							$outGenderReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/FCT-Profile-Icons-Gender-3.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Therapist Gender <span onclick="GoEditGender();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outGenderReturned. '</p>';
                       
					   echo '</div>';
			 
			           echo '<div>';
					   $outEthnicityReturned = $DbSearch->ethnicityReturned;
			            if($outEthnicityReturned === ""){
							$outEthnicityReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileEthnicityIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Therapist Ethnicity <span onclick="GoEditEthnicity();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outEthnicityReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div>';
					   $outSexualOrientReturned = $DbSearch->sexualOrientReturned;
			           if($outSexualOrientReturned === ""){
							$outSexualOrientReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/FCT-Profile-Icons-Sexuality-3.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Sexual Orientation <span onclick="GoEditSexual();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outSexualOrientReturned. '</p>';
					   echo '</div>';
			           echo '</li>';

                       echo '<form class="EditProfilePopup" id="EditGenderPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditGender">Gender</label></h5>';
								echo '<select name="SelectEditGender" title="SelectEditGender">';
                                echo '<option value="Select">Select</option>';
                                echo '<option value="Male">Male</option>';
                                echo '<option value="Female">Female</option>';
                                echo '<option value="Transgender">Transgender</option>';
                                echo '<option value="Unknown">Unknown</option>';
                                echo '</select>';
                                echo '<br>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditGenderSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditEthnicityPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEditEthnicity">Ethnicity</label></h5>';
								echo '<div><input type="text" name="InputEditEthnicity" id="InputEditEthnicity" maxlength="40"/></div>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditEthnicitySubmitter">Save</button>';
								echo '</form>';

								 echo '<form class="EditProfilePopup" id="EditSexualPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditSexual">Sexual Orientation</label></h5>';
								echo '<select name="SelectEditSexual" title="SelectEditSexual">';
                                echo '<option value="Select">Select</option>';
                                echo '<option value="Straight">Straight</option>';
                                echo '<option value="Gay">Gay</option>';
                                echo '<option value="Lesbian">Lesbian</option>';
								echo '<option value="Bisexual">Bisexual</option>';
                                echo '<option value="Transexual">Transexual</option>';
								echo '<option value="Queer">Queer</option>';
                                echo '</select>';
                                echo '<br>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditSexualSubmitter">Save</button>';
								echo '</form>';
			
	                 
			           echo '<li><h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/skills.png" width="25px" height="25px">Specialties</h2></li>';
			           
			
			           echo '<div class="Out4x4GridOverflow">';
					   $outPDescriptionReturned = $DbSearch->pDescriptionReturned;
			           if($outPDescriptionReturned === ""){
							$outPDescriptionReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/ProfileDescriptionIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Personal Description <span onclick="GoEditPersonalDescription();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outPDescriptionReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div class="Out4x4GridOverflow">';
					   $outQualificationsReturned = $DbSearch->qualificationsReturned;
			           if($outQualificationsReturned === ""){
							$outQualificationsReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileQualificationsIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Qualifications <span onclick="GoEditQualifications();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outQualificationsReturned. '</p>';
					   echo '</div>';

			             

			           echo '<div class="Out4x4GridOverflow">';
					   $outSpecialtiesReturned = $DbSearch->specialtiesReturned;
			           if($outSpecialtiesReturned === ""){
							$outSpecialtiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileSpecialtiesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Specialties <span onclick="GoEditSpecialties();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outSpecialtiesReturned. '</p>';
					   echo '</div>';
			 
			           echo '<div class="Out4x4GridOverflow">';
					   $outTreatmentApproachesReturned = $DbSearch->treatmentApproachesReturned;
			           if($outTreatmentApproachesReturned === ""){
							$outTreatmentApproachesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileTreatmentIcons.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Treatment Approaches <span onclick="GoEditTreatments();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outTreatmentApproachesReturned. '</p>';
					   echo '</div>';

			           echo '</li>';

					     echo '<form class="EditProfilePopup" id="EditPersonalDescriptionPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaPersonalDescriptionPopup">Personal Description</label></h5>';
								echo '<div><textarea maxlength="800" type="text" name="TextareaPersonalDescriptionPopup" id="TextareaPersonalDescriptionPopup"/></textarea></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditPersonalDescriptionSubmitter">Save</button>';
								echo '</form>';


						echo '<form class="EditProfilePopup" id="EditQualificationsPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaQualificationsPopup">Qualifications</label></h5>';
								echo '<div><textarea maxlength="800" type="text" name="TextareaQualificationsPopup" id="TextareaQualificationsPopup"/></textarea></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditQualificationsSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditSpecialtiesPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaSpecialtiesPopup">Specialties</label></h5>';
								echo '<div><textarea maxlength="800" type="text" name="TextareaSpecialtiesPopup" id="TextareaSpecialtiesPopup"/></textarea></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditSpecialtiesSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditTreatmentsPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaTreatmentsPopup">Treatments</label></h5>';
								echo '<div><textarea maxlength="800" type="text" name="TextareaTreatmentsPopup" id="TextareaTreatmentsPopup"/></textarea></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditTreatmentsSubmitter">Save</button>';
								echo '</form>';

			           echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/crowd-of-users.png" width="25px" height="25px">Target Audience</h2>';
			           
					   echo '<li>';
			           echo '<div>';
					   $outClientFocusReturned = $DbSearch->clientFocusReturned;
			           if($outClientFocusReturned === ""){
							$outClientFocusReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCustomerICon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Client Focus <span onclick="GoEditClientFocus();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outClientFocusReturned. '</p>';
                       	echo '<form class="EditProfilePopup" id="EditClientFocusPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaClientFocusPopup">Client Focus</label></h5>';
								echo '<div><textarea maxlength="800" type="text" name="TextareaClientFocusPopup" id="TextareaClientFocusPopup"/></textarea></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditClientFocusSubmitter">Save</button>';
								echo '</form>';
					   echo '</div>';
			
			           echo '</li>';

			             echo '<li class="TwoColGrid">';
			 
			           echo '<div>';
					   $outDeliveryModeReturned = $DbSearch->deliveryModeReturned;
			           if($outDeliveryModeReturned === ""){
							$outDeliveryModeReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileInterviewIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Delivery Mode <span onclick="GoEditDelivery();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outDeliveryModeReturned. '</p>';
					   echo '</div>'; 
			              
			             echo '<div>';
					   $outSessionSetReturned = $DbSearch->sessionSetReturned;
			           if($outSessionSetReturned === ""){
							$outSessionSetReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCouplesIcon.png" alt="ProfileTitleIcon" title="ProfileTitleIcon" width="25px" height="25px" /> Couples</h5>';
			           echo '<p>' . $outSessionSetReturned. '</p>';
					   echo '</div>'; 
			  
			            echo '</li>';

						echo '<form class="EditProfilePopup" id="EditAgeGroupPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="TextareaAgeGroupPopup">Age Group</label></h5>';
								echo '<div><input type="text" name="TextareaAgeGroupPopup" id="TextareaAgeGroupPopup" /></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditAgeGroupSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditDeliveryPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditDelivery">Delivery Method</label></h5>';
								echo '<select name="SelectEditDelivery" title="SelectEditDelivery">';
                                echo '<option value="Select">Select</option>';
                                echo '<option value="Online">Online</option>';
                                echo '<option value="In Person">In Person</option>';
								echo '<option value="Mixed Hybrid">Mixed Hybrid</option>';
                                echo '</select>';
                                echo '<br>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditDeliverySubmitter">Save</button>';
								echo '</form>';
			
			             echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/phone.png" width="25px" height="25px">Contact</h2>';
			 
			            echo '<li class="ThreeColGrid">';
			            echo '<div>';
					   $outPhoneReturned = $DbSearch->phoneReturned;
			          if($outPhoneReturned === ""){
							$outPhoneReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfilePhoneIcon.png" width="25px" height="25px"> Phone Number <span onclick="GoEditPhone();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p class="OutputLinkBox">' . $outPhoneReturned. '</p>';
					   echo '</div>';

			           echo '<div>';
					   $outEmailReturned = $DbSearch->emailReturned;
			          if($outEmailReturned === ""){
							$outEmailReturned = 'user@gmail.com';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileEmailIcon.png" width="25px" height="25px"> Email <span onclick="GoEditEmail();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
					    echo '<p class="OutputLinkBox">' . '<a class="DisplayOutputLink" href="mailto:' . $outEmailReturned. '">' . $outEmailReturned . '</a></p>';
					   echo '</div>';

					      echo '<div>';
					   $outBizWebsiteReturned = $DbSearch->bizWebsiteReturned;
			           if($outBizWebsiteReturned === ""){
							$outBizWebsiteReturned = 'https://www.example.com';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCompanyIcon.png" width="25px" height="25px"> Business Website <span onclick="GoEditBizWebsite();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p class="OutputLinkBox">' . '<a class="DisplayOutputLink" href="' . $outBizWebsiteReturned. '">' . $outBizWebsiteReturned . '</a></p>';

					   echo '</div>';
			           echo '</li>';

					   	echo '<form class="EditProfilePopup" id="EditPhoneNumberPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputPhoneNumberPopup">Phone Number</label></h5>';
								echo '<div> <input type="tel" id="InputPhoneNumberPopup" name="InputPhoneNumberPopup" placeholder="123-456-7890" /></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditPhoneNumberSubmitter">Save</button>';
								echo '</form>';

									echo '<form class="EditProfilePopup" id="EditWhatsAppPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputWhatsAppPopup">WhatsApp</label></h5>';
								echo '<div> <input type="tel" id="InputWhatsAppPopup" name="InputWhatsAppPopup" placeholder="123-456-7890" /></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditWhatsAppSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditEmailPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEmailPopup">Email</label></h5>';
								echo '<div> <input type="email" id="InputEmailPopup" name="InputEmailPopup" placeholder="username@mail.com" /></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditEmailSubmitter">Save</button>';
								echo '</form>';
					
			           echo '<li class="ThreeColGrid">';
			        
			 
			           echo '</li>';

					   echo '<form class="EditProfilePopup" id="EditBizWebsitePopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputBizWebsitePopup">Biz Website</label></h5>';
								echo '<div> <input type="url" id="InputBizWebsitePopup" name="InputBizWebsitePopup" placeholder="https://www.example.com" /></div>';
								echo '<button class="ThemeBtnStyles" type="submit" name="EditBizWebsiteSubmitter">Save</button>';
								echo '</form>';
			
			         echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/credit-card.png" width="25px" height="25px">Payments</h2>';
			 
			          echo '<li>';
					   $outPriceReturned = $DbSearch->priceReturned;
			            if($outPriceReturned === ""){
							$outPriceReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfilePriceIcon.png" width="25px" height="25px" /> Price <span onclick="GoEditPrice();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>'. $outPriceReturned. '</p>';
					   echo '</li>'; 

					   echo '<form class="EditProfilePopup" id="EditSessionPricePopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditSessionPrice">Session Price</label></h5>';
								echo '<select name="SelectEditSessionPrice" title="SelectEditSessionPrice">';
                                echo '<option value="Select">Select</option>';
                                echo '<option value="Less than $105">Less than $105</option>';
                                echo '<option value="$105-$136">$105-$136</option>';
								echo '<option value="More than $136">More than $136</option>';
								echo '<option value="Offers Sliding Scale">Offers Sliding Scale</option>';
                                echo '</select>';
                                echo '<br>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditSessionPriceSubmitter">Save</button>';
								echo '</form>';
			 
			            echo '<li class="TwoColGrid">';
			            echo '<div>';
					   $outCreditCardsReturned = $DbSearch->creditCardsReturned;
			           if($outCreditCardsReturned === ""){
							$outCreditCardsReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCreditsCradsIcon.png" width="25px" height="25px" /> Credit Cards <span onclick="GoEditCreditCards();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outCreditCardsReturned. '</p>';
					   echo '</div>'; 
			 
			            echo '<div>';
					   $outAltPaymentReturned = $DbSearch->altPaymentReturned;
			           if($outAltPaymentReturned === ""){
							$outAltPaymentReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileAltPayIcon.png" width="25px" height="25px" /> Alternate Payments <span onclick="GoEditAltPayments();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outAltPaymentReturned. '</p>';
					   echo '</div>';
			            echo '</li>';

						echo '<form class="EditProfilePopup" id="EditCreditCardsPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditCreditCards">Credit Cards</label></h5>';
								echo '<input type="checkbox" id="Visa" name="Visa" value="Visa">';
							    echo '<label for="Visa"> Visa </label><br>';
								echo '<input type="checkbox" id="MasterCard" name="MasterCard" value="MasterCard">';
								echo '<label for="MasterCard"> MasterCard </label><br>';
								echo '<input type="checkbox" id="American Express" name="American Express" value="American Express">';
								echo '<label for="American Express"> American Express </label><br>';
								echo '<input type="checkbox" id="Discover" name="Discover" value="Discover" />';
								echo '<label for="Discover"> Discover</label>';
                                echo '<br>';
								echo '<input type="hidden" id="StrFinalCreditCards" name="StrFinalCreditCards" />';
								echo '<button onclick="BuildCreditCardsString();" type="submit" class="ThemeBtnStyles" name="EditCreditCardsSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditAltPaymentsPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditAltPayments">Credit Cards</label></h5>';
								echo '<input type="checkbox" id="E-Transfer" name="E-Transfer" value="E-Transfer">';
							    echo '<label for="E-Transfer"> E-Transfer </label><br>';
								echo '<input type="checkbox" id="Debit" name="Debit" value="Debit">';
								echo '<label for="Debit"> Debit </label><br>';
								echo '<input type="checkbox" id="Cash" name="Cash" value="Cash">';
								echo '<label for="Cash"> Cash </label><br>';
								echo '<input type="checkbox" id="Gift Cards" name="Gift Cards" value="Gift Cards" />';
								echo '<label for="Gift Cards"> Gift Cards</label><br>';
								echo '<input type="checkbox" id="Payment Plans" name="Payment Plans" value="Payment Plans" />';
								echo '<label for="Payment Plans"> Payment Plans</label>';
                                echo '<br>';
								echo '<input type="hidden" id="StrFinalAltPayments" name="StrFinalAltPayments" />';
								echo '<button onclick="BuildAltPaymentsString();" type="submit" class="ThemeBtnStyles" name="EditAltPaymentsSubmitter">Save</button>';
								echo '</form>';
			
			            echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/location.png" width="25px" height="25px">Locations</h2>';
			 
			            echo '<li class="TwoColGrid">';
			           echo '<div>';
					   $outProvincesReturned = $DbSearch->provincesReturned;
			           if($outProvincesReturned === ""){
							$outProvincesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileProvincesIcon.png" width="25px" height="25px" /> Provinces <span onclick="GoEditProvinces();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outProvincesReturned. '</p>';
					   echo '</div>'; 
			 
			           echo '<div>';
					   $outCitiesReturned = $DbSearch->citiesReturned;
			           if($outCitiesReturned === ""){
							$outCitiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileCityIcon.png" width="25px" height="25px" /> Cities <span onclick="GoEditCities();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p>' . $outCitiesReturned. '</p>';
					   echo '</div>';  
			            echo '</li>';

						
								echo '<form class="EditProfilePopup" id="EditProvincesPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditProvinces">Provinces</label></h5>';
								echo '<input type="checkbox" id="Alberta" name="Alberta" value="Alberta">';
								echo '<label for="Alberta"> Alberta </label><br>';
								echo '<input type="checkbox" id="British Columbia" name="British Columbia" value="British Columbia">';
							    echo '<label for="British Columbia"> British Columbia </label><br>';
								echo '<input type="checkbox" id="Manitoba" name="Manitoba" value="Manitoba">';
								echo '<label for="Manitoba"> Manitoba </label><br>';
								echo '<input type="checkbox" id="New Brunswick" name="New Brunswick" value="New Brunswick" />';
								echo '<label for="New Brunswick"> New Brunswick</label><br>';
								echo '<input type="checkbox" id="Newfoundland" name="Newfoundland" value="Newfoundland" />';
								echo '<label for="Newfoundland"> Newfoundland</label><br>';
								echo '<input type="checkbox" id="Labrador" name="Labrador" value="Labrador" />';
								echo '<label for="Labrador"> Labrador</label><br>';
								echo '<input type="checkbox" id="Nova Scotia" name="Nova Scotia" value="Nova Scotia" />';
								echo '<label for="Nova Scotia"> Nova Scotia</label><br>';
								echo '<input type="checkbox" id="Ontario" name="Ontario" value="Ontario" />';
								echo '<label for="Ontario"> Ontario</label><br>';
								echo '<input type="checkbox" id="Prince Edward Island" name="Prince Edward Island" value="Prince Edward Island" />';
								echo '<label for="Prince Edward Island"> Prince Edward Island</label><br>';
								echo '<input type="checkbox" id="Quebec" name="Quebec" value="Quebec" />';
								echo '<label for="Quebec"> Quebec</label><br>';
								echo '<input type="checkbox" id="Saskatchewan" name="Saskatchewan" value="Saskatchewan" />';
								echo '<label for="Saskatchewan"> Saskatchewan</label>';
                                echo '<br>';
								echo '<input type="hidden" id="StrFinalProvinces" name="StrFinalProvinces" />';
								echo '<button onclick="BuildProvincesString();" type="submit" class="ThemeBtnStyles" name="EditProvincesSubmitter">Save</button>';
								echo '</form>';

								echo '<form class="EditProfilePopup" id="EditCitiesPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="SelectEditCities">Cities</label></h5>';
								echo '<input type="checkbox" id="Toronto" name="Toronto" value="Toronto">';
								echo '<label for="Toronto"> Toronto </label><br>';
								echo '<input type="checkbox" id="Montreal" name="Montreal" value="Montreal">';
							    echo '<label for="Montreal"> Montreal </label><br>';
								echo '<input type="checkbox" id="Ottawa" name="Ottawa" value="Ottawa">';
								echo '<label for="Ottawa"> Ottawa </label><br>';
								echo '<input type="checkbox" id="Vancouver" name="Vancouver" value="Vancouver" />';
								echo '<label for="Vancouver"> Vancouver</label><br>';
								echo '<input type="checkbox" id="St Johns" name="St Johns" value="St Johns" />';
		 						echo '<label for="St Johns"> St Johns</label><br>';
		                        echo '<input type="checkbox" id="Edmonton" name="Edmonton" value="Edmonton" />';
								echo '<label for="Edmonton"> Edmonton</label><br>';
								echo '<input type="checkbox" id="Winnipeg" name="Winnipeg" value="Winnipeg" />';
								echo '<label for="Winnipeg"> Winnipeg</label><br>';
								echo '<input type="checkbox" id="Hamilton" name="Hamilton" value="Hamilton" />';
								echo '<label for="Hamilton"> Hamilton</label><br>';
								echo '<input type="checkbox" id="Calgary" name="Calgary" value="Calgary" />';
								echo '<label for="Calgary"> Calgary</label><br>';
								echo '<input type="checkbox" id="Kitchener Waterloo" name="Kitchener Waterloo" value="Kitchener Waterloo" />';
								echo '<label for="Kitchener Waterloo"> Kitchener Waterloo</label>';
                                echo '<br>';
								echo '<input type="hidden" id="StrFinalCities" name="StrFinalCities" />';
								echo '<button onclick="BuildCitiesString();" type="submit" class="ThemeBtnStyles" name="EditCitiesSubmitter">Save</button>';
								echo '</form>';
			 
			            echo '<li>';
					   $outAddressReturned = $DbSearch->addressReturned;
			           if($outCitiesReturned === ""){
							$outCitiesReturned = '<span style="opacity:0;">No Resonse</span>';
						}
			          echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileAddyIcon.png" width="25px" height="25px" /> Address <span onclick="GoEditAddress();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<p >' . $outAddressReturned. '</p>';
					   echo '</li>';

					   echo '<form class="EditProfilePopup" id="EditAddressPopup" method="post" action="https://findcouplestherapistnearme.com/profile">';
								echo '<h5><label for="InputEditAddress">Address</label></h5>';
								echo '<div><input type="text" name="InputEditAddress" id="InputEditAddress"/></div>';
								echo '<button type="submit" class="ThemeBtnStyles" name="EditAddressSubmitter">Save</button>';
								echo '</form>';
			 
			           echo '<li>';
			           echo '<h2 class="DisplayListSectionH2"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/08/OfficeEnv.png" width="25px" height="25px">Sesson Environment</h2>';
			           echo '<div class="ThreeColGrid OfficeImagesBox">';
			 
			          echo '<div style="padding:25px;">';
					   $outOfficeImg01Returned = $DbSearch->officeImg01Returned;
			           if($outOfficeImg01Returned === ""){
							$outOfficeImg01Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #01 <span onclick="GoEditImg01();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg01Returned.'" alt="outOfficeImg01Returned" title="outOfficeImg01Returned" height="100%" width="100%"/></div>';
					   echo '<form class="EditProfilePopup" id="EditImg01Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg01">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg01" name="fileUploadImg01"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img01BtnSubmitter">Upload</button>';
						echo '</form>';
					  echo '</div>';
			 
			            echo '<div style="padding:25px;">';
					   $outOfficeImg02Returned = $DbSearch->officeImg02Returned;
			           if($outOfficeImg02Returned === ""){
							$outOfficeImg02Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #02 <span onclick="GoEditImg02();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg02Returned.'" alt="outOfficeImg02Returned" title="outOfficeImg02Returned" height="100%" width="100%" /></div>';
					   echo '<form class="EditProfilePopup" id="EditImg02Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg02">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg02" name="fileUploadImg02"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img02BtnSubmitter">Upload</button>';
						echo '</form>';
			     		echo '</div>';
			 
			          echo '<div style="padding:25px;">';
					   $outOfficeImg03Returned = $DbSearch->officeImg03Returned;
			            if($outOfficeImg03Returned === ""){
							$outOfficeImg03Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			          echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #03 <span onclick="GoEditImg03();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			          echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg03Returned.'" alt="outOfficeImg03Returned" title="outOfficeImg03Returned" height="100%" width="100%"/></div>';
					  echo '<form class="EditProfilePopup" id="EditImg03Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg03">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg03" name="fileUploadImg03"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img03BtnSubmitter">Upload</button>';
						echo '</form>';
					 echo '</div>';

			           echo '<div style="padding:25px;">';
					   $outOfficeImg04Returned = $DbSearch->officeImg04Returned;
			           if($outOfficeImg04Returned === ""){
							$outOfficeImg04Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			            echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #04 <span onclick="GoEditImg04();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg04Returned.'" alt="outOfficeImg04Returned" title="outOfficeImg04Returned" height="100%" width="100%" /> </div>';
					   echo '<form class="EditProfilePopup" id="EditImg04Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg04">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg04" name="fileUploadImg04"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img04BtnSubmitter">Upload</button>';
						echo '</form>';
					   echo '</div>';
			 
			           echo '<div style="padding:25px;">';
					   $outOfficeImg05Returned = $DbSearch->officeImg05Returned;
			           if($outOfficeImg05Returned === ""){
							$outOfficeImg05Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #05 <span onclick="GoEditImg05();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg05Returned.'" alt="outOfficeImg05Returned" title="outOfficeImg05Returned" height="100%" width="100%" /></div>';
					   echo '<form class="EditProfilePopup" id="EditImg05Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg05">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg05" name="fileUploadImg05"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img05BtnSubmitter">Upload</button>';
						echo '</form>';
			           echo '</div>';
			 
			           echo '<div style="padding:25px;">';
					   $outOfficeImg06Returned = $DbSearch->officeImg06Returned;
			           if($outOfficeImg06Returned === ""){
							$outOfficeImg06Returned = 'https://findcouplestherapistnearme.com/wp-content/uploads/2025/09/OfficeImagePlaceholder.png';
						}
			           echo '<h5 class="formHeader"><img style="margin-right:10px;" src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/11/ProfileGalleryIcon.png" width="25px" height="25px" /> Office IMG #06 <span onclick="GoEditImg06();" class="EditProfileIcon"><img src="https://findcouplestherapistnearme.com/wp-content/uploads/2025/10/EditProfilePencil.png" alt="EditProfilePencil" title="EditProfilePencil" width="25px" height="25px" /></span></h5>';
			           echo '<div class="EditIMGBoxStyles"><img src="'.$outOfficeImg06Returned.'" alt="outOfficeImg06Returned" title="outOfficeImg06Returned" height="100%" width="100%" /></div>';
					   echo '<form class="EditProfilePopup" id="EditImg06Popup" action="https://findcouplestherapistnearme.com/profile" method="post" enctype="multipart/form-data">';
					   echo '<label for="fileUploadImg06">Choose a file:</label>';
					    echo '<div style="width:250px;overflow:scroll;"><input style="background-color:white;" type="file" id="fileUploadImg06" name="fileUploadImg06"></div>';
						echo '<button type="submit" class="ThemeBtnStyles" name="Img06BtnSubmitter">Upload</button>';
						echo '</form>';
			           echo '</div>';
			 
			           echo '</div>';
					   echo '</li>'; 
			 
					   echo '</ul>';
					   echo '</div>';
      
       //End FUNC:*
		 }

   
        public function DoesUserHaveTherapistListing(){
      
        	
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

                                return true;

                                    //End I:*
                                    }
                      
                      else {
                        return false;
                      //End E:*
                      }

                        //End I:*
                    }

                        /*Warning: don't forget to close the connection by calling close function on connection object.*/
                            $conn->close();

                    /*. End of Alternate path for when DB connect is a success. */
                    //End Out-E:*
                }
          
        //End Out-I:*	
        }

        //End FUNC:*
      }
      
         public function UpdateFormField($DbSearch, $conn, $fieldID, $newValue){

               if($newValue !== ""){

                       $updateColumn_SQL = "UPDATE zvyq_wpforms_entry_fields SET value = ? WHERE field_id='$fieldID' AND form_id='$DbSearch->formID' AND entry_id = '$DbSearch->entryId'";
					   $stmt = $conn->prepare($updateColumn_SQL);

					   if (!$stmt) {
							die("Prepare failed: " . $conn->error);
							//End I:*
						}

					   $stmt->bind_param("s", $newValue);

					   if ($stmt->execute()){

						echo '<script>window.location.href = window.location.href</script>';
                         return true;
						//End I:*
					   }
					   else{
                       echo "Error updating record: " . $conn->error;
					   return false; 
						//End E:*
					   }
					
				//End I:*
			   }
     
      //End FUNC:*
      }
      
            public function UpdateJSONFormField($DbSearch, $conn, $userID, $fieldID, $newValue){

		  
               if($newValue !== ""){

                    $updateJSON = "UPDATE zvyq_wpforms_entries SET fields = JSON_SET(fields, '$.$fieldID.value', ?) WHERE user_id = '$userID' AND form_id = '$DbSearch->formID'";
					$stmt = $conn->prepare($updateJSON);

					   if (!$stmt) {
							die("Prepare failed: " . $conn->error);
							//End I:*
						}

						$stmt->bind_param("s", $newValue);

					   if ($stmt->execute()){

						echo '<script>console.log("Record Updated")</script>';
                        
						//End I:*
					   }
					   

					   $updateJSON = "UPDATE zvyq_wpforms_entries SET fields = JSON_SET(fields, '$.$fieldID.value_raw', ?) WHERE user_id = '$userID' AND form_id = '$DbSearch->formID'";
					   $stmt = $conn->prepare($updateJSON);

					   
					   if (!$stmt) {
							die("Prepare failed: " . $conn->error);
							//End I:*
						}

						$stmt->bind_param("s", $newValue);

					   if ($stmt->execute()){

						echo '<script>window.location.href = window.location.href</script>';
                        
						//End I:*
					   }

				//End I:*
			   }
     
      //End FUNC:*
      }

	    public function UpdateJSONTitleFormField($DbSearch, $conn, $userID, $fieldID, $newValue){

               if($newValue !== "" && strpos($newValue, ' ') !== false){

                    $updateJSON = "UPDATE zvyq_wpforms_entries SET fields = JSON_SET(fields, '$.$fieldID.first', ?) WHERE user_id = '$userID' AND form_id = '$DbSearch->formID'";
					$stmt = $conn->prepare($updateJSON);

                    $result = explode(' ', $newValue);

					   if (!$stmt) {
							die("Prepare failed: " . $conn->error);
							//End I:*
						}

						$stmt->bind_param("s", $result[0]);

					   if ($stmt->execute()){

						echo '<script>console.log("Record Updated")</script>';
                        
						//End I:*
					   }
					   

					   $updateJSON = "UPDATE zvyq_wpforms_entries SET fields = JSON_SET(fields, '$.$fieldID.last', ?) WHERE user_id = '$userID' AND form_id = '$DbSearch->formID'";
					   $stmt = $conn->prepare($updateJSON);

					   
					   if (!$stmt) {
							die("Prepare failed: " . $conn->error);
							//End I:*
						}

						$stmt->bind_param("s", $result[1]);

					   if ($stmt->execute()){

						echo '<script>window.location.href = window.location.href</script>';
                        
						//End I:*
					   }

				//End I:*
			   }
     
      //End FUNC:*
      }

	  public function UploadOfficeImage01($DbSearch, $conn, $current_user_id){

		    
						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages/';
						$filename = basename($_FILES["fileUploadImg01"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg01']['tmp_name'];
						$fileName = $_FILES['fileUploadImg01']['name'];
						$fileType = $_FILES['fileUploadImg01']['type'];

					    $finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);

							
						}

						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg01, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg01, $finalUrlPath);
							//End I:*
						}

				
		//End FUNC:*
	  }

	   public function UploadOfficeImage02($DbSearch, $conn, $current_user_id){

		    
						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileUploadImg02"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg02']['tmp_name'];
						$fileName = $_FILES['fileUploadImg02']['name'];
						$fileType = $_FILES['fileUploadImg02']['type'];

					    $finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);

							
						}


						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg02, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg02, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

	    public function UploadOfficeImage03($DbSearch, $conn, $current_user_id){

		    
					// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileUploadImg03"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg03']['tmp_name'];
						$fileName = $_FILES['fileUploadImg03']['name'];
						$fileType = $_FILES['fileUploadImg03']['type'];

						$finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);

							
						}


						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg03, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg03, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

	  	    public function UploadOfficeImage04($DbSearch, $conn, $current_user_id){

		    
						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileUploadImg04"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg04']['tmp_name'];
						$fileName = $_FILES['fileUploadImg04']['name'];
						$fileType = $_FILES['fileUploadImg04']['type'];

						$finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);

							
						}


						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg04, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg04, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

	    public function UploadOfficeImage05($DbSearch, $conn, $current_user_id){

		    
						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileUploadImg05"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg05']['tmp_name'];
						$fileName = $_FILES['fileUploadImg05']['name'];
						$fileType = $_FILES['fileUploadImg05']['type'];

						$finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);

						}

						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg05, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg05, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

	      public function UploadOfficeImage06($DbSearch, $conn, $current_user_id){

		    
						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileUploadImg06"]["name"]);

						$fileTmpPath = $_FILES['fileUploadImg06']['tmp_name'];
						$fileName = $_FILES['fileUploadImg06']['name'];
						$fileType = $_FILES['fileUploadImg06']['type'];

						$finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);
							
						}

						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->officeImg06, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->officeImg06, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

	   public function UploadProfilePicture($DbSearch, $conn, $current_user_id){

						// Get the uploads directory information
						$upload_dir = wp_upload_dir();
						$custom_folder_path_basedir = $upload_dir['basedir']; // names: path, url, basedir, baseurl.
						$custom_folder_path_url = $upload_dir['url']; // names: path, url, basedir, baseurl.
						$custom_folder_path = $upload_dir['path'];
						$manualPath = 'https://www.findcouplestherapistnearme.com/wp-content/uploads/FCTOfficeImages';
						$filename = basename($_FILES["fileProfilePicture"]["name"]);

						$fileTmpPath = $_FILES['fileProfilePicture']['tmp_name'];
						$fileName = $_FILES['fileProfilePicture']['name'];
						$fileType = $_FILES['fileProfilePicture']['type'];

						$finalUrlPath = $manualPath . '/' . $fileName;

						$uploadPath = $custom_folder_path_basedir . '/' . 'FCTOfficeImages';
					
	                   // Check if the folder already exists
						if (!file_exists($uploadPath)) {

							wp_mkdir_p($uploadPath);
							
						}

						if($fileName !== ''){
						move_uploaded_file($fileTmpPath, $uploadPath . '/' .$fileName);
						$resultUJFF = $DbSearch->UpdateJSONFormField($DbSearch, $conn, $current_user_id, $DbSearch->profPicture, $finalUrlPath);
						$resultUFF = $DbSearch->UpdateFormField($DbSearch, $conn, $DbSearch->profPicture, $finalUrlPath);
							//End I:*
						}

		//End FUNC:*
	  }

          //End CL:*
    }
      //End Out-I:*
}

