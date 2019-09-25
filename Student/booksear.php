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
if (isset($_POST['search_book'])){
 $id_boo = $_POST['id_book'];
 $name_boo = $_POST['name_book'];
 $author_boo = $_POST['author_book'];

  $query = "SELECT * FROM books WHERE ID = '$id_boo' AND NAME = '$name_boo'"; 
  $result = @mysqli_query( $conn , $query);
  $rowcount = @mysqli_num_rows($result);
  $row = @mysqli_fetch_array($result);
  if($rowcount == 1)
  {

	$vdr = "hurry only ". $row['AVAILABLE']."&nbsp;left";
      echo $vdr;
	
  }
  else
  {
	  echo 'false';
  }
}
 ?>