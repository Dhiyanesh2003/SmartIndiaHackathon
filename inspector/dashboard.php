<?php
session_start();
?>
<style>
    body{
        background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(128, 255, 255));
    }
.table-wrap {
    overflow-x: scroll
}

.table {
    min-width: 1000px !important;
    width: 100%;
    background: #fff;
    -webkit-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    -moz-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    text-align: center;
}

.table thead.thead-primary {
    background: #6807f9;
}

.table thead th {
    border: none;
    padding: 30px;
    font-size: 14px;
    color: #fff
}

.table tbody tr {
    margin-bottom: 10px
}

.table tbody th,
.table tbody td {
    border: none;
    padding: 30px;
    font-size: 14px;
    background: #fff;
    vertical-align: middle;
    border-bottom: 2px solid #f8f9fd
}

.table tbody th.scope {
    background: #e8ebf8;
    border-bottom: 2px solid #e0e5f6
}

@media (min-width:768px) {
    .table tbody td:nth-child(odd) {
        background: #f4f6fc;
        border-bottom: 2px solid #eceffa
    }
}

.btn {
    padding: 15px;
    cursor: pointer;
    border-width: 2px;
    border-radius: 2px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    font-size: 13px;
    font-weight: 500;
    -webkit-box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12);
    -moz-box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12);
    box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12)
}

.btn:hover,
.btn:active,
.btn:focus {
    outline: none !important;
    -webkit-box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21);
    -moz-box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21);
    box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21)
}

.btn.btn-primary {
    background: #6807f9;
    border-color: #6807f9;
    color: #fff
}

.btn.btn-primary:hover,
.btn.btn-primary:focus {
    border-color: #5305c8 !important;
    background: #5305c8 !important
}

.btn.btn-primary.btn-link {
    background: transparent;
    color: #fff;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn.btn-outline-primary {
    color: #fff
}
.row{	
		margin-top:2%;
        
    margin-left: 10%;
    margin-right: 10%;
}

header{
    width: 100%;
    
    display: grid;
    grid-template-columns: 2fr 7fr;
    position: fixed;86++
    left: 0;
    border: 1px solid black;
    border-bottom: none;
    top: 0;
    margin-left: -20px;
    box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px;
}

h1{
  color: #192841;  
  text-align: center ;
  font-size: 35px;
  font-weight: 900;
  font-family: 'Times New Roman', Times, serif;
}
.logo_wrap{
    background-color: white;
    padding: 10px;
    border-right: 2px solid black;
    display: flex;
    background-color: transparent;
    justify-content:space-around;
    
}
</style>

<header>
        <div class="logo_wrap">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/KHEL0_INDIA_LOGO.svg" alt="" class="img-fluid" style="height:69px;">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/SATYAMEV_JAYATE_LOGO.svg" alt="" class="img-fluid" style="height:67px;">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/SAI_LOGO.svg" alt="" class="img-fluid" style="height:66px;">
            
        </div>
        <div>
            
            <h1><center>INSPECTOR &nbsp; DETAILS</center></h1>       <div>
    </header>

<br><br><br><br><br>
<div class="container">    
            <div class="row">
				<div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>S.NO</th>
                                    <th>Application ID</th>
                                    <th>Academy Name</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Locality</th>
                                    <th>More Details</th>
                                </tr>
                            </thead>
                                <?php

                                include '../security/encryption.php';
                                include '../security/decryption.php';

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "kheloindia";
                                $id=$_SESSION["iid"];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT * FROM inspector_details where id='".$id."';";
                                $result = $conn->query($sql);
                                $count=1;
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $district=$row['district'];
                                    }
                                }

                                $sql = "SELECT * FROM application_details where district='".$district."' and status='1' UNION SELECT * FROM application_details where district='".$district."' and status='4';";
                                $result = $conn->query($sql);
                                $count=1;
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "         
                                        <tbody>
                                            <tr>
                                                <th>".$count."</th>
                                                <td>".$row['id']."</td>
                                                <td>".decryption($row['orgname'])."</td>
                                                <td>".$row['state']."</td>
                                                <td>".$row['district']."</td>
                                                <td>".$row['locality']."</td>
                                                <td>
                                                    <form id='cap-form' action='view_user.php' method='post' name='form' enctype='multipart/form-data'>
                                                        <input type='text' name='id' value='".$row['id']."' hidden>
                                                        <input class='btn btn-primary' type='submit' value='View' name='submit' />
                                                    </form>
                                                </td> 
                                            </tr>
                                        </tbody>
                                        ";
                                        $count+=1;
                                    }
                                }

                                ?>
                        </table>
                    </div>
            </div>
        </div>
        <?php

        if ( isset($_GET['success']) && $_GET['success'] == 1 ){
            echo '<script>alert("DEADLINE UPDATED !!")</script>';
        }
        if ( isset($_GET['success']) && $_GET['success'] == 2 ){
            echo '<script>alert("Application Approved !!")</script>';
        }
        if ( isset($_GET['success']) && $_GET['success'] == 3 ){
            echo '<script>alert("Application Declined !!")</script>';
        }

    ?>