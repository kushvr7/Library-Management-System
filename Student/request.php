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
if( isset($_POST['req'])    ) 
{
	$reqa = $_POST['reqname'];
	$reqb = $_POST['reqauthor'];
	$reqc = $_POST['reqpub'];
	$sqlq = "INSERT INTO request(NAME,AUTHOR,PUBLICATIONS) VALUES ('$reqa','$reqb','$reqc')";
	
	if(!@mysqli_query($conn,$sqlq))
	{
		echo "TRY TO RE SUBMIT LATER";
			header("refresh:2;url=dashboard.php");
	}
	else
	{
		
			
			echo "REQUEST SUBMITTED SUCCESSFULLY";
		header("refresh:2;url=dashboard.php");
	}

	
}


?>