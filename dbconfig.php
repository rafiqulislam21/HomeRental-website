<?php
	$hostName = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'uniRentBd';

	$connection = mysqli_connect($hostName,$user,$password,$db_name);

	if (!$connection) {
		die('Unable to connect: '.mysqli_connect_error());
	}

	
?>