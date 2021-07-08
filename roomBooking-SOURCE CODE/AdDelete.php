<?php
	include('dbase.php');
 	$no = $_GET['no'];
	$sql = "DELETE FROM adlist WHERE no ='$no'";
	
	if(mysqli_query($conn, $sql))
		echo "<script>alert('You have deleted a data!');
				window.location='AdHomeBaru.php';</script>";
	else 
		echo "<script>alert('Delete Failed');
				</script>";
?>