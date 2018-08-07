<html> 
<body>
Information Submitted: <br> <br>
Tenant Name: <?php echo $_GET["tenant_first_name"]; echo $_GET["tenant_last_name"] ?> <br><br>
Family Size: <?php echo $_GET["family_size"] ?><br><br>
Number of Pets: <?php echo $_GET["number_of_pets"] ?><br><br>
Phone Number: <?php echo $_GET["phone_number"] ?><br><br>
Email Address: <?php echo $_GET["email_address"] ?><br><br>
Move In Date: <?php echo $_GET["move_in_date"] ?><br><br>
Move Out Date: <?php echo $_GET["move_out_date"] ?><br><br>

<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "bbcf53d55dcc9b";
$password = "69e11031";
$dbname = "heroku_3d2e2d1647b9f2d";

$tenant_first_name = $_GET["tenant_first_name"];
$tenant_last_name = $_GET["tenant_last_name"];
$family_size = $_GET["family_size"];
$number_of_pets = $_GET["number_of_pets"];
$phone_number = $_GET["phone_number"];
$email_address = $_GET["email_address"];
$move_in_date = $_GET["move_in_date"];
$move_out_date = $_GET["move_out_date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO tenants (tenant_first_name, tenant_last_name, family_size, number_of_pets, phone_number, email_address, move_in_date, move_out_date)
VALUES ('$tenant_first_name', '$tenant_last_name', '$family_size', '$number_of_pets', '$phone_number', '$email_address', '$move_in_date', '$move_out_date')";

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
