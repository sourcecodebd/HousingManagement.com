<?php

$error="";


if (isset($_POST['update'])) {
  if ((empty($_POST['fname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname'])))  || (empty($_POST['lname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])))  ||  (empty($_POST['email']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
else
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $gender=$_POST['gender']; 
  $profession=$_POST['profession']; 
  $date=$_POST['date']; 
  $file=($_FILES['fileToUpload']['name']);

$connection = new Logindb();
$conobj=$connection->OpenCon();

$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;
$_SESSION["gender"] = $gender;
$_SESSION["profession"] = $profession;
$_SESSION["date"] = $date;
$_SESSION["name"] = $file;
 
$userQuery=$connection->UpdateUser($conobj,"users",$_SESSION['un'],$fname,$lname,$password,$email,$gender,$profession,$date,$file);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
