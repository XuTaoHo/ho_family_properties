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
	<th>Management_Company</th>
	<th>Physical_Address</th>
	<th>Website</th>
	<th>Phone_Number</th>
	<th>Email_Address</th>
</tr>
<?php

$sql = "SELECT * FROM hoa";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["management_company"].'</td>
					<th>'.$row["physical_address"].'</td>
					<th>'.$row["website"].'</td>
					<th>'.$row["phone_number"].'</td>
					<th>'.$row["email_address"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>
