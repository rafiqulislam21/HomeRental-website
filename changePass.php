<?php

//$user= $_SESSION['user'];
//echo "$user";


if(isset($_POST["submit"])){

  $servername="localhost";
    $username="root";
      $password="";
        $dbname="unirentBd";

  $old_email=$_POST['email'];
  $new_pass=md5($_POST['new_pass']);
  $conf_pass=md5($_POST['conf_pass']);



  $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }         

  	$sql = "SELECT * FROM signup WHERE email='$old_email' ";
  
  	if ($result = $conn->query($sql)) {
    
           $row = $result->fetch_assoc();
           $mailcheck=$row["email"];
											
											//echo "$mailcheck";

  												} 


  		if($new_pass==$conf_pass && $mailcheck=$old_email){

  						$sql2 = "UPDATE signup SET pass='$new_pass' WHERE email='$old_email'";

           								if ($conn->query($sql2) === TRUE) {
    														
    															echo "<script type='text/javascript'>alert('Password updated succesfully! Login again.');
																																	
																		</script>";

                                  echo"<script> window.location.href = 'index.php?info=login' ; </script>";
																	
																	}
                               			
            							}

                      		else{
                              	echo "<script type='text/javascript'>alert('New password not matched with Confirm Password ');				
																		</script>";
                               									
                               									}

															$conn->close();


															}

?>









<!DOCTYPE html>
  <html>
  <head>
      <title>Change Password</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
       <link href="css/style.css" rel="stylesheet">

       <link href="http://localhost/Online_feedback/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
             
        <div class="container" style="margin-top: 10px;margin-left: 300px;">
                          
           <div class="row">

               <div class="col-sm-8">
      
                        <h2 style="margin-top: 10px;text-align: center;">Change password</h2>
                    
                    <form method="post">
                  
                  <div class="form-group">

                <label for="Email">Enter your email</label>
    
              <input type="email" class="form-control" id="old_pass" name="email"required="true" placeholder="Email:"> 

                      </div>
  
              <div class="form-group">
    
            <label for="pwd">Enter your new password</label>
    
          <input type="password" class="form-control" id="new_pass" name="new_pass"required="true" placeholder="New password">
              
              </div>
  
            <div class="form-group">
        
          <label for="pwd">Confirm your new password:</label>
    
        <input type="password" class="form-control" id="conf_pass" name="conf_pass"required="true" placeholder="Confirm password">
            </div>
      
      <button type="submit" name="submit"class="btn btn-primary">Submit</button>
  
    </form>

    </div>
    
    </div>
    </div>








    
  
    
             </body>
             </html>                                               

