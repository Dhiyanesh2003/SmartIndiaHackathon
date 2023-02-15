<?php

$n1=$_POST['1'];
$n2=$_POST['2'];
$n3=$_POST['3'];
$n4=$_POST['4'];
$n5=$_POST['5'];
$n6=$_POST['6'];
$n7=$_POST['7'];
$n8=$_POST['8'];
$n9=$_POST['9'];
$n10=$_POST['10'];
$n11=$_POST['11'];
$n12=$_POST['12'];
$n13=$_POST['13'];
$n14=$_POST['14'];
$n15=$_POST['15'];
$n16=$_POST['16'];
$n17=$_POST['17'];
$n18=$_POST['18'];
$n19=$_POST['19'];
$n20=$_POST['20'];
$n21=$_POST['21'];
$n22=$_POST['22'];
$n23=$_POST['23'];
$n24=$_POST['24'];
$n25=$_POST['25'];
$n26=$_POST['26'];
$n27=$_POST['27'];
$n28=$_POST['28'];
$n29=$_POST['29'];
$n30=$_POST['30'];
$n31=$_POST['31'];
$n32=$_POST['32'];
$n33=$_POST['33'];
$n34=$_POST['34'];
$n35=$_POST['35'];
$n36=$_POST['36'];
$n37=$_POST['37'];
$n38=$_POST['38'];
$weightage=0;

if(($n1==1) && ($n2==1) && ($n3==1) && ($n4==1) && ($n5==1) && ($n6==1) && ($n7==1) && ($n8==1) && ($n9==1) && ($n10==1) && ($n11==1) && ($n12==1) && ($n13==1) && ($n38==1) && ($n15==1) && ($n16==1) && ($n17==1) && ($n18==1) && ($n19==1) && ($n27==1) && ($n28==1) && ($n37==1) && ($n36==1) )
{
  $weightage=21;
  if($n14==1)
  {
    $weightage+=2;
  }
  if($n20==1)
  {
    $weightage+=2;
  }if($n21==1)
  {
    $weightage+=10;
  }if($n22==1)
  {
    $weightage+=10;
  }if($n23==1)
  {
    $weightage+=5;
  }
if($n24==1)
  {
    $weightage+=5;
  }if($n25==1)
  {
    $weightage+=2;
  }if($n26==1)
  {
    $weightage+=1;
  }if($n29==1)
  {
    $weightage+=2;
  }
  if($n30==1)
  {
    $weightage+=7;
  }if($n31==1)
  {
    $weightage+=3;
  }if($n32==1)
  {
    $weightage+=10;
  }if($n33==1)
  {
    $weightage+=5;
  }if($n34==1)
  {
    $weightage+=10;
  }if($n35==1)
  {
    $weightage+=5;
  }
  
}

if ($weightage>=75) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kheloindia";
    
    $id=$_POST["iiid"];
    $status=$_POST["status"];
    $deadline=$_POST["deadline"];

    $status+=1;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE application_details SET status='".$status."' , deadline='".$deadline."' WHERE id='".$id."'";
    
    if ($conn->query($sql) === TRUE) {
      $sql="INSERT INTO WEIGHTAGE VALUES('".$id."','".$weightage."');";
      if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?success=2");
        exit();
      } 
      else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
        
    } else {
      echo "Error updating record: " . $conn->error;
    }

    
    $conn->close();
} 
else{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kheloindia";
    
    $id=$_POST["iiid"];
    $status=$_POST["status"];
    
    if($status=='4'){
        $status='-3';
    }
    else if($status=='1'){
        $status='-2';
    }
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE application_details SET status='".$status."' WHERE id='".$id."'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?success=3");
        exit();
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}

?>