 <html>
 <?php include('dbase.php'); ?>
<?php include('navbar.php'); ?>
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
		background-color: lavender;
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
	</style>
</head>
<body>
	<div class="main">
		<div class="container">
					<?php
					do { 
					?>
					<center>
				<fieldset style="width:800"><legend>FEEDBACK FORM</legend>
					<table align="center">
						<tr>
							<th>Name :</th>
							<td><?php echo $row['name']; ?></td>
						</tr>
						<tr>
							<th>Rating :</th>
							<td><?php echo $row['rate']; ?></td>
						</tr>
						<tr>
							<th>Comment :</th>
							<td><?php echo $row['comment']; ?></td>
						</tr>
					</table>
				</fieldset>
				</center>
				<br>
				<br>
				<?php } while($row = $query -> fetch_assoc()) ?>
		</div>
	</div>
</body>
</html>