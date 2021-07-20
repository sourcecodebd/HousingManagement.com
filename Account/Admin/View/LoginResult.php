<?php
session_start(); 

if(empty($_SESSION["un"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}

$cookie_name = "Admin";
$cookie_value = $_SESSION["un"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL | Home</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogResultStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/RegLogStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TextBoxStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/TitleStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderFooterStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/ButtonStyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/NavBarStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<script src="../../../JS/jQueryDesign.js"></script>
<script src="../../../JS/PostValidation.js"></script>
<script src="../../../JS/SearchValidation.js"></script>
<script src="../../../JS/ShowPost.js"></script>


<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="LoginResult.php">REFRESH</a>

<a href="Profile.php">PROFILE</a>

<a href="Search.php">SEARCH</a>

<a href="UserProfile.php">USER PROFILE</a>

<a href="OwnerProfile.php">OWNER PROFILE</a>

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

<?php
include('../../../Control/Admincheck.php');
include('../../../Control/UpdatePostcheck.php');
include('../../../Control/DeletePostcheck.php');
?>

<div id="RegistrationBlock4">
<h1 id="Title">Post Notice</h1>
</div>

<div id="RegistrationBlock5">
<h2 id="Marquee"><marquee>No Notice? Post now!</marquee></h2>
</div>
<div id="RegistrationBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm3()">
  <Label>Name:</label><br> <?php echo $error;?> <h4 id="jsnameerror"></h4>
  <input type="text" id="name" name="name" ><br><br>
  <label for="date">Date of Posting:</label><br> <h4 id="jsdateerror"></h4>
  <input type="date" id="date" name="date" ><br><br>
  <Label>Enter Text:</label><br> <?php echo $error;?> <h4 id="jsposterror"></h4>
  <div class="contact-form">
  <textarea rows="10" id="post" name="post" ></textarea></div>

  <input type="submit" name="submit" id="Button" value="Post">

</form> 


<h1>Update Notice</h1>
<div id="HideSearch">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' onsubmit="return validateForm4()">
<Label><h4 style="margin:0">Post Id:</h4></Label><h4 id="jsusererror"></h4>
<input type="text" name="id" id="user" onkeyup="showmyuser()"><?php echo $error;?><br><br>
<button type="submit" name="idsubmit" id="Button">Search</button>
</form>
</div>
<br><br><br><br>
<button type="submit" id="togglepage">Search By Post Id</button>

<?php

if (isset($_POST['idsubmit'])) {

$id=$_POST["id"];

$connection = new Postdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->InputCheckPost($conobj,"post",$id);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='POST'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     echo "<h3>Id: <input type='text' name='id' id='id' value=".$row["id"]." readonly>$error</h3> ";
      echo "<h3>Name: <input type='text' name='name' id='name' value=".$row["name"]." >$error</h3> ";
      echo "<h3>Date: <input type='date' name='date' id='date' value=".$row["date"]." >$error</h3> ";
      echo "<h3>Enter Text: <textarea rows='10' name='post' id='post' value=".$row["post"]." ></textarea>$error</h3> ";
    }
    echo   "<input type='submit' name='update' id='Button' value='Update'>";
    echo "<br>";
    echo   "<input type='submit' name='delete' id='Button' value='Remove'>";
    
  } else {
    echo "<br><br>There's no such record!";
  }
}
?>

</div>

<h2 id="Marquee"><marquee direction=left>Do you want to</marquee></h2> <div class="link"><a href="../Control/logout.php">Log Out</a></div><br><br>
</b>

</div>
</div>

</div>
</div>
<p id="mytext"></p>

</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>


