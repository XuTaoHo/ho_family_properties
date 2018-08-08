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

$edit_subject = $_GET["edit_subject"];
$replacement_subject = $_GET["replacement_subject"];
$replacement_value = $_GET["replacement_value"];

$sql2 = "UPDATE utilities SET $replacement_subject = $replacement_value WHERE address = '$edit_subject'";

if ($conn->query($sql2) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

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
<br> Changed <?php echo $replacement_subject;?> to be <?php echo $replacement_value;?> where ID/Address/Management Company is <?php echo $edit_subject;?>
</body>
</html>