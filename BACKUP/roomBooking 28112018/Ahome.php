<?php include("dbase.php");
	
		$sql = "SELECT * FROM blocka";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	
?>
<?php include("navbar.php"); ?>


	
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Home</title>
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
		<h2>BLOCK A</h2>
		<table border="3">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Room No</th>
						<th>&nbsp;</th>
					</tr>
					<?php $count=0; 
					do { 
								$count++;
					?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['Tstart']; ?> - <?php echo $row['Tend'];?></td>
						<td><?php echo $row['roomNo']; ?></td>
						<td><?php echo $row['action']; ?></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
				</table>
		
		
	</div>
</body>
