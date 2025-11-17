function FixFooterSpacingIssues(){
    console.log("Child Theme JS Works");

    //End FUNC:*
}

FixFooterSpacingIssues();

if(window.location.href === "https://findcouplestherapistnearme.com/"){
  var targetElem = document.querySelector(".e-con-inner");
  if(targetElem){
    targetElem.style.height = "100vh";
  }
}

if(window.location.href === "https://findcouplestherapistnearme.com/login/"){

  var targetElem = document.getElementById("primary");
  if(targetElem){
    targetElem.style.height = "100vh";
  }
}

if(window.location.href === "https://findcouplestherapistnearme.com/search-listing/"){

  var checkNotifications = document.getElementsByClassName("InfoFeedbackBox");
  var checkEntries = document.getElementsByClassName("listingEntry");

  var targetElem = document.getElementById("primary");
  var wpContent = document.getElementById("content");
  
  
  if(targetElem && checkEntries.length === 0){
    targetElem.style.height = "100vh";
  }
  
   if(targetElem && checkEntries.length === 0 && checkNotifications.length === 0){
    targetElem.style.height = "100vh";
     var strMessage  = '<div class="InfoFeedbackBox"><p>No matches for that filter pattern. Please try a different variation of filter selections.</p></div>';
     var nodeMessage = document.createElement("div");
     nodeMessage.innerHTML = strMessage;
     wpContent.append(nodeMessage);
   }
  
  
}

if(window.location.href === "https://findcouplestherapistnearme.com/add-listing/"){
  var checkEntries = document.getElementsByClassName("InfoFeedbackBox");

  var targetElem = document.getElementById("primary");
  
  if(targetElem && checkEntries && checkEntries.length > 0){
    targetElem.style.height = "100vh";
  }
  
}

