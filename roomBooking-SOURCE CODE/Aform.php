<?php include("dbase.php"); ?>
<?php include("navbarBlockA.php"); ?>

<html>
	
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>

	body {
		background-color: lavender;
		margin:0;
	}
	
	body {margin:0;}
	.main {
	  padding: 12px;
	  margin-top: 50px;
	  height: 900px; /* Used in this example to enable scrolling */
	}
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
		padding: 50px 50px;
		background-color: white	;
		width: 800px;
		margin-top: 0px;
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
				if(aud>41){
					alert("Number of audience must less than 40");
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
		<br>
		
			<form name="form1" method="post" action="Asave.php" onsubmit="return validate()" >
				<div class="col-sm-13 form-group">
				<label for="roomNo">Room No</label>
				<select name="roomNo">
					<option value="">-- Please select a room number --</option>
					<option value="A1001">A1001</option>
					<option value="A1002">A1002</option>
					<option value="A1003">A1003</option>
					<option value="A1004">A1004</option>
					<option value="A1005">A1005</option>
				</select>
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="name">Name </label>
				<input type="text" name="name" placeholder="Your name..">
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="id">Student/Staff ID </label>
				<input type="text" name="id" placeholder="Your id..">
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="audience">No of Audience </label>
				<input type="text" name="audience" placeholder="Number of students/audiences..">
				<font style="color:red" size="2" face="Courier">*Number of audience must less than 40</font>
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="date">Date :</label>
				<input type="date" name="date" placeholder="Enter your date..">
		
				<label for="tstart">Time Start :</label>
				<input type="time" name="tstart" placeholder="Enter time start..">
		
				<label for="tend">Time End :</label>
				<input type="time" name="tend" placeholder="Enter time end..">
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="equip">Equipment</label>
				<select name="equip">
					<option>None</option>
					<option>Projector</option>
					<option>HDMI Cable</option>
				</select>
				</div>
				
				<div class="col-sm-13 form-group">
                    <input type="submit" class="btn btn-lg btn-warning btn-block" name="submit" value="Submit">
                </div>
				
				
				
		
		</div>
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