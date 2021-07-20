<?php
include('Logindb.php');

$user = $_POST['bargain'];

if($user=="")
{
  return 0;;
}


$connection = new Logindb();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByFlatid($conobj,"userbuy",$user );


if ($MyQuery->num_rows > 0) {
    
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<table style='background-color:black; width:100%' border=1>".
    
      "<tr style='color:lightgreen'>".
      "<th>"."Flat Id"."</th> ".
      "<th>"."Flat Name"."</th> ".
      "<th>"."Present Price"."</th> ".
      "<th>"."Bargained by Owner"."</th> ".
      "<th>"."Bargained by User"."</th> ".
      "<th>"."Owner's Bargain Status"."</th> ".
      "<th>"."User's Bargain Status"."</th> ".
      "<th>"."Date of Bargaining"."</th> ".
      "<th>"."Owner"."</th> ".
      "<th>"."Buyer"."</th> ".
     
    "</tr>".
  
    "<tr style='color:orange'>".
      "<td>".$row["id"]."</td>".
      "<td>".$row["flatname"]."</td>".
      "<td>".$row["price"]."</td>".
      "<td>".$row["bargainbyowner"]."</td>".
      "<td>".$row["bargainbyuser"]."</td>".
      "<td>".$row["agreementbyowner"]."</td>".
      "<td>".$row["agreementbyuser"]."</td>".
      "<td>".$row["dateofbargaining"]."</td>".
      "<td>".$row["owner"]."</td>".
      "<td>".$row["buyer"]."</td>".
    "</tr>".
  "</table>";
    }
    echo "</table>";
  } else {
    echo "<h4 style='color:orange'>There's no such record of Flat Bargain Details!</h4><br>";
  }
  ?>