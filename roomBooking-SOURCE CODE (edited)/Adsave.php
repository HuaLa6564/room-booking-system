<?php include("dbase.php"); ?>
<?php
   
   if(isset($_POST['submit'])){
	   $status = $_POST['status'];
	   $no=$_POST['no'];	
	   
		$sql="UPDATE adlist SET status='$status' WHERE no='$no'";
		//$sql="DELETE no='$no'";
		$query=$conn->query($sql);
		
		   if($conn -> query($sql) === true) {
				 echo "<script>alert('Thank you your data has been saved !'); 
				 window.location='AdhomeBaru.php'</script>";
			  }
			  else { 
				 echo "<script>alert('Please Do It Again!'); 
				     window.location='AdHomeBaru.php'</script>";
				}
	}
		
	
?>