<?php
	$DBName = "vowel";
	$con = new mysqli('localhost', 'root', '', $DBName);
// 	$DBName = "vowel";
// 	$con = new mysqli('localhost', 'root', '', $DBName);
	if($con->connect_error){
		die("Connection failed: ".$con->connect_error);
	}
?>