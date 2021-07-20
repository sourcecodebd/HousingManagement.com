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
  echo  $result ="<marquee direction=left hspace=20 vspace=20 width=230><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
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

$userQuery=$connection->UpdateOwner($conobj,"owners",$_SESSION['id'],$fname,$lname,$password,$email,$gender,$profession,$date,$file);

$_SESSION["id"] = $id;
$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;
$_SESSION["gender"] = $gender;
$_SESSION["profession"] = $profession;
$_SESSION["date"] = $date;
$_SESSION["name"]=$file;
$connection->CloseCon($conobj);


}
}
?>