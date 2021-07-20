<?php
include("Admincheck.php");
$user = $_POST['user'];

if($user=="")
{
   return 0;
}

$connection = new Postdb();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"post",$user );


if ($MyQuery->num_rows > 0) {
    
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<table style='background-color:black; width:100%' border=1>".

      "<tr style='color:lightgreen'>".
            "<th>"."Id"."</th> ".
            "<th>"."Name"."</th> ".
            "<th>"."Date"."</th> ".
            "<th>"."Post"."</th> ".
          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["id"]."</td>".
            "<td>".$row["name"]."</td>".
            "<td>".$row["date"]."</td>".
            "<td>".$row["post"]."</td>".
          "</tr>".
  
  "</table>";
    }
    echo "</table>";
  } else {
    echo "<h4 style='color:orange'>There's no such record of Admin Post!</h4><br>";
  }
  ?>