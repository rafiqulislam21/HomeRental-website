<?php
session_start();
//header("Location:index.php");


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


      date_default_timezone_set('Asia/Dhaka');
      $currentTime = date('Y-m-d H:i:s');

      $filename = $_FILES["file_nm"]["name"];
      $tempname = $_FILES["file_nm"]["tmp_name"];
      $folder = "img/".$filename;
      move_uploaded_file($tempname, $folder);



  


  $host = 'localhost'; 
  $user = 'root'; 
  $password = ''; 
  $db = 'unirentBd'; 
  $conn = mysqli_connect($host, $user, $password, $db);


//----------------------------------------------------------------------------------------------------*/



  if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    } 


    $sql = "INSERT INTO postAd (name_house, rent_cost, email, uemail, phone_num, street, city, zip, floor, room, picture, ptime) VALUES ('$name_house', '$rent_cost', '$email', '$uemail', '$phone', '$street', ' $city', '$zip', '$floor', '$rooms','$folder','$currentTime')";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully. Please Login first!";
        echo "<script type='text/javascript'>alert('New record created successfully.');
       window.location='search.php?info=post_successful';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();




    
    $conn->close();



  ?>