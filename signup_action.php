<?php
session_start();
//header("Location:index.php");


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$pass=md5($pass);
$contact_number=$_POST["contact_number"];
$street=$_POST["street"];
$city=$_POST["city"];
$zip=$_POST["zip"];

$dd=$_POST["dd"];
$mm=$_POST["mm"];
$yyyy=$_POST["yyyy"];

$date=$yyyy."-".$mm."-".$dd;
$birth_date = date("y-m-d",strtotime($date));




//session-----------------------------

          $_SESSION['firstName'] = $first_name;
          $_SESSION['lastName'] = $last_name;
          $_SESSION['email'] = $email;
          $_SESSION['pass'] = $pass;
          $_SESSION['phone'] = $contact_number;
          $_SESSION['street'] = $street;
          $_SESSION['city'] = $city;
          $_SESSION['zip'] = $zip;
          $_SESSION['birth'] = $birth_date;



    

  date_default_timezone_set('Asia/Dhaka');
  $currentTime = date('Y-m-d H:i:s');

  //echo nl2br("name: $name \n");


  


  $host = 'localhost'; 
  $user = 'root'; 
  $password = ''; 
  $db = 'unirentBd'; 
  $conn = mysqli_connect($host, $user, $password, $db);



//profile pic

$filename = $_FILES["file_nm"]["name"];
$tempname = $_FILES["file_nm"]["tmp_name"];
$folder = "uploads/".$filename;
//move_uploaded_file($tempname, $folder);



  /*----------profile---------picture----------------------------
$target_dir = "uploads/";
$target_file = $target_dir. basename($_FILES["file_nm"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file_nm"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file_nm"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file_nm"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file_nm"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//----------------------------------------------------------------------------------------------------*/



  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["file_nm"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($_FILES["file_nm"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - ".$check["mime"].".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
    echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file. Choose valid photo format.');
       window.location='signup.php?info=try-again';
</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file_nm"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO signup (firstName,lastName,email,pass,phone,street,city,zip,birth,pic_name,pic_dir)
    VALUES ('$first_name','$last_name', '$email', '$pass','$contact_number','$street','$city','$zip','$birth_date','$filename','$folder')";
    } else {
        
        echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.');
       window.location='signup.php?info=try_again-Please';
</script>";
    }
}

    

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully. Please Login first!";
        echo "<script type='text/javascript'>alert('Account created successfully. Please Login first!');
       window.location='index.php?info=login';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();


    
    $conn->close();



  ?>