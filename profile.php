<?php
session_start();

$servername="localhost";
    $username="root";
      $password="";
        $dbname="unirentBd";


      $email = $_SESSION['email'];
      $passw = $_SESSION['pass'];

      
            ///////////////////for forget password

// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT * FROM signup where email='$email' and pass=md5('$passw')";

if ($result = $conn->query($sql)) {
    // output data of each row
$row = $result->fetch_assoc();

      if($row["email"]==$email && $row["pass"]==md5($passw)){
        //----------fetch data from table for profile show-----------------------------------------------
        $profile_pic=$row["pic_dir"];
        $first_name=$row["firstName"];
        $last_name=$row["lastName"];
        $email=$row["email"];
        $pass=$row["pass"];
        //$pass=md5($pass);
        $contact_number=$row["phone"];
        $street=$row["street"];
        $city=$row["city"];
        $zip=$row["zip"];

        $address = $street.", ".$city.", ".$zip;

        
        $birth_date = $row["birth"];

}else {


  //echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.')";
//window.location='index2.php?info=login';
//</script>";

//header('location: index.php');

}

}
  else {


    echo "0 results";
}
//$conn->close();
?>


<script type="text/javascript">
function edit(id)
{
  a=confirm('Are You Sure To Edit This Post ?')
   if(a)
     {
        window.location.href='edit_postAd.php?id='+id;
     }
}
</script> 
<script type="text/javascript">
function deletes(id)
{
  a=confirm('Are You Sure To Remove This Post ?')
   if(a)
     {
        window.location.href='delete_ad_user.php?id='+id;
     }
}
</script>
 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Profile</title>
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
    <section>
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
                  <a class="btn btn-danger loginbtn" href="logout.php" role="button" style="padding: 5px;"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </div>
           </form>

        </div>
      </nav>
    </section>

    <section>
      <div class="container">
    	  <div class="row">
          <div class="col-md-4 ">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="box box-info">
                
                <br><br><br><br>
                <div class="box-body">
                  <div class="col-sm-12" col-md-4>
                    <div  align="center"> 

                      <!--input id="profile-image-upload" class="hidden" type="file"-->
                      <a href="<?php echo $profile_pic ?>"><img src="<?php echo $profile_pic ?>" class="img-circle img-responsive" height="100" width="100"></a>
                      <div style="color:#999;" >click here to view full image</div>
                    <!--Upload Image Js And Css-->
                    </div>

                    <br>
                  <!-- /input-group -->
                  </div>
                    <form class=" form-inline">
                      <h4 id="name" name="name" style="color:#00b1b1;"><?php echo $first_name." ".$last_name ?></h4>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href='profile_edit.php' > Edit profile <i class='far fa-edit' style='font-size:20px;color:yellow'></i></a>
                    </form>
                    <div class="clearfix"></div>
                    <hr style="margin:5px 0 5px 0;">

                    <div class="col-sm-5 col-xs-6 tital " >First Name:</div>
                        <div id="fName" name="fName" class="col-sm-7 col-xs-6 "><?php echo $first_name ?></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div id="lName" name="lName" class="col-sm-7"><?php echo $last_name ?></div>
                          <div class="clearfix"></div>
                        <div class="bot-border"></div>

                          <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div id="birth" name="birth" class="col-sm-7"><?php echo $birth_date ?></div>

                          <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Adress:</div><div id="address" name="address" class="col-sm-7"><?php echo $address ?></div>

                         <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Email:</div><div id="email" name="email" class="col-sm-7"><?php echo $_SESSION['email'] ?></div>

                         <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div id="phone" name="phone" class="col-sm-7"><?php echo $contact_number ?></div>

                         <div class="clearfix"></div>
                        <div class="bot-border"></div>
                       <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                 </div>
              </div>
            </div>
          </div>

          <div class="col-md-8">

            <br><br><br><br><br><br><br>
           
            <div class="panel-heading">
              <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> My Posts</h1>
            </div>
            <div class="row">

              <!-----------------------------------------------------edit post----------------------->





          <?php

          $uemail = $_SESSION['email'];
              
  /*        $sql2 = "SELECT * FROM postad WHERE uemail='$uemail'";
          $result2 = $connection->query($sql2);
          $count2 = 0;

          if ($result2->num_rows > 0) {
           // if ($count == 0) {
            
            // }
            while ($row = $result2-> fetch_assoc()) {
              $count2 = $count2+1;

              
                //echo "<br>";
             

              echo '<div class="card-deck" >';
              echo  '<div class="card">';
              echo  '<a href="'.$row["picture"].'"><img class="card-img-top img-fluid" src="'.$row["picture"].'" alt="Card image cap" style = "height: 300px;"></a>';
              echo '<div class="card-body">';
              echo    '<h5 class="card-title"> House name: '.$row['name_house']."</h5>";
              echo    '<p class="card-text"> Rent cost: '.$row['rent_cost'].'/= </p>';
              echo    '<p class="card-text"> Floor: '.$row['floor'].", Room: ".$row['room'].'</p>';
              echo    '<p class="card-text"><small class="text-muted">'."street: ".$row['street'].", City: ".$row['city'].", Zip: ".$row['zip'].' | Posted at : '.$row['ptime'].'</small></p>';
              echo  '</div>';
              echo '</div>';

              echo '</div>';


              //echo $row['name_house'];
            }

            

          }

          $conn->close();
*/


          $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}

    $sql2 = "SELECT * FROM postad WHERE uemail='$uemail'";
          $result2 = $conn->query($sql2);
          $count2 = 0;

      if ($result2->num_rows > 0) {
           // if ($count == 0) {
            
            // }
            while ($row = $result2-> fetch_assoc()) {
              $count2 = $count2+1;

              
                //echo "<br>";
             

              echo '<div class="card-deck" style="width:50em; " >';
              echo  '<div class="card" style=" padding: 15px; box-shadow: 10px 10px 10px gray;">';
              echo  '<a href="'.$row["picture"].'"><img class="card-img-top img-fluid" src="'.$row["picture"].'" alt="Card image cap" style = "height: 300px; width:100%;"></a>';
              echo '<div class="card-body">';
              echo    '<h5 class="card-title"> House name: '.$row['name_house']."</h5>";
              echo    '<p class="card-text"> Rent cost: '.$row['rent_cost'].'/= </p>';
              echo    '<p class="card-text"> Floor: '.$row['floor'].", Room: ".$row['room'].'</p>';
              echo    '<p class="card-text"> Contact:<small class="text-muted">'." Email: ".$row['email'].", Phone: ".$row['phone_num'].'</small> </p>';
              echo    '<p class="card-text"> Adress: <small class="text-muted">'."street: ".$row['street'].", City: ".$row['city'].", Zip: ".$row['zip'].' | Posted at : '.$row['ptime'].'</small></p>';

              echo "<a href='#' onclick='edit($row[id])'> Edit post <i class='far fa-edit' style='font-size:20px;color:yellow'></i></a>";

              echo "<a href='#' onclick='deletes($row[id])'> Delete post <i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></a>";

              echo  '</div>';
              echo '</div>';

              echo '</div>';


              //echo $row['name_house'];
            }

            

          

      }
        else {


          echo "0 results";
      }
      $conn->close();
        ?>

        
            </div>
          </div>
        </div>
      </div>

    </section>



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





  </body>
  
</html>
