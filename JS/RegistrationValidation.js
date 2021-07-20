function validateForm() {
  var un = document.getElementById("un").value; 
  var fname = document.getElementById("fname");
  var fnamefilter = /^([a-zA-Z-' ])+$/;
  var lname = document.getElementById("lname");
  var lnamefilter = /^([a-zA-Z-' ])+$/; 
  var password = document.getElementById("password").value;
  var email = document.getElementById("email");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var gender = document.getElementsByName("gender");
  document.getElementById("Button").onclick;
  var date = document.getElementById("date").value;
  var fileToUpload = document.getElementById("fileToUpload").value; 
  
  
  if (un == "") {
    document.getElementById("jsnameerror").innerHTML="User Name must be filled out";
  //alert("User Name must be filled out");//
  return false;
  }
  if(!fnamefilter.test(fname.value)) {
    valid = 0;
    document.getElementById("jsfnameerror").innerHTML= "First Name must contain only letter";
  return false;
  }
  
  if(!lnamefilter.test(lname.value)) {
    valid = 0;
    document.getElementById("jslnameerror").innerHTML= "Last Name must contain only letter";
  return false;
  }
  
  if (password.length<2) {
    document.getElementById("jspasserror").innerHTML="Password must be more than 1 input";
  //alert("Password must be filled out");//
  return false;
  }
  
  if(!filter.test(email.value)) {
    valid = 0;
    document.getElementById("jsemailerror").innerHTML= "Invalid Email address";
  return false;
  }
  
  if (gender[0].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Male selected";
  } else if (gender[1].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Female selected";
  } else {
    // no checked
    document.getElementById("jsgendererror").innerHTML = "Gender must be selected";
    return false;
  }
  
  if ((document.getElementById('doctor').checked)) {
   document.getElementById('jsprofessionerror').innerHTML="Doctor selected";
  
  } else if ((document.getElementById('engineer').checked)) {
    document.getElementById('jsprofessionerror').innerHTML="Engineer selected";
  }
  else{
    document.getElementById("jsprofessionerror").innerHTML = "Profession must be selected";
    return false;
  }
  
  if (date == "") {
    document.getElementById("jsdateerror").innerHTML="Date must be selected";
  //alert("Date must be selected");//
  return false;
  }
  
  if (fileToUpload == "") {
    document.getElementById("jsuploaderror").innerHTML="Files must be uploaded";
  //alert("Files must be uploaded");//
  return false;
  }
  }