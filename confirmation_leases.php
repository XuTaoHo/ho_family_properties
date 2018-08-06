<html> 
<body>
Information Submitted: <br> <br>
Lease Start: <?php echo $_GET["lease_start"] ?> <br><br>
Lease End: <?php echo $_GET["lease_end"] ?><br><br>
Property Rented: <?php echo $_GET["property_rented"] ?><br><br>
Number of Tenants: <?php echo $_GET["number_of_tenants"] ?><br><br>
Monthly Rent: <?php echo $_GET["monthly_rent"] ?><br><br>
Deposit Paid: <?php echo $_GET["deposit_paid"] ?><br><br>
Pet Deposit: <?php echo $_GET["pet_deposit"] ?><br><br>
Security Deposit: <?php echo $_GET["security_deposit"] ?><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$lease_start = $_GET["lease_start"];
$lease_end = $_GET["lease_end"];
$property_rented = $_GET["property_rented"];
$number_of_tenants = $_GET["number_of_tenants"];
$monthly_rent = $_GET["monthly_rent"];
$deposit_paid = $_GET["deposit_paid"];
$pet_deposit = $_GET["pet_deposit"];
$security_deposit = $_GET["security_deposit"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO leases (lease_start, lease_end, property_rented, number_of_tenants, monthly_rent, deposit_paid, pet_deposit, security_deposit)
VALUES ('$lease_start', '$lease_end', '$property_rented', '$number_of_tenants', '$monthly_rent', '$deposit_paid', '$pet_deposit', '$security_deposit')";

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