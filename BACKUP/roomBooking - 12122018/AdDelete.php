<?php
include("navbar.php");
	include('dbase.php');
 	$no = $_GET['no'];
	$sql = "DELETE FROM adlist WHERE no ='$no'";
	
	if(mysqli_query($conn, $sql))
		echo "<b>Delete is successful!</b><br><br>";
	else 
		echo "<b>Delete is not successful!</b><br><br>";
?>