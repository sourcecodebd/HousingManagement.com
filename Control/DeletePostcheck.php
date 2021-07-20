<?php

 $error="";
// store session data
$id = "";

if (isset($_POST['delete'])){
  
  $id=$_POST['id'];

$connection = new Postdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->DeletePost($conobj,"post",$id);

echo $userQuery;
$connection->CloseCon($conobj);

}
?>