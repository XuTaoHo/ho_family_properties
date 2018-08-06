<html>
<body>
<?php 

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$conn = new mysqli($servername, $username, $password, $dbname);

?>

<table style="width:100%">
<tr>
	<th>Property_ID</th>
	<th>Property_Address</th> 
	<th>Zip_Code</th>
	<th>Purchase Date</th>
	<th>Sell_Date</th>
	<th>Built_Date</th>
	<th>Bedrooms</th>
	<th>Acreage</th>
	<th>Lot_Size</th>
	<th>Baths</th>
	<th>Garage_Space</th>
	<th>HOA</th>
	<th>HOA_Management</th>
	<th>HOA_Fee</th>
</tr>
<?php

$sql = "SELECT * FROM properties";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["property_id"].'</td>
					<th>'.$row["property_address"].'</td>
					<th>'.$row["zip_code"].'</td>
					<th>'.$row["purchase_date"].'</td>
					<th>'.$row["sold_date"].'</td>
					<th>'.$row["build_date"].'</td>
					<th>'.$row["bedrooms"].'</td>
					<th>'.$row["acreage"].'</td>
					<th>'.$row["lot_size"].'</td>
					<th>'.$row["bathrooms"].'</td>
					<th>'.$row["garage_space"].'</td>
					<th>'.$row["HOA"].'</td>
					<th>'.$row["HOA_management"].'</td>
					<th>'.$row["HOA_fee"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>
