<?php
include('Logindb.php');
session_start(); 

 $error="";
// store session data

if (isset($_POST['submit'])){
  if ((empty($_POST['un'])) || empty($_POST['password'])) {
    $error = "<h4 style='color:red'>Username or Password is Invalid</h4>";
    }
    else
{
  $un=$_POST['un'];
  $password=$_POST['password'];
  
$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"owners",$un,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["un"] = $un;
$_SESSION["password"] = $password;

   }
 else {
  $error = "<h4 style='color:red'>Username or Password is Invalid</h4>";
}
$connection->CloseCon($conobj);

}
}
?>