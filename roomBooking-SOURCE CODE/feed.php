 <?php include("dbase.php"); ?>
<?php
	if(isset($_POST['rate'])){
		if(empty($_POST['rate']))
			echo "<script>alert('Please Do It Again!'); window.location='feedback.php'</script>";
		else {
		   $name = $_POST['name'];
		   $rate = $_POST['rate'];
		   $comment = $_POST['comment'];
		   
			$sql="INSERT INTO feedback (name, rate, comment) 
				  VALUES ('$name','$rate', '$comment')";
			$query=$conn->query($sql);
			echo "<script>alert('Thank you your feedback has been saved !'); window.location='index.php'</script>";
			
		}
		
	}
?>