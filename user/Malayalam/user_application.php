<?php

include '../security/encryption.php';
include '../security/decryption.php';

session_start();
$kid=$_SESSION["id"];
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

$sql = "SELECT id FROM application_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
  }
}

//Upload profile pic to upload folder

$count = 0;
$id=$id+1;

if (($_FILES['evidence']['name']!="")){
    // Where the file is going to be stored
    $target_dir = "../uploads/evidence/";
    $file = $_FILES['evidence']['name'];
    $path = pathinfo($file);
    $filename = $id ;
    $ext = $path['extension'];
    $temp_name = $_FILES['evidence']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Internal servererror !!";
    }
    else{
        move_uploaded_file($temp_name,$path_filename_ext);
        $evidence=$path_filename_ext;
        $count+=1;
    }
}

if (($_FILES['quotation']['name']!="")&&($count==1)){
    // Where the file is going to be stored
    $target_dir1 = "../uploads/quotation/";
    $file1 = $_FILES['quotation']['name'];
    $path1 = pathinfo($file1);
    $filename1 = $id ;
    $ext1 = $path['extension'];
    $temp_name1 = $_FILES['quotation']['tmp_name'];
    $path_filename_ext1 = $target_dir1.$filename1.".".$ext1;

    // Check if file already exists
    if (file_exists($path_filename_ext1)) {
        echo "Internal servererror !!";
    }
    else{
        move_uploaded_file($temp_name1,$path_filename_ext1);
        $quotation=$path_filename_ext1;
        $count+=1;
    }
}

if (($_FILES['schematic_plan']['name']!="")&&($count==2)){
    // Where the file is going to be stored
    $target_dir = "../uploads/schematic_plan/";
    $file = $_FILES['schematic_plan']['name'];
    $path = pathinfo($file);
    $filename = $id ;
    $ext = $path['extension'];
    $temp_name = $_FILES['schematic_plan']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Internal servererror !!";
    }
    else{
        move_uploaded_file($temp_name,$path_filename_ext);
        $schematic_plan=$path_filename_ext;
        $count+=1;
    }
}

if (($_FILES['acknowledgement']['name']!="")&&($count==3)){
    // Where the file is going to be stored
    $target_dir = "../uploads/acknowledgement/";
    $file = $_FILES['acknowledgement']['name'];
    $path = pathinfo($file);
    $filename = $id ;
    $ext = $path['extension'];
    $temp_name = $_FILES['acknowledgement']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Internal servererror !!";
    }
    else{
        move_uploaded_file($temp_name,$path_filename_ext);
        $acknowledgement=$path_filename_ext;
        $count+=1;
    }
}
$orgname=$_POST['orgname'];
$orgname=addslashes(encryption($orgname));
$doornum=$_POST['doornum'];
$doornum=addslashes(encryption($doornum));
$streetname=$_POST['streetname'];
$streetname=addslashes(encryption($streetname));
$locality=$_POST['locality'];
$locality=addslashes($locality);
$district=$_POST['district'];
$district=addslashes($district);
$pincode=$_POST['pincode'];
$pincode=addslashes(encryption($pincode));
$state=$_POST['state'];
$state=addslashes($state);
$phnum=$_POST['phnum'];
$phnum=addslashes(encryption($phnum));
$faxnum=$_POST['faxnum'];
$faxnum=addslashes(encryption($faxnum));
$email=$_POST['email'];
$email=addslashes(encryption($email));
$projectname=$_POST['projectname'];
$projectname=addslashes(encryption($projectname));
$deadline=$_POST['deadline'];
$deadline=addslashes($deadline);
$air_name=$_POST['air_name'];
$air_name=addslashes(encryption($air_name));
$air_location=$_POST['air_location'];
$air_location=addslashes(encryption($air_location));
$air_distance=$_POST['air_distance'];
$air_distance=addslashes(encryption($air_distance));
$air_dist_km=$_POST['air_dist_km'];
$air_dist_km=addslashes(encryption($air_dist_km));
$rail_name=$_POST['rail_name'];
$rail_name=addslashes(encryption($rail_name));
$rail_location=$_POST['rail_location'];
$rail_location=addslashes(encryption($rail_location));
$rail_distance=$_POST['rail_distance'];
$rail_distance=addslashes(encryption($rail_distance));
$rail_dist_km=$_POST['rail_dist_km'];
$rail_dist_km=addslashes(encryption($rail_dist_km));
$bus_name=$_POST['bus_name'];
$bus_name=addslashes(encryption($bus_name));
$bus_location=$_POST['bus_location'];
$bus_location=addslashes(encryption($bus_location));
$bus_distance=$_POST['bus_distance'];
$bus_distance=addslashes(encryption($bus_distance));
$bus_dist_km=$_POST['bus_dist_km'];
$bus_dist_km=addslashes(encryption($bus_dist_km));
$landowner=$_POST['landowner'];
$landowner=addslashes(encryption($landowner));
$ready=$_POST['ready'];
$ready=addslashes(encryption($ready));
$utilities1=isset($_POST['utilities1'])? "yes":"no";
$utilities1=addslashes(encryption($utilities1));$utilities2=isset($_POST['utilities2'])? "yes":"no";
$utilities2=addslashes(encryption($utilities2));
$utilities3=isset($_POST['utilities3'])? "yes":"no";
$utilities3=addslashes(encryption($utilities3));
$estimation=$_POST['estimation'];
$estimation=addslashes(encryption($estimation));
$evidence=addslashes(encryption($evidence));
$quotation=addslashes(encryption($quotation));
$schematic_plan=addslashes(encryption($schematic_plan));
$centre_share=$_POST['centre_share'];
$centre_share=addslashes(encryption($centre_share));
$scope=$_POST['scope'];
$scope=addslashes(encryption($scope));
$plan=$_POST['plan'];
$plan=addslashes(encryption($plan));
$methods=$_POST['methods'];
$methods=addslashes(encryption($methods));
$facility=$_POST['facility'];
$facility=addslashes(encryption($facility));
$oppurtinity=$_POST['oppurtinity'];
$oppurtinity=addslashes(encryption($oppurtinity));
$no_of_centre=$_POST['no_of_centre'];
$no_of_centre=addslashes(encryption($no_of_centre));
$availability=$_POST['availability'];
$availability=addslashes(encryption($availability));
$no_of_players=$_POST['no_of_players'];
$no_of_players=addslashes(encryption($no_of_players));
$user_base=$_POST['user_base'];
$user_base=addslashes(encryption($user_base));
$need=$_POST['need'];
$need=addslashes(encryption($need));
$situation_disaster=$_POST['situation_disaster'];
$situation_disaster=addslashes(encryption($situation_disaster));
$participation=$_POST['participation'];
$participation=addslashes(encryption($participation));
$boost=$_POST['boost'];
$boost=addslashes(encryption($boost));
$benefits=$_POST['benefits'];
$benefits=addslashes(encryption($benefits));
$gender_equality=$_POST['gender_equality'];
$gender_equality=addslashes(encryption($gender_equality));
$sports_category=$_POST['sports_category'];
$sports_category=addslashes($sports_category);
$acknowledgement=addslashes(encryption($acknowledgement));

//Insert details into personal_details

$sql = "INSERT INTO application_details VALUES ('".$kid."', '"
.$id."', '"
.$orgname."', '"
.$doornum."', '"
.$streetname."', '"
.$locality."', '"
.$district."', '"
.$pincode."', '"
.$state."', '"
.$phnum."', '"
.$faxnum."', '"
.$email."', '"
.$projectname."', '"
.$deadline."', '"
.$air_name."', '"
.$air_location."', '"
.$air_distance."', '"
.$air_dist_km."', '"
.$rail_name."', '"
.$rail_location."', '"
.$rail_distance."', '"
.$rail_dist_km."', '"
.$bus_name."', '"
.$bus_location."', '"
.$bus_distance."', '"
.$bus_dist_km."', '"
.$landowner."', '"
.$ready."', '"
.$utilities1."', '"
.$utilities2."', '"
.$utilities3."', '"
.$estimation."', '"
.$evidence."', '"
.$quotation."', '"
.$schematic_plan."', '"
.$centre_share."', '"
.$scope."', '"
.$plan."', '"
.$methods."', '"
.$facility."', '"
.$oppurtinity."', '"
.$no_of_centre."', '"
.$availability."', '"
.$no_of_players."', '"
.$user_base."', '"
.$need."', '"
.$situation_disaster."', '"
.$participation."', '"
.$boost."', '"
.$benefits."', '"
.$gender_equality."', '"
.$sports_category."', '"
.$acknowledgement."','0')";
if ($conn->query($sql) === TRUE) {
  $count=$count +1;
  header("Location: dashboard.php");
  exit();
} 
else {
  echo "ada poda";
}
$conn->close();

?>