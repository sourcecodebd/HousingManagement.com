<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL | Search</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/SearchStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">
</head>

<body>

<script src="../../../JS/ShowUser.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="Search.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

</div>
</div>

<div id="RegistrationBlock">

<div id="RegistrationBlock2">

<div id="RegistrationBlock3">

<?php

include('../Control/Logincheck.php');


if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>
</div>

<div id="RegistrationBlock4">

<h1 id="Title">Search</h1>
</div>
<b>
<div id="RegistrationBlock5">
<h2 id="Marquee"><marquee>Search any Renter or Owner information now!</marquee></h2>
</div>
<div id="RegistrationBlock6">

<input name="radio" type="checkbox" id="UserCheckBoxid" onClick="RadioToggleTables('1')" value="radio" disabled checked />Flat Renter 
<input type="text" name="user" id="user" onkeyup="showmyuser()" > <br>
  
  <p id="mytext"></p>


<input name="radio" type="checkbox" id="OwnerCheckBoxid" onClick="RadioToggleTables('2')" value="radio" disabled  checked/>Flat Owner
<input type="text" name="owner" id="owner" onkeyup="showmyowner()" >
  
  <p id="mytext2"></p>

  <input name="radio" type="checkbox" id="SellerBuyerCheckBoxid" onClick="RadioToggleTables('3')" value="radio" disabled  checked/>Seller-Buyer
<input type="text" name="sellerbuyer" id="sellerbuyer" onkeyup="showmysellerbuyer()" >
  
  <p id="mytext3"></p>

  <input name="radio" type="checkbox" id="BargainCheckBoxid" onClick="RadioToggleTables('4')" value="radio" disabled  checked/>Bargain Details
<input type="text" name="bargain" id="bargain" onkeyup="showmybargain()" >
  
  <p id="mytext4"></p>


<h2 id="Marquee"><marquee direction=left>Do you want to go to </marquee></h2><div class="link"><a href="LoginResult.php">Back</a></div>

</b>
</div>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>