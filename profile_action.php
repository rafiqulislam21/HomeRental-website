<?php 
require_once('function.php');
session_start();

if ($_SERVER['REQUEST_METHOD']!= "POST") {
    header("Location:index.php");
}else{
      //$first_name= $_POST['first_name'];
      //$last_name= $_POST['last_name'];
      $email= $_POST['email'];
      $pass= $_POST['password'];
      //$contact_number= $_POST['contact_number'];
      //$street= $_POST['street'];
      //$city= $_POST['city'];
      //$zip= $_POST['zip'];
      //$dd=$_POST["dd"];
      
      //$mm=$_POST["mm"];
      //$yyyy=$_POST["yyyy"];

      //$date=$yyyy."-".$mm."-".$dd;
      //$birth_date = date("y-m-d",strtotime($date));


      //check mail exist 
      $count = checkMail($email);
      $userPassword = getPassword($email);

      if ($count>0) {
          $pass = sha1($pass);// hash password
        if ($email == $email && $pass == $userPassword) {

          //$_SESSION['firstName'] = $first_name;
          //$_SESSION['lastName'] = $last_name;
          $_SESSION['email'] = $email;
          $_SESSION['pass'] = $pass;
          //$_SESSION['phone'] = $contact_number;
          //$_SESSION['street'] = $street;
          //$_SESSION['city'] = $city;
          //$_SESSION['zip'] = $zip;
          //$_SESSION['birth'] = $birth_date;
          header("Location:profile.php");

          }
          else{
            die("Email or Password is worng !");
          }
          }
      else{
        die("Email not found !");
      }


}

   

?>