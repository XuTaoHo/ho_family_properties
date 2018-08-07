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
		<th>Tenant_ID</th>
		<th>First_Name</th>
		<th>Last_Name</th>
		<th>Family_Size</th>
		<th>Number_of_Pets</th>
		<th>Phone_Number</th>
		<th>Email_Address</th>
		<th>Move_in_date</th>
		<th>Move_out_date</th>
  </tr>
  <?php

$sql = "SELECT * FROM tenants";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["tenant_id"].'</td>
					<th>'.$row["tenant_first_name"].'</td>
					<th>'.$row["tenant_last_name"].'</td>
					<th>'.$row["family_size"].'</td>
					<th>'.$row["number_of_pets"].'</td>
					<th>'.$row["phone_number"].'</td>
					<th>'.$row["email_address"].'</td>
					<th>'.$row["move_in_date"].'</td>
					<th>'.$row["move_out_date"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>
