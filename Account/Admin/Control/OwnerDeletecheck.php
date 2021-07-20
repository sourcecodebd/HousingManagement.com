<?php

 $error="";
// store session data
$id = "";

if (isset($_POST['delete'])){

  $id=$_POST['id'];

$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->DeleteOwner($conobj,"owners",$id);

echo $userQuery;
$connection->CloseCon($conobj);

}
?>