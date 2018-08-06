<html> 
<body>
Information Submitted: <br> <br>
Address: <?php echo $_GET["address"] ?><br><br>
Amount: <?php echo $_GET["amount"] ?><br><br>
Year: <?php echo $_GET["year"] ?><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$address = $_GET["address"];
$amount = $_GET["amount"];
$year = $_GET["year"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO property_tax (address, amount, year)
VALUES ('$address', '$amount', '$year')";

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