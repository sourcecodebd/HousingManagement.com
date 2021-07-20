<?php
class Regdb{
    
    function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "HousingManagement";
    $table= "users";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    
    function insertUser($conn,$un,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
    {
        $stmt=$conn->prepare("insert into users(username,firstname,lastname,password,email,gender,profession,date,file) values(?,?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
        $stmt->bind_param("sssssssss",$un,$fname,$lname,$password,$email,$gender,$profession,$date,$file) or die(mysqli_error($conn));
        $stmt->execute();
        echo "<h3>Registration Successful!</h3>";
        $stmt->close();
    }

    /*function insertUser($conn,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
    {
        $result=$conn->query("insert into users(username,firstname,lastname,password,email,gender,profession,date,file) values('$un','$fname','$lname','$password','$email','$gender','$profession','$date','$file')") or die(mysqli_error($conn));
        return $result;
        echo "<h3>Registration Successful!</h3>";
    }*/

    function CheckUser($conn,$table,$un,$fname,$password,$email,$gender,$profession,$date,$file)
    {
    $result = $conn->query("SELECT * FROM ". $table);
    return $result;
    }

    
    function CloseCon($conn)
     {
     $conn -> close();
     }

     
}
?>