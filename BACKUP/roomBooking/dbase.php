<?php
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "roombooking";

   $conn=mysqli_connect($hostname,$username,$password,$dbname) OR DIE("connection failed!");
   //start session
	session_start();
?>