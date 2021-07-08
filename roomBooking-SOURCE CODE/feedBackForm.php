 <html>
 <?php include('dbase.php'); ?>
<?php include('navBarAdmin.php'); ?>
<?php $sql = "SELECT * FROM feedback";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
?>
<head>

	<title>Feedback</title>
	<link href="bootstrap/css/bootstrap.min.css" 
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>

	body {
		background-color: WHITE;
	}
	</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {margin:0;}
	.main {
	  padding: 12px;
	  margin-top: 50px;
	  height: 1500px; /* Used in this example to enable scrolling */
	}
	
	table, th, td {
	  border: opx solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}

.container {
		padding: 10px 10px;
		background-color: white	;
		width: 500px;
	}
	
  
	</style>
	

</head>
<body>
	<div class="main">
		<div class="container">
					<h2><center><font style="font-family:Trajan Pro;color:teal;">FEEDBACKS</font></center></h2>
					<center>
				<!--<fieldset style="width:800"><legend><?php //echo $count; ?>. </legend> -->
				<table align="center" border="1" >
				<?php
					$count=0;
					do { 
					$count++;
					?>
					
				<tr>
				<td>
					<table align="left" width="">
						<tr>
							<th><?php echo $count; ?>. </th>
							<th>Name </th>
							<td> : <?php echo $row['name']; ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<th>Rating </th>
							<td> : <?php echo $row['rate']; ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<th>Comment </th>
							<td> : <?php echo $row['comment']; ?></td>
						</tr>
					</table>
					<?php } while($row = $query -> fetch_assoc()) ?>
				<!--</fieldset>-->
				</td>
				</tr>
				</table>
				</center>
				<br>
				<br>
				
		</div>
	</div>
</body>
</html>