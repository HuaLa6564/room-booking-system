<?php /*include("dbase.php");
	
		$sql = "SELECT * FROM adlist ORDER BY curdate DESC";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	*/
?>
<?php
	include("dbase.php");
	
	if(!empty($_POST['search'])) { 
		$sql = "SELECT * FROM adlist WHERE MONTH(date)='".$_POST['search']."' OR roomNo='".$_POST['searchBlock']."' ORDER BY curdate ASC";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
	else  {
		$sql = "SELECT * FROM adlist ORDER BY curdate ASC";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
?>
<?php include("navBarAdmin.php"); ?>


	
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Home</title>
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
	  height: 1200px; /* Used in this example to enable scrolling */
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
  background-color: #4CAF50;
  color: white;
}
	
	</style>
</head>

<body>

	
	<form action="AdHomeBaru.php" method="post">
	
		 

	<div class="main">
	
		<div class="container">
			<h2><center><font style="font-family:Trajan Pro;color:teal;"><b>Booking List</b></font></center></h2>
			<br>
			<?php 
				$s="SELECT * FROM adlist";
				$q=mysqli_query($conn,$s);
				$total=mysqli_num_rows($q);
			?>
		<p><center> Month &nbsp;&nbsp;&nbsp;&nbsp; : 
			<select name="search">
				<option>Select Month</option>
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
		
		 Room No : 
		 
			<select name="searchBlock">
				<option>Select Room No</option>
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
				<option value="Bilik Seminar Blok C">Bilik Seminar Blok C</option>
				<option value="Bilik Seminar Utama">Bilik Seminar Utama</option>
			</select>
		
			<input type="submit" value="search">
		</center>
	</form>
	<bR><Br>
		<p><b>Total Booking : <?php echo $total; ?></b></p>
		<table border="0"  align="center">
					<tr>
						<th align="center">No</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Room No</th>
						<th align="center">Status</th>
						<th>Update</th>
						<th>Action</th>
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
							<a href="AdEdit.php?no=<?php echo $row['no']; ?>">Edit</a>   |
							<a href="AdDelete.php?no=<?php echo $row['no']; ?>" onclick="return check()">Delete</a>
						</td>
						<td><a href="Adshow.php?no=<?php echo $row['no']; ?>">Change Status</a></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
				</table>
		</form>
		
		
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