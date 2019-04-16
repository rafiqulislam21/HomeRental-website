<?php
    session_start();
    require('dbconfig.php'); 
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/css/media-queries.css" >
    <link rel="stylesheet" href="fontawesome/css/all.css" >
  </head>


  <body>

<header>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">HomeRent BD</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php #our_services"><i class="fas fa-briefcase"></i>Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php #customers"><i class="fas fa-users"></i>Our Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php #contact"><i class="far fa-address-card"></i>Contact Us</a>
          </li>
        </ul>

      </div>
    </div>

</nav>

<div  id="intro2" class="view hm-black-strong">
  <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 text-center" id="adjust1">
        <h2 class="display-4 font-bold text-white mb-2">
          HomeRent BD
        </h2>
        <hr class="hr-light">

        <a class="btn btn-warning btnpad " href="postAd.php" role="button"><i class="fas fa-check-circle"></i>  Post Ad</a>

        

        <h4 class="display-5 text-white my-4">Find Your Apartment Easily</h4><br>

        <!--search box
        <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div>
       </div>

        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
-->      <!--
        <form class="navbar-form" role="search" action="/action_page.php">
            <div class="input-group add-on">
              <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
              <div class="input-group-btn">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
            </div>
          </form>

-->


      </div>

    </div>
  </div>

</div>

</header>




<main class="mt-5">
  <div class="container">
    <!--cards customer-->
          <h1 class="display-5 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;" id="customers"> Previous Posts</h1>
          <hr>

          <?php
              
          $sql = "SELECT * FROM postad";
          $result = $connection->query($sql);
          $count = 0;

          if ($result->num_rows > 0) {
           // if ($count == 0) {
            
            // }
            while ($row = $result-> fetch_assoc()) {
              $count = $count+1;

              
                //echo "<br>";
             

              echo '<div class="card-deck" style="width:32em; display: inline-block;" >';
              echo  '<div class="card" style=" padding: 15px; box-shadow: 10px 10px 10px gray;">';
              echo  '<a href="'.$row["picture"].'"><img class="card-img-top img-fluid" src="'.$row["picture"].'" alt="Card image cap" style = "height: 300px; width:100%;"></a>';
              echo '<div class="card-body">';
              echo    '<h5 class="card-title"> House name: '.$row['name_house']."</h5>";
              echo    '<p class="card-text"> Rent cost: '.$row['rent_cost'].'/= </p>';
              echo    '<p class="card-text"> Floor: '.$row['floor'].", Room: ".$row['room'].'</p>';
              echo    '<p class="card-text"> Contact:<small class="text-muted">'." Email: ".$row['email'].", Phone: ".$row['phone_num'].'</small> </p>';
              echo    '<p class="card-text"> Adress: <small class="text-muted">'."street: ".$row['street'].", City: ".$row['city'].", Zip: ".$row['zip'].' | Posted at : '.$row['ptime'].'</small></p>';
              echo  '</div>';
              echo '</div>';

              echo '</div>';

              if ($count%2==0) {
                echo '<br>';
                
              }
              if ($count%2==1) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              }

              


              //echo $row['name_house'];
            }

            

          }
          $connection->close();

        ?>
          

        

          
  </div>




        



        <!--  <div class="card-deck">
                <div class="card">
                <img class="card-img-top img-fluid" src="images/chakla.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Aritra Chaklader, NSU</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top img-fluid" src="images/tanvir.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Tanvir Ahmed, IUB</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top img-fluid" src="images/samira.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Samira Mateen, EWU</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
          </div>

          <div class="card-deck">
              <div class="card">
                <img class="card-img-top img-fluid" src="images/mumu.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Sabrina alam, NSU</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top img-fluid" src="images/arif.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Arif khan, IUB</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              
              <div class="card">
                <img class="card-img-top img-fluid" src="images/akhi.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Noor Jahan, EWU</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
              </div>
          </div>

        -->
  </div>

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

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    
  </body>
</html>
