
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>HomeRentBd.com</title>
    <link rel="icon" type="image/png" href="img/icon.png" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/css/media-queries.css" >
    <link rel="stylesheet" href="fontawesome/css/all.css" >



    <!-- pop up login -->

    <style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

  </head>
  <body>

<header>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" style="text-shadow: 6px 6px 6px gray;" href="index.php">HomeRent BD</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#our_services"><i class="fas fa-briefcase"></i>Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#customers"><i class="fas fa-users"></i>Our Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#contact"><i class="far fa-address-card"></i>Contact Us</a>
          </li>
        </ul>

      </div>

      <!-------------------------------        
      <form class="form-inline" action="profile.php" method="POST">
        <div class="input-group customize">
          <input type="text" class="form-control input-customize" name = "email" placeholder="Email">
          <input type="password" class="form-control input-customize" name = "password" placeholder="Password">
          <button class="btn btn-success loginbtn">Login</button>
      </div>
   </form>
       -->
   <!-------------------------------        -->




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login_action.php" method="POST">
    
    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" name="lemail" placeholder="Enter Email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" name="lpassword" placeholder="Enter Password" required>

      <label for="sel1">Login as (select one):</label>
      <select class="form-control" id="sel1" name="usertype">
        <option>Select</option>
        <option>Admin</option>
        <option>User</option>
        
      </select>
      <br>
        
      <button type="submit"><i class="fas fa-sign-in-alt"></i>  Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="changePass.php">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 <!--  --------------------------------- -->
 </div>


  <?php //-----------------------------------will do leter to identify wiich user is logged in---------
  //session_start();
  /*if($_SESSION['usertype'] == 'Admin'){
        $go = 'profile.php';
      } 
       else if($_SESSION['usertype'] == 'User'){
      $go = 'profile_admin.php';
    }*/  
  ?>

  <!--<a href="<?php //echo'$go';?>" style="padding: 5px;">Profile</a>-->
 <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" ><i class="fas fa-sign-in-alt"></i>  Login</button>

</nav>

<div  id="intro" class="view hm-black-strong">
  <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 text-center" id="adjust1">
        <h2 class="display-3 font-bold text-black mb-2" style="text-shadow: 6px 6px 6px gray;">
          HomeRent BD
        </h2>
        <hr class="hr-light">

        <h4 class="display-5 text-white my-4" >The biggest apartment searching portal in Bangladesh</h4>
        <a class="btn btn-success btnpad" href="search.php" role="button"><i class="fas fa-search"></i>  Find Apartment</a>
        <a class="btn btn-warning btnpad" href="postAd.php" role="button"><i class="fas fa-check-circle"></i>  Post Ad</a>
        <a class="btn btn-danger btnpad" href="signup.php" role="button"><i class="fas fa-user-plus"></i>  Signup</a>
      </div>

    </div>
  </div>

</div>

</header>


<main class="mt-5">


<!--search -->
    <div class="container" id="our_services">
      <hr class="my-5"/>
        <section id="search">
          <div class="row">
    <div class="col-md-8 ">
      <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Easily search for apartments</h1>
      <p class="my-3">
        In a matter of minutes, HomeRentBd.com will help your Apartment get the much-needed visibility. Property advertisements are the best way to reach out to potential homebuyers and tenants and shortlisting the best among the pool of the real estate listing websites should be your first step.
        HomeRentBd.com has a commendable traffic and millions of prospective homerenters and tenants visit the website every day. Make the most of this opportunity to be visible and post unlimited real estate listings.

        Rent of Ad quick with HomeRentBd.com!
      </p>
      <a class="btn btn-success btnpad" href="search.php" role="button"><i class="fas fa-search"></i>   Find Apartment</a>

    </div>
    <div class="col-md-4">
      <img src="images/4.jpg" class="img-fluid"/>
    </div>
</div>
        </section>
        <hr class="my-5"/>

<!--search -->


<!--post -->
        <section id="post">
          <div class="row">
          <div class="col-md-8 ">
          <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Post Ad for your apartment</h1>
          <p class="my-3">
          Looking at a property listing website that will effectively help you sell your house? Wondering where to advertise rentals? Join. All you need to do is furnish a comprehensive property list with accurate and relevant details of your property.

          In a matter of minutes, HomeRentBd.com will help your aparment get the much-needed visibility. Property advertisements are the best way to reach out to potential homebuyers and tenants and shortlisting the best among the pool of the real estate listing websites should be your first step. Listing property is a matter of few minutes and you are done.
          </p>
          <a class="btn btn-warning btnpad " href="postAd.php" role="button"><i class="fas fa-check-circle"></i>  Post Ad</a>
        </div>
          <div class="col-md-4">
          <img src="images/5.jpg" class="img-fluid"/>
          </div>
          </div>
        </section>

<hr class="my-5" id="customers"/>
<!--post -->


<h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;" id="customers"> Lets see what our customers has  to say</h1>


<!-- cards------------------>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->

  <div class="carousel-inner ">
    <div class="carousel-item active ">
      <div class="card-deck " style="width: 40rem; padding: 35px; margin-left: 250px;">
          <div class="card" >
          <img class="card-img-top img-fluid" src="images/chakla.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Adil, NSU</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="card-deck " style="width: 40rem; padding: 35px; margin-left: 250px;">
          <div class="card" >
          <img class="card-img-top img-fluid" src="images/chakla.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Aritra Chaklader, NSU</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="card-deck " style="width: 40rem; padding: 35px; margin-left: 250px; ">
          <div class="card" >
          <img class="card-img-top img-fluid" src="images/chakla.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Aritra Chaklader, NSU</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
          </div>
        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--cards customer--

cards customer-->
</div>


<!--cONTCT US-->
<hr class="my-5" id="customers"/>
<div class="container " style=" padding: 15px; box-shadow: 10px 10px 10px gray;" >
  
      <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;" id="contact"> Contact Us</h1>
  <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="index_action.php" enctype="multipart/form-data">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">

                        <!--  <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i></i></span>
                              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
                            </div>
                          </div>
                        </div>

-->
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold"><i class="fas fa-envelope"></i>  Send Message</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
</div>
<!--cONTCT US-->


<hr>


</main>


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
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HomeRent BD</h5>
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
        <a href="signup.php" class="btn btn-danger btn-rounded"><i class="fas fa-user-plus"></i>  Sign up!</a>
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
    
    <div>
      <h6>Location</h6>

      <div id="googleMap" style="width:100%;height:400px;"></div>

      <script>
      function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(23.8191,90.4526),
        zoom:5,
      };
      var location = {lat:23.8191 , lng:90.4526 };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      var marker = new google.maps.Marker({
          position: location, map: map
      })
      }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8
      &callback=myMap"></script>
    </div>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: #0e0f10">© 2019 Copyright:
      <a href="#"> HomeRent.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="custom.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
