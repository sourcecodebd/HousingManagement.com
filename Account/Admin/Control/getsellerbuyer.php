<?php
include('Logindb.php');

$user = $_POST['sellerbuyer'];

if($user=="")
{
  return 0;
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
            "<th>"."Flat Address"."</th> ".
            "<th>"."Price"."</th> ".
            "<th>"."Flat Status"."</th> ".
            "<th>"."About Flat"."</th> ".
            "<th>"."Date of Launching"."</th> ".
            "<th>"."Owner"."</th> ".
            "<th>"."Buyer"."</th> ".

          "</tr>".
        
          "<tr style='color:orange'>".
            "<td>".$row["id"]."</td>".
            "<td>".$row["flatname"]."</td>".
            "<td>".$row["flataddress"]."</td>".
            "<td>".$row["price"]."</td>".
            "<td>".$row["flatstatus"]."</td>".
            "<td>".$row["aboutflat"]."</td>".
            "<td>".$row["dateoflaunching"]."</td>".
            "<td>".$row["owner"]."</td>".
            "<td>".$row["buyer"]."</td>".
          "</tr>".
  
  "</table>";
    }
    echo "</table>";
  } else {
    echo "<h4 style='color:orange'>There's no such record of Flat Seller-Buyer!</h4><br>";
  }
  ?>