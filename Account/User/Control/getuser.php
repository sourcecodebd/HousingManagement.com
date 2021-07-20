<?php
include('Logindb.php');

$user = $_POST['user'];

if($user=="")
{
  return 0;
}

$connection = new Logindb();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"users",$user );


if ($MyQuery->num_rows > 0) {
    
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<table style='background-color:black; width:100%' border=1>".

      "<tr style='color:lightgreen'>".
            "<th>"."User Name"."</th> ".
            "<th>"."First Name"."</th> ".
            "<th>"."Last Name"."</th> ".
          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["username"]."</td>".
            "<td>".$row["firstname"]."</td>".
            "<td>".$row["lastname"]."</td>".
          "</tr>".
  
  "</table>";
    }
    echo "</table>";
  } else {
    echo "<h4 style='color:orange'>There's no such record of Flat Renter!</h4><br>";
  }
  ?>