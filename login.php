<?php
 session_start();
?>

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

  $nam = $_POST['username'];
  $pass = $_POST['password'];
  $query = " SELECT USER , PASSWORD FROM signup WHERE USER='$nam' AND PASSWORD='$pass'";
  $result = @mysqli_query($conn,$query);
  
  $rowcount = @mysqli_num_rows($result);
  if($rowcount == 1 )
  {
	  $querya = " INSERT INTO stuloginfo(USERNAME) values ('$nam') ";
  @mysqli_query($conn,$querya);
  $sqla = "DELETE FROM stuloginfo WHERE USERNAME=' ' " ;
  @mysqli_query($conn,$sqla);
	  
	  
	  //$_SESSION["id"] = $_POST['id'];
      $_SESSION['username'] = $nam;
	    header("Location: dashboard.php");
	  //header("refresh:2;url=dashboard.php");
	  //echo "your username and password is correct";
  }
  else{
	  //echo " wrong credentials ";
	  $msg = '<p style="color:red;cursor:pointer;"> invalid username and password </p>'; 
	   //header("Location: first.php");
	 // $message = "Invalid Username or Password ! ";
  }
  ?>