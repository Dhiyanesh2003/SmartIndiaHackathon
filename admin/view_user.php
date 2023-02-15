<!DOCTYPE html>
<html lang="en">
<style>
            body{
                background-color:#d3d3d3; 
                margin-left: 50px;
                margin-right: 50px; 
    background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(128, 255, 255));
    background-attachment: fixed;
            }
            h2{
                margin-left: 100%;
            }
            .container{
                justify-content: center;
            }
            .input{
                padding: 15px;
                border-radius: 5px;
                width: 250px;
                border: 1px solid black;
            }
            .inputie{
                padding: 15px;
                border-radius: 5px;
                width: 72px;
                border: 1px solid black;
            }
            .inputt{
                height: 20px;
                width: 20px;
            }
            .inputtt{
                padding: 15px;
                border-radius: 5px;
                width: 180px;
                border: 1px solid black;
            }
            .inpu{
                font-size: 20px;
            }
            #inn1,#inn2,#inn3,#inn4{
                border: 3px solid aliceblue;
                width: 250px;
            }
            .padd{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            [contenteditable] {
                outline: 0px solid transparent;
            }
            .reg1{
                background: #fff;
                 display: grid;
                 justify-content: center;
                 margin-left: 20%;
                 margin-right: 20%;
                align-items: center;
                padding: 1.8rem;
                border-radius: 5px;
                margin-top: 1rem;
                box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.018);
                grid-template-columns:repeat(2,1fr);
            }
            
            .reg1 label{
                display:contents;
                text-align: right;
                color:black;
                font-size: 20px;
            }
            
            .reg11{
                background: #fff;
                 margin-left: 20%;
                 margin-right: 20%;
                align-items: center;
                padding: 1.8rem;
                border-radius: 5px;
                margin-top: 1rem;
                box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.018);
            }
            
            .reg11 label{
                display:contents;
                text-align: right;
                color:black;
                font-size: 20px;
            }
            .reg111{
                display: grid;
                grid-template-columns: 1fr 1fr;
                margin-left: 5%;
            }
            .develope label{
                display:inline-block;
                
            }
            .develope{
                background: #fff;
                 display:grid;
                 justify-content: center;
                 margin-left: 20%;
                 margin-right: 20%;
                align-items: center;
                padding: 1.8rem;
                border-radius: 2rem;
                margin-top: 1rem;
                box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.018);
                grid-template-columns:repeat(2,1fr);
            }
            .transport{
                background: #fff;
                 display:block;
                 justify-content: center;
                 margin-left: 20%;
                 margin-right: 20%;
                align-items: center;
                padding: 1.8rem;
                border-radius: 5px;
                margin-top: 1rem;
                box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.018);
            }
            .owner,.esti,.options{
                background: #fff;
                 display:block;
                 justify-content: center;
                 margin-left: 20%;
                 margin-right: 20%;
                align-items: center;
                padding: 1.8rem;
                border-radius: 5px;
                margin-top: 1rem;
                box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.018);
                
            }
            .options,.esti{
                font-size: 20px;
            }
            .extra{
                margin-left: 13%;
            }
            .dummy{
                margin-left:10%;
            }
            .textarea{
                resize:none;
                width: 80%;
                border-radius: 5px;
            }
            #abc{
                margin-right:25%;
            }
        
            .split{
                display: grid;
                grid-template-columns: repeat(2,1fr);
                margin-left: 5%;
            }
            .move{
                margin-left: 13%;
            }
            .butt{
                background-color: #1d9acc; /* Green */
                border: none;
                color: white;
                padding: 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 5px;
            }
            .button{
                background-color: #5dbea3; /* Green */
                border: none;
                color: white;
                padding: 15px;
                padding-left: 20px;
                padding-right: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;
                font-size: 20px;
                border-radius: 5px;
                padding-left: 4%;
                padding-right: 4%;
            }
            .transport , .reg1 , .owner , .esti , .reg11 , .options{
                margin-left: 0px;
                margin-right: 0px;
            }
            .dummy{
                margin-left: 130px;
            }
	</style>
</head> 
<body>   
<?php

include '../security/encryption.php';
include '../security/decryption.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kheloindia";
//$id="100004";
$id=$_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM application_details where ID='".$id."';";
$result = $conn->query($sql);
$count=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
        <form  name='form' method='post' action='validate.php' enctype='multipart/form-data' >
        
                <div class='reg1' style='margin-top:7%;'>
                    
                    <div class='dummy' id='abc'>
                        <CENTER><h2>APPLICATION</h2></CENTER><br><br>
                        <label>Organization Name <span style='color: red;'>*</span></label>
                        <br><br>
                        <div id='inn1'>
                            <input name='orgname' id='in1' autocomplete='off' contenteditable='true' onclick='disappear(1)' onfocusout='appear(1)' class='input' type='text' value='".decryption($row['orgname'])."' required disabled>
                        </div>
                        <br><br>
        
                    </div>
                
                
                <div class='dummy'>
                    <br class='br'><br class='br'><br class='br'><br class='br'><br class='br'>
                    
                    <label>Door No. <span style='color: red;'>*</span></label>
                        <br><br>
                        <div id='inn2'>
                            <input name='doornum' id='in2' autocomplete='off' contenteditable='true' onclick='disappear(2)' onfocusout='appear(2)' class='input' type='text' value='".decryption($row['doornum'])."' required disabled>
                        </div>
                        <br><br>
                </div>
                <div class='dummy'>
                    
                    <label>Street Name<span style='color: red;'>*</span></label>
                        <br><br>
                        <div id='inn3'>
        
                            <input name='streetname' id='in3' autocomplete='off' contenteditable='true' onclick='disappear(3)' onfocusout='appear(3)' class='input' type='text' value='".decryption($row['streetname'])."' required disabled>
                        </div>
                        <br><br>
                </div>
                <div class='dummy'>
                    
                    <label>Locality<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn4'>
                        
                        <input name='locality' id='in4' autocomplete='off' contenteditable='true' onclick='disappear(4)' onfocusout='appear(4)' class='input' type='text' value='".$row['locality']."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div class='dummy'>
                    
                    <label>District<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn700'>
                        
                        <input name='district' id='in700' autocomplete='off' contenteditable='true' onclick='disappear(700)' onfocusout='appear(700)' class='input' type='text' value='".$row['district']."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div class='dummy'>
                    
                    <label>PIN Code<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn5'>
                        
                        <input name='pincode' id='in5' autocomplete='off' contenteditable='true' onclick='disappear(5)' onfocusout='appear(5)' class='input' type='number' value='".decryption($row['pincode'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div class='dummy'>
                    <label>State <span style='color: red;'>*</span></label><br><br>
                        <div id='inn6'>
                            <input name='state' id='in6' autocomplete='off' contenteditable='true' onclick='disappear(6)' onfocusout='appear(6)' class='input' type='text' value='".$row['state']."' required disabled>
                        </div>
                        <br><br>
                </div>
                <div class='dummy'>
                    
                    <label>Phone number<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn7'>
                        
                        <input name='phnum' id='in7' autocomplete='off' contenteditable='true' onclick='disappear(7)' onfocusout='appear(7)' class='input' type='number' value='".decryption($row['phnum'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div class='dummy'>
                    <label> FAX number<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn8'>
                        
                        <input name='faxnum' id='in8' autocomplete='off' contenteditable='true' onclick='disappear(8)' onfocusout='appear(8)' class='input' type='number' value='".decryption($row['faxnum'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div class='dummy'>
                    <label> Email ID<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn9'>
                        
                        <input name='email' id='in9' autocomplete='off' contenteditable='true' onclick='disappear(9)' onfocusout='appear(9)' class='input' type='email' value='".decryption($row['email'])."' required disabled>
                    </div>
                    <br><br>
                </div><hr>
                </div>
        
                <div class='transport'>
                <br>
                <br>
                <div class='split'>
        
                    <div>
                <label><b> NAME OF THE PROJECT:</b><span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn10'>
                        
                        <input name='projectname' id='in10' autocomplete='off' contenteditable='true' onclick='disappear(10)' onfocusout='appear(10)' class='input' type='text' value='".decryption($row['projectname'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                <div>
                    <label><b>Project Deadline </b><span style='color: red;'>*</span></label><br><br>
                         <div id='inn11'>
                             <input name='deadline' id='in11' autocomplete='off' contenteditable='true' onclick='disappear(11)' onfocusout='appear(11)' class='input' type='date' value='".$row['deadline']."' required disabled>
                         </div>
                         <br><br>
                        </div>
                    </div>
                    <h3 class='hubs'>TANSPORT HUBS:<span style='color: red;'>*</span>
                        <br><br> </h3>
                    <div class='table'>
                    <table>
                        
                        <thead>
                            <tr>
                                <th>LANDMARK</th>
                                <th>NAME</th>
                                <th>LOCATION LINK</th>
                                <th>DISTANCE FROM THE SITE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>AIR/SEA PORT</b></td>
                                <td>
                                    <div id='inn12'>
                            
                                        <input name='air_name' id='in12' autocomplete='off' contenteditable='true' onclick='disappear(12)' onfocusout='appear(12)' class='inputtt' type='text' value='".decryption($row['air_name'])."' disabled>
                                    </div>
                                </td>
                                <td>
                                    <div id='inn13'>
                            
                                        <input name='air_location' id='in13' autocomplete='off' contenteditable='true' onclick='disappear(13)' onfocusout='appear(13)' class='inputtt' type='text' value='".decryption($row['air_location'])."' disabled>
                                    </div>
                                </td>
                                <td>
                                    <div id='inn14'>
                            
                                        <input name='air_distance' id='in14' autocomplete='off' contenteditable='true' onclick='disappear(14)' onfocusout='appear(14)' class='inputtt' type='number' value='".decryption($row['air_distance'])."' disabled>
                                    </div>
        
                                </td>
                                <td>
                                    <div id='inn401'>
                                        <input name='air_dist_km' id='in401' autocomplete='off' contenteditable='true' onclick='disappear(401)' onfocusout='appear(401)' class='inputie' type='text' value='".decryption($row['air_dist_km'])."' disabled>
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td><b>RAILWAY STATION</b></td>
                                <td>
                                    <div id='inn15'>
                            
                                        <input name='rail_name' id='in15' autocomplete='off' contenteditable='true' onclick='disappear(15)' onfocusout='appear(15)' class='inputtt' type='text' value='".decryption($row['rail_name'])."' disabled>
                                    </div>
        
                                </td>
                                <td>
                                    <div id='inn16'>
                            
                                        <input name='rail_location' id='in16' autocomplete='off' contenteditable='true' onclick='disappear(16)' onfocusout='appear(16)' class='inputtt' type='text' value='".decryption($row['rail_location'])."' disabled>
                                    </div>
                                </td>
                                <td>
                                    <div id='inn17'>
                            
                                        <input name='rail_distance' id='in17' autocomplete='off' contenteditable='true' onclick='disappear(17)' onfocusout='appear(17)' class='inputtt' type='number' value='".decryption($row['rail_distance'])."' disabled>
                                    </div>
                                    
                                </td>
                                <td>
                                    <div id='inn402'>
                            <input name='rail_dist_km' id='in402' autocomplete='off' contenteditable='true' onclick='disappear(402)' onfocusout='appear(402)' class='inputie' type='text' value='".decryption($row['rail_dist_km'])."' disabled>
                        </div>
                        
        
        
        
                                </td>
                            </tr>
                            <tr>
                                <td><b>BUS STAND</b></td>
                                <td>
                                    <div id='inn18'>
                            
                                        <input name='bus_name' id='in18' autocomplete='off' contenteditable='true' onclick='disappear(18)' onfocusout='appear(18)' class='inputtt' type='text' value='".decryption($row['bus_name'])."' disabled>
                                    </div>
        
                                </td>
                                <td>
                                    <div id='inn19'>
                            
                                        <input name='bus_location' id='in19' autocomplete='off' contenteditable='true' onclick='disappear(19)' onfocusout='appear(19)' class='inputtt' type='text' value='".decryption($row['bus_location'])."' disabled>
                                    </div>
        
                                </td>
                                <td>
                                    <div id='inn20'>
                            
                                        <input name='bus_distance' id='in20' autocomplete='off' contenteditable='true' onclick='disappear(20)' onfocusout='appear(20)' class='inputtt' type='number' value='".decryption($row['bus_distance'])."' disabled>
                                    </div>
                                </td>
                                <td>
                                    <div id='inn403'>
                                        <input name='bus_dist_km' id='in403' autocomplete='off' contenteditable='true' onclick='disappear(403)' onfocusout='appear(403)' class='inputie' type='text' value='".decryption($row['bus_dist_km'])."' disabled>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class='owner'>
                    <div class='move'>
                    <h3>LAND OWNERSHIP:<span style='color: red;'>*</span></h3>
                    ";
                    if(decryption($row['landowner'])=="owned"){
                     echo"
                           <input type='radio' id='inn201' class='inputt' name='landowner' value='owned' checked>
                           <label>OWNED</label>
                           <br><br>
                           <input type='radio' id='inn202' class='inputt' name='landowner' value='leased' required disabled>
                          
                                   <label>LEASED </label>
                                   <br><br>
                    ";
                    }
                    else{
                        echo"
                           <input type='radio' id='inn201' class='inputt' name='landowner' value='owned' required disabled>
                           <label>OWNED</label>
                           <br><br>
                           <input type='radio' id='inn202' class='inputt' name='landowner' value='leased' checked>
                          
                                   <label>LEASED </label>
                                   <br><br>
                    ";
                    }
                    echo "
                       <h3>Whether the land is readily available for executing the project:<span style='color: red;'>*</span></h3>
                       ";
                    if(decryption($row['ready'])=="yes"){
                     echo"
                     <input type='radio' id='inn203' class='inputt' name='ready' value='yes' checked>
                     <label>YES</label>
                     <br><br>
                     <input type='radio' id='inn204' class='inputt' name='ready' value='no' required disabled>
                    <label>NO</label>
                     <br><br>
                    ";
                    }
                    else{
                        echo"
                        <input type='radio' id='inn203' class='inputt' name='ready' value='yes' required disabled>
                        <label>YES</label>
                        <br><br>
                        <input type='radio' id='inn204' class='inputt' name='ready' value='no' checked>
                       <label>NO</label>
                        <br><br>
                    ";
                    }
                    echo "
                           
                       <h3>Provision of utilities:<span style='color: red;'>*</span></h3>
                           <input type='checkbox' id='inn205' class='inputt' name='utilities1' value='Tennis' required disabled checked>
                           <label for='POWER SUPPLY' class='inpu'>POWER SUPPLY</label>
                                   <br><br>
                           <input type='checkbox' id='inn206' class='inputt' name='utilities2' value='Tennis' required disabled checked>
                               <label for='WATER SUPPLY' class='inpu'>WATER SUPPLY</label>
                               <br><br>
                           <input type='checkbox' id='inn207' class='inputt' name='utilities3' value='Tennis' required disabled checked>
                           <label for='DRAINAGE FACILITIES' class='inpu'>DRAINAGE FACILITIES</label>
                           <br><br> 
                        </div>
        
                       
                   </div>
                <div class='esti'>
                    <div class='move'>
                <h3>ESITIMATION:</h3>
                    <label> Estimated cost:<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn208'>
                        
                        <input name='estimation' id='in208' autocomplete='off' contenteditable='true' onclick='disappear(208)' onfocusout='appear(208)' class='input' type='number' value='".decryption($row['estimation'])."' required disabled>
                    </div>
                    <br><br><br>
                    <label>Evidence of project costing:</label>
                    <iframe src='".decryption($row['evidence'])."' width='80%'' height='300'></iframe>
                    <br><br>
                    <label>Quotations of the project:</label>
                    <iframe src='".decryption($row['quotation'])."' width='80%'' height='300'></iframe>
                    <br><br>
                    <label>Schematic plans of the project:</label>
                    <iframe src='".decryption($row['schematic_plan'])."' width='80%'' height='300'></iframe>
                    <br><br><br><br>
                    <label> Centre's share excluding above:<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn209'>
                        
                    <input name='centre_share' id='in209' autocomplete='off' contenteditable='true' onclick='disappear(209)' onfocusout='appear(209)' class='input' type='number' value='".decryption($row['centre_share'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                <br><br>
                </div>
                <div class='reg11'>
                    
                    <div class='dummy'>
                                    <br><br>
                                    <label>Scope of the project <span style='color: red;'>*</span></label><br><br>
                                    <div id='inn101'>
                                        <textarea class='textarea' rows='10' name='scope' id='in101' autocomplete='off' contenteditable='true' onclick='disappear(101)' onfocusout='appear(101)' class='input' required disabled>".decryption($row['scope'])."</textarea>
                                    </div>
                    </div>
                    
                
                
                    
                    <div class='dummy'>
                    <br>
                                    <label>Site plans <span style='color: red;'>*</span></label><br><br>
                                    <div id='inn102'>
                                        <textarea class='textarea' rows='10' name='plan' id='in102' autocomplete='off' contenteditable='true' onclick='disappear(102)' onfocusout='appear(102)' class='input' required disabled>".decryption($row['plan'])."</textarea>
                                    </div><br><br>
                </div>
                    
                    
                    <div class='dummy'>
                                    <label>Methods for reducing cost <span style='color: red;'>*</span></label><br><br>
                                    <div id='inn103'>
                                        <textarea class='textarea' rows='10' name='methods' id='in103' autocomplete='off' contenteditable='true' onclick='disappear(103)' onfocusout='appear(103)' class='input' required disabled>".decryption($row['methods'])."</textarea>
                                    </div><br>
                </div>
                    
                
                    <div class='dummy'>
                    <br>
                                    <label>Facility management: <span style='color: red;'>*</span></label><br><br>
                                    <div id='inn104'>
                                        <textarea class='textarea' rows='10' name='facility' id='in104' autocomplete='off' contenteditable='true' onclick='disappear(104)' onfocusout='appear(104)' class='input' required disabled>".decryption($row['facility'])."</textarea>
                                    </div><br><br>
                </div>
                    
                    <div class='dummy'>
                                    <label>Employment Oppportunity <span style='color: red;'>*</span></label><br><br>
                                    <div id='inn105'>
                                        <textarea class='textarea' rows='10' name='oppurtinity' id='in105' autocomplete='off' contenteditable='true' onclick='disappear(105)' onfocusout='appear(105)' class='input' required disabled>".decryption($row['oppurtinity'])."</textarea>
                                    </div><br><br>
                </div>
                </div>
                    <div class='reg1'>
                    <div class='dummy'>
                    <label>No of centres:<span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn106'>
                        <input name='no_of_centre' id='in106' autocomplete='off' contenteditable='true' onclick='disappear(106)' onfocusout='appear(106)' class='input' type='number' value='".decryption($row['no_of_centre'])."' required disabled/>
                    </div>
                    <br><br>
                </div>
                    <div class='dummy'>
                    <label>Availability of centre:<span style='color: red;'>*</span></label>
                    <br>
                    <br>
                    ";
                    if(decryption($row['availability'])=='on'){
                        echo "
                        <input name='availability' id='in107' autocomplete='off' contenteditable='true' onclick='disappear(107)' onfocusout='appear(107)' class='inputt' type='radio' required checked>
                        <label class='inpu'>YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input name='availability' id='in108' autocomplete='off' contenteditable='true' onclick='disappear(108)' onfocusout='appear(108)' class='inputt' type='radio' required disabled>
                        <label class='inpu'>NO</label>
                        ";
                    }
                    else{
                        echo "
                        <input name='availability' id='in107' autocomplete='off' contenteditable='true' onclick='disappear(107)' onfocusout='appear(107)' class='inputt' type='radio' required disabled>
                        <label class='inpu'>YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input name='availability' id='in108' autocomplete='off' contenteditable='true' onclick='disappear(108)' onfocusout='appear(108)' class='inputt' type='radio' required checked>
                        <label class='inpu'>NO</label>
                        ";
                    }
                        echo "
                    <br><br>
                </div>
                    <div class='dummy'>
                    <label>No of Players: <span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn109'>
                        <input name='no_of_players' id='in109' autocomplete='off' contenteditable='true' onclick='disappear(109)' onfocusout='appear(109)' class='input' type='number' value='".decryption($row['no_of_players'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                    <div class='dummy'>
                    <label>User base: <span style='color: red;'>*</span></label>
                    <br><br>
                    <div id='inn110'>
                        <input name='user_base' id='in110' autocomplete='off' contenteditable='true' onclick='disappear(110)' onfocusout='appear(110)' class='input' type='number' value='".decryption($row['user_base'])."' required disabled>
                    </div>
                    <br><br>
                </div>
                   </div>
                   <div class='reg11' >\
                    <div class='dummy'>
                    <label>Need of Project: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn111'>
                        <textarea class='textarea' rows='10' name='need' id='in111' autocomplete='off' contenteditable='true' onclick='disappear(111)' onfocusout='appear(111)' class='input' required disabled>".decryption($row['need'])."</textarea>
                    </div><br><br>
                </div>
                    <div class='dummy'>
                    <label>Situation of project under natural disaster: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn112'>
                        <textarea class='textarea' rows='10' name='situation_disaster' id='in112' autocomplete='off' contenteditable='true' onclick='disappear(112)' onfocusout='appear(112)' class='input' required disabled>".decryption($row['situation_disaster'])."</textarea>
                    </div><br><br>
                </div>
                    <div class='dummy'>
                    <label>How it increases participation: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn113'>
                        <textarea class='textarea' rows='10' name='participation' id='in113' autocomplete='off' contenteditable='true' onclick='disappear(113)' onfocusout='appear(113)' class='input' required disabled>".decryption($row['participation'])."</textarea>
                    </div><br><br>
                </div>
                    <div class='dummy'>
                    <label>Oppurtunities to boost participation: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn114'>
                        <textarea class='textarea' rows='10' name='boost' id='in114' autocomplete='off' contenteditable='true' onclick='disappear(114)' onfocusout='appear(114)' class='input' required disabled>".decryption($row['boost'])."</textarea>
                    </div><br><br>
                </div>
                    <div class='dummy'>
                    <label>Benefits of project: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn115'>
                        <textarea class='textarea' rows='10' name='benefits' id='in115' autocomplete='off' contenteditable='true' onclick='disappear(115)' onfocusout='appear(115)' class='input' required disabled>".decryption($row['benefits'])."</textarea>
                    </div><br><br>
                </div>
                    <div class='dummy'>
                    <label>How gender equality is achieved: <span style='color: red;'>*</span></label><br><br>
                    <div id='inn116'>
                        <textarea class='textarea' rows='10' name='gender_equality' id='in116' autocomplete='off' contenteditable='true' onclick='disappear(116)' onfocusout='appear(116)' class='input' required disabled>".decryption($row['gender_equality'])."</textarea>
                    </div><br><br>
                </div>
                   
                </div>
                
                <div class='options'>
                    <div class='extra'>
                    <label for='sport'> Choose the sport :  </label><br><br>
                    <div class='wrapper'>
                        <div class='inn500'>
                            <input name='sports_category' id='in500' type='text' value='".$row['sports_category']."' contenteditable='true' onclick='disappear(500)' onfocusout='appear(500)' class='input'  required disabled>
                        </div>
                </div>
                    <br><br>
                    
                <label>Acknowledgement :</label><br>
                <iframe src='".decryption($row['acknowledgement'])."' width='80%'' height='300'></iframe>
                <br><br>
                </div><br><br><input type='text' name='iiid' hidden value='".$id."' />
                ";

                if($row['status']==0){
                echo "
                    <center><input type='checkbox' id='confirm' class='inputt' name='confirm' value='confirm' required>
                    <label for='confirm' class='inpu'>I accept the terms and conditions</label></center>
                    <br><br><br>
                    <center>
                        <input type='submit' class='button' name='action' value='Decline' style='background-color:red ' />
                        &emsp;&emsp;&emsp;&emsp;
                        <input type='submit' class='button' name='action' value='Accept' style='background-color:green ' />
                        <br><br>
                    </center>
                    </div>
                    </form>
                    <br><br>
                    <br><br>
                ";
                }
                else if($row['status']==1){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Accepted' style='background-color:green ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==-1){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Declined' style='background-color:red ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==2){
                    echo "
                    <center>
                        <input type='submit' class='button' name='action' value='Fund' style='background-color:green '/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==-2){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Inspector Declined' style='background-color:green ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==3){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Funded' style='background-color:green ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==4){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Deadline Crossed' style='background-color:red ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==5){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Project Completed' style='background-color:green ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
                else if($row['status']==-3){
                    echo "
                    <center>
                    <label>Status : </label>
                        <input type='submit' class='button' value='Sealed Project' style='background-color:red ' disabled/>
                        <br><br>
                    </center>
                    </div>
                    </form>                    
                    ";
                }
    }
}

?>
</body>
    
 
        <!--dropdownm -->
        <style>
   .wrapper{
         /*display: flex;
        justify-content: top;
        flex-wrap: wrap;
        padding: 70px 0;
        max-width: 400px;
        margin:0 auto;
        margin-top: 0%;*/
        width: 50%;
        
    }
    
    .menu,.content{
        width: 100%;
    }
    .opt{
        width: 100%;
        padding: 15px;
        font-size: 20px;
        font-family: 'Poppins';
        border: none;
        border-radius: 8px;
        border: 2px solid #3f51b5;
        
    }
    .content{
        margin: 30px 0;
    }
    .content .data{
        padding: 25px;
        background-color: #fff;
        border:2px solid #8bc34a;
        border-radius: 8px;
    }
    .data{
        display: none;
        width: 600px;
    }
@media screen and (max-width: 800px) {
    .data{
        width: 500px;
        overflow-x: scroll;
    }
}
@media screen and (max-width: 700px) {
    .data{
        width: 400px;
        overflow-x: scroll;
    }
}
@media screen and (max-width: 600px) {
    .data{
        width: 300px;
        overflow-x: scroll;
    }
}
@media screen and (max-width: 500px) {
    .data{
        width: 200px;
        overflow-x: scroll;
    }
}
    .content .button{
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: flex;
        font-size: 20px;
        margin-left: 45%;
        margin-top: 20px;
        transition-duration: 0.4s;
        cursor: pointer;
        background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  
}
.button:hover {
  background-color: #4CAF50;
  color: white;
}

    
        </style>
            <script>
                function disappear(id){
                    console.log("in"+id);
                    document.getElementById("in"+id).style.border = "3px solid green";
                    document.getElementById("inn"+id).style.border = "1px solid aliceblue";
                }
                function appear(id){
                    var x = document.getElementById("in"+id).value;
                    console.log(x);
                    if(x){
                        console.log("in"+id);
                        document.getElementById("in"+id).style.border = "1px solid black";
                        document.getElementById("inn"+id).style.border = "3px solid aliceblue";
                    }
                    else{
                        console.log("uhvosovjsovjsoi");
                        document.getElementById("in"+id).style.border = "3px solid red";
                        document.getElementById("inn"+id).style.border = "1px solid aliceblue";
                    }
                }
            </script>

</html>