<?php include("dbase.php"); ?>
<?php
   
   if(isset($_POST['action'])){
	   $action = $_POST['action'];
	   
		$sql="INSERT INTO blocka (action) 
			  VALUES ('$action')";
   
		   if($conn -> query($sql) === true) {
				 echo "<script>alert('Thank you your data has been saved !'); 
				 window.location='Ahome.php'</script>";
			  }
			  else { 
				 echo "<script>alert('Please Do It Again!'); 
				     window.location='Aform.php'</script>";
				}
	}
		
	
?>