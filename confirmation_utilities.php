<html> 
<body>
Information Submitted: <br> <br>
Address: <?php echo $_GET["address"] ?><br><br>
Water Date: <?php echo $_GET["water_date"] ?><br><br>
Water Amount: <?php echo $_GET["water_amount"] ?><br><br>
Gas Date: <?php echo $_GET["gas_date"] ?><br><br>
Gas Amount: <?php echo $_GET["gas_amount"] ?><br><br>
Electricity Date: <?php echo $_GET["electricity_date"] ?><br><br>
Electricity Amount: <?php echo $_GET["electricity_amount"] ?><br><br>

<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "bbcf53d55dcc9b";
$password = "69e11031";
$dbname = "heroku_3d2e2d1647b9f2d";

$address = $_GET["address"];
$water_date = $_GET["water_date"];
$water_amount = $_GET["water_amount"];
$gas_date = $_GET["gas_date"];
$gas_amount = $_GET["gas_amount"];
$electricity_date = $_GET["electricity_date"];
$electricity_amount = $_GET["electricity_amount"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO utilities (address, water_date, water_amount, gas_date, gas_amount, electricity_date, electricity_amount)
VALUES ('$address', '$water_date', '$water_amount', '$gas_date', '$gas_amount', '$electricity_date', '$electricity_amount')";

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
