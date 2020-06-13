<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'jobarena';

	$con = mysqli_connect($host , $username ,$password , $dbname);

	if(!$con){
		echo "Failed to connect with databse";
	}

?>