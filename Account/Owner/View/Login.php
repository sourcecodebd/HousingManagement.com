<!DOCTYPE html>
<html>
<head>
<title>FLAT OWNER | Login</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">

</head>

<body>

<script src="../../../JS/LoginValidation.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../../../View/Content.php">HOME</a>

<a href="../../../View/Accounts.php">ACCOUNTS</a>

<a href="../../User/View/Account.php">FLAT RENTER</a>

<a href="../../Owner/View/Account.php">FLAT OWNER</a>

<a href="../../Admin/View/Account.php">ADMIN PANEL</a>

</div>
</div>

<div id="LoginBlock">

<div id="LoginBlock2">

<div id="LoginBlock3">

<?php

include('../Control/Logincheck.php');

if(isset($_SESSION['un'])){
header("location: LoginResult.php");
}
?>
</div>

<div id="LoginBlock4">
<h1 id="Title">Login</h1>
</div>
<b>
<div id="LoginBlock5">
<h2 id="Marquee"><marquee>No Account? Create your Account now!</marquee></h2>
</div>
<div id="LoginBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm()">
  <Label>User Name:</label><br> <?php echo $error;?> <h4 id="jsnameerror"></h4>
  <input type="text" id="un" name="un" ><br><br>
  <Label>Password:</Label><br> <?php echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>
  <input type="submit" name="submit" id="Button" value="Submit">

</form> 
<br>
<div class="link">
<a href="Registration.php">Registration</a>
<a href="Account.php">Back</a><br><br>
</div>
</div>
</b>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>