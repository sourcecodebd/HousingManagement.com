<?php
include('Refdb.php');
session_start(); 
 $error="";
// store session data

if (isset($_POST['submit'])){
  if ((empty($_POST['refcode']))) {
    $error = "<h4 style='color:red'>Reference Code is Invalid</h4>";
    }
    else
{
  $refcode=$_POST['refcode'];
  
$connection = new Refdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"admins",$refcode);

if ($userQuery->num_rows > 0) {
$_SESSION["refcode"] = $refcode;

   }
 else {
  $error = "<h4 style='color:red'>Reference Code is Invalid</h4>";
}
$connection->CloseCon($conobj);

}
}
?>