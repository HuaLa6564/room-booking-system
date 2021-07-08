<?php include("dbase.php"); ?>
<?php include("navbar.php"); ?>



	
<html>
<head>

	<title>Home</title>
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
	img {
    border-radius: 50%;
	}
	</style>
</head>

<body>
	<div class="main">
		<div class="container">
		<center><h2>HOME</h2></center>
		<table border="0" width="50%" align="center">
		<tr>
			<td><a href="Ahome.php"><img src="blockA.jpg" alt="BLOCK A" width="200" height="200"></a></td>
			<td><p>&nbsp;</p></td>
			<td><a href=""><img src="blockB.png" alt="BLOCK B" width="200" height="200"></a></td>
		</tr>
		<tr>
			<td><a href="Ahome.php">BLOCK A</a></td>
			<td><p>&nbsp;</p></td>
			<td><a href="">BLOCK B</a></td>
		</tr>
		<tr>
			<td><a href=""><img src="audi.jpg" alt="AUDITORIUM" width="200" height="200"></a></td>
			<td><p>&nbsp;</p></td>
			<td><a href=""><img src="BilikSeminar.jpg" alt="SEMINAR ROOM" width="200" height="200"></a></td>
		</tr>
		<tr>
			<td><a href="">AUDITORIUM</a></td>
			<td><p>&nbsp;</p></td>
			<td><a href="">SEMINAR ROOM</a></td>
			
		</tr>
		</table>
		</div>
	</div>
</body>
