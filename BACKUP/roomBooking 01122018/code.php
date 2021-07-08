<?php


		$chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
		srand((double)microtime()*1000000); 
		$i = 0; 
		$pass = '' ; 

		while ($i <= 7) { 
			$num = rand() % 33; 
			$tmp = substr($chars, $num, 1); 
			$pass = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
			$i++; 
		} 

		return $pass; 

?>
<html>
<form action="code.php" method="post">
	<input type="submit" value="Submit">
	<?php echo $pass; ?>
</form>
</html>