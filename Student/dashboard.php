 <?php    
  session_start();
  if(!isset($_SESSION["username"]))
  	 header("Location:first.php");

   // include("booksear.php");
    // include("login.php");

?>



<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Fredoka+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
	<title>DASHBOARD</title>
	<style>
	body{
		/*background-color: rgb(189,183,107);*/
		background-color: rgb(105,105,105);
	}
		#slide{
			position: absolute;
			top: 50px;
			left:0px;

			width:230px;
			height:607px;
			box-sizing: border-box;
			border-top: 8px solid black;
			/*border-right:1px solid black;*/
			/*border-bottom: 8px solid black;*/
			/*background-color: rgb(47,79,79);*/
		     /*background-image: linear-gradient(90deg,black,pink);*/
		     /*background-color: rgb(105,105,105);*/
		     background-color: black;
		}
		ul{
			list-style: none;
		}
		li{
			padding: 20px;
			/*width:350px;*/
		}
		#mempic{
			height:100px;
		}
		#img1:hover{
			opacity: 0.5;
			/*background-color: rgb(105,105,105);*/
			/*border-bottom: 6px solid orange;*/
		}
		#cent{
			/*background :none;*/
			/*border:none;*/
			position: absolute;
			top: 50px;
			left:423px;
			width:100px;
			height:100px;
			opacity: 0.3;
			/*background-image: url("libbo.jpg");*/
			 /*background-image: url(loob.png) ;*/
              /*background-size: cover;*/
              }
              input:focus{
              	background-color: grey;
              }
              input {
              	padding-left: 20px;
              	font-family: 'Acme', sans-serif;
              }
              
              	/*background-color: rgb(105,105,105);*/
              #butsear:hover{
              	/*background-color: black;*/
              	color:black;
              	font-size: 20px;

              }
              

	</style>
</head>
<body>
	<div id="cent"><img src="loobq.png"></div>
	<div id="top" style="position:absolute;top:0px;left:0px;width:1366px;height:50px;background-color:black;"><p style="color:white;font-size: 28px;position: absolute;top:-19px; left:10px;font-family: 'Acme', sans-serif;">LIBRARY MANAGEMENT</p><p style="color:white;position: absolute;left:1100px;top:-7px;font-family: 'Acme', sans-serif;font-size: 20px">Welcome &nbsp;:&nbsp;&nbsp;</p> <span style="color: white;position: absolute;left:1197px;top:13px;font-size:20px;font-family: 'Acme', sans-serif;"><?php echo $_SESSION["username"] ?> </span></div>


 <div id="slide">
 	
 	
 		
 	<ul>
 		<li id="img1" onclick="hide()" ><img src="search.png" style="width:100px;height:88px;cursor:pointer;"></li>
 		<li id="img1" onclick="hide1()"><img src="assistance.png" style="width:100px;height:88px;cursor:pointer;"></li>
 		<li id="img1" onclick="hide2()"><img src="books.png" style="width:100px;height:88px;cursor:pointer;"></li>
 		<li id="img1"><img src="student.png" style="width:100px;height:88px;cursor:pointer;"></li>
 	</ul>

 </div>

 <form id="form1" style="position: absolute;top: 150px;left:450px;" method="post" action="booksear.php">
     
     <ul>

     <li><span style="font-family: 'Bangers', cursive ;font-size: 25px;"> BOOK ID :</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input   style="border-radius: 8px;font-size:25px;font-weight: bold; "type="number" name="id_book" required=""></li><br>
     <br><li><span style="font-family: 'Bangers', cursive;font-size: 25px;">BOOK NAME :</span> &nbsp;&nbsp;<input  style="border-radius: 8px;font-size:25px;font-weight: bold; " type="text" name="name_book">	
     </li><br>
     <br><li><span style="font-family: 'Bangers', cursive; font-size: 25px ;">AUTHOR :</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border-radius: 8px;font-size:25px;font-weight: bold; " type="text" name="author_book"></li>
  
      </ul>
      <button id="butsear" name="search_book" style="position: absolute;left: 270px;top:350px;border:none;background-color:#e74c3c;border-radius:10px;width:90px;height:40px;font-family: 'Fredoka One', cursive;box-shadow: 0 0 18px black;">SEARCH</button>


 </form>


   <form id="form2" style="display:none;position:relative;top:120px;left:450px;width:100px;" action="grievance.php" method="post">
   	
   	<ul>

   	<li><span style="font-family: 'Bangers', cursive ;font-size: 25px;">CONTACT </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="border-radius: 8px;font-size:25px;font-weight: bold;" name="CONTACT_book"></li>
   	<li><span style="font-family: 'Bangers', cursive ;font-size: 25px;">grievance </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea  style="font-family: 'Bangers', cursive;" name="comment" rows="9" cols="69" placeholder="Grievance ......"></textarea></li>
    <li>
    
    	<select style="border-radius:10px;border: 3px solid black ;width:150px;height:34px;background-color: rgb(244,164,96);font-family: 'PT Sans Narrow', sans-serif;font-weight:bold;">
    		<span style="font-family: 'PT Sans Narrow', sans-serif;">
    		<option name="OPTION_book">FORWARD TO ..</option>
    		<option  value="LIBR">LIBRARIAN</option>
    		<option value="ADDLIB">ADD. LIBRARIAN</option>
    		<option value="LIBMAN">LIBRARY MANAGER</option>
    		<option value="LIBASS">LIBRARY ASSISTANT</option>
    	</span>
    	</select>

   
    </li>
    </ul>

    <button style="position: absolute;left:230px;top:440px;border:none;background-color:#e74c3c;border-radius:10px;width:90px;height:40px;font-family: 'Fredoka One', cursive;box-shadow: 0 0 18px black;" name="grievance_book">FORWARD</button>

   </form>


   <form id="form3" style="display:none; position:absolute;top: 110px;left:550px;width:100px;" action="request.php" method="post">
   	<ul>
   	
   <li><span style="font-family: 'Bangers', cursive ;font-size: 25px;"> NAME  </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border-radius: 8px;font-size:25px;font-weight: bold; " type="text" name="reqname"></li>

  <li><span style="font-family: 'Bangers', cursive ;font-size: 25px;"> AUTHOR  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border-radius: 8px;font-size:25px;font-weight: bold; " type="text" name="reqauthor"></li>

   <li><span style="font-family: 'Bangers', cursive ;font-size: 25px;"> PUBLICATIONS </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border-radius: 8px;font-size:25px;font-weight: bold; " type="text" name="reqpub">&nbsp;&nbsp;</li>
   </ul>

   <button style="position: absolute;left: 169px;top:390px;border:none;background-color:#e74c3c;border-radius:10px;width:90px;height:40px;font-family: 'Fredoka One', cursive;box-shadow: 0 0 18px black;" name="req">REQUEST</button>

   </form>

   <form method="post" action="logout.php">
<button style="position: absolute;left: 1275px;top:0px;border:none;background-color:#e74c3c;border-radius:0px;width:90px;height:49px;font-family: 'Fredoka One', cursive;cursor:pointer;" name="logout">LOG OUT</button>
  </form>
<!-- <button onclick="hide()" style="width:70px;height:40px;border:none;background-color: red;border-radius:8px;">hide</button> -->


<script>
     
     function hide1(){
     	document.getElementById("form1").style.display = "none";
     	document.getElementById("form2").style.display = "block";
     	document.getElementById("form3").style.display = "none";
     }
     function  hide(){
     	document.getElementById("form1").style.display = "block";
     	document.getElementById("form2").style.display = "none";
     	document.getElementById("form3").style.display = "none";
     }

     function hide2(){
      
      	document.getElementById("form1").style.display = "none";
     	document.getElementById("form2").style.display = "none";
     	document.getElementById("form3").style.display = "block";

     }


</script>

</body>
</html>