<?php
$conn = new mysqli("sql306.infinityfree.com", "if0_40973933", "XNNDku2uB0", "if0_40973933_election");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO candidates (fullname, email, username, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $email, $username, $password);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$conn->close();
?>
