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
	<th>Property</th>
	<th>Insurance_Company</th>
	<th>Amount</th>
	<th>Start_Date</th>
	<th>End_Date</th>
</tr>
<?php

$sql = "SELECT * FROM insurance";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["property"].'</td>
					<th>'.$row["insurance_company"].'</td>
					<th>'.$row["amount"].'</td>
					<th>'.$row["start_date"].'</td>
					<th>'.$row["end_date"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>