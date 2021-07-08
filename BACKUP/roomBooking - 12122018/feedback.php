<html>
<?php include("navbar.php"); ?>
<head>

	<title>Feedback</title>
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
			<form name="form" action="feed.php" method="post">
				<fieldset style="width:800"><legend>FEEDBACK FORM</legend>
					<table align="center">
						<tr>
							<td>Name :</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<th align="center" colspan="2">Rate Us :</th>
						</tr>
						<tr>
							<td align="center" colspan="2">
								<input type="radio" name="rate" value="Good">Good</input>
								<input type="radio" name="rate" value="Average">Average</input>
								<input type="radio" name="rate" value="Need Improvement">Need Improvement</input>
							</td>
						</tr>
						<tr>
							<td>Comment :</td>
							<td><textarea rows="5" cols="8" name="comment"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
			</form>
		</div>
	</div>
</body>
</html>