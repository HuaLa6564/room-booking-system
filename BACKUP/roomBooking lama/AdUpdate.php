<?php
	   if(isset($_POST['edit'])){
	   $name = $_POST['name'];
	   $no=$_POST['no'];	
	   
		$sql="UPDATE adlist SET name='$name'";
		$query=$conn->query($sql);
		
		   if($conn -> query($sql) === true) {
				 echo "<b>Update is successful!</b><br><br>";
			  }
			  else { 
				 echo "<b>Update is not successful!</b><br><br>";
				}
		}
?>