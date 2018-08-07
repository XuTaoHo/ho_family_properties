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
	<th>Amount</th>
	<th>Year</th>
</tr>
<?php

$sql = "SELECT * FROM property_tax";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["address"].'</td>
					<th>'.$row["amount"].'</td>
					<th>'.$row["year"].'</td>
				</tr>'; 
		}
?>
  </table>
</body>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>

</body>
</html>
