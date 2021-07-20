<?php
include("Postdb.php");
// store session data

if (isset($_POST['submit'])){
  if (empty($_POST['name'])||empty($_POST['date'])||empty($_POST['post'])) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $name=$_POST['name'];
  $date=$_POST['date'];
  $post=$_POST['post'];

$connection = new Postdb();
$conobj=$connection->OpenCon();

$_SESSION["name"] = $name;
$_SESSION["date"] = $date;
$_SESSION["post"] = $post;

$userQuery=$connection->insertPost($conobj,$name,$date,$post);

$connection->CloseCon($conobj);

}
}
?>