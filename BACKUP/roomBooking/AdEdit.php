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
	<form name="form" method="post" action="AdUpdate.php">
		<table border="1">
			<tr>
				<input type="hidden" name="no" value="<?php echo $row['no']; ?>">
			</tr>
			<tr>
				<td>Room No</td>
				<td>
					<input type="text" name="roomNo" value="<?php echo $row['roomNo'];?>">					
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
			</tr>
			<tr>
				<td>id</td>
				<td>
					<input type="text" name="id" value="<?php echo $row['id'];?>">
				</td>
			</tr>
			<tr>
				<td>No. of Audience</td>
				<td><input type="text" name="audience" value="<?php echo $row['audience'];?>"></td>
			</tr>
			<tr>
				<td>Date :</td>
				<td><input type="date" name="date" value="<?php echo $row['date'];?>"></td>
			</tr>
			<tr>
				<td>Time Start:</td>
				<td><input type="time" name="tstart" value="<?php echo $row['tstart'];?>"></td>
			</tr>
			<tr>
				<td>Time End:</td>
				<td><input type="time" name="tend" value="<?php echo $row['tend'];?>"></td>
					</tr>
					<tr>
						<td>Equipment :</td>
						<td>
							<select name="equip">
								<option><?php echo $row['equipment'];?></option>
								<option>None</option>
								<option>Projector</option>
								<option>HDMI Cable</option>
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