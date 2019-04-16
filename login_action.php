<?php
session_start();

$servername="localhost";
    $username="root";
      $password="";
        $dbname="unirentBd";


      $email = $_POST['lemail'];
      $pass = $_POST['lpassword'];
      $usertype = $_POST['usertype'];

      $_SESSION['usertype'] = $usertype;

      
            ///////////////////for forget password

// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT email, pass FROM signup where email='$email' and pass=md5('$pass')";
    $sqlAdmin = "SELECT email, pass FROM admin where email='$email' and pass='$pass'";

if ($result = $conn->query($sql)) {
    // output data of each row
$row = $result->fetch_assoc();

      if($row["email"]==$email && $row["pass"]==md5($pass) && $usertype == "User"){
        
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;


        //header("Location:http://localhost/project/material/ui.php"); 
        header('location: postAd.php');/* Redirect browser */

}
else {

  //-------------------------------admin login----------------------------
 
 if ($result = $conn->query($sqlAdmin)) {
    // output data of each row
$row = $result->fetch_assoc();

      if($row["email"]==$email && $row["pass"]==$pass && $usertype == "Admin"){
        
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;

        //header("Location:http://localhost/project/material/ui.php"); 
        header('location: profile_admin.php');/* Redirect browser */
        //SELECT USER();

}
else {


  echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.');
       window.location='index.php?info=login';
</script>";

//header('location: index.php');

}

}


  echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.');
       window.location='index.php?info=login';
</script>";

//header('location: index.php');

}

}

  else {


    echo "0 results";
}
$conn->close();
?>