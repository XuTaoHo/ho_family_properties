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
  <th>Pet_ID</th>
  <th>Pet_Type</th>
  <th>Pet_Breed</th>
  <th>Owner_First_Name</th>
  <th>Owner_Last_Name</th>
  </tr>
  <?php

$sql = "SELECT * FROM pets";
$result = $conn->query($sql);
  
	while($row = $result->fetch_assoc())
		{
			echo '<tr>
					<th>'.$row["pet_id"].'</td>
					<th>'.$row["pet_type"].'</td>
					<th>'.$row["pet_breed"].'</td>
					<th>'.$row["owner_first_name"].'</td>
					<th>'.$row["owner_last_name"].'</td>
				</tr>'; 
		}
?>
  </table>
  <link rel="stylesheet" type="text/css" href="style.css"/>