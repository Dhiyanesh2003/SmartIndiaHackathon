<?php
	session_start();
?>
<html>
<style>
    .footer .social_icon a i {
        top: 0px !important;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
    <link rel="stylesheet" href="../chatbot/static/css/chat.css">
    <link rel="stylesheet" href="../chatbot/static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <head>
        <title></title>
		<style>
        .header{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(128, 255, 255));
    background-attachment: fixed;
}

.table {
    width: 100%;
	margin-left: 
    margin-bottom: 1rem;
    color: #212529
}

.table th,
.table td {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table-sm th,
.table-sm td {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #dee2e6
}

.table-bordered thead th,
.table-bordered thead td {
    border-bottom-width: 2px
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
} 
body {
    font-family: "Poppins", Arial, sans-serif;
    font-size: 16px;
    line-height: 1.8;
    font-weight: normal;
    color: gray
}

a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #6807f9
}

a:hover,
a:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none
}

h1,
h2,
h3,
h4,
h5,
.h1,
.h2,
.h3,
.h4,
.h5 {
    line-height: 1.5;
    font-weight: 400;
    font-family: "Poppins", Arial, sans-serif;
    color: #000
}

.bg-primary {
    background: #6807f9 !important
}

.ftco-section {
    padding: 7em 0;
    margin-left: 20%;
    margin-right: 20%;
    padding-bottom: 20px;
}

.ftco-no-pt {
    padding-top: 0
}

.ftco-no-pb {
    padding-bottom: 0
}

.heading-section {
    font-size: 28px;
    color: #000
}

.table-wrap {
    overflow-x: scroll
}

.table {
    min-width: 100px !important;
    width: 100%;
    background: #fff;
    -webkit-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    -moz-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
    text-align: center
}

.table thead.thead-primary {
    background-color : rgb(28, 147, 237); 
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

.butto{
 border-radius: 5px;
 position: absolute;
 right: 20;
 top: 120;
 font-size: 20px;
 text-decoration: none;
 padding-top: 5px;
 padding-bottom: 6.2px;
 padding-left: 30px;
 padding-right: 30px;
 background-color: #1C93ED;
 color: white;
}
.idd{
 border-radius: 5px;
 position: absolute;
 left: 20;
 top: 120;
 font-size: 20px;
 text-align: center;
 padding: 10px;
 width: 150px;
 background-color: black;
 opacity: 0.5;
 color: white;
}
.br{
    display: none;
}
@media screen and (max-width: 450px) {
    .butto{
        left: 20;
        top: 200;
        right: auto;
    }
    .br{
        display: unset;
    }
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
    background-color: transparent;
    box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px;
}

h1{
  color:#000;  
  text-align: center ;
  font-size: 35px;
  font-weight: 900;
  font-family: 'Times New Roman', Times, serif;
}

.logo_wrap{
    background-color: transparent;
    padding: 10px;
    display: flex;
  border-right: 1px solid black;
    justify-content:space-around;
    
}
.table-wrap {
    overflow-x: scroll;
    overflow-y:scroll;
    max-height: 450px;
}
#red{
    margin: 5px;
    background-color: red;
    color: white;
}
#orange{
    margin: 5px;
    background-color: orange;
    color: white;
}
#green{
    margin: 5px;
    background-color: green;
    color: white;
}
#purple{
    margin: 5px;
    background-color: purple;
    color: white;
}
#yellow{
    margin: 5px;
    background-color: yellow;
    color: black;
}
#blue{
    margin: 5px;
    background-color: blue;
    color: white;
}
#violet{
    margin: 5px;
    background-color: violet;
    color: white;
}

        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<br><header>
        <div class="logo_wrap">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/KHEL0_INDIA_LOGO.svg" alt="" class="img-fluid" style="height:69px;">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/SATYAMEV_JAYATE_LOGO.svg" alt="" class="img-fluid" style="height:67px;">
            <img src="https://nsrs.kheloindia.gov.in//Content/images/new_design_images/SAI_LOGO.svg" alt="" class="img-fluid" style="height:66px;">
            
        </div>
        <div>
            
            <b><h1>&nbsp;&nbsp;&nbsp;അപേക്ഷക &nbsp; വിശദാംശങ്ങൾ</h1></b>       <div>
    </header>
    <main>
    <br><br><br>

		<?php
			$id=$_SESSION["id"];
			echo "<input class='idd' value='KID : ".$id."' disabled>";
		?>
        <br class="br">
        <br class="br">
        <br class="br">
        <br class="br">
        <br class="br">
        <a class="butto" href="terms.html">+ പുതിയത് അപേക്ഷക</a>

		<section class="ftco-section">
       
	   <div class="container">    
		   <div class="row">
			   <div class="col-md-12">
				   <div class="table-wrap">
					   <table class="table">
						   <thead class="thead-primary">
							   <tr>
								   <th>എസ്.എൻ.ഒ</th>
								   <th>പദ്ധതിയുടെ പേര്</th>
								   <th>ബജറ്റ്</th>
								   <th>ഡെഡ്ലൈൻ</th>
								   <th>പദവി</th>
							   </tr>
						   </thead>
						   <tbody>

						<?php
                        
                            include '../security/encryption.php';
                            include '../security/decryption.php';

                            $kid=$_SESSION["id"];
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "kheloindia";
							
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}
							
							$sql = "SELECT * FROM application_details where KID='".$kid."';";
							$result = $conn->query($sql);
							$count=1;
							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
                                if($row['status']=='0'){
                                    $status='Applied';
                                    $class="yellow";
                                }
                                else if($row['status']=='1'){
                                    $status='Inspection Expected<br>Anytime';
                                    $class="orange";
                                }
                                else if($row['status']=='-1'){
                                    $status='Declined - Invalid credentials / inputs';
                                    $class="red";
                                }
                                else if($row['status']=='2'){
                                    $status='Ready for funding';
                                    $class="blue";
                                }
                                else if($row['status']=='-2'){
                                    $status='Declined - Mismatch / unreal data inputs';
                                    $class="red";
                                }
                                else if($row['status']=='3'){
                                    $status='Project Funded';
                                    $class="purple";
                                }
                                else if($row['status']=='4'){
                                    $status='Deadline Crossed<br>Inspection expected anytime';
                                    $class="violet";
                                }
                                else if($row['status']=='5'){
                                    $status='Project Completed';
                                    $class="green";
                                }
                                else if($row['status']=='-3'){
                                    $status='Declined - Confiscation of property';
                                    $class="red";
                                }
								echo "
								<tr>
                                    <th scope='row' class='scope'>".$count."</th>
                                    <td>".decryption($row['projectname'])."</td>
                                    <td>Rs. ".decryption($row['estimation'])."</td>
                                    <td>".$row['deadline']."</td>
                                    <td id='".$class."'>".$status."</td>
                                     
                                </tr>
                                ";
                                $count+=1;
                                      }
                                    }
                                    $conn->close();
                                ?>        
						</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    </main>

<body>
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div id="intro">
            Hi !! I am here to assist you !!
        </div>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../chatbot/static/scripts/responses.js"></script>
<script src="../chatbot/static/scripts/chat.js"></script>

</html>
</body>
<!-- <footer class="footer pt-5">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-4 col-lg-3 col-7">
                        <h2>Contact</h2>

                        <p class="mb-3">
                            Sports Authority of India<br> Jawaharlal Nehru Stadium<br> Complex (East Gate) Lodhi
                            Road<br> New Delhi - 110003.<br>

                            Helpline Number : 1800-202-5155,<br />1800-258-5155 (Toll-Free)
                            <br> Working Days : Monday to Friday
                            <br> Working Time : 9.00 AM to 5.30 PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer float-left">

        <div class="copy-right float-left">
            <div class="container">
                <p class="float-left mt-3">Website Content Managed by Sports Authority of India. Designed, Developed by IT Division & Hosted by NIC</p>
                <div class="social_icon">
                    <a href="https://www.facebook.com/sportsauthorityofindiaMYAS/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/Media_SAI#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/media.iccsai/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCceXuxV_oJJeOLgGaaeQW_w" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer> -->

</html>
