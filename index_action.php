<?php
session_start();
header("Location:index.php");


$name=$_POST["name"];
$mail=$_POST["mail"];
$subject=$_POST["subject"];
$message=$_POST["message"];

      date_default_timezone_set('Asia/Dhaka');
      $currentTime = date('Y-m-d H:i:s');

  $host = 'localhost'; 
  $user = 'root'; 
  $password = ''; 
  $db = 'unirentBd'; 
  $conn = mysqli_connect($host, $user, $password, $db);



  //$filename = $_FILES["file_nm"]["name"];
//$tempname = $_FILES["file_nm"]["tmp_name"];
//$folder = "uploads/".$filename;
//move_uploaded_file($tempname, $folder);





  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO feedback (name,mail,subject,message,ptime)
    VALUES ('$name','$mail', '$subject', '$message','$currentTime')";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
      //echo "console.log('Hello world!')";
      echo "<script type='text/javascript'>alert('Feedback sent! ');
       window.location='index.php?info=login';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();


    
    $conn->close();



  ?>