<?php
class Refdb{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "HousingManagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$refcode)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE refcode='". $refcode."'");
 return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>