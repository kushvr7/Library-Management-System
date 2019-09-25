
<?php

 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Fjalla+One&display=swap" rel="stylesheet">
	<title>ADMIN</title>
	<style>
		body{
			background-image: linear-gradient(285deg, #051937, #004d7a, #008793, #00bf72);
			/*opacity: 0.5;*/
		}
		#diva{
			position: absolute;
			top: 100px;
			left:380px;
			width: 600px;
			height: 470px;
			background-color: white;
			border-radius:8px;
			/*opacity: 0.5;*/
			/*opacity:1;*/

		}
		input{
			width:340px;
			height:35px;
			border-radius:4px;
			border: none;
			border :1px solid grey;
		}
		::placeholder{
			padding-left: 14px;
			font-size:15px;
		}
		input[placeholder]{
  	padding-left: 16px;
  	font-size: 15px;

  	/*text-align: center;*/

   }

   #divb{
   	position: absolute;
   	top: -100px;
   	left: 160px;
   	width:50px;
   	height:50px;
   	border-radius: 50%;
   	/*background-color: grey;*/
   	border: 1px solid grey;
   	transition:0.5s;
   	

   }
   #divb:hover {
   	animation : aa 3s linear 1;
   }
   
     @keyframes aa {

   /*	0%{   box-shadow: 0 0 0 10px rgba(119, 127, 30,0.8) ,  0 0 0 10px rgb(64,224,208)    }*/
   	20%{  box-shadow: 0 0 0 12px rgba(119, 127, 30,0.4), 0 0 0 12px rgb(64,224,208)       }
   	60%{  box-shadow: 0 0 0 15px rgba(119, 127, 30,0), 0 0 0 15px rgb(64,224,208)        }
    100%{ box-shadow: 0 0 0 17px rgba(119, 127, 30,0), 0 0 0 17px rgb(64,224,208)       }
   }


	</style>
</head>
<body>

<div id="diva">
<form method="post" action="adminlog.php" style="position:absolute;top:230px;left:120px;" >

	<p style="position: absolute;top:-220px;left:86px;font-family: 'Varela Round', sans-serif;font-size:29px;"><b>ADMIN</b>&nbsp; PORTAL</p>
		<a href="http://localhost/youtube/libpr/first.php">		<div id="divb">
			<img src="liblogo.png" style="background-size: cover;width: 46px;height: 40px">
        <p style="font-family: 'Archivo Black', sans-serif;position: absolute;margin-left:-7px;color: black;"> PORTAL</p>
	</div></a>
	<input type="name" name="user" placeholder="Admin ID"><br>
	<br>
	 <input type="password" name="pass" placeholder="Password">
     <a href="#"><p style="position:absolute;top:99px;left:233px;font-size:16px;color:rgb(0,206,209);">Forgot Password?</p></a>
	 <button style="position:absolute;top:159px;left:8px;width:340px;height:39px;border-radius:16px;border:none;background-color:rgb(0,255,127);opacity:0.9;color:white;font-family: 'Archivo Black', sans-serif;font-size:18px; " name="submit" >LOGIN</button>

</form>
</div>

</body>
</html>