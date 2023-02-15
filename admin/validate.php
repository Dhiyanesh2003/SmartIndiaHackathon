<?php

if ($_POST['action'] == 'Accept') {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kheloindia";
    
    $id=$_POST["iiid"];
    $status='1';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE application_details SET status='".$status."' WHERE id='".$id."'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard_home.html");
        exit();
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
} 
else if ($_POST['action'] == 'Decline') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kheloindia";
    
    $id=$_POST["iiid"];
    $status='-1';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE application_details SET status='".$status."' WHERE id='".$id."'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard_home.html");
        exit();
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}
else if ($_POST['action'] == 'Fund') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kheloindia";
    
    $id=$_POST["iiid"];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE application_details SET status='3' WHERE id='".$id."'";
    
    if ($conn->query($sql) === TRUE) {
      echo $sql;
        header("Location: dashboard_home.html");
        exit();
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}

?>