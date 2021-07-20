<?php

 $error="";
// store session data
$name = $date = $post = "";

if (isset($_POST['update'])){
  if ((empty($_POST['name']))||(empty($_POST['post']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $date=$_POST['date'];
  $post=$_POST['post'];

$connection = new Postdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdatePost($conobj,"post",$id,$name,$date,$post);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>