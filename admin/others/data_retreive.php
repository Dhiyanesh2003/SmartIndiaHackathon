<?php

include '../security/encryption.php';
include '../security/decryption.php';

//MySQL connection

$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "kheloindia";
$id=$_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM application_details WHERE id=".$id.";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $orgname = $row['orgname'];
    $doornum = $row['doornum'];
    $streetname = $row['streetname'];
    $addln2 = $row['addln2'];
    $pincode = $row['pincode'];
    $state = $row['state'];
    $phnum = $row['phnum'];
    $faxnum = $row['faxnum'];
    $email = $row['email'];
    $projectname = $row['projectname'];
    $air_name = $row['air_name'];
    $air_location = $row['air_location'];
    $air_distance = $row['air_distance'];
    $air_dist_km = $row['air_dist_km'];
    $rail_name = $row['rail_name'];
    $rail_location = $row['rail_location'];
    $rail_distance = $row['rail_distance'];
    $rail_dist_km = $row['rail_dist_km'];
    $bus_name = $row['bus_name'];
    $bus_location = $row['bus_location'];
    $bus_distance = $row['bus_distance'];
    $bus_dist_km = $row['bus_dist_km'];
    $landowner = $row['landowner'];
    $ready = $row['ready'];
    $utilities1 = $row['utilities1'];
    $utilities2 = $row['utilities2'];
    $utilities3 = $row['utilities3'];
    $estimation = $row['estimation'];
    $evidence = $row['evidence'];
    $quotation = $row['quotation'];
    $schematic_plan = $row['schematic_plan'];
    $centre_share = $row['centre_share'];
    $scope = $row['scope'];
    $plan = $row['plan'];
    $methods = $row['methods'];
    $facility = $row['facility'];
    $oppurtinity = $row['oppurtinity'];
    $no_of_centre = $row['no_of_centre'];
    $availability = $row['availability'];
    $no_of_players = $row['no_of_players'];
    $user_base = $row['user_base'];
    $need = $row['need'];
    $situation_disaster = $row['situation_disaster'];
    $participation = $row['participation'];
    $boost = $row['boost'];
    $benefits = $row['benefits'];
    $gender_equality = $row['gender_equality'];
    $sports_category = $row['sports_category'];
    $acknowledgement = $row['acknowledgement'];
    $status = $row['status'];
  }
}
$orgname = decryption($orgname);
$doornum = decryption($doornum);
$streetname = decryption($streetname);
$addln2 = decryption($addln2);
$pincode = decryption($pincode);
$state = decryption($state);
$phnum = decryption($phnum);
$faxnum = decryption($faxnum);
$email = decryption($email);
$projectname = decryption($projectname);
$air_name = decryption($air_name);
$air_location = decryption($air_location);
$air_distance = decryption($air_distance);
$air_dist_km = decryption($air_dist_km);
$rail_name = decryption($rail_name);
$rail_location = decryption($rail_location);
$rail_distance = decryption($rail_distance);
$rail_dist_km = decryption($rail_dist_km);
$bus_name = decryption($bus_name);
$bus_location = decryption($bus_location);
$bus_distance = decryption($bus_distance);
$bus_dist_km = decryption($bus_dist_km);
$landowner = decryption($landowner);
$ready = decryption($ready);
$utilities1 = decryption($utilities1);
$utilities2 = decryption($utilities2);
$utilities3 = decryption($utilities3);
$estimation = decryption($estimation);
$evidence = decryption($evidence);
$quotation = decryption($quotation);
$schematic_plan = decryption($schematic_plan);
$centre_share = decryption($centre_share);
$scope = decryption($scope);
$plan = decryption($plan);
$methods = decryption($methods);
$facility = decryption($facility);
$oppurtinity = decryption($oppurtinity);
$no_of_centre = decryption($no_of_centre);
$availability = decryption($availability);
$no_of_players = decryption($no_of_players);
$user_base = decryption($user_base);
$need = decryption($need);
$situation_disaster = decryption($situation_disaster);
$participation = decryption($participation);
$boost = decryption($boost);
$benefits = decryption($benefits);
$gender_equality = decryption($gender_equality);
$sports_category = decryption($sports_category);
$acknowledgement = decryption($acknowledgement);
$status = decryption($status);

$conn->close();

?>