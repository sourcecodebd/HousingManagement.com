<?php

include('../Control/Logindb.php');
include('../Control/UserBargaincheck.php');

$error="";
if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>FLAT RENTER | User Bargaining Details</title>
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

<a href="UserBargain.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

<a href="Profile.php">PROFILE</a>

<a href="UserBuy.php">USER BUYING DETAILS</a>

</div>
</div>


<div id="ProfileBlock">

<div id="ProfileBlock2">

<div id="ProfileBlock3">

</div>

<div id="ProfileBlock3">
<h1 id="Title">User Bargaining Details</h1>
</div>

<div id="ProfileBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br><h3 id="YourProfile">Update Your Bargaining Details</h3></h2>
<b>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm()">
  <Label id="FlatId">Flat Id:</label><br> <?php echo $error;?> <h4 id="jsflatiderror"></h4>
  <input type="text" id="flatid" name="id" ><br><br>
  <input type="submit" name="bargainsubmit" id="Button" value="Search">
</form>

<?php

if (isset($_POST['bargainsubmit'])) {

$id=$_POST["id"];

$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->InputCheckUserBuy($conobj,"userbuy",$id);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='POST'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<h3 id='fname'><br>ID: <input type='text' name='id' value=".$row["id"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Bargain Price [Owner]: <input type='text' name='ownerbargain' value=".$row["bargainbyowner"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>Bargain Price [User]: <input type='text' name='userbargain' value=".$row["bargainbyuser"]." >$error</h3> <br>";
      echo "<h3 id='gender'>Agree to Buy? <br><input type='radio' name='userbargainstatus' value= 'Yes' checked ><span id='Male' >Yes</span></h3>";
      echo "<h3 id='gender'> <input type='radio' name='userbargainstatus' value= 'No' ><span id='Female'>No</span></h3> <br>";
      echo "<h3 id='date'>Date of Bargaining: <input type='date' name='bargaindate' value=".$row["dateoflaunching"]." ></h3><br>";

    }
    echo   "<input type='submit' name='update' id='Button' value='Bargain'>";
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

  echo "<h2 id='UserList'>Bargaining Details is here...</h2>";
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
            "<th>"."Present Price"."</th> ".
            "<th>"."Bargained by Owner"."</th> ".
            "<th>"."Bargained by User"."</th> ".
            "<th>"."Owner's Bargain Status"."</th> ".
            "<th>"."User's Bargain Status"."</th> ".
            "<th>"."Date of Bargaining"."</th> ".
            "<th>"."Owner"."</th> ".
            "<th>"."Buyer"."</th> ".
           
          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["id"]."</td>".
            "<td>".$row["flatname"]."</td>".
            "<td>".$row["price"]."</td>".
            "<td>".$row["bargainbyowner"]."</td>".
            "<td>".$row["bargainbyuser"]."</td>".
            "<td>".$row["agreementbyowner"]."</td>".
            "<td>".$row["agreementbyuser"]."</td>".
            "<td>".$row["dateofbargaining"]."</td>".
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



