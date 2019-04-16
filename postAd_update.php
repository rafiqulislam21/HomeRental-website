<?php
session_start();
//header("Location:index.php");
//$info=$_GET["id"];

$name_house= $_POST['name_house'];
      $rent_cost= $_POST['rent_cost'];
      $street= $_POST['street'];
      $city= $_POST['city'];
      $zip= $_POST['zip'];
      $floor=$_POST["floor"];
      $rooms=$_POST["rooms"];
      $phone=$_POST["phone"];
      $email=$_POST["email"];

      $uemail = $_SESSION['email'];

      $info = $_SESSION["id"];


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


    

    $sql = "UPDATE postAd SET name_house = '$name_house', rent_cost='$rent_cost', email='$email', phone_num='$phone', street='$street', city='$city', zip='$zip', floor='$floor', room='$rooms' WHERE id = '$info'";
    

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully. Please Login first!";
        echo "<script type='text/javascript'>alert('Ad Updated successfully.');
       window.location='profile.php?info=post_successful';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();




    
    $conn->close();



  ?>