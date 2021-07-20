<?php

session_start(); 

 $error="";
// store session data
$id = $fname = $lname = $password = $email= $gender = $profession = $date= $file=$result= "";

if (isset($_POST['update'])){
  if ((empty($_POST['fname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))) || (empty($_POST['lname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{

  $id=$_POST['id'];
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

$userQuery=$connection->UpdateUser($conobj,"users",$id,$fname,$lname,$password,$email,$gender,$profession,$date,$file);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>