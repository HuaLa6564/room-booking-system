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
		<script type="text/javascript">
			function validate(){
				var nama = document.form1.name.value;
				var std = document.form1.id.value;
				var aud = document.form1.audience.value;
				var tarikh = document.form1.date.value;
				var start = document.form1.tstart.value;
				var end = document.form1.tend.value;
				var eq = document.form1.equip.value;
				var n = std.length;
				
				if(document.form1.roomNo[0].selected){ //dropdown
					alert("Please select a room number");
					return false;
				}
				if(nama==""){
					alert("Filled out the name");
					return false;
				}
				if(!isNaN(nama)){
					alert("Name only in alphabet");
					return false;
				}
				if(std==""){
					alert("Filled out the student/staff id");
					return false;
				}
				if(isNaN(std)){
					alert("Student/Staff only in numeric");
					return false;
				}
				if(n!=10){
					alert("Student/Staff only in 10 digits");
					return false;
				}
				if(aud==""){
					alert("Filled out the no of audience");
					return false;
				}
				if(aud>501){
					alert("Number of audience must less than 500");
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
			}
			
		</script> 
</head>

<body>
	<div class="main">
		<div class="container">
		<h2><center><font style="font-family:Trajan Pro;color:teal;">Booking Form</font></center></h2>
		<table>
			<form name="form1" method="post" action="BSsave.php"><!--onsubmit="return validate()" -->
				<table border="0" width="" align="center">
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Seminar Room :</td>
						<td>
							<select name="roomNo">
								<option value="">-- Please select a room number --</option>8
								<option value="Bilik Seminar Utama">Bilik Seminar Utama</option>
								<option value="Bilik Seminar Blok C">Bilik Seminar Blok C</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Name :</td>
						<td><input type="text" name="name" ></td>
					</tr>
					<tr>
						<td>Student/Staff ID :</td>
						<td><input type="text" name="id" ></td>
					</tr>
					<tr>
						<td>No of Audience :</td>
						<td><input type="text" name="audience" ></td>
					</tr>
					<tr>
						<td></td>
						<td align="center"><font style="color:red" size="1" face="Courier">*Number of audience must less than 500 </font></td>
					</tr>
					<tr>
						<td>Date :</td>
						<td><input type="date" name="date" ></td>
					</tr>
					<tr>
						<td>Time Start:</td>
						<td><input type="time" name="tstart" ></td>
					</tr>
					<tr>
						<td>Time End:</td>
						<td><input type="time" name="tend" ></td>
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

