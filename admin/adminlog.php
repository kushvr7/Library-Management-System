<?php
session_start();
?>
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
		   if( isset($_POST['submit']) )
		   {
   $nam = $_POST['user'];
  $pass = $_POST['pass'];
  
  $sql = "SELECT USERNAME,PASSWORD FROM adlogin WHERE USERNAME='$nam' AND PASSWORD='$pass'"; 
   $result = @mysqli_query( $con , $sql);
  $rowcount = @mysqli_num_rows($result);
  
  if( $rowcount == 1)
  {
 $_SESSION['user'] = $nam;
	  header("Location:admin.php");
  }
  else{
	  echo " error ! try again later";
  }
		   }
		   
  
?>     