<?php

session_start();
$id=$ownerbargain= $ownerbargainingstatus= $bargaindate= $error="";

if (isset($_POST['update'])) {
  if ((empty($_POST['ownerbargain']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
else
{ 
  $id=$_POST['id'];
  $ownerbargain=$_POST['ownerbargain']; 
  $ownerbargainstatus=$_POST['ownerbargainstatus'];
  $bargaindate=$_POST['bargaindate'];

$_SESSION['id']=$id;
$_SESSION["ownerbargain"] = $ownerbargain;
$_SESSION["ownerbargainstatus"] = $ownerbargainstatus;
$_SESSION["bargaindate"] = $bargaindate;

$connection = new Logindb();
$conobj=$connection->OpenCon();

 
$userQuery=$connection->UpdateOwnerBargain($conobj,"userbuy",$_SESSION['id'],$_POST['ownerbargain'],$_POST['ownerbargainstatus'],$_POST['bargaindate']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
