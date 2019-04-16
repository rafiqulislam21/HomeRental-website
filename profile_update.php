<?php
session_start();
//header("Location:index.php");
//$info=$_GET["id"];


        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $pass=md5($pass);
        $contact_number=$_POST["contact_number"];
        $street=$_POST["street"];
        $city=$_POST["city"];
        $zip=$_POST["zip"];


        $birth_date=$_POST["birth_date"];
        


        


      date_default_timezone_set('Asia/Dhaka');
      $currentTime = date('Y-m-d H:i:s');



  


  $host = 'localhost'; 
  $user = 'root'; 
  $password = ''; 
  $db = 'unirentBd'; 
  $conn = mysqli_connect($host, $user, $password, $db);


//----------------------------------------------------------------------------------------------------*/



  if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    } 


    

    $sql = "UPDATE signup SET firstName = '$first_name', lastName='$last_name', email='$email', pass='$pass', phone='$contact_number', birth='$birth_date', street='$street', city='$city', zip='$zip'where email = '$email'";
    

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully. Please Login first!";
        echo "<script type='text/javascript'>alert('Profile Updated successfully.');
       window.location='profile.php?info=post_successful';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();




    
    $conn->close();



  ?>