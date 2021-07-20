<?php
include('Regdb.php');
session_start(); 

 $error="";
// store session data

if (isset($_POST['submit'])){
  if ((empty($_POST['flatname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['flatname']))) || (empty($_POST['flataddress'])) || (empty($_POST['price']))  ||  (empty($_POST['owner']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $flatname=$_POST['flatname'];
  $flataddress=$_POST['flataddress'];
  $price=$_POST['price'];
  $flatstatus=$_POST['flatstatus'];
  $aboutflat=$_POST['aboutflat'];
  $dateoflaunching=$_POST['dateoflaunching'];
  $owner=$_POST['owner'];

$connection = new Regdb();
$conobj=$connection->OpenCon();

$_SESSION["flatname"] = $flatname;
$_SESSION["flataddress"] = $flataddress;
$_SESSION["price"] = $price;
$_SESSION["flatstatus"] = $flatstatus;
$_SESSION["aboutflat"] = $aboutflat;
$_SESSION["dateoflaunching"] = $dateoflaunching;
$_SESSION["owner"] = $owner;

$userQuery=$connection->insertUserBuy($conobj,$flatname,$flataddress,$price,$flatstatus, $aboutflat, $dateoflaunching,$owner);

$connection->CloseCon($conobj);

}
}
?>