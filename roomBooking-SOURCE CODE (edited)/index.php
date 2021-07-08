<?php include("dbase.php"); ?>
<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html>
</head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<style>

		body {
			background-color: white;
		}
	
		.img {
			border-radius: 50%;
		}
	
		* {box-sizing: border-box;}

		.container {
			position: relative;
			width: 50%;
			max-width: 200px;
			background-color: white;
		}

		.image {
			display: block;
			width: 150%;
			height: auto;
			color: black;
		}

		.overlay {
			position: absolute; 
			bottom: 0; 
			background: rgb(0, 0, 0);
			background:teal; 
			color: teal; 
			width: 115%;
			transition: .5s ease;
			opacity:0;
			color: white;
			font-size: 20px;
			padding: 10px;
			text-align: center;
		}

		.container:hover .overlay {
			opacity: 1;
		}
		
		.mySlides {display:none;}
		
		
	</style>
	
</head>	
<body>

	<div class="w3-content w3-section" style="max-width:1500px">
		

		<img class="mySlides w3-animate-fading" src="image1.jpeg" style="width:100%">
		<img class="mySlides w3-animate-fading" src="2image.jpg" style="width:100%">
		<img class="mySlides w3-animate-fading" src="3image.jpg" style="width:100%">
		
 
	</div>
	<br>
				<h2><center><font style="font-family:Trajan Pro;color:teal;">UiTM ROOM BOOKING SYSTEM</center></h2>
	<br><Br><Br><bR>
	
		<table border="0" width="100%" align="center">
		<tr>
		
			<td>
				<div class="container">
				<a href="Ahome.php">
				<img src="blockA.jpg" alt="Avatar" class="image" width="200" height="200"  style="border-radius:15%">
				<div class="overlay">Block A</div>
				</div>
			</td>
			
			<td>
				<div class="container">
				<a href="Bhome.php">
				<img src="blockB.png" alt="Avatar" class="image" width="200" height="200"  style="border-radius:15%">
				<div class="overlay">Block B</div>
				</div>
			</td>
			
			
			<td>
				<div class="container">
				<a href="AUDhome.php">
				<img src="audiA.jpg" alt="Avatar" class="image" width="300" height="300"  style="border-radius:15%">
				<div class="overlay">Auditorium</div>
				</div>
			</td>
			
			<td>
				<div class="container">
				<a href="BShome.php">
				<img src="bsu.jpg" alt="Avatar" class="image" width="400" height="400"  style="border-radius:15%">
				<div class="overlay">Bilik Seminar Utama</div>
				</div>
			</td>

			<!--<td><a href="Ahome.php"><img src="blockA.jpg" alt="BLOCK A" width="200" height="200" style="border-radius:15%"></a></td>
			<td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td><a href=""><img src="blockB.png" alt="BLOCK B" width="200" height="200" style="border-radius:15%"></a></td>
			<td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td><a href=""><img src="audi.jpg" alt="AUDITORIUM" width="200" height="200" style="border-radius:15%"></a></td>
			<td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td><a href=""><img src="BilikSeminar.jpg" alt="SEMINAR ROOM" width="200" height="200" style="border-radius:15%"></a></td>-->
			
		</tr>
		<!--
		<tr>
			<td align="center"><a href="Ahome.php"><b>BLOCK A</b></a></td>
			
			<td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td align="center"><a href="" ><b>BLOCK B</b></a></td>
		    <td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td align="center"><a href="" ><b>AUDITORIUM</b></a></td>
			<td><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p></td>
			<td align="center"><a href="" ><b>SEMINAR ROOM</b></a></td>
		</tr>-->
		</table>
		
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>UITM<span> Sarawak</span></h3>


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
					<a href="aboutUs.html"> <i class="fa fa-male"></i></a>

				</div>

			</div>

		</footer>

		

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
	
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 9000);    
		}
	</script>

</body>
</html>
