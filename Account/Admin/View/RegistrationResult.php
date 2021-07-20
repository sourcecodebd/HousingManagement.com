<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL| Home</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogResultStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">

</head>

<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../Control/Reglogout.php">BACK</a>

</div>
</div>

<div id="RegResultBlock">

<div id="RegResultBlock2">

<div id="RegResultBlock3">

</div>

<div id="RegResultBlock3">
<h1 id="Title">Home</h1>
</div>

<div id="RegResultBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["fname"] . " " . $_SESSION["lname"]; ?><br></h2>
<b>
<?php
  echo "<h3 id='Password'>Password:</h3>";
  echo $_SESSION["password"];
  echo "<h3 id='Email'>Email Id:</h3>";
  echo $_SESSION["email"];
  echo "<h3 id='Gender'>Gender:</h3>";
  echo $_SESSION["gender"];
  echo "<h3 id='Profession'>Profession:</h3>";
  echo $_SESSION["profession"];
  echo "<h3 id='Date'>Date:</h3>";
  echo $_SESSION["date"];
  echo "<h3 id='UploadedFile'>Uploaded File:</h3>";
  echo $_SESSION[["fileToUpload"]["name"]];
?>
<h2 id="Marquee"><marquee direction=left>Do you want to</marquee></h2> <div class="link"><a href="../Control/Reglogout.php">Back</a></div><br><br>
</b>

</div>
</div>

</div>
</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>


