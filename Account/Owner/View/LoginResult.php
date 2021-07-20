<?php
session_start(); 

if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}

$cookie_name = "Owner";
$cookie_value = $_SESSION["un"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<!DOCTYPE html>
<html>
<head>
<title>FLAT OWNER | Home</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogResultStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">
</head>

<body>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="LoginResult.php">REFRESH</a>

<a href="Profile.php">PROFILE</a>

<a href="OwnerSell.php">OWNER SELLING DETAILS</a>

<a href="OwnerSellUpdate.php">OWNER SELLING UPDATE DETAILS</a>

<a href="OwnerBargain.php">OWNER BARGAINING DETAILS</a>

</div>
</div>

<div id="LoginResultBlock">

<div id="LoginResultBlock2">

<div id="LoginResultBlock3">

</div>

<div id="LoginResultBlock3">
<h1 id="Title">Home</h1>
</div>

<div id="RegResultBlock4">

<h2 id="Welcome">Welcome </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br></h2>
<b>
<?php
  echo "<h3 id='Password'>Password:</h3>";
  echo $_SESSION["password"];
?>

<h2 id="Marquee"><marquee direction=left>Do you want to</marquee></h2> <div class="link"><a href="../Control/logout.php">Log Out</a></div><br><br>
</b>

</div>
</div>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>


