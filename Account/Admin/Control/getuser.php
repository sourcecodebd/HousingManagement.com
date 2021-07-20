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
            "<th>"."Id"."</th> ".
            "<th>"."User Name"."</th> ".
            "<th>"."First Name"."</th> ".
            "<th>"."Last Name"."</th> ".
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
  
  "</table>";
    }
    echo "</table>";
  } else {
    echo "<h4 style='color:orange'>There's no such record of Flat Renter!</h4><br>";
  }
  ?>