<html> 
<body>
Information Submitted: <br> <br>
Property Address: <?php echo $_GET["property_address"] ?><br><br>
Zip Code: <?php echo $_GET["zip_code"] ?><br><br>
Purchase Date: <?php echo $_GET["purchase_date"] ?><br><br>
Sell Date: <?php echo $_GET["sell_date"] ?><br><br>
Build Date: <?php echo $_GET["build_date"] ?><br><br>
Bedrooms: <?php echo $_GET["bedrooms"] ?><br><br>
Acreage: <?php echo $_GET["acreage"] ?><br><br>
Lot Size: <?php echo $_GET["lot_size"] ?><br><br>
Baths: <?php echo $_GET["baths"] ?><br><br>
Garage Space: <?php echo $_GET["garage_space"] ?><br><br>
HOA: <?php echo $_GET["hoa"] ?><br><br>
HOA Management: <?php echo $_GET["hoa_management"] ?><br><br>
HOA Fee: <?php echo $_GET["hoa_fee"] ?><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$property_address = $_GET["property_address"];
$purchase_date = $_GET["purchase_date"];
$bedrooms = $_GET["bedrooms"];
$acreage = $_GET["acreage"];
$baths = $_GET["baths"];
$garage_space = $_GET["garage_space"];
$zip_code = $_GET["zip_code"];
$lot_size = $_GET["lot_size"];
$sell_date = $_GET["sell_date"];
$build_date = $_GET["build_date"];
$hoa = $_GET["hoa"];
$hoa_management = $_GET["hoa_management"];
$hoa_fee = $_GET["hoa_fee"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO properties (property_address, purchase_date, bedrooms, bathrooms, garage_space, acreage, zip_code, lot_size,
build_date, sold_date, HOA, HOA_management, HOA_fee)
VALUES ('$property_address', '$purchase_date', '$bedrooms', '$baths', '$garage_space', '$acreage', '$zip_code', '$lot_size',
'$build_date', '$sell_date', '$hoa', '$hoa_management', '$hoa_fee')";

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