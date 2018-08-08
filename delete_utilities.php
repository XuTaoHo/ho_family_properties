<html>
<body>
<?php 

$servername = "Jade";
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

$delete_subject = $_GET["delete_subject"];

$sql2 = "DELETE FROM utilities WHERE address='$delete_subject'";

$result = $conn->query($sql2);

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
$conn->close();
?>
Deleted column where ID/Address/Management Company was <?php echo $delete_subject;?>
</body>
</html>