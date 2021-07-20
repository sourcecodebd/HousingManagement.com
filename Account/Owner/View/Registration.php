<!DOCTYPE html>
<html>
<head>
<title>FLAT OWNER | Registration</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">

</head>

<body>

<script src="../../../JS/RegistrationValidation.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../../../View/Content.php">HOME</a>

<a href="../../../View/Accounts.php">ACCOUNTS</a>

<a href="../../User/View/Account.php">FLAT RENTER</a>

<a href="Account.php">FLAT OWNER</a>

<a href="../../Admin/View/Account.php">ADMIN PANEL</a>

</div>
</div>

<div id="RegistrationBlock">

<div id="RegistrationBlock2">

<div id="RegistrationBlock3">

<?php

include('../Control/Registrationcheck.php');

if(isset($_SESSION['un'])){
header("location: RegistrationResult.php");
}
?>
</div>

<div id="RegistrationBlock4">
<h1 id="Title">Registration</h1>
</div>
<b>
<div id="RegistrationBlock5">
<h2 id="Marquee"><marquee>No Account? Create your Account now!</marquee></h2>
</div>
<div id="RegistrationBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data"onsubmit="return validateForm()">
<Label>User Name:</label><br> <?php echo $error;?> <h4 id="jsnameerror"></h4>
  <input type="text" id="un" name="un" ><br><br>
  <Label>First Name:</label><br> <?php echo $error;?> <h4 id="jsfnameerror"></h4>
  <input type="text" id="fname" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php echo $error;?> <h4 id="jslnameerror"></h4>
  <input type="text" id="lname" name="lname" ><br><br>
  <Label>Password:</Label><br> <?php echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>
  <Label>Email Id:</Label><br> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br>
  <label>Gender:</label> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br>
  <Label>Choose your Profession:</Label>
  <h4 id="jsprofessionerror"></h4>
  <div>
  <label for="Doctor">Doctor</label>
  <input type="checkbox" id="doctor" name="profession" value="Doctor" >
  <label for="Engineer">Engineer</label>
  <input type="checkbox" id="engineer" name="profession" value="Engineer">
  </div>
  <br>
  <label for="birthday">Birthday:</label> <h4 id="jsdateerror"></h4>
  <input type="date" id="date" name="date" >
  <br>
  <?php
if(isset($_POST["submit"])) {
$target_dir = "../Received/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
  echo "<h4 style='color:red'>Sorry! there was an error while uploading your file. Please fillup the form properly, choose your file and then submit.</h4>";

}
}
?>

<h4 id="jsuploaderror"></h4>
<h2 id="Upload"><Label id="UploadLabel">Upload Your File</Label> 
     <input type="file" name="fileToUpload" id="fileToUpload">
    </h2>

  <input type="submit" name="submit" id="Button" value="Submit">

</form> 
<br>

<div class="link">
<a href="Login.php">Login</a>
<a href="Account.php">Back</a><br><br>
</div>
</div>
</b>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>