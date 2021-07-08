<?php include("dbase.php"); ?>
<?php include("navbar.php"); ?>
<?php 
	$no=$_GET['no'];
	$sql="SELECT * FROM adlist WHERE no='$no'";
	$query=$conn->query($sql);
	$row=$query->fetch_assoc();
?>
<html>
<head>
	<title>Show Booking Details</title>
</head>

<body>
	<form name="form" method="post" action="Adsave.php">
		<br><br>
		<center>
		<table border="1" width="50%">
			<tr>
				<td>No</td>
				<td>
					<?php echo $row['no'];?>
					<input type="hidden" name="no" value="<?php echo $row['no']; ?>">
				</td>
			</tr>
			<tr>
				<td>Room No</td>
				<td><?php echo $row['roomNo'];?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $row['name'];?></td>
			</tr>
			<tr>
				<td>id</td>
				<td>
					<?php echo $row['id'];?>
				</td>
			</tr>
			<tr>
				<td>No. of Audience</td>
				<td><?php echo $row['audience'];?></td>
			</tr>
			<tr>
				<td>Booking Date</td>
				<td><?php echo $row['date'];?></td>
			</tr>
			<tr>
				<td>Time Duration </td>
				<td><?php echo $row['Tstart'];?> - <?php echo $row['Tend'];?></td>
			</tr>
			<tr>
				<td>Equipment Needed </td>
				<td><?php echo $row['equipment'];?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="status">
						<option value="APPROVE">APPROVE</option>
						<option value="DISAPPROVE">DISAPPROVE</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>