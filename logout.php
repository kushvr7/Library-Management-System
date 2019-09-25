<?php
session_start();
if(isset($_POST["logout"]))
{
//unset($_SESSION["id"]);
unset($_SESSION["username"]);
header("Location:first.php");
//header("refresh:6;url=first.php");
}

if(isset($_POST["adlogout"]))
{
	unset($_SESSION["user"]);
	header("Location:adminlogin.php");
}
?>