<!DOCTYPE html>
<html lang="en">
<head>
	
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
		
	function recaptchaCallback() {
		document.getElementById("submit").disabled = false;
	};
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
		*{
		  margin:0;
		  padding: 0;
		  box-sizing: border-box;
		  font-family: 'Poppins', sans-serif;
		}
		 html{
		  background-color: #dddddd;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		  height: 600px;
		 
		 }

		html{
		  display: grid;
		  place-items: center;
		  text-align: center;
		  background-size: cover;
		  background-color:paleturquoise;
		}

		.content{
		  width: 340px;
		  border-radius: 10px;
		  padding: 40px 30px;
		  
		 
		}
		.container{
			background-color:beige;
			margin-top: 20vh;
			margin-right:5vh;
			box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
			background-color: #eeeeee;
			border-radius: 2vh;
		}


		.content .text{
		  font-size: 25px;
		  font-weight: 600;
		  margin-bottom: 35px;
		  color: rgb(48, 44, 44);
		}

		.content .field{
		  height: 50px;
		  width: 100%;
		  display: flex;
		  position: relative;
		}

		.field input{
		  height: 100%;
		  width: 100%;
		  padding-left: 45px;
		  font-size: 18px;
		  outline: none;
		  border: none;
		  color: rgb(48, 44, 44);
		  border: 1px solid rgba(65, 51, 51, 0.438);
		  border-radius: 8px;
		  background: rgba(105, 105, 105, 0);
		 
		}


		.field input::placeholder{
		  color: #3a2c2ca6;
		}
		.field:nth-child(2){
		  margin-top: 20px;
		}

		.field span{
		  position: absolute;
		  width: 50px;
		  line-height: 50px;
		  color:rgb(48, 44, 44);
		}



		#submit{
		  margin: 25px 0 0 0;
		  width: 100%;
		  height: 50px;
		  color:  rgb(48, 44, 44);
		  font-size: 18px;
		  font-weight: 600;
		  border: 2px solid rgba(69, 58, 58, 0.438);
		  border-radius: 8px;
		  background: rgba(105, 105, 105, 0);
		 margin-top: 40px;
		  outline: none;
		  cursor: pointer;
		  border-radius: 8px;
		 
		}
		 
		.content .or{
		  color:rgb(48, 44, 44);
		  margin-top: 9px;
		}
		 
		.icon-button{
		  margin-top: 15px;
		}
		.icon-button span{
		  padding-left: 17px;
		  padding-right: 17px;
		  padding-top: 6px;
		  padding-bottom: 6px;
		   color: rgb(48, 44, 44);
		 border-radius: 5px;
		  line-height: 30px;
		  background: rgba(255, 255, 255, 0.164);
			backdrop-filter: blur(10px);
		}
		.icon-button span.facebook{
		  margin-right: 17px;

		}
		#submit:hover,
		.icon-button span:hover{
		  background-color: #1d1f248c;
		}
		.gf{
				margin-top:25px;
		}
		.g-recaptcha{
			width: 100%;
		}
		.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius:15px;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-top:20px;
  margin-right:200px;
  width:275px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  position: center;
}

.dropdown-content a:hover {background-color:#0D3849;
	color:white;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#66CDAA;
	color:black;
}
.fa-language{
	font-size:20px;
}
 
    </style>
</head>
<body>
    <form id="cap-form" action="validation.php" method="post" name="form" enctype="multipart/form-data">
        <div class="container">
            <div class="content">
                <div class="text">लॉग इन करें</div>
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="id" placeholder="User ID" required>
                </div><br>
                <div class="field">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="pass" placeholder="Password" >		
                </div><br>
				<div  data-callback="recaptchaCallback" class="g-recaptcha" data-sitekey="6LdWSWchAAAAAGMXSvUuVncocoYwJQ6gZ88pE91W"></div>
				<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-language"> Language</i></button>
					<div class="dropdown-content">
						<a href="../login.php">English</a>
						<a href="../Malayalam/login.php">Malayalam</a>
						<a href="">Hindi</a>
						<a href="../Tamil/login.php">Tamil</a>
					</div>
				</div>
                <input id="submit" type="submit" name="submit" value="LOG IN" disabled/>
				<br><br>
				<a href="https://nsrs.kheloindia.gov.in/Registration/AcademyAI" target=”_blank”>Register / Sign Up</a>
            </div>
            
        </div>
    </form>
	
    <?php

        if ( isset($_GET['success']) && $_GET['success'] == 1 ){
            echo '<script>alert("pysch !! Thats the wrong number !!")</script>';
        }
        if ( isset($_GET['success']) && $_GET['success'] == 2 ){
            echo '<script>alert("")</script>';
        }

    ?>

</body>
</html>