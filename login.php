<?php
$conn = new mysqli("sql306.infinityfree.com", "if0_40973933", "XNNDku2uB0", "if0_40973933_election");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT password FROM candidates WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        echo "success";
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}

$conn->close();
?>
