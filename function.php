<?php
	
	require_once('dbconfig.php');

	function checkMail($email){
		global $connection;
		$sql = "SELECT 1 FROM signup WHERE email = '$email'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		return $count;
	}

	//echo checkMail("bimu@gmail.com");
	
	function getPassword($email){
		global $connection;
		$sql = "SELECT * FROM signup WHERE email = '$email'";
		$result = mysqli_query($connection,$sql);
		$data = mysqli_fetch_assoc($result);//fetch data using assco it can be also row 
		 //var_dump($data);
		return $data['pass'];
	
	}

	echo getPassword("bimu@gmail.com");
  ?>