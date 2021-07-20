<?php

include('../Control/Logindb.php');
include('../Control/OwnerUpdatecheck.php');
include('../Control/OwnerDeletecheck.php');

$error="";
if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL | Owner Profile Details</title>
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

<a href="OwnerProfile.php">REFRESH</a>

<a href="LoginResult.php">HOME</a>

<a href="OwnerSell.php">OWNER SELLING DETAILS</a>

<a href="OwnerSellUpdate.php">OWNER SELLING UPDATE DETAILS</a>

<a href="OwnerBargain.php">OWNER BARGAINING DETAILS</a>

</div>
</div>


<div id="ProfileBlock">

<div id="ProfileBlock2">

<div id="ProfileBlock3">

</div>

<div id="ProfileBlock3">
<h1 id="Title">Owner Profile</h1>
</div>

<div id="ProfileBlock4">

<h2 id="Hi">Hi! </h2> <h2 id="Username"><?php echo  $_SESSION["un"]; ?><br><h3 id="YourProfile">Update Owner Profile</h3></h2>
<b>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm2()">
  <Label id="FlatId">Profile Id:</label><br> <?php echo $error;?> <h4 id="jsprofileiderror"></h4>
  <input type="text" id="profileid" name="id" ><br><br>
  <input type="submit" name="idsubmit" id="Button" value="Search">
</form>

<?php

if (isset($_POST['idsubmit'])) {

$id=$_POST["id"];

$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->InputCheckUser($conobj,"owners",$id);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='POST' enctype = 'multipart/form-data'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<h3 id='fname'><br>ID: <input type='text' name='id' value=".$row["id"]." readonly>$error</h3> <br>";
      echo "<h3 id='fname'>First Name: <input type='text' name='fname' value=".$row["firstname"]." >$error</h3> <br>";
      echo "<h3 id='lname'>Last Name: <input type='text' name='lname' value=".$row["lastname"]." >$error</h3> <br>"; 
      echo "<h3 id='lname'>Password: <input type='text' name='password' value=".$row["password"]." >$error</h3> <br>"; 
      echo "<h3 id='email'>Email: <input type='text' name='email' value=".$row["email"]." >$error</h3> <br>";
      echo "<h3 id='gender'>Gender: <br><input type='radio' name='gender' value= 'Male' checked ><span id='Male'>Male</span></h3>";
      echo "<h3 id='gender'> <input type='radio' name='gender' value= 'Female' ><span id='Female'>Female</span></h3> <br>";
      echo "<h3 id='profession'>Profession: <br><input type='checkbox' name='profession' value= 'Doctor' checked><span id='Doctor'>Doctor</span></h3>";
      echo "<h3 id='profession'> <input type='checkbox' name='profession' value= 'Engineer' ><span id='Engineer'>Engineer</span></h3> <br>";
      echo "<h3 id='date'>Date: <input type='date' name='date' value=".$row["date"]." ></h3>";
      if(isset($_POST["update"])) {
        $target_dir = "../Received/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
          echo "<h4 id='ErrorUpload'>Sorry! there was an error while uploading your file. Please fillup the form properly, choose your file and then submit.</h4>";
        
        }
        }
        echo "<h2 id='Upload'><Label id='LabelUpload'>Upload Your File</Label>
          <input type='file' name='fileToUpload' id='fileToUpload'. value=".$row["file"]." > </h2>";
    }
    echo   "<input type='submit' name='update' id='Button' value='Update'>";
    echo "<br>";
    echo   "<input type='submit' name='delete' id='Button' value='Ban'>";
    
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

  echo "<h2 id='UserList'>Owner Profile Details is here...</h2>";
  $connection = new Logindb();
$conobj=$connection->OpenCon();
$userQuery=$connection->FetchCheckUser($conobj,"owners");


if ($userQuery->num_rows > 0) {
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
          
          echo "<table style='background-color:black; width:100%' border=1>".

          
          "<tr style='color:lightgreen'>".
            "<th>"."Id"."</th> ".
            "<th>"."Username"."</th> ".
            "<th>"."Firstname"."</th> ".
            "<th>"."Lastname"."</th> ".
            "<th>"."Password"."</th> ".
            "<th>"."Email"."</th> ".
            "<th>"."Gender"."</th> ".
            "<th>"."Profession"."</th> ".
            "<th>"."Date"."</th> ".
            "<th>"."File"."</th> ".
           
          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["id"]."</td>".
            "<td>".$row["username"]."</td>".
            "<td>".$row["firstname"]."</td>".
            "<td>".$row["lastname"]."</td>".
            "<td>".$row["password"]."</td>".
            "<td>".$row["email"]."</td>".
            "<td>".$row["gender"]."</td>".
            "<td>".$row["profession"]."</td>".
            "<td>".$row["date"]."</td>".
            "<td>".$row["file"]."</td>".
        
          "</tr>".

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



