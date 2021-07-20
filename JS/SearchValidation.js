function validateForm() {
  var flatid = document.getElementById("flatid").value;
  
  if (flatid == "") {
    document.getElementById("jsflatiderror").innerHTML=" Flat Id must be filled out";
  //alert("Flat Id must be filled out");//
  return false;
  }
  }

  function validateForm2() {
    var profileid = document.getElementById("profileid").value;  
  
  if (profileid == "") {
    document.getElementById("jsprofileiderror").innerHTML=" Profile Id must be filled out";
  //alert("Profile Id must be filled out");//
  return false;
  }
  }

  function validateForm4() {
    var postid = document.getElementById("user").value;  
  
  if (postid == "") {
    document.getElementById("jsusererror").innerHTML=" Post Id must be filled out";
  //alert("Post Id must be filled out");//
  return false;
  }
  }