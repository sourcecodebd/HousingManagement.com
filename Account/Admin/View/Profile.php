<?php
session_start(); 
include('../Control/Logindb.php');
include('../Control/Updatecheck.php');

if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL | Profile</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/ProfileStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">

</head>

<body>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="Profile.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

</div>
</div>

<div id="ProfileBlock">

<div id="ProfileBlock2">

<div id="ProfileBlock3">

</div>

<div id="ProfileBlock3">
<h1 id="Title">Profile</h1>
</div>

<div id="ProfileBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br><h3 id="YourProfile">Update Your Information</h3></h2>
<b>
<?php

  $connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckAdmin($conobj,"admins",$_SESSION["un"]);
if ($userQuery->num_rows > 0) {
    echo "<form action='' method='POST' enctype = 'multipart/form-data'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<h3 id='fname'>First Name: <input type='text' name='fname' value=".$row["firstname"]." >$error</h3> <br>";
      echo "<h3 id='lname'>Last Name: <input type='text' name='lname' value=".$row["lastname"]." >$error</h3> <br>";
      echo "<h3 id='lname'>Password: <input type='text' name='password' value=".$row["password"]." >$error</h3> <br>";  
      echo "<h3 id='email'>Email: <input type='text' name='email' value=".$row["email"]." >$error</h3> <br>";
      echo "<h3 id='gender'>Gender: <br><input type='radio' name='gender' value= 'Male' checked ><span id='Male'>Male</span></h3>";
      echo "<h3 id='gender'> <input type='radio' name='gender' value= 'Female' ><span id='Female'>Female</span></h3> <br>";
      echo "<h3 id='profession'>Profession: <br><input type='checkbox' name='profession' value= 'Doctor' checked><span id='Doctor'>Doctor</span></h3>";
      echo "<h3 id='profession'> <input type='checkbox' name='profession' value= 'Engineer' ><span id='Engineer'>Engineer</span></h3> <br>";
      echo "<h3 id='date'>Date: <input type='date' name='date' value=".$row["date"]." ></h3>";
      
      $img_name = $row['file'];
      $img_src = $row['file_path'];

if(isset($_POST["update"])) {
$target_dir = "../Received/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
  echo "<h4 id='ErrorUpload'>Sorry! there was an error while uploading your file. Please fillup the form properly, choose your file and then submit.</h4>";

}
}
echo "<h2 id='Upload'><Label id='LabelUpload'>Upload Your File</Label>
  <input type='file' name='fileToUpload' id='fileToUpload'. value=".$row["file"]." > </h2>";
    }
    echo   "<input type='submit' name='update' id='Button' value='Update'>";
  } else {
    echo "Please Re-Login to See the Updates";
  }
?>

<br>
<img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" width='128px' height='160px' />
<p><strong><?php echo $img_name; ?></strong></p>

<h2 id="Marquee"><marquee direction=left>Do you want to</marquee></h2> <div class="link"><a href="LoginResult.php">Back</a></div><br><br>
</b>

</div>
</div>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>