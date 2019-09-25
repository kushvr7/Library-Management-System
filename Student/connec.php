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
   
     
  
  $name = $_POST['usern'];
  $sur  = $_POST['surn'];
  $pass = $_POST['passw'];
  $emai = $_POST['ema'];
  
  $sql = "INSERT INTO signup(USER,SURNAME,PASSWORD,EMAIL) VALUES ('$name','$sur','$pass','$emai')";
  if(!@mysqli_query($con,$sql))
  {
	  echo 'not inserted';
  }
  else
  {
	  echo 'inserted';
  }
  
  header("refresh:4;url=first.php");

?>