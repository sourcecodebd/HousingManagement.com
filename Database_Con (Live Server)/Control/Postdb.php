<?php
class Postdb{
 
function OpenCon()
 {
    $dbhost = "sql200.epizy.com";
    $dbuser = "epiz_27004061";
    $dbpass = "utkyNmdNJo";
    $db = "epiz_27004061_HousingManagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function GetUserByUname($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }

 function FetchCheckPost($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function InputCheckPost($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."'");
 return $result;
 }


 function insertPost($conn,$name,$date,$post)
    {
        $stmt=$conn->prepare("insert into post(name,date,post) values(?,?,?)") or die(mysqli_error($conn));
        $stmt->bind_param("sss",$name,$date,$post) or die(mysqli_error($conn));
        $stmt->execute();
        echo "<h3>Posted Successfully!</h3>";
        $stmt->close();
    }

 function UpdatePost($conn,$table,$id,$name,$date,$post)
 {
     $sql = "update post SET name='$name', date='$date', post='$post' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }
 
 function DeletePost($conn,$table,$id)
 {
     $sql = "delete from post WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Removed Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Removing Record!</h4></marquee>" ;
    }
    return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>