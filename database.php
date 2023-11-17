<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FORM";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO `people` (`name`, `email`) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
