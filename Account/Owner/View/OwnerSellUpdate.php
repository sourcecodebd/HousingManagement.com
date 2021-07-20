<?php

include('../Control/Logindb.php');
include('../Control/OwnerSellUpdatecheck.php');

$error="";
if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>FLAT OWNER | Owner Selling Update Details</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/ProfileStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">

</head>

<body>

<script src="../../../JS/SearchValidation.js"></script>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="OwnerSellUpdate.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

<a href="Profile.php">PROFILE</a>

<a href="OwnerSell.php">OWNER SELLING DETAILS</a>

<a href="OwnerBargain.php">OWNER BARGAINING DETAILS</a>

</div>
</div>


<div id="ProfileBlock">

<div id="ProfileBlock2">

<div id="ProfileBlock3">
<h1 id="Title">Owner Selling Update Details</h1>
</div>

<div id="ProfileBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br><h3 id="YourProfile">Update Your Selling Details</h3></h2>
<b>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm()">
  <Label id="FlatId">Flat Id:</label><br> <?php echo $error;?> <h4 id="jsflatiderror"></h4>
  <input type="text" id="flatid" name="id" ><br><br>
  <input type="submit" name="idsubmit" id="Button" value="Search">
</form>

<?php

if (isset($_POST['idsubmit'])) {

$id=$_POST["id"];

$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->InputCheckUserBuy($conobj,"userbuy",$id);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='POST'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<h3 id='fname'><br>ID: <input type='text' name='id' value=".$row["id"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Flat Name: <input type='text' name='flatname' value=".$row["flatname"]." ></h3> <br>";
      echo "<h3 id='fname'>Flat Address: <input type='text' name='flataddress' value=".$row["flataddress"]." >$error</h3> <br>";
      echo "<h3 id='fname'>Price: <input type='text' name='price' value=".$row["price"]." >$error</h3> <br>"; 
      echo "<h3 id='gender'>Flat Status: <br><input type='radio' name='flatstatus' value= 'New' checked ><span id='Male'>New</span></h3>";
      echo "<h3 id='gender'> <input type='radio' name='flatstatus' value= 'Old' ><span id='Female'>Old</span></h3> <br>";
      echo "<h3 id='fname'>About Flat: <input type='text' name='aboutflat' value=".$row["aboutflat"]." >$error</h3> <br>"; 
      echo "<h3 id='date'>Date of Launching: <input type='date' name='dateoflaunching' value=".$row["dateoflaunching"]." ></h3><br>";
      echo "<h3 id='fname'>Owner: <input type='text' name='owner' value=".$row["owner"]." >$error</h3> <br>";
      echo "<h3 id='fname'>Buyer: <input type='text' name='buyer' value=".$row["buyer"]." readonly>$error</h3> <br>"; 
    }
    echo   "<input type='submit' name='update' id='Button' value='Update'>";
  } else {
    echo "<br>There's no such record!";
  }
}
?>

<h2 id="Marquee"><marquee direction=left>Do you want to go to </marquee></h2> <div class="link"><a href="OwnerSell.php">Back</a></div>
</b>

</div>

</div>
</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>

