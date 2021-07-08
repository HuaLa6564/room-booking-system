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
	</style>
	<!--
			<script type="text/javascript">
			function validate(){
				var nama = document.form1.name.value;
				var std = document.form1.id.value;
				var aud = document.form1.audience.value;
				var tarikh = document.form1.date.value;
				var start = document.form1.tstart.value;
				var end = document.form1.tend.value;
				var eq = document.form1.equip.value;
				
				/*if(nama==""){
					alert("Filled out the name");
					return false;
				}
				if(std==""){
					alert("Filled out the student/staff id");
					return false;
				}
				if(aud==""){
					alert("Filled out the no of audience");
					return false;
				}
				if(tarikh==""){
					alert("Filled out the date");
					return false;
				}
				if(start==""){
					alert("Filled out the time start");
					return false;
				}
				if(end==""){
					alert("Filled out the time end");
					return false;
				}
				*/
				
				document.writeln( "<fieldset style=\"center\"><legend><h2>Booking Details </h2></legend>" +
								  "<table border=\"0\">" +
								  "<tr><td>Nama : </td><td>" + nama + "</td></tr>" +
								  "<tr><td>Student/Staff ID : </td><td>" + std + "</td></tr>" +
								  "<tr><td>No. of Audience : </td><td>" + aud + "</td></tr>" +
								  "<tr><td>Date : </td><td>" + tarikh + "</td></tr>" +
								  "<tr><td>Time Duration  : </td><td>" + start + " - " + end + "</td></tr>" +
								  "<tr><td>Equipment : </td><td>" + eq + "</td></tr>" +
								  "</table>" + 
								  "<a href=\"Asave.php\"><input type=\"button\" value=\"Confirm Booking\" name=\"confirm\"></a>" +
								  "<a href=\"Adelete.php\"><input type=\"button\" value=\"Cancel Booking\" name=\"cancel\"></a>" +
								  "</fieldset>" 
				);
			}
			
		</script> -->
		<script type="text/javascript">
		/*	(function() {
		function IDGenerator() {
	 
		 this.length = 8;
		 this.timestamp = +new Date;
		 
		 var _getRandomInt = function( min, max ) {
			return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
		 }
		 
		 this.generate = function() {
			 var ts = this.timestamp.toString();
			 var parts = ts.split( "" ).reverse();
			 var id = "";
			 
			 for( var i = 0; i < this.length; ++i ) {
				var index = _getRandomInt( 0, parts.length - 1 );
				id += parts[index];	 
			 }
			 
			 return id;
		 }

		 
	 }
	 
	 
	 document.addEventListener( "DOMContentLoaded", function() {
		var btn = document.querySelector( "#generate" ),
			output = document.querySelector( "#output" );
			
		btn.addEventListener( "click", function() {
			var generator = new IDGenerator();
			output.innerHTML = generator.generate();
			
		}, false); 
		 
	 });
	 
	 
 })(); */
		</script>
		
</head>

<body>
	<div class="main">
		<div class="container">
		<h2>Booking Form</h2>
		<table>
<?php
	if(isset($_POST['name'])){
		if(empty($_POST['name'])|| empty($_POST['id'])||empty($_POST['audience']) ||empty($_POST['date']) ||empty($_POST['tstart']) ||empty($_POST['tend']))
			echo "<script>alert('Please Do It Again!'); window.location='Aform.php'</script>";
		else {
		   $roomNo = $_POST['roomNo'];
		   $name = $_POST['name'];
		   $id = $_POST['id'];
		   $audience = $_POST['audience'];
		   $date = $_POST['date'];
		   $tstart = $_POST['tstart'];
		   $tend = $_POST['tend'];
		   $equip = $_POST['equip'];
		   
			$sql="INSERT INTO adlist (roomNo, name, id, audience, date, Tstart, Tend, equipment) 
				  VALUES ('$roomNo', '$name', '$id', '$audience', '$date', '$tstart', '$tend', '$equip')";
	   
			   if($conn -> query($sql) === true)
					 echo "<script>alert('Thank you your data has been saved !');</script>";
		}
		
	}
?>
			<form name="form1" method="post" action="Asave.php"><!--onsubmit="return validate()" -->
				<table border="0" width="" align="center">
					<tr>
						<td>&nbsp;</td>
						<!--<input type="hidden" name="no" value="<?php //echo $row['no']; ?>">-->
					</tr>
					<tr>
						<td>Room No :</td>
						<td>
							<select name="roomNo">
								<option>A1001</option>
								<option>A1002</option>
								<option>A1003</option>
								<option>A1004</option>
								<option>A1005</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Name :</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>Student/Staff ID :</td>
						<td><input type="text" name="id" required></td>
					</tr>
					<tr>
						<td>No of Audience :</td>
						<td><input type="text" name="audience" required></td>
					</tr>
					<tr>
						<td>Date :</td>
						<td><input type="date" name="date" required></td>
					</tr>
					<tr>
						<td>Time Start:</td>
						<td><input type="time" name="tstart" required></td>
					</tr>
					<tr>
						<td>Time End:</td>
						<td><input type="time" name="tend" required></td>
					</tr>
					<tr>
						<td>Equipment :</td>
						<td>
							<select name="equip">
								<option>None</option>
								<option>Projector</option>
								<option>HDMI Cable</option>
							</select>
						</td>
					</tr>
					<!--<tr>
						<td><button id="generate">Generate Booking Code</button></td>
						<td><code id="output" name="code"></code></td>
					</tr>
					-->
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
			</table>
			</form>
			
		</table>
		
		
	</div>
</body>
