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
	<th>Address</th>
	<th>Water_Date</th>
	<th>Water_Amount</th>
	<th>Gas_Date</th>
	<th>Gas_Amount</th>
	<th>Electricity_Date</th>
	<th>Electricity_Amount</th>
</tr>
<?php

$sql = "SELECT * FROM utilities";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["address"].'</td>
					<th>'.$row["water_date"].'</td>
					<th>'.$row["water_amount"].'</td>
					<th>'.$row["gas_date"].'</td>
					<th>'.$row["gas_amount"].'</td>
					<th>'.$row["electricity_date"].'</td>
					<th>'.$row["electricity_amount"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>