

<?php
 session_start();
    if ($_SESSION['email'] == false) {
      echo "<script type='text/javascript'>alert('To post an add Please Login first! ');
       window.location='index.php?info=login';
</script>";
      
    }


 
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
    <header>
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="text-shadow: 6px 6px 6px gray;">HomeRent BD</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php #our_services"><i class="fas fa-briefcase"></i>Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php #customers"><i class="fas fa-users"></i>Our Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index.php #contact"><i class="far fa-address-card"></i>Contact Us</a>
              </li>
            </ul>

          </div>

          <form class="form-inline" action="logout.php" method="POST">
                <div class="input-group customize">
                  <a class="btn"href="profile.php" style="padding: 4px;"><i class="fas fa-user-circle"></i>  Profile</a>
                  <a class="btn btn-danger loginbtn" href="logout.php" role="button" style="padding: 5px;"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </div>
           </form>

        </div>

    </nav>

    <div  id="intro3" class="view hm-black-strong">
      <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 text-center" id="adjust1">
            <h2 class="display-3 font-bold text-black mb-2">
              HomeRent BD
            </h2>
            <hr class="hr-light">

            <h4 class="display-4 text-white my-4" style="text-shadow: 6px 6px 6px gray;">Please fill up the form below to Post ad</h4>
            <a class="btn btn-success btnpad" href="index.php" role="button">UniRent</a>
            <a class="btn btn-warning btnpad postad" href="search.php" role="button">Find Apartment</a>
          </div>

        </div>
      </div>

    </div>
  </header>
    <!-- navbar ends -->


<!-- post add begins -->
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <section>
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Post Ad for your apartment</h1>
            </div>

            <div class="panel-body" style=" padding: 15px; box-shadow: 10px 10px 10px gray;">

              <!----------------------------------------form------------------------------------------>
              <form  role="form" action="postAd_action.php" method="POST" enctype="multipart/form-data">
                <div class="form-group ">
                  <input type="text" name="name_house" class="form-control input-sm" required="required" placeholder="Name of house" />
                </div>
                <div class="form-group">
                  <input type="text" name="rent_cost" id="cost" class="form-control input-sm" placeholder="Rent in Taka">
                </div>
                <div class="form-group">
                  <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="phone">
                </div>

                <hr class="my-5"/>

                <div class="form-group">
                      <label for="inputAddress">Street</label>
                      <input type="text" class="form-control" name="street" id="street" required="required"  placeholder="1234 Main St">
                    </div>


                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control" id="inputCity" required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip">Zip</label>
                        <input type="text" name="zip" class="form-control" id="inputZip" required="required">
                      </div>
                    </div>

                    <hr class="my-5"/>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                            <label class="control-label col-sm-12">Which floor is the apartment situated  <span class="text-danger"></span></label>
                            <div class="col-xs-8">
                              <div class="form-inline">
                                <div class="form-group">
                                  <select name="floor" class="form-control" required="required">
                                    <option value="">Floor</option>
                                    <option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option><option value="5">5 </option><option value="6">6 </option><option value="7">7 </option><option value="8">8 </option><option value="9">9 </option><option value="10">10 </option><option value="11">11 </option><option value="12">12 </option><option value="13">13 </option><option value="14">14 </option><option value="15">15 </option><option value="16">16  </option>

                              </select>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                            <label class="control-label col-sm-6">Number of rooms<span class="text-danger"></span></label>
                            <div class="col-xs-8">
                              <div class="form-inline">
                                <div class="form-group">
                                  <select name="rooms" class="form-control" required="required">
                                    <option value="">rooms</option>
                                    <option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option><option value="5">5 </option><option value="6">6 </option><option value="7">7 </option><option value="8">8 </option><option value="9">9 </option><option value="10">10 </option><option value="11">11 </option><option value="12">12 </option><option value="13">13 </option><option value="14">14 </option><option value="15">15 </option><option value="16">16  </option>

                              </select>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                  </div>

                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <h5> Upload apartment picture</h5>
                  </div>
                  <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i></i></span>
                              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
                            </div>
                          </div>
                        </div>


                </div>
                <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn btn-success"><i class="fas fa-check-circle"></i>  Post</button>
                        </div><!-- End Bottom Submit -->
                
                <a href="signup.php">Don't have an account? Signup first.</a>
              </form>
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
              <p><i class="fas fa-envelope mr-3"></i> Homerentbd@gmail.com</p>
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
      <a href="#"> Homerentbd.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


</main>

    

  </body>

</html>
