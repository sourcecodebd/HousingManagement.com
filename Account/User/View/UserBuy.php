<?php

include('../Control/Logindb.php');
include('../Control/UserBuycheck.php');

$error="";
if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>FLAT RENTER | User Buying Details</title>
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

<a href="UserBuy.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

<a href="Profile.php">PROFILE</a>

<a href="UserBargain.php">USER BARGAINING DETAILS</a>

</div>
</div>


<div id="ProfileBlock">

<div id="ProfileBlock2">

<div id="ProfileBlock3">

</div>

<div id="ProfileBlock3">
<h1 id="Title">User Buying Details</h1>
</div>

<div id="ProfileBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br><h3 id="YourProfile">Update Your Buying Details</h3></h2>
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
      echo "<h3 id='fname'>Flat Name: <input type='text' name='flatname' value=".$row["flatname"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Flat Address: <input type='text' name='flataddress' value=".$row["flataddress"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Price: <input type='text' name='price' value=".$row["price"]." readonly>$error</h3> <br>"; 
      echo "<h3 id='gender'>Flat Status: <br><input type='radio' name='flatstatus' value= 'New' checked readonly><span id='Male' >New</span></h3>";
      echo "<h3 id='gender'> <input type='radio' name='flatstatus' value= 'Old' ><span id='Female' readonly>Old</span></h3> <br>";
      echo "<h3 id='fname'>About Flat: <input type='text' name='aboutflat' value=".$row["aboutflat"]." readonly>$error</h3> <br>"; 
      echo "<h3 id='date'>Date of Launching: <input type='date' name='dateoflaunching' value=".$row["dateoflaunching"]." readonly></h3><br>";
      echo "<h3 id='fname'>Owner: <input type='text' name='owner' value=".$row["owner"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Buyer: <input type='text' name='buyer' value=".$row["buyer"]." >$error</h3> <br>"; 
    }
    echo   "<input type='submit' name='update' id='Button' value='Buy'>";
  } else {
    echo "<br>There's no such record!";
  }
}
?>

<h2 id="Marquee"><marquee direction=left>Do you want to go to </marquee></h2> <div class="link"><a href="LoginResult.php">Back</a></div>
</div>
</div>

</div>


<div id="RegistrationBlock">
<div id="RegistrationBlock2">
<div id="RegistrationBlock3">
</div>

<div id="RegistrationBlock4">
</div>

<div id="RegistrationBlock5">
</div>

<div id="RegistrationBlock6">

<?php

  echo "<h2 id='UserList'>User Buying Details is here...</h2>";
  $connection = new Logindb();
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



