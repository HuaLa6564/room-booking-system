<?php include("dbase.php"); ?>
<?php
   
   if(isset($_POST['name'])){
	   $roomNo = $_POST['roomNo'];
	   $name = $_POST['name'];
	   $id = $_POST['id'];
	   $audience = $_POST['audience'];
	   $date = $_POST['date'];
	   $tstart = $_POST['tstart'];
	   $tend = $_POST['tend'];
	   $equip = $_POST['equip'];
	   
		$sql="INSERT INTO adlist (roomNo, name, id, audience, date, Tstart, Tend, equipment) 
			  VALUES ('$roomNo', '$name', '$id', '$audience', '$date', '$tstart', '$tend', '$equip')";
   
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