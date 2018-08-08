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
$conn->close();
?>
  </table>
  <form action="filter_utilities.php" method="get">
	Filter <select name="utilities_filter_subject">
	<option value="address">Address</option>
	<option value="water_date">Water Date</option>
	<option value="water_amount">Water Amount</option>
	<option value="gas_date">Gas Date</option>
	<option value="gas_amount">Gas Amount</option>
	<option value="electricity_date">Electricity Date</option>
	<option value="electricity_amount">Electricity Amount</option>
	</select>
	Between <input type="text" name="filter_lower_value"> and <input type="text" name="filter_upper_value"> <br>
	<input type="submit" name="Submit">
</form>
<form action="delete_utilities.php" method="get">
Delete ID/Address/Management Company <input type="text" name="delete_subject"> <br>
<input type="submit" name="Submit">
</form>
<form action="edit_utilities.php" method="get">
Edit <select name="replacement_subject">
	<option value="address">Address</option>
	<option value="water_date">Water Date</option>
	<option value="water_amount">Water Amount</option>
	<option value="gas_date">Gas Date</option>
	<option value="gas_amount">Gas Amount</option>
	<option value="electricity_date">Electricity Date</option>
	<option value="electricity_amount">Electricity Amount</option>
	</select>
	to be (New Value) <input type="text" name="replacement_value"> where (ID/Address/Management Company) is
<input type="text" name="edit_subject"> <br>
<input type="submit" name="Submit">
</form>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>
