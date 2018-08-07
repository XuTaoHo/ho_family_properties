<html> 
<body>
Information Submitted: <br> <br>
Object Repaired: <?php echo $_GET["object_repaired"] ?> <br><br>
Maintenance Cost: <?php echo $_GET["maintenance_cost"] ?><br><br>
Maintenance Date: <?php echo $_GET["maintenance_date"] ?><br><br>
Maintenance Person: <?php echo $_GET["maintenance_person"] ?><br><br>
House Repaired: <?php echo $_GET["house_repaired"] ?><br><br>

<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "bbcf53d55dcc9b";
$password = "69e11031";
$dbname = "heroku_3d2e2d1647b9f2d";

$object_repaired = $_GET["object_repaired"];
$maintenance_cost = $_GET["maintenance_cost"];
$maintenance_date = $_GET["maintenance_date"];
$maintenance_person = $_GET["maintenance_person"];
$house_repaired = $_GET["house_repaired"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO maintenance (object_repaired, maintenance_cost, maintenance_date, maintenance_person, house_repaired)
VALUES ('$object_repaired', '$maintenance_cost', '$maintenance_date', '$maintenance_person', '$house_repaired')";

if ($conn->query($sql) === TRUE) {
    echo " New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</form>
</body>
</html>
