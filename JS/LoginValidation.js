function validateForm() {
var un = document.getElementById("un").value; 
var password = document.getElementById("password").value;

if (un == "") {
  document.getElementById("jsnameerror").innerHTML=" User Name must be filled out";
//alert("User Name must be filled out");//
return false;
}
if (password.length<2) {
  document.getElementById("jspasserror").innerHTML="Password must be filled out";
//alert("Password must be filled out");//
return false;
}
}