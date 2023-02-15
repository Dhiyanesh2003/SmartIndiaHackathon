<?php

$id=$_POST['id'];
$pass=$_POST['pass'];

//MySQL connection

$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "kheloindia";

// Create connection
$conn = new mysqli($servername, $username, $passwordd, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="UPDATE application_details SET status='4' WHERE status='3' and deadline > CURRENT_DATE;";
if ($conn->query($sql) === TRUE) {
    $count=1;
  } else {
    echo "Error updating record: " . $conn->error;
  }
$sql = "SELECT * FROM user_login";
$result = $conn->query($sql);

session_start();
$_SESSION["id"] = $id;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id_=$row['user_id'];
        $pass_=$row['pass'];
        if(($id==$id_)&&($pass==$pass_)){
            header("Location: dashboard.php");
            exit();
        }
    }
}
header("Location: login.php?success=1");
exit();

$conn->close();

?>