<?php
		include("navbar.php");
		include('dbase.php');
	if(isset($_POST['submit'])){
	   $name = $_POST['name'];
	   $no=$_POST['no'];	
	   
		$sql="UPDATE adlist SET name='$name' WHERE no='$no'";
		$query=$conn->query($sql);
		   if($conn -> query($sql) === true) {
				echo "<script>alert('You have succesfully updated a data!');
				window.location='AdHomeBaru.php';</script>";
			  }
			  else { 
				 echo "<b>Update is not successful!</b><br><br>";
				}
	}
?>