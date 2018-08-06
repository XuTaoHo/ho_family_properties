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