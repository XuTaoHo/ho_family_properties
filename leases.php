<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<table style="width:100%">
	<tr>
		<th>Lease_ID</th>
		<th>Lease_Start</th>
		<th>Lease_End</th>
		<th>Property_Rented</th>
		<th>Monthly_Rent</th>
		<th>Deposit_Paid</th>
		<th>Pet_Deposit</th>
		<th>Security_eposit</th>
  </tr>
  <?php    
  
$sql = "SELECT * FROM leases";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["lease_id"].'</td>
					<th>'.$row["lease_start"].'</td>
					<th>'.$row["lease_end"].'</td>
					<th>'.$row["property_rented"].'</td>
					<th>'.$row["monthly_rent"].'</td>
					<th>'.$row["deposit_paid"].'</td>
					<th>'.$row["pet_deposit"].'</td>
					<th>'.$row["security_deposit"].'</td>
				</tr>'; 
		}
?>
  </table>
  </body>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  </html>