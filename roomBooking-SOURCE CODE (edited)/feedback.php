<html>
<?php include("navbar.php"); ?>
<head>

	<title>Feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" 
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript">
	function feedback(){
	
		var nama = document.form.name.value;
		var com = document.form.comment.value;
		
		for (var count=0; count<=1; count++){
				if(document.form.rate[count].checked){
				var r = document.form.rate[count].value;
			}
		}
		if(!r){
			alert("Please rate us");
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
		if(com==""){
			alert("Filled out the comment");
			return false;
		}
		
		
	}
	</script>
	<style>
	body {margin:0;}
	.main {
	  padding: 5px;
	  margin-top: 30px;
	  margin-bottom: 10px
	  height: 1500px; /* Used in this example to enable scrolling */
	}
	body {
		background-color: lavender;
	}
	.container {
		padding: 10px 10px;
		background-color: white	;
		width: 800px;
	}
	
	</style>
</head>
<body>
	<div class="main">
		<div class="container">
			<form name="form" action="feed.php" method="post" onsubmit="return feedback()">
			<div class="row " style="margin-top: 0px">
			<div class="col-md-10 col-md-offset-1 form-container">
				<h1><b>Feedback</b></h1>
				<p><b>Please provide your feedback below:<b></p>
			<form name="form" method="post" action="">
				
				<div class="row">
					<div class="col-sm-12 form-group">
						<label for="rate">
							Rate:</label>
						<input type="radio" name="rate" value="Good">&nbsp; Good</input>&emsp;
						<input type="radio" name="rate" value="Average">&nbsp; Average</input>&emsp;
						<input type="radio" name="rate" value="Bad"> &nbsp; Bad</input>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12 form-group">
						<label for="name">
							Your Name:</label>
						<input type="text" class="form-control"  name="name" >
					</div>	
				</div>
		
				<div class="row">
					<div class="col-sm-12 form-group">
						<label for="comments">
							Comments:</label>
						<textarea class="form-control" type="textarea" name="comment" placeholder="Your Comments" maxlength="6000" rows="7"  ></textarea>
					</div>
				</div>

                <div class="row">
                <div class="col-sm-12 form-group">
                    <input type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="Submit" >
                </div>
				</div>
			
			</div>
			</div>
			</form>
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