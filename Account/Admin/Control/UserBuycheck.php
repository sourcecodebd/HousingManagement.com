<?php

session_start();
$id=$flatname= $flataddress= $price= $flatstatus= $aboutflat= $dateoflaunching= $owner=$buyer= $error="";

if (isset($_POST['update'])) {
  if ((empty($_POST['flatname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['flatname'])))  || (empty($_POST['flataddress'])) || (empty($_POST['price']))  ||  (empty($_POST['owner']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
else
{ 
  $id=$_POST['id'];
  $flatname=$_POST['flatname']; 
  $flataddress=$_POST['flataddress']; 
  $price=$_POST['price'];
  $flatstatus=$_POST['flatstatus'];
  $aboutflat=$_POST['aboutflat']; 
  $dateoflaunching=$_POST['dateoflaunching'];
  $owner=$_POST['owner'];
  $buyer=$_POST['buyer']; 

$_SESSION['id']=$id;
$_SESSION["flatname"] = $flatname;
$_SESSION["flataddress"] = $flataddress;
$_SESSION["price"] = $price;
$_SESSION["flatstatus"] = $flatstatus;
$_SESSION["aboutflat"] = $aboutflat;
$_SESSION["dateoflaunching"] = $dateoflaunching;
$_SESSION['owner']=$owner;
$_SESSION['buyer']=$buyer;

$connection = new Logindb();
$conobj=$connection->OpenCon();

 
$userQuery=$connection->UpdateUserBuy($conobj,"userbuy",$_SESSION['id'],$_POST['flatname'],$_POST['flataddress'],$_POST['price'],$_POST['flatstatus'],$_POST['aboutflat'],$_POST['dateoflaunching'],$_POST['owner'],$_POST['buyer']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
