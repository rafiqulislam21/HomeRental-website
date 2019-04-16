<?php
session_start();
//header("Location:index.php");
  $info=$_GET["id"];


  $host = 'localhost'; 
  $user = 'root'; 
  $password = ''; 
  $db = 'unirentBd'; 
  $conn = mysqli_connect($host, $user, $password, $db);


//----------------------------------------------------------------------------------------------------*/



  if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    } 


    $sql = "DELETE FROM postad where id='$info'";
    //DELETE FROM `postad` WHERE `postad`.`id` = 72

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully. Please Login first!";
        echo "<script type='text/javascript'>alert($info.' record delete successfully.');
       window.location='profile_admin.php?info=delete ad';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();




    
    

	
	
	
	//mysqli_query($conn,"delete from postad where id='$info'");
	header('location:profile_admin.php?info=ad_list');

	$conn->close();
?>