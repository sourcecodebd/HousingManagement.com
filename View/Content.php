<!DOCTYPE html>
<html>
<head>

<title>www.HousingManagement.com</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/ContentStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" href="../CSS/loopslider.css">
<link rel="stylesheet" href="../CSS/TextAnimationStyle.css">
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../JS/jQueryDesign.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="Content.php">HOME</a>

<a href="Accounts.php">ACCOUNTS</a>

<a href="../Account/User/View/Account.php">FLAT RENTER</a>

<a href="../Account/Owner/View/Account.php">FLAT OWNER</a>

<a href="../Account/Admin/View/Account.php">ADMIN PANEL</a>

<a href="https://sourcecodebd.github.io/nafi.com/">NAFI.COM</a>

</div>
</div>

<div class="container">
    <div id="loop-slider" data-autoplay="true" data-speed="4000">
      <ul id="img-group">
        <li class="slide" data-img="../Images/Gallery/A.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/B.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/C.jpg"></li>
		    <li class="slide" data-img="../Images/Gallery/D.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/E.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/F.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/H.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/I.jpg"></li>
		    <li class="slide" data-img="../Images/Gallery/J.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/K.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/L.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/M.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/N.jpg"></li>
		    <li class="slide" data-img="../Images/Gallery/O.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/P.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/Q.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/R.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/S.jpg"></li>
		    <li class="slide" data-img="../Images/Gallery/T.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/U.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/V.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/W.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/X.jpg"></li>
		    <li class="slide" data-img="../Images/Gallery/Y.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/Z.jpg"></li>
        <li class="slide" data-img="../Images/Gallery/Z1.jpg"></li>     
      </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../JS/loopslider.js"></script>

<div class="content">
    <div class="random">
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
      <span class="span nbr2 ltr2">0</span>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../JS/jQueryText2.js"></script>

<div id="Notice">
<h2 id="NoticePost">Notice</h2>
<?php
include('../Control/Admincheck.php');

$connection = new Postdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->FetchCheckPost($conobj,"post");


if ($userQuery->num_rows > 0) {
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {

		echo "<div style='background-color:lightgreen; color:black; border:1px solid black; font-family:calibri'>".
			  "<b>".$row["name"]. " <br> " .$row["date"]."<br>"."</b>".
		 "<b>".$row["post"]."</b>"." Post Id:".$row["id"]."</div>"."<br>";
		 
		  }
		  echo "</table>";
		} else {
		  echo "<h4 style='color:orange'>No Post Remaining!</h4><br>";
		}
?>
</div>

<h2 id="para1">About HousingManagement.com Webtech Project</h2>
<h3 id="para2">
What is Housing management?<br>
Housing management is the operation, control, maintenance, and oversight of real estate and physical property. This can include residential, commercial, and land real estate. Management indicates the need of real estate to be cared for and monitored, with accountability for and attention its useful life and condition considered. This is much akin to the role of management in any business.
Housing management is also the management of personal property, equipment, tooling, and physical capital assets that are acquired and used to build, repair, and maintain end item deliverables. Property management involves the processes, systems, and manpower required to manage the life cycle of all acquired property as defined above including acquisition, control, accountability, responsibility, maintenance, utilization, and disposition.
An owner of a single-family home, condominium, or multi-family building may engage the services of a professional property management company. The company will then advertise the rental property, handle tenant inquiries, screen applicants, select suitable candidates, draw up a lease agreement, conduct a move in inspection, move the tenant(s) into the property and collect rental income. The company will then coordinate any maintenance issues, supply the owner(s) with financial statements and any relevant information regarding the property, etc.
<br><br>
Introduction:
Housing company have numerous segment like improvement, offering, buying arrive and prepared level offering competition. It is exceptionally troublesome to set up lodging commerce these days. On the off chance that the advancement and offering buying offices can set up in a web application or site it'll be less demanding to handle the job. And this venture will help us to create the commerce simple. This can be the reason we are doing this extend.
<br><br>
Background Study:
Web Location References and brief depiction of the websites. Here you'll depict about the reference websites merely have considered so distant in arrange to urge thoughts and contemplations almost your proposed venture.
These days there are parts of lodging company, they do commerce in a complicated way. This is often why they have to be spend more cash to preserve their work and parcels of time to squander. In this framework we have 4 clients. Admin, vender, buyer and real-estate operator. All of the client have distinctive get to restrain. It'll provide a great client involvement to the client. Admin will have the super control to add, delete and expel choice. But in our extend we are attempting to assemble a few additional highlight like plot buying and offering, there will be genuine state specialist to appear the client the pads
<br><br>
Requirement Analysis:
Common Feature –
1. If Account not available User first have to go through Registration process.
2. After registration User can login to the system. After getting access of account
they can see their login details, will get a file upload option for Housing
Management System.
4 types of Users - 1. Admin 2. Seller 3. Buyer 4. Agents
<br><br>
Feature List:
<br>
In this project the Admin has the following features –
<br>
• Can assign any accessories
<br>
• Read
<br>
• Write
<br>
• Delete
<br>
• Remove
</h3>
<div id="ContentBlock">

<div id="ContentBlock2">

<div id="ContentBlock3">

</div>

<div id="ContentBlock4">
<div id="Welcome" style="color:white">Welcome to <span style="color:orange">HousingManagement.com</span></div>
</div>
<b>

<a href=""><p id="date"></p></a>
<script src="../JS/Date.js"></script>

<div id="ContentBlock5">
	<div class="Link">Book Your Own Property Now!
  </div>
</div>
</b>
<a href="../Contact/index.php" id="Tel"> <input type="submit" id= "Contact" value="CONTACT"> </a>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>