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
 

 
 if(isset($_POST['grievance_book']))
 {
	 $cont = $_POST['CONTACT_book'];
	 $griv = $_POST['comment'];
	 //$drop = $_POST['OPTION_book'];

      
	 
	 $sql = "INSERT INTO grievance(CONTACT,GRIEVANCE) VALUES ('$cont','$griv')";
	 
    
	 if(!@mysqli_query($conn,$sql))
	 {
		echo ' error while submitting complaint ';
	 }
	 else
	 {
		 echo ' Complaint Submitted Successfully ';
	     header("refresh:2;url=dashboard.php");
	 }
	  
	                                 
	 
	 
	 
 }
 ?>