<?php
session_start();

// Connect to DB
$conn = new mysqli("sql306.infinityfree.com", "if0_40973933", "XNNDku2uB0", "if0_40973933_election");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get inputs from JS (fetch)
$data = json_decode(file_get_contents("php://input"), true);
$email = $conn->real_escape_string($data['email']);
$password = $conn->real_escape_string($data['password']);

// Check against DB
$sql = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['admin_email'] = $email;
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
$conn->close();
?>
