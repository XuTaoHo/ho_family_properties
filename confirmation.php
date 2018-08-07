<html> 
<body>
Information Submitted: <br> <br>
Lease Start: <?php echo $_GET["lease_start"] ?> <br><br>
Lease End: <?php echo $_GET["lease_end"] ?><br><br>
Property Address: <?php echo $_GET["property_address"] ?><br><br>
Number of Tenants: <?php echo $_GET["number_of_tenants"] ?><br><br>
Monthly Rent: <?php echo $_GET["monthly_rent"] ?><br><br>
Deposit: <?php echo $_GET["monthly_rent"} ?><br><br>

<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "bbcf53d55dcc9b";
$password = "69e11031";
$dbname = "heroku_3d2e2d1647b9f2d";

$lease_start = $_GET["lease_start"];
$lease_end = $_GET["lease_end"];
$propery_address = $_GET["property_address"];
$number_of_tenants = $_GET["number_of_tenants"];
$monthly_rent = $_GET["monthly_rent"];
$deposit = $_GET["monthly_rent"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO tenants (lease_start, lease_end, property_address, number_of_tenants, monthly_rent, deposit)
VALUES ('$lease_start', '$lease_end', '$property_address', '$number_of_tenants', '$monthly_rent', '$deposit')";

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
