

<?php
 session_start();
    require('dbconfig.php'); 
    if ($_SESSION['email'] == false) {
      echo "<script type='text/javascript'>alert('To post an add Please Login first! ');
       window.location='index.php?info=login';
</script>";
      
    }

$semail = $_SESSION['email'];
//echo $email;
 
 ?>

 

<?php

$servername="localhost";
    $username="root";
      $password="";
        $dbname="unirentBd";


// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM signup where email = '$semail'";
    //$sql = "SELECT * FROM admin where email='$email' and pass='$pass'";

if ($result = $conn->query($sql)) {
    // output data of each row
$row = $result->fetch_assoc();

        $first_name=$row["firstName"];
        $last_name=$row["lastName"];
        $email=$row["email"];
        $pass=$row["pass"];
        //$pass=md5($pass);
        $contact_number=$row["phone"];
        $street=$row["street"];
        $city=$row["city"];
        $zip=$row["zip"];


        
        $birth_date = $row["birth"];
        

}

  else {


    echo "0 results";
}
//echo $first_name;
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Ad</title>

    <link rel="icon" type="image/png" href="img/icon.png" />


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/css/media-queries.css" >
    <link rel="stylesheet" href="fontawesome/css/all.css" >
  </head>
  <body>

    <!-- navbar Starts -->
    
      <form class="form-inline" style="float: right; margin: 20px;" action="logout.php" method="POST">
                <div class="input-group customize">
                  <a class="btn"href="profile.php" style="padding: 4px;"><i class="fas fa-user-circle"></i>  Profile</a>
                  <a class="btn btn-danger loginbtn" href="logout.php" role="button" style="padding: 5px;"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </div>
           </form>

  
    <!-- navbar ends -->


<!-- post add begins -->
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <section>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-12">
          <div class="">
            <div class="">
              <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Update your Profile</h1>
            </div>

            <div class="panel-body" style=" padding: 35px; box-shadow: 10px 10px 10px gray;">





              <form role="form" action="profile_update.php" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                              <input type="text" name= "first_name" id="first_name" required="required" class="form-control input-sm" value="<?php  echo $first_name?>">
                          </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                              <input type="text" name= "last_name" id="last_name" required="required" class="form-control input-sm" value="<?php  echo $last_name?>">
                          </div>
                        </div>


                      </div>
                      
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="email" name="email" id="email" required="required" class="form-control input-sm" value="<?php  echo $email?>" />
                          </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="password" name="password" id="password" required="required" class="form-control input-sm" data-toggle="password" value="<?php  echo $pass?>">
                            <input type="checkbox" onclick="myFunction()">Show Password
                          </div>

                        </div>

                        
                        

                        <script type="text/javascript">
                          //$("#password").password('toggle');

                          function myFunction() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                              x.type = "text";
                            } else {
                              x.type = "password";
                            }
                          }
                        </script>
                        </div>
                        <div class="form-group">
                          <input type="text" name="contact_number" id="contact_number" required="required" class="form-control input-sm" value="<?php  echo $contact_number?>">
                        </div>

                        <div class="form-group">
                              <label class="control-label col-sm-3">Date of Birth <span class="text-danger"></span></label>
                              <div class="col-xs-8">
                                <div class="form-inline">
                                  <div class="form-group">
                                    
                                  </div>
                                  <div class="form-group">
                                   
                                  </div>
                                  <div class="form-group">
                                  <input type="text" class="form-control" name="birth_date" id="inputStreet"  required="required" value="<?php  echo $birth_date?>">
                                   </div>
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                                  <label for="inputStreet">Street</label>
                                  <input type="text" class="form-control" name="street" id="inputStreet"  required="required" value="<?php  echo $street?>">
                            </div>


                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city"id="inputCity" value="<?php  echo $city?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="inputZip"value="<?php  echo $zip?>">
                                  </div>
                                </div>


                      
                      <div class="relative fullwidth col-xs-12 form-inline">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn btn-success"><i class="fas fa-check-circle"></i>  Update</button>
                            <a href="profile.php" type="submit" id="submit" name="submit2" class="form-btn btn-success"><i class="fas fa-window-close"></i>  Cancel</a>
                        </div><!-- End Bottom Submit -->
                    </form>

              <!----------------------------------------form------------------------------------------>
              
            </div>
          </div>

        </div>

      </div>
    </section>
  </div>
  <div class="col-md-2">

  </div>
</div>

    <hr class="my-5"/>

  <!-- post add ends -->


</div>



<!-- signup ends ends -->




<!--footer---------------------->

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4" style="background-color:#1b2034; color: #fff;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Unirent BD</h5>
          <p>Here is the place where everyone can find their apartment for rent easily. It makes easier everyone's life and also saves a lot of time.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Our Services</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#our_services">Find Apartment</a>
            </li>
            <li>
              <a href="#our_services">Post Ad</a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact info</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-home mr-3"></i> Bashundhara R/A, Dhaka.</p>
            </li>
            <li>
              <p><i class="fas fa-envelope mr-3"></i> Unirentbd@gmail.com</p>
            </li>
            <li>
              <p><i class="fas fa-phone mr-3"></i> +8801927694519</p>
            </li>
            <li>
              <p><i class="fas fa-print mr-3"></i> +01 234 567 89</p>
            </li>
          </ul>

          

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="signup.php" class="btn btn-danger btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center" >
      <li class="list-inline-item">
        <a href="https://www.facebook.com/" class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://twitter.com/" class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://aboutme.google.com/u/0/?referer=gplus" class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.linkedin.com/?originalSubdomain=bd" class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: #0e0f10">© 2019 Copyright:
      <a href="#"> Unirentbd.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


</main>

    

  </body>

</html>
