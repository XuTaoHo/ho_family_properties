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
<form>
	Filter <select name="utilities_filter_subject">
	<option value="filter_address">Address</option>
	<option value="filter_water_date">Water Date></option>
	<option value="filter_water_amount">Water Amount</option>
	<option value="filter_gas_date">Gas Date</option>
	<option value="filter_gas_amount">Gas Amount</option>
	<option value="fiter_electricity_date">Electricity Date</option>
	<option value="filter_electricity_amount">Electricity Amount</option>
	</select>
	Between <input type="text" name="lower_filter_value"> and <input type="text" name="upper_filter_value">.
</form>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>
