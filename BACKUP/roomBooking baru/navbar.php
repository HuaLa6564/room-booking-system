<?php include('dbase.php'); ?>
<html>
<head>
	<title>.:: Room Booking System ::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
	</style>
</head>

<body>
	<div class="topnav">
	  <a href="Home.php">Home</a>
	  <a href="login.php">Admin Login</a>
	  <a href="AdHome.php">Admin List</a>
	  <a href="Aform.php">A Form</a>
	  <a href="Bform.php">B Form</a>
	  <a href="AUDform.php">AUD Form</a>
	  <a href="BSform.php">BS Form</a>
	  <a href="feedback.php">Feedback Form</a>
	  <a href="feedBackForm.php">Feedback From User</a>
	  <a href="logout.php">Logout</a>
	</div>
</body>
</html>