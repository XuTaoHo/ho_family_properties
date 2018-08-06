<html> 
<body>
Information Submitted: <br> <br>
Property: <?php echo $_GET["property"] ?><br><br>
Insurance Company: <?php echo $_GET["insurance_company"] ?><br><br>
Amount: <?php echo $_GET["amount"] ?><br><br>
Start Date: <?php echo $_GET["start_date"] ?><br><br>
End Date: <?php echo $_GET["end_date"] ?><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$property = $_GET["property"];
$insurance_company = $_GET["insurance_company"];
$amount = $_GET["amount"];
$start_date = $_GET["start_date"];
$end_date = $_GET["end_date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO insurance (property, insurance_company, amount, start_date, end_date)
VALUES ('$property', '$insurance_company', '$amount', '$start_date', '$end_date')";

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