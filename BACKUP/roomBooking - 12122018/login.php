
<?php include("navbar.php"); ?>
	
<html>
<head>
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
	</style>
</head>
<body>

	<div class="main">
		<div class="container">
		<h1>ADMIN LOG-IN PAGE</h1>
		<form name="Flogin" method="post" action="CheckLogin.php"> 
			<table align="center">
				<tr><td>Username: </td><td><input type="text" name="username" required></td></tr>
				<tr><td>Password: </td><td><input type="password" name="password" required></td></tr>
				<tr><td colspan="2" align="right"><input type="submit"></td></tr>
			</table>
		</form>
	</div>
</body>
</html>