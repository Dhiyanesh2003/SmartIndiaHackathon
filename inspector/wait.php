<?php

include '../security/encryption.php';
include '../security/decryption.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kheloindia";

$deadline=$_POST["deadline"];
$id=$_POST["iiid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE application_details SET deadline='".encryption($deadline)."'  , status='3' WHERE id='".$id."';";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.php?success=1");
    exit();
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
