<?php 

include 'connection.php';

$json = file_get_contents('php://input');

$obj = json_decode($json, true);

$name = $obj['name'];
$email = $obj['email'];
$password = $obj['password'];

$sql = "INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo json_encode('insert success');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>