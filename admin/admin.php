<?php
  
  session_start();
  if ( ! isset($_SESSION["user"] ) ) {
  	header("location:adminlogin.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/47d5219a95.js"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 

	<title>ADMIN</title>
	

	<link href="https://fonts.googleapis.com/css?family=Aclonica|Bungee+Inline&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

    

  <!-- <meta charset="UTF-8"> -->

	<style>
	*{
		border: 0px;
	    padding: 0px;
	}
	body{
		background-color: rgb(211,211,211);
		margin:0px;
		padding:0px;
		
		/*opacity:0.7;*/
	}
		#strap{
			position: absolute;
			top:0px;
			left:0px;
			width: 200px;
			height:657px;
			background-image: linear-gradient( 45deg ,#A5C7B7,#5D4257);
			/*opacity:0.9;*/
			/*background-color: black;*/
			/*background-image: url(libback.jpg);*/
		background-size: cover;
		/*color: black;*/
		}
		#top{
			position: absolute;
          top:0px;
          left: 0px;
           width:1366px;
           height:35px;
          background-color:rgb(139,69,19);

		}
		#lib{
			position: absolute;
			top:10px;
			left:21px;
			font-family: 'Aclonica', sans-serif;
			font-size: 32px;
			color: white;
		}
		i{
			/*background-color: black;*/
		}
		.head1{
            position: absolute;
            top: 300px;
            left:300px;
            width:100px;
            height:50px;
            background-color: blue;
		}
		i{
			color: white;

		}
		#pq{
			color: white;
			font-size: 20px;
		}
		#li1{
			/*position: absolute;*/
			/*top: 10px;*/
			/*left: 30px;*/
			padding:30px;
		}
		#ul1{
			position: absolute;
			top: 99px;
			left:-23px;
		}
		#pq:hover{
			color:rgb(220,20,60);
		 }
		 i:hover{
		 	color:rgb(0,255,127);
		 	/*font-size: 9px;*/
		 }
		 #indiv{
		 	position: absolute;
		 	top:100px;
		 	left:400px;
		 	width:250px;
		 	height:105px;
		 	background-color: grey;font-family: 'Aclonica', sans-serif;
		 	padding-left: 38px;
		 	box-shadow: 0 0 4px black;
		 }
		 #indiv1{
		 	position: absolute;
		 	top:100px;
		 	left:698px;
		 	width:250px;
		 	height:105px;
		 	background-color: grey;font-family: 'Aclonica', sans-serif;
		 	padding-left: 38px;
		 	box-shadow: 0 0 4px black;
		 }
		 #sp1{
		 	padding-top: 29px;
		 	padding-left: 88px;
		 	font-size:48px;
		 }
		  #sp2{
		 	padding-top: 29px;
		 	padding-left: 88px;
		 	font-size:48px;
		 }
		  #sp3{
		 	padding-top: 29px;
		 	padding-left: -14px;
		 	font-size:48px;
		 }
		  #indiv:hover,#indiv1:hover,#indiv2:hover{
             /*background-color: white;*/
             /*background-color: rgb(220,20,60);*/
             color: black;
             /*background-image: linear-gradient( 45deg ,black , #cc5333  );*/
             background-image: linear-gradient( 45deg ,#A5C7B7,#5D4257);
             /*opacity: 0.8;*/

             color:rgb(0,255,127);     }
             #indiv2{
		 	position: absolute;
		 	top:100px;
		 	left:998px;
		 	width:250px;
		 	height:105px;
		 	background-color: grey;font-family: 'Aclonica', sans-serif;
		 	padding-left: 38px;
		 	text-align: center;
		 	box-shadow: 0 0 4px black;
		 }
		 #ul2
		 {
		 	position: absolute;
		 	left: -130px;

		 }
		 #diva{

		 	width:400px;
		 	height:190px;
		 	background-color: white;
		 	position: absolute;
		 	top:300px;
		 	left:300px;
		 	box-shadow: 0 0 8px black;
		 	border-radius: 4px;
		 }
		 #divgri{
		 	width:400px;
		 	height:190px;
		 	background-color: white;
		 	position: absolute;
		 	top:300px;
		 	left:720px;
            box-shadow: 0 0 8px black;
		 	border-radius: 4px;
 		 }
 		 #diva:hover,#divgri:hover{
 		 	background-image: linear-gradient( 45deg ,#A5C7B7,#5D4257);
 		 	/*color: rgb(220,20,60); */
 		 	/*background-color: rgb(220,20,60);*/
 		 	color: white;
 		 	transition: 1s;
 		 }

 		 #panel {
 		 	height: 80px;
  padding: 50px;
  display: none;
}
#panel, #flip {
	/*position: absolute;*/
	/*top: 0px;*/
	margin:0px;
  padding: 5px;
  text-align: center;
  /*background-color: #e5eecc;*/
  border: solid 1px #c3c3c3;
  font-family: 'Archivo Black', sans-serif;
  background-color:rgb(105,105,105);
  color: white;
}

#flip:hover {
	background-image: linear-gradient( 45deg ,#A5C7B7,#5D4257) ;
	cursor: pointer;
}
 

li{
	float: left;
	padding-left: 26px; 
}
a{
	text-decoration: none;
	color: white;
}
#loga{
	width: 80px;
	height: 26px;
	margin-bottom: -34px;
	margin-left:783px;
	border: none;
	background-color: black;
	border-radius: 4px;
	color: white;
	font-size: 14px;
}

 table{
 	font-family: 'Archivo Black', sans-serif;
 }



	</style>
</head>
<body>

	<?php

include("count.php");
extract($_POST);
//if( isset($_POST['count_book'] ) )
//{
	 $numberOfRows = 0;
	 $numberOfRowsa=0;
	 $numberOfRowsb = 0;
	$sql = 'SELECT * FROM books' ;
	$sqla = 'SELECT * FROM grievance';
	$sqlb = 'SELECT * FROM request';
	 $connStatus = @mysqli_query($conn,$sql);
	$numberOfRows = @mysqli_num_rows($connStatus);

	$connStatusa = @mysqli_query($conn,$sqla);
	$numberOfRowsa = @mysqli_num_rows($connStatusa);

	$connStatusb = @mysqli_query($conn,$sqlb);
	$numberOfRowsb = @mysqli_num_rows($connStatusb);
     
   
	//if( $numberOfRows > 0 )
	//{
		//echo "no. of books available".$numberOfRows."/-";
	//}
	//else
		//echo " no  books available";
        
        	
    //$pt =  "TOTAL NUMBER OF BOOKS PRESENT IN THE LIBRARY &nbsp;&nbsp;".$numberOfRows."&nbsp;&nbsp; /-"; 
      
	  //echo $pt;
	  
	//}
?>


	<!-- <div id="top"></div> -->
<!-- <div id="strap">
	<p id="lib">LIBRARY</p>
	<ul id="ul1"> -->
		<!-- <li id="li1"><i class="fas fa-border-all fa-1x" style="position:absolute;left:62px;">&nbsp;&nbsp;DASHBOARD</i><br> --><!-- <p id="pq">Dashboard</p> --><!-- </li> -->
	   <!--  <li id="li1"><i class="fas fa-theater-masks" style="position:absolute;left:62px;">&nbsp;&nbsp;GRIEVANCE</i><br> --><!-- <p id="pq"></p></li> --><!-- </li> -->
<!-- 	    <li id="li1"><i class="fas fa-theater-masks" style="position:absolute;left:62px;">&nbsp;&nbsp;REQUEST</i><br></li>
	</ul>
</div> -->
<!-- <form action=" " method="post">
<button name="count_book" style="position: absolute;top:100px;left:200px;">COUNT</button>
</form> -->
<div id="flip">ADMIN PORTAL</div>
<div id="panel">
	<ul style="list-style: none;">
	<li><a href="#"><p onclick="myFunction()">GRIEVANCE</p></a></li>
<li><a href="#"><p onclick="myFunctiona()">REQUEST BOOK</p></a></li>
<li><a href="#"><p onclick="myFunctionb()">LIB. BOOK</p></a></li>
</ul>
<p style="margin-left:1200px;"><?php  echo  $_SESSION["user"]  ?></p>
<form action="logout.php" method="post" >
	
<button id="loga" name="adlogout">Logout</button>

</form>
</div>
<ul id="ul2">
<div id="indiv" >
<p style="color: white;" > Total number of books<br><span id="sp1"><?php echo $numberOfRows; ?></span></p>
</div>

<div id="indiv1" >
<p style="color: white;" onclick="myFunction()"> Total number of grievances<br><span id="sp2"><?php echo $numberOfRowsa; ?></span></p>
</div>

<div id="indiv2" >
<p style="color: white;">Book requests<br><span id="sp3"><?php echo $numberOfRowsb;?></span></p>
</div>
</ul>

<div id="diva">
	<p style="padding-left: 12px; ">A library is a curated collection of sources of information and similar resources, selected by experts and made accessible to a defined community for reference or borrowing. It provides physical or digital access to material, and may be a physical location or a virtual space, or both. A library's collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents, microform, CDs, cassettes, videotapes, DVDs, Blu-ray Discs.</p>
	
</div>
<div id="divgri">
<p style="padding-left: 12px;">
	This Policy applies to all Staff Members holding benefits eligible positions who have completed their probationary period.<br><br> It provides an effective means of ensuring fair treatment for staff seeking to resolve work-related problems or conditions of employment believed to be unfair, inequitable, or a hindrance to effective job performance.
</p>	
</div>
<!-- <form action="find.php" method="post">
<button name="table" style="position: absolute;top:300px;left:200px;">RESULT</button>
</form> -->
<?php

$mysql_host='localhost';
$mysql_user='root';
$con = @mysqli_connect($mysql_host,$mysql_user);
if(  !$con  )
{
  die('Cannot Connect ');
}
       if(  !@mysqli_select_db($con,'library')  )
           {
              echo 'Database not selected';
		   }

 $today = date("Y:m:d");
 

    $tsql = " SELECT USERNAME, TIME FROM stuloginfo where DATE = '$today' ";
    $resulta = @mysqli_query($con , $tsql);



if(@mysqli_num_rows($resulta)>0){
  // echo ' online users ';
	echo '<div style="opacity:0.6;background-color:grey;position:absolute;top:150px;left:10px;width:250px;color:black;">';
  echo ' <table style="margin-left:14px;margin-top:28px; ">';

  echo ' <tr>';
  echo "<td style='text-decoration:underline;position:absolute;top:10px;left:24px'>STUDENT's &nbsp; ONLINE</td> " ;
  
  echo ' </tr>';

 

  echo '<tr>';
  echo '<br>';
  // echo "<th style='margin-left:2px;'>USER</th> " ;

  echo ' </tr>';


   while($row = @mysqli_fetch_array($resulta)){
   	$todaytm = date("h:i:s");
   	      // $tim =  abs(  $todaytm - $row['TIME'] );
    echo ' <tr style="margin-left:14px;"> ';
    echo "<td>". $row['USERNAME'] ."&nbsp;&nbsp;&nbsp;&nbsp;".$row['TIME'] ."</td> "   ;
   
    echo '</tr> ';

    } 
  echo ' </table>  ';
   echo '</div>';
}


?>


 <script> 
   
   $(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

            function myFunction() { 
                window.open("http://localhost/youtube/libpr/find.php"); 
            } 
            function myFunctiona() { 
                window.open("http://localhost/youtube/libpr/finda.php"); 
            }
            function myFunctionb() { 
                window.open("http://localhost/youtube/libpr/findb.php"); 
            }
        </script> 



</body>
</html>