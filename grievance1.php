<?php 
$mysql_host='localhost';
$mysql_user='root';
$conn = @mysqli_connect($mysql_host,$mysql_user);
if(!$conn)
{
	die ("connection failed");
}
if( !@mysqli_select_db($conn,'library'))
{
	echo "databse not selected";
}
 
  if(isset($_POST['OPTION_book'])){
          $option = $_POST['OPTION_book'];
   $query = "INSERT INTO grievance (HOLD) VALUES ('$option')";
mysql_query($query);
}

mysql_close($con);
?>                       
 