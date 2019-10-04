<?php

     
  // session_start();
   // include("booksear.php");
    // include("login.php");
  if(isset($_SESSION["username"]))
    header("Location: dashboard.php");

   include("login.php");
   // session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <script src="https://kit.fontawesome.com/29e5c2c930.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Aclonica|Bungee+Inline&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
	<title>LOG IN</title>
	<style>
	body{
		background-color: black;
	}

		#ab{
			/*border:outline;*/
			/*background:none;*/
			border-radius:10px;
			/*border-color: orange;*/
		}

      ul{
             list-style: none;	
             position: absolute;
             top:200px;
             left:495px;
       }
       li{
       	     padding:15px;
       }
       input{
       	width:185px;
       	height:50px;
       	/*font-size: 25px;*/
       	border-radius: 10px;
       	/*background: black;*/
       background: rgba(255,255,255,.2);
       transition: 0.5s;
       background-color: black;
       color: black;
       /*background-color: black;*/
       /*opacity: 0.5;*/
       }
       input:focus {
    
  outline-color: rgba(49,148,62,0);
  background: rgba(255,255,255,.95);
  /*color: black;*/
  color:#2F4F4F;
  height:45px;
  width:170px;
  font-size:20px;
  font-weight: bold;
}

  input[placeholder]{
  	padding-left: 10px;

  	/*text-align: center;*/

   }

   #b1{
   	position: absolute;
   	top:345px;
   	left:780px;
   	height: 121px;
    width: 50px;
    border-radius: 10px;
    background:#e74c3c;
    border:none;
   }

   #sig{
   	display: none;
   }
   #log{
   	position: absolute;
   	top:260px;
   	left:480px;
   }
   #b2{

   	position: absolute;
   	top:50px;
   	left:276px;
   	height:90px;
   	width:50px;
   	border:none;
   	background:#e74c3c;
   	border-radius:8px;
   }
   #d1{
   	width:100px;
   	height:100px;
   /*	background-image: url(kis1.png);*/
   
   }
  /* @keyframes main{

    10%{rotate:10deg;}
    40%{rotate:30deg;}
    750%{rotate:-30deg;}
    100%{rotate:-10deg;}


   }*/

/*   #sign_pic{
     position: absolute;
     top:200px;
     left:200px;
     width:100px;
     height:200px;
   }*/
   #back{
    position: absolute;
    top:56px;
    /*left:230px;*/
    /*border-radius: 40px;*/
    opacity: 0.5;
    width:800px;
     /*background-image: url(page.gif);*/

   }
   ol{
    list-style: none;
   }
	</style>
</head>
<body>
  <p id="de" style="color: blue;"></p>
  <!-- <div style="opacity: 0.2;position: absolute;left:400px;" id="frame" ><img src="frame1.png"></div> -->
  <!-- <div id="sign_pic"><img src=""></div> -->
      <!-- <div id="d1"><img src="kos1.png" style="width:200px;height:200px;position:absolute;top:10px;left:540px;opacity:1;animation: main 3s ease infinite;"></div> -->
      <p style="font-family: 'Fredoka One', cursive;position: absolute;top: -95px;left:460px;color: white;font-size: 95px">LIBRARY</p>
      <div id="back"><img src="enter.gif" width="1350" height="600"></div>
      <!-- <div id="light"><img src="light.png" style="width:150px;height:150px;position:absolute;top:20px;left:730px;></div> -->
	 
	 <p id="para2" onclick="login()" style="color:rgb(240,230,140);cursor:pointer;position: absolute;top:162px;left:679px;font-size:21px;font-family: 'Aclonica', sans-serif;"> &nbsp;LOG IN</p>
	 <p id="para2" onclick="login()" style="color:red;cursor:pointer;position: absolute;top:550px;left:892px;display:none;font-family: 'Aclonica', sans-serif;">LOG IN</p>
	 <p id="para1" onclick="sign()" style="color:rgb(240,230,140);cursor:pointer;position: absolute;top:162px;left:535px;font-family: 'Aclonica', sans-serif;font-size:21px;">SIGN UP &nbsp;&nbsp; /</p>
   <!-- <p style="color:red;cursor:pointer;"> -->
    <hr style="position: absolute; top:200px;left:535px;width:225px;">
 
     
   <!-- </p> -->
<div id="sig" >
<form method="post" action="connec.php" >
   <ul>
   <li><input id="ab" class="a1" type="text" name="usern" placeholder="USERNAME" required minlength="6"></li>
   <li><input id="ab" class="a2" type="text" name="surn" placeholder="SURNAME" required minlength="4"></li>
   <li><input id="aba" class="a3" type="password" name="passw" placeholder="PASSWORD" required maxlength="10" minlength="7"></li>
   <li><input id="abb" class="a4" type="password" name="" placeholder="CONFIRM PASSWORD" required maxlength="10" minlength="7" onkeyup="clica()"></li>
   <li><input id="ab" class="a5" type="email" name="ema" placeholder="EMAIL" required></li>
   </ul>
   <button id="b1" name="submitsig" style="box-shadow: 0 0 12px black;"><span style="font-weight: bold;font-size:20px;">GO</span></button></form>

</form>
</div>


<div id="log">
 <form method="post" action="">
 	<ol>
 		<li><input id="ac" class="b4" type="text" name="username" placeholder="USERNAME" required=""></li>
 		<li><input id="aca" class="b5" type="password" name="password" placeholder="PASSWORD" required="" ><i class="fas fa-eye fa-2x" style="color:rgb(240,230,140);position: absolute;left:188px;top:119px;" onclick="reveal()"></i>
</li>
 	</ol>
 <button id="b2" name="submitlog" style="box-shadow: 0 0 18px black;"><span style="font-weight: bold;font-size:20px;">GO</span></button></form> 	

<div>

</form>
<!-- 
<p onclick="https://github.com/"  style="color:rgb(240,230,140);cursor:pointer;position: absolute;top:-150px;left:135px;font-size:21px;font-family: 'Aclonica', sans-serif;">ADMIN</p> -->
<a style="color:rgb(240,230,140);cursor:pointer;position: absolute;top:-130px;left:135px;font-size:21px;font-family: 'Aclonica', sans-serif;" href="http://localhost/youtube/libpr/adminlogin.php">ADMIN</a>







<script>
 	
  function sign(){
 document.getElementById("sig").style.display = "block";
 document.getElementById("log").style.display = "none";
 // document.getElementById("para1").style.display = "none";
 // document.getElementById("para2").style.display = "block";
 
 } 

 function login(){
 document.getElementById("sig").style.display = "none";
 document.getElementById("log").style.display = "block";
 // document.getElementById("para2").style.display = "none";
 // document.getElementById("para1").style.display = "block";

 } 




 function clica()
  
  {

  
  var k=0;
  var za=0;
  var zb=0;
  var a = document.getElementById('aba').value;
  

  var b = document.getElementById('abb').value;
   za = a.length;

   zb = b.length;
  if( za != zb)
  {
  
    document.getElementById("aba").style.borderColor = "red";
    document.getElementById("abb").style.borderColor = "red";

  }
     else{

        for(var i=0 ; i<=za ; i++)
        {

          if(a[i] != b[i])
          {
             k = k + 1; 
          }
      
        }
        if(k!=0)
        {
          document.getElementById("aba").style.borderColor = "red";
          document.getElementById("abb").style.borderColor = "red";
         }
        else
        {
          document.getElementById("abb").style.borderColor = "green";
          document.getElementById("aba").style.borderColor = "green";
          
        }     
        }
   
}


function reveal() {
  var x = document.getElementById("aca");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  

</script>





</body>
</html>