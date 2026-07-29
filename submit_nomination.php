<?php
$servername = "sql306.infinityfree.com";
$username = "if0_40973933"; // or your DB username
$password = "XNNDku2uB0";     // or your DB password
$database = "if0_40973933_election";

// Connect to database
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$uploadDir = "uploads/";
if (!file_exists($uploadDir)) {
  mkdir($uploadDir, 0777, true);
}

function uploadFile($fileInputName) {
  global $uploadDir;
  $filename = basename($_FILES[$fileInputName]["name"]);
  $targetPath = $uploadDir . uniqid() . "_" . $filename;
  move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetPath);
  return $targetPath;
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$party = $_POST['party'];

$photoPath = uploadFile("photo");
$signaturePath = uploadFile("signature");
$aadharPath = uploadFile("aadhar");

$stmt = $conn->prepare("INSERT INTO nomination (name, age, gender, party, photo, signature, aadhar) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisssss", $name, $age, $gender, $party, $photoPath, $signaturePath, $aadharPath);

if ($stmt->execute()) {
  echo "<script>alert('✅ Nomination submitted successfully!'); window.location.href='welcome_cand.php';</script>";
} else {
  echo "<script>alert('❌ Error: " . $stmt->error . "'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
