<html> 
<body>
Information Submitted: <br> <br>
Pet Type: <?php echo $_GET["pet_type"] ?> <br><br>
Pet Breed: <?php echo $_GET["pet_breed"] ?><br><br>
Owner Name: <?php echo $_GET["owner_first_name"]; echo $_GET["owner_last_name"] ?><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ho_family_properties";

$pet_type = $_GET["pet_type"];
$pet_breed = $_GET["pet_breed"];
$owner_first_name = $_GET["owner_first_name"];
$owner_last_name = $_GET["owner_last_name"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

$sql = "INSERT INTO pets(pet_type, pet_breed, owner_first_name, owner_last_name)
VALUES ('$pet_type', '$pet_breed', '$owner_first_name', '$owner_last_name')";

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