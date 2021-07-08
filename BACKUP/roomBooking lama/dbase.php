<?php
   $hostname = "localhost";
   $username = "root";
   $password = "Farah2106";
   $dbname = "roomBooking";

   $conn=mysqli_connect($hostname,$username,$password,$dbname) OR DIE("connection failed!");
   //start session
	session_start();
?>