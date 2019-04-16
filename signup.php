<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
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
        </div>

    </nav>

    <div  id="intro3" class="view hm-black-strong">
      <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 text-center" id="adjust1">
            <h2 class="display-3 font-bold text-black mb-2" style="text-shadow: 6px 6px 6px gray;">
              HomeRent BD
            </h2>
            <hr class="hr-light">

            <h4 class="display-4 text-white my-4" style="text-shadow: 6px 6px 6px gray;">Please fill up the form below to Sign up</h4>
            <a class="btn btn-success btnpad" href="index.php" role="button">HomeRent</a>
            <a class="btn btn-warning btnpad postad" href="search.php" role="button">Find Apartment</a>
          </div>

        </div>
      </div>

    </div>
  </header>
    <!-- navbar ends -->

<!-- signup Starts -->
<main class="mt-5" >

    <div class="container" >
      <hr class="my-5"/>
      <section>
        <div class="row centered-form" style=" padding: 15px; box-shadow: 10px 10px 10px gray;">
          <div class="col-xs-8 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading ">
                  <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Sign Up!</h1>
                </div>

                <div class="panel-body">

                    <form role="form" action="signup_action.php" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                              <input type="text" name= "first_name" id="first_name" required="required" class="form-control input-sm" placeholder="First Name">
                          </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                              <input type="text" name= "last_name" id="last_name" required="required" class="form-control input-sm" placeholder="last Name">
                          </div>
                        </div>


                      </div>
                      <div class="form-group ">
                        <input type="email" name="email" id="email" required="required" class="form-control input-sm" placeholder="Email Adress" />
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="password" name="password" id="password" required="required" class="form-control input-sm" data-toggle="password" placeholder="Password">
                            <input type="checkbox" onclick="myFunction()">Show Password
                          </div>

                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="password" name="rPassword" id="password" class="form-control input-sm" data-toggle="password" placeholder="Retype Password">
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
                          <input type="text" name="contact_number" id="contact_number" required="required" class="form-control input-sm" placeholder="Contact Number">
                        </div>

                        <div class="form-group">
                              <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
                              <div class="col-xs-8">
                                <div class="form-inline">
                                  <div class="form-group">
                                    <select name="dd" class="form-control">
                                      <option value="">Date</option>
                                      <option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option><option value="5">5 </option><option value="6">6 </option><option value="7">7 </option><option value="8">8 </option><option value="9">9 </option><option value="10">10 </option><option value="11">11 </option><option value="12">12 </option><option value="13">13 </option><option value="14">14 </option><option value="15">15 </option><option value="16">16 </option><option value="17">17 </option><option value="18">18 </option><option value="19">19 </option><option value="20">20 </option><option value="21">21 </option><option value="22">22 </option><option value="23">23 </option><option value="24">24 </option><option value="25">25 </option><option value="26">26 </option><option value="27">27 </option><option value="28">28 </option><option value="29">29 </option><option value="30">30 </option><option value="31">31 </option>                </select>
                                  </div>
                                  <div class="form-group">
                                    <select name="mm" class="form-control">
                                      <option value="">Month</option>
                                      <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
                                  </div>
                                  <div class="form-group">
                                    <select name="yyyy" class="form-control">
                                      <option value="0">Year</option>
                                      <option value="1955">1955 </option><option value="1956">1956 </option><option value="1957">1957 </option><option value="1958">1958 </option><option value="1959">1959 </option><option value="1960">1960 </option><option value="1961">1961 </option><option value="1962">1962 </option><option value="1963">1963 </option><option value="1964">1964 </option><option value="1965">1965 </option><option value="1966">1966 </option><option value="1967">1967 </option><option value="1968">1968 </option><option value="1969">1969 </option><option value="1970">1970 </option><option value="1971">1971 </option><option value="1972">1972 </option><option value="1973">1973 </option><option value="1974">1974 </option><option value="1975">1975 </option><option value="1976">1976 </option><option value="1977">1977 </option><option value="1978">1978 </option><option value="1979">1979 </option><option value="1980">1980 </option><option value="1981">1981 </option><option value="1982">1982 </option><option value="1983">1983 </option><option value="1984">1984 </option><option value="1985">1985 </option><option value="1986">1986 </option><option value="1987">1987 </option><option value="1988">1988 </option><option value="1989">1989 </option><option value="1990">1990 </option><option value="1991">1991 </option><option value="1992">1992 </option><option value="1993">1993 </option><option value="1994">1994 </option><option value="1995">1995 </option><option value="1996">1996 </option><option value="1997">1997 </option><option value="1998">1998 </option><option value="1999">1999 </option><option value="2000">2000 </option><option value="2001">2001 </option><option value="2002">2002 </option><option value="2003">2003 </option><option value="2004">2004 </option><option value="2005">2005 </option><option value="2006">2006 </option>                </select>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                                  <label for="inputStreet">Street</label>
                                  <input type="text" class="form-control" name="street" id="inputStreet"  required="required" placeholder="1234 Main St">
                            </div>


                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city"id="inputCity" required="required">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="inputZip" required="required">
                                  </div>
                                </div>


                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <h5>Profile Picture </h5>
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
                            <button type="submit" id="submit" name="submit"  class="form-btn"><i class="fas fa-user-plus"></i>  Register</button>
                        </div><!-- End Bottom Submit -->
                    </form>

                </div>
            </div>


            
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <br><br>
              <img src="images/signup.png" class="img-fluid signup_img"/>
            </div>
      </section>
  <hr class="my-5"/>
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
              <p><i class="fas fa-envelope mr-3"></i> HomeRentbd@gmail.com</p>
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

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: #0e0f10">© 2019 Copyright:
      <a href="#"> HomeRentbd.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->




</main>


  </body>
</html>
