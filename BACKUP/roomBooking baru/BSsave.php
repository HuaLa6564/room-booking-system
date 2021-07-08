<?php include("dbase.php"); ?>
<?php
	if(isset($_POST['name'])){
		if(empty($_POST['name'])|| empty($_POST['id'])||empty($_POST['audience']) ||empty($_POST['date']) ||empty($_POST['tstart']) ||empty($_POST['tend']))
			echo "<script>alert('Please Do It Again!'); window.location='BSform.php'</script>";
		else {
		   $roomNo = $_POST['roomNo'];
		   $name = $_POST['name'];
		   $id = $_POST['id'];
		   $audience = $_POST['audience'];
		   $date = $_POST['date'];
		   $tstart = $_POST['tstart'];
		   $tend = $_POST['tend'];
		   $equip = $_POST['equip'];
		   $code = $_POST['codela'];
		   
			$sql="INSERT INTO adlist (roomNo, name, id, audience, date, Tstart, Tend, equipment,code) 
				  VALUES ('$roomNo', '$name', '$id', '$audience', '$date', '$tstart', '$tend', '$equip', '$code')";
			$query=$conn->query($sql);
			echo "<script>alert('Thank you your data has been saved !'); window.location='BShome.php'</script>";
			
		}
		
	}
?>