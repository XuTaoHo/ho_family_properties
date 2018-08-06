<html> 
<body>
Information Submitted: <br> <br>
Management Comanpy: <?php echo $_GET["management_company"] ?><br><br>
Physical Address: <?php echo $_GET["physical_address"] ?><br><br>
Website: <?php echo $_GET["website"] ?><br><br>
Phone Number: <?php echo $_GET["phone_number"] ?><br><br>
Email Address: <?php echo $_GET["email_address"] ?><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$management_company = $_GET["management_company"];
$physical_address = $_GET["physical_address"];
$website = $_GET["website"];
$phone_number = $_GET["phone_number"];
$email_address = $_GET["email_address"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO hoa (management_company, physical_address, website, phone_number, email_address)
VALUES ('$management_company', '$physical_address', '$website', '$phone_number', '$email_address')";

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