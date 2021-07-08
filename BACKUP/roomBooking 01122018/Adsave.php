<?php include("dbase.php"); ?>
<?php
   
   if(isset($_POST['status'])){
	   $status = $_POST['status'];
	   
		$sql="UPDATE adlist SET status='$status' WHERE name='$name';
   
		   if($conn -> query($sql) === true) {
				 echo "<script>alert('Thank you your data has been saved !'); 
				 window.location='AdHome.php'</script>";
			  }
			  else { 
				 echo "<script>alert('Please Do It Again!'); 
				     window.location='AdHome.php'</script>";
				}
	}
		
	
?>