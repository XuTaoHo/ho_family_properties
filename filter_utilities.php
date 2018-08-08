<html>
<body>
<?php 

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "bbcf53d55dcc9b";
$password = "69e11031";
$dbname = "heroku_3d2e2d1647b9f2d";

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

$utilities_filter_subject = $_GET["utilities_filter_subject"];
$filter_lower_value = $_GET["filter_lower_value"];
$filter_upper_value = $_GET["filter_upper_value"];

$sql = "SELECT * FROM utilities WHERE $utilities_filter_subject >= $filter_lower_value AND $utilities_filter_subject <= $filter_upper_value";
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
  </table>
  Filtering <?php echo $utilities_filter_subject;?> from <?php echo $filter_lower_value;?> to <?php echo $filter_upper_value;?>
  </body>
  </html>
