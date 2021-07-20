<?php
class Logindb{
 
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
$result = $conn->query("SELECT * FROM  $table WHERE username='$user'");
 return $result;
 }

 function GetUserByFlatid($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }


 function CheckUser($conn,$table,$un,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $un."' AND password='". $password."'");
 return $result;
 }

 function CheckAdmin($conn,$table,$un)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $un."'");
 return $result;
 }


 function InputCheckUser($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."'");
 return $result;
 }

 function FetchCheckUser($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function CheckUserBuy($conn,$table)
 {
$result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function InputCheckUserBuy($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."'");
 return $result;
 }


 function FetchCheckUserBuy($conn,$table)
    {
    $result = $conn->query("SELECT * FROM ". $table);
    return $result;
    }

 function ShowAll($conn,$table,$id) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>User Buying Details Updated!</h3>";}

    function UpdateAdmin($conn,$table,$un,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
    {
        $sql = "update admins SET firstname='$fname',lastname='$lname',password='$password', email='$email',gender='$gender',profession='$profession',date='$date',file='$file' WHERE username='$un'";
   
       if ($conn->query($sql) === TRUE) {
           $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
       } else {
           $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
       }
       return $result;
    }
 
function UpdateUser($conn,$table,$id,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
 {
     $sql = "update users SET firstname='$fname',lastname='$lname',password='$password', email='$email',gender='$gender',profession='$profession',date='$date',file='$file' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function DeleteUser($conn,$table,$id)
 {
     $sql = " delete from users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Deleted Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Delating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function UpdateOwner($conn,$table,$id,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
 {
     $sql = "update owners SET firstname='$fname',lastname='$lname',password='$password', email='$email',gender='$gender',profession='$profession',date='$date',file='$file' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function DeleteOwner($conn,$table,$id)
 {
     $sql = " delete from owners WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Deleted Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Delating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function UpdateUserBuy($conn,$table,$id,$flatname,$flataddress,$price,$flatstatus,$aboutflat,$dateoflaunching,$owner,$buyer)
 {
     $sql = "update userbuy SET flatname='$flatname',flataddress='$flataddress', price='$price',flatstatus='$flatstatus',aboutflat='$aboutflat',dateoflaunching='$dateoflaunching',owner='$owner',buyer='$buyer' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function UpdateOwnerSell($conn,$table,$id,$flatname,$flataddress,$price,$flatstatus,$aboutflat,$dateoflaunching,$owner,$buyer)
 {
     $sql = "update userbuy SET flatname='$flatname',flataddress='$flataddress', price='$price',flatstatus='$flatstatus',aboutflat='$aboutflat',dateoflaunching='$dateoflaunching',owner='$owner',buyer='$buyer' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }
 
 function UpdateUserBargain($conn,$table,$id,$userbargain,$userbargainstatus,$bargaindate)
 {
     $sql = "update userbuy SET bargainbyuser='$userbargain',agreementbyuser='$userbargainstatus',dateofbargaining='$bargaindate' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }

 function UpdateOwnerBargain($conn,$table,$id,$ownerbargain,$ownerbargainstatus,$bargaindate)
 {
     $sql = "update userbuy SET bargainbyowner='$ownerbargain',agreementbyowner='$ownerbargainstatus',dateofbargaining='$bargaindate' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Record Updated Successfully!</h4></marquee>";
    } else {
        $result= "<marquee direction=left hspace=20 vspace=20 width=260><h4 style='background-color:black;color:#00E9FF; margin:0'>Error Updating Record!</h4></marquee>" ;
    }
    return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>