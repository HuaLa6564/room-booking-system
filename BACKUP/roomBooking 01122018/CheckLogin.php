<?php	
	include("dbase.php");
	
		if(isset($_POST['username'])) {
		$sql = "SELECT * FROM login 
				WHERE username ='".$_POST['username']."' 
				AND password = '".$_POST['password']."'";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$num=$query -> num_rows;
		

			if($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']){
					header("Location: Home.php"); 
			} else {
				echo "<script>alert('You have entered a wrong password or username!');
				window.location='login.php';</script>";
			}
		}
?>