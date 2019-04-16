<?php
session_start();

$servername="localhost";
    $username="root";
      $password="";
        $dbname="unirentBd";


      //$email = $_SESSION['email'];
      //$passw = $_SESSION['pass'];
            ///////////////////for forget password

// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM admin";
    //$sql = "SELECT * FROM admin where email='$email' and pass='$pass'";

if ($result = $conn->query($sql)) {
    // output data of each row
$row = $result->fetch_assoc();

      //if($row["email"]==$email && $row["pass"]==$passw){
        //----------fetch data from table for profile show-----------------------------------------------
        $profile_pic=$row["picture"];
        $first_name=$row["first_name"];
        $last_name=$row["last_name"];
        $email=$row["email"];
        $pass=$row["pass"];
        //$pass=md5($pass);
        $contact_number=$row["phone"];

        $address = $row["address"];

      

//}else {


  //echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.')";
//window.location='index2.php?info=login';
//</script>";

//header('location: index.php');

//}

}
  else {


    echo "0 results";
}
//-------------------------------------------------------------user table-------------------------------

$sql2 = "SELECT * FROM signup";

if ($result2 = $conn->query($sql2)) {
    // output data of each row
$row = $result2->fetch_assoc();

      
        $first_name=$row["firstName"];
        $last_name=$row["lastName"];
        $email=$row["email"];
        //$pass=md5($pass);
        $contact_number=$row["phone"];
        $street=$row["street"];
        $city=$row["city"];
        $zip=$row["zip"];

        $address = $street.", ".$city.", ".$zip;

        
        $birth_date = $row["birth"];
//}else {


  //echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.')";
//window.location='index2.php?info=login';
//</script>";

//header('location: index.php');

//}

}
  else {

    echo "0 results";
}

//-------------------------------------------------------------ad table-------------------------------

$sql3 = "SELECT * FROM Postad";

if ($result3 = $conn->query($sql3)) {
    // output data of each row
$row = $result->fetch_assoc();

//}else {


  //echo "<script type='text/javascript'>alert('Wrong Username or Password! Please try again.')";
//window.location='index2.php?info=login';
//</script>";

//header('location: index.php');

//}

}
  else {


    echo "0 results";
}

$conn->close();
?>


<script type="text/javascript">
function deletes(id)
{
  a=confirm('Are You Sure To Remove This Record ?')
   if(a)
     {
        window.location.href='delete_ad.php?id='+id;
     }
}
</script> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
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
           
            <a class="navbar-brand" href="" style="text-shadow: 6px 6px 6px gray;">HomeRent BD</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
            </div>

            <form class="form-inline" action="logout.php" method="POST">
                <div class="input-group customize">
                  <a class="btn btn-danger loginbtn" href="logout.php" role="button" style="padding: 5px;"><i class="fas fa-sign-out-alt"></i>  Logout</a>
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
                <div class="panel-heading">
              <h1 class="display-4 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Admin Panel</h1>
            </div>
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
                    <div class="col-sm-6">
                      <h4 id="name" name="name" style="color:#00b1b1;"><?php echo $first_name." ".$last_name ?></h4>
                    </div>
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
              <h1 class="display-6 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Admin List</h1>
            </div>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $first_name ?></td>
                  <td><?php echo $last_name ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $contact_number ?></td>
                  <td><?php echo $address ?></td>
                </tr>
                
              </tbody>
            </table>



            <div class="panel-heading">
              <h1 class="display-6 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> User List</h1>
            </div>


            <?php 
              echo '<table class="table table-striped">
               <thead>
              <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Birth date</th>
                  <th>Address</th>
                </tr>
              </thead>';

              while($row = mysqli_fetch_assoc($result2))
              {
              echo "<tbody>";
              echo "<tr>";
              echo "<td>" . $row["firstName"] . "</td>";
              echo "<td>" . $row["lastName"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["birth"] . "</td>";
              echo "<td>" . $row["street"].$row["city"].$zip=$row["zip"] . "</td>";
              echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></a></td>";
              echo "</tr>";
              echo "</tbody>";
              }
              echo "</table>";
             ?>


            
          </div>


        </div>

        <div class="panel-heading">
              <h1 class="display-6 font-bold text-black mb-2 align-items-center" style="text-shadow: 6px 6px 6px gray;"> Posted Ad</h1>
            </div>

            <?php 
              echo '<table class="table table-striped">
               <thead>
              <tr>
                  <th>HouseName</th>
                  <th>RentCost</th>
                  <th>Floor</th>
                  <th>Room</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Post time</th>
                </tr>
              </thead>';

              while($row = mysqli_fetch_assoc($result3))
              {
              echo "<tbody>";
              echo "<tr>";
              echo "<td>" . $row["name_house"] . "</td>";
              echo "<td>" . $row["rent_cost"] . "</td>";
              echo "<td>" . $row["floor"] . "</td>";
              echo "<td>" . $row["room"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["phone_num"] . "</td>";
              echo "<td>" . $row["street"].$row["city"].$zip=$row["zip"] . "</td>";
              echo "<td>" . $row["ptime"] . "</td>";
              echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></a></td>";
              echo "</tr>";
              echo "</tbody>";
              }
              echo "</table>";
             ?>
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
              <p><i class="fas fa-envelope mr-3"></i> homerentbd@gmail.com</p>
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
