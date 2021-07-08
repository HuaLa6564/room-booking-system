<?php include("dbase.php"); ?>
<?php include("navbar.php"); ?>


	
<html>
<head>

	<title>Home</title>
	<link href="bootstrap/css/bootstrap.min.css"> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

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
	
	<style>

		body {
			background-color: lavender;
		}
	
	
	
		body {margin:0;}
		.main {
		  padding: 12px;
		  margin-top: 50px;
		  height: 1500px; /* Used in this example to enable scrolling */
		}
		.img {
			border-radius: 50%;
		}
		
		
	</style>
	<!--
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
			x[myIndex-1].style.display = "round";  
			setTimeout(carousel, 9000);    
		}
	</script>
	-->
</head>

<body>
		<div class="w3-content w3-section" style="max-width:1500px">
		

		<img class="mySlides w3-animate-fading" src="image1.jpeg" style="width:100%">
		<img class="mySlides w3-animate-fading" src="image2.jpeg" style="width:100%">
		<img class="mySlides w3-animate-fading" src="image3.jpeg" style="width:100%">
 
		</div>

	<div class="main">
		
		<div class="container">
		
		<center><h2><b>HOME<b></h2></center>
	
		<table border="0" width="50%" align="center">
		<tr>
			<td><a href="Ahome.php"><img  src="blockA.jpg" alt="BLOCK A" width="200" height="200"></a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td><a href=""><img src="blockB.png" alt="BLOCK B" width="200" height="200"></a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td><a href=""><img src="audi.jpg" alt="AUDITORIUM" width="200" height="200"></a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td><a href=""><img src="BilikSeminar.jpg" alt="SEMINAR ROOM" width="200" height="200"></a></td>
		</tr>
		
		<tr>
			<td><a href="Ahome.php">BLOCK A</a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td align="center"><a href="">BLOCK B</a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td align="center"><a href="">AUDITORIUM</a></td>
			<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td align="center"><a href="">SEMINAR ROOM</a></td>
		</tr>
		</table>
		
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
		
	
	
</body>
