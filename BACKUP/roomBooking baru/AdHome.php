<?php /*include("dbase.php");
	
		$sql = "SELECT * FROM adlist ORDER BY curdate DESC";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	*/
?>
<?php
	include("dbase.php");
	
	if(!empty($_POST['search'])) { 
		$sql = "SELECT * FROM adlist WHERE MONTH(date)='".$_POST['search']."' OR roomNo='".$_POST['searchBlock']."'";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
	else  {
		$sql = "SELECT * FROM adlist";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
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

	<table>
	<form action="AdHome.php" method="post">
	<tr>
		<td width="84%" align="right">Month : </td>
		<td width="11%" align="right" valign="middle">
			<select name="search">
				<option value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
		</td>
	  </tr>
	  <tr>
		<td width="84%" align="right">Room No : </td>
		<td width="11%" align="right" valign="middle">
			<select name="searchBlock">
				<option value="A1001">A1001</option>
				<option value="A1002">A1002</option>
				<option value="A1003">A1003</option>
				<option value="A1004">A1004</option>
				<option value="A1005">A1005</option>
				<option value="B1001">B1001</option>
				<option value="B1002">B1002</option>
				<option value="B1003">B1003</option>
				<option value="B1004">B1004</option>
				<option value="B1005">B1005</option>
				<option value="AUDFSG">AUDFSG</option>
				<option value="AUDFKA">AUDFKA</option>
				<option value="Bilik Seminar Block C">Bilik Seminar Block C</option>
				<option value="Bilik Seminar Utama">Bilik Seminar Utama</option>
			</select>
		</td>
		<td>
			<input type="submit" value="searchBlock">
		</td>
	  </tr>
	</form>
	</table>
	<div class="main">
		<div class="container">
		<h2>Booking List</h2>
		
		<table border="3" align="center">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Room No</th>
						<th>Action</th>
						<th>Update</th>
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
						<td align="center"><b><?php echo $row['status']; ?></b> <br>( <?php echo $row['date_update']; ?>)</td>
						<td>
							<a href="AdEdit.php?no=<?php echo $row['no']; ?>">Edit</a>
							<a href="AdDelete.php?no=<?php echo $row['no']; ?>" onclick="return check()">Delete</a>
						</td>
						<td><a href="Adshow.php?no=<?php echo $row['no']; ?>">Change Status</a></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
				</table>
		</form>
		
		
	</div>
</body>