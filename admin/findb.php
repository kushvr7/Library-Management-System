<?php
  
  session_start();
  if ( ! isset($_SESSION["user"] ) ) {
  	header("location:adminlogin.php");
  }

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

 
 
 

 $sqla = 'SELECT * FROM books';
 $connStatusa = @mysqli_query($conn,$sqla);
	//$numberOfRowsa = @mysqli_num_rows($connStatusa);
 
 //if( isset($_POST['table'])  )
   // {
	if(@mysqli_query($conn,$sqla)){
    if(@mysqli_num_rows($connStatusa)>0){
		echo ' <p style="position:absolute;top:-16px;left:560px;font-size:30px;font-weight:bold;">BOOK AVAILABLE</p> ';
        echo '<table style="border :2px solid black; position:absolute;top:60px;left:444px;">';
            echo '<tr style="border :2px solid black">';
                echo "<th style='border :2px solid brown;padding:10px;'>ID</th>";
				echo "<th style='border :2px solid brown;padding:10px;'>NAME</th>";
                echo "<th style='border :2px solid brown;padding:10px;'>AUTHOR</th>";
                echo "<th style='border :2px solid brown;padding:10px;'>AVAILABLE</th>";
            echo "</tr>";
        while($row = @mysqli_fetch_array($connStatusa)){
            echo "<tr style='border :2px solid black'>";
                echo "<td style='padding:10px;color: red;' >" .$row['ID']. "</td>";
                echo "<td style='padding:10px;'>" . $row['NAME'] . "</td>";
                echo "<td style='padding:10px;'>" . $row['AUTHOR'] . "</td>";
                echo "<td style='padding:10px;color:blue;'>" . $row['AVAILABLE'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
          @mysqli_free_result($connStatusa);

     }
      else
        	echo 'no result found';
    }
	?>
	