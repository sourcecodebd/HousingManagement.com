<?php
class Refdb{
 
function OpenCon()
 {
    $dbhost = "sql200.epizy.com";
    $dbuser = "epiz_27004061";
    $dbpass = "utkyNmdNJo";
    $db = "epiz_27004061_HousingManagement";
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