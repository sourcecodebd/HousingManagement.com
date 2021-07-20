function validateForm() {
var refcode = document.getElementById("refcode").value; 

if (refcode == "") {
  document.getElementById("jsnameerror").innerHTML=" Reference Code must be filled out";
//alert("Reference Code must be filled out");//
return false;
}
}