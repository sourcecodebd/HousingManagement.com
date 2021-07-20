<?php

include('../Control/OwnerSellcheck.php');

if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<title>FLAT OWNER | Owner Selling Details</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/OwnerSellStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">
</head>

<body>

<script src="../../../JS/PostValidation.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="OwnerSell.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

<a href="Profile.php">PROFILE</a>

<a href="OwnerSellUpdate.php">OWNER SELLING UPDATE DETAILS</a>

<a href="OwnerBargain.php">OWNER BARGAINING DETAILS</a>

</div>
</div>

<div id="RegistrationBlock">

<div id="RegistrationBlock2">

<div id="RegistrationBlock3">
<h1 id="Title">Owner Selling Details</h1>
</div>
<b>
<div id="RegistrationBlock5">
<h2 id="Marquee"><marquee>No Buyer? Sell your property now!</marquee></h2>
</div>
<div id="RegistrationBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm()">
  <Label>Flat Name:</label><br> <?php echo $error;?> <h4 id="jsflatnameerror"></h4>
  <input type="text" id="flatname" name="flatname" ><br><br>
  <Label>Flat Address:</label><br> <?php echo $error;?> <h4 id="jsflataddresserror"></h4>
  <input type="text" id="flataddress" name="flataddress" ><br><br> 
  <Label>Price:</Label><br> <?php echo $error;?> <h4 id="jspriceerror"></h4>
  <input type="text" id="price" name="price" ><br><br>
  <Label>About Flat:</Label><br> <?php echo $error;?> <h4 id="jsaboutflaterror"></h4>
  <input type="text" id="aboutflat" name="aboutflat" ><br><br>
  <Label>Choose your Flat Status:</Label><br> <h4 id="jsflatstatuserror"></h4>
  <span style="color:#FF9800">
  <input type="radio" id="flatstatus" name="flatstatus" value="New" checked> New
  <input type="radio" id="flatstatus" name="flatstatus" value="Old"> Old</span><br><br>
  <label for="dateoflaunching">Date of Launching:</label><br> <h4 id="jsdateoflaunchingerror"></h4>
  <input type="date" id="dateoflaunching" name="dateoflaunching" ><br><br>
  <Label>Owner:</label><br> <?php echo $error;?> <h4 id="jsownererror"></h4>
  <input type="text" id="owner" name="owner" ><br><br>
  <br>

  <input type="submit" name="submit" id="Button" value="Post">

</form> 
<br>

<h2 id="Marquee"><marquee direction=left>Do you want to go to </marquee></h2><div class="link"><a href="LoginResult.php">Back</a></div>
</div>
</div>
</div>

<div id="RegistrationBlock7">
<div id="RegistrationBlock8">
<div id="RegistrationBlock9">
</div>

<div id="RegistrationBlock10">
</div>

<div id="RegistrationBlock11">
</div>

<div id="RegistrationBlock12">

<?php

  echo "<h2 id='UserList'>Owner Selling Details is here...</h2>";
  $connection = new Regdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->FetchCheckUserBuy($conobj,"userbuy");


if ($userQuery->num_rows > 0) {
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
          
          echo "<table style='background-color:black; width:100%' border=1>".

          "<tr style='color:lightgreen'>".
            "<th>"."Flat Id"."</th> ".
            "<th>"."Flat Name"."</th> ".
            "<th>"."Flat Address"."</th> ".
            "<th>"."Price"."</th> ".
            "<th>"."Flat Status"."</th> ".
            "<th>"."About Flat"."</th> ".
            "<th>"."Date of Launching"."</th> ".
            "<th>"."Owner"."</th> ".
            "<th>"."Buyer"."</th> ".
           
          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["id"]."</td>".
            "<td>".$row["flatname"]."</td>".
            "<td>".$row["flataddress"]."</td>".
            "<td>".$row["price"]."</td>".
            "<td>".$row["flatstatus"]."</td>".
            "<td>".$row["aboutflat"]."</td>".
            "<td>".$row["dateoflaunching"]."</td>".
            "<td>".$row["owner"]."</td>".
            "<td>".$row["buyer"]."</td>".

          "</tr>".
        
        "</table>";
        }
      } 
      else {
        echo "0 results";
      }
    
?><br>
</b>
</div>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>