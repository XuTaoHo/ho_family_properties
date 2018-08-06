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
		<th>Maintenance_ID</th>
		<th>Object_Repaired</th>
		<th>Maintenance_Cost</th>
		<th>Maintenance_Date</th>
		<th>Maintenance_Person</th>
		<th>House_Repaired</th>
	</tr>
<?php

$sql = "SELECT * FROM maintenance";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["maintenance_id"].'</td>
					<th>'.$row["object_repaired"].'</td>
					<th>'.$row["maintenance_cost"].'</td>
					<th>'.$row["maintenance_date"].'</td>
					<th>'.$row["maintenance_person"].'</td>
					<th>'.$row["house_repaired"].'</td>
				</tr>'; 
		}
?>

</table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>