<?php

session_start();
$_SESSION["kid"] = $_POST['id'];
header("Location: view_kid.html");
exit();

?>