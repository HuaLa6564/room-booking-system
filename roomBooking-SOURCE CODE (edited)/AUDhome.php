<?php include("dbase.php");
	
	if(!empty($_POST['search'])) { 
		$sql = "SELECT * FROM adlist WHERE id='".$_POST['search']."' AND (roomNo='AUDFKA' OR roomNo='AUDFSG')";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	} else {
		$sql = "SELECT * FROM adlist WHERE (roomNo='AUDFKA' OR roomNo='AUDFSG')";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
?>
<?php include("navBarAudi.php"); ?>


	
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
	
		table {
  border-collapse: collapse;
  width: 100%;
	 
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(odd){background-color: white}

th {
  background-color: seagreen;
  color: white;
}
	</style>
</head>

<body>
	
	<div class="main">
		<div class="container">
			<h2><center><font style="font-family:Trajan Pro;color:teal;"><b>Auditorium - Booking List</b></font></center></h2>
			<form method="post" action="AUDhome.php">
		<center>
		<input type="text" name="search" placeholder="Enter ID">
		<input type="submit" value="search"></center>
	</form>
	<br><br>

		<table border="0">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Room No</th>
						<th>Status</th>
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
						<td><?php echo $row['status']; ?></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
				</table>
		
		
	</div>
	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>UITM<span>logo</span></h3>


				<p class="footer-company-name">Group 4 &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Kampus Samarahan 2</span> Sarawak, Malaysia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>089-111222</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="fitriahAbdul@outlook.com">fitriahAbdul@outlook.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					This room booking system is designed by Farah Qurataanyuni, Sharmiza, Ayu Ernadia, 
					and Nurul Fitriah in order to ease student or staff to make a reservation.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/profile.php?id=100008284115375"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/fitrixh_fxx/?hl=en"><i class="fa fa-instagram"></i></a>
			        <a href ="https://api.whatsapp.com/send?phone=60102365427"><i class="fa fa-whatsapp"></i></a> 
					<a href="https://web.telegram.org/#/im?p=@Fit_fitriah"> <i class="fa fa-telegram"></i></a>

				</div>

			</div>

		</footer>
</body>

</html>