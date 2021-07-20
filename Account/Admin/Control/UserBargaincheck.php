<?php

session_start();
$id=$userbargain= $userbargainingstatus= $bargaindate= $error="";

if (isset($_POST['update'])) {
  if ((empty($_POST['userbargain']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
else
{ 
  $id=$_POST['id'];
  $userbargain=$_POST['userbargain']; 
  $userbargainstatus=$_POST['userbargainstatus'];
  $bargaindate=$_POST['bargaindate'];

$_SESSION['id']=$id;
$_SESSION["userbargain"] = $userbargain;
$_SESSION["userbargainstatus"] = $userbargainstatus;
$_SESSION["bargaindate"] = $bargaindate;

$connection = new Logindb();
$conobj=$connection->OpenCon();

 
$userQuery=$connection->UpdateUserBargain($conobj,"userbuy",$_SESSION['id'],$_POST['userbargain'],$_POST['userbargainstatus'],$_POST['bargaindate']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
