<?php include ("dbase.php");
	
	$sql="SELECT * FROM adlist";
	$query=$conn->query($sql);
	$row=$query->fetch_assoc();
?>
<html>
	<fieldset style="center"><legend><h2>Booking Details </h2></legend>
		<table border="0">
			<tr>
				<td>Nama : </td>
				<td><?php echo $row['name'];?></td>
				<input type="hidden" name="no" value="<?php echo $row['no']; ?>">
			</tr>
			<tr>
				<td>Student/Staff ID : </td>
				<td><?php echo $row['id'];?></td>
			</tr>
			<tr>
				<td>No. of Audience : </td>
				<td><?php echo $row['audience'];?></td>
			</tr>
			<tr>
				<td>Date : </td>
				<td><?php echo $row['date'];?></td>
			</tr>
			<tr>
				<td>Time Duration  : </td>
				<td><?php echo $row['Tstart'];?> - <?php echo $row['Tend'];?></td>
			</tr>
			<tr>
				<td>Equipment : </td>
				<td><?php echo $row['equipment'];?></td>
			</tr>
			<tr>
				<td><a href="Asave.php"><input type="button" value="Confirm Booking" name="confirm"></a></td>
				<td><a href="Adelete.php"><input type="button" value="Cancel Booking" name="cancel"></a></td>
			</tr>
		</table>
	</fieldset>
</html>