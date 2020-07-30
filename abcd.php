<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="foodie";
  $conn=new mysqli($servername,$username,$password,$db);
  if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
  }
  if(isset($_POST['submit_reg']) != 0 ){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $credits=$_POST['credits'];
    $type=$_POST['type'];
    //$image=addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
    //$image_name=addslashes($_FILES['image']['name']) ;

    if ((strlen($fname) == 0) || (strlen($lname) == 0) || (strlen($address) == 0) || (strlen($email) == 0) || (strlen($phone) == 0) || (strlen($username) == 0) || (strlen($password) == 0)) {
      echo '<script language="javascript">';
      echo 'alert("Please fill all the fields")';
      echo '</script>';
    }

    else {
  // check username exist or not
    $query = "SELECT username FROM user WHERE username='$username'";
    $result = mysqli_query($conn,$query);
    
    $count = mysqli_num_rows($result);
    if ($count==0) {

      $query2="INSERT INTO `user` (`sl`, `fname`, `lname`, `address`, `email`, `phone`, `username`, `password`,`credits`,`type`) VALUES (NULL, '$fname', '$lname', '$address', '$email', '$phone', '$username', '$password',0,'user');";
      $result=mysqli_query($conn,$query2);
      echo $result;
      if($conn->query($query2)===TRUE)
      {
        echo"record created";
      }
      echo "hello";

      echo "Registration Successful!";
      header('Refresh: 2; URL = sign_in.php');
    }
    else {
      echo "Sorry username already in use :( Please try a different username.";
      header('Refresh: 2; URL = sign_up.php');
    }
  }

  }
?>
<!DOCTYPE html>

<html lang="en">

  
<head>

    
	<meta charset="utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<meta name="description" content="">
    
	<meta name="author" content="">

    
	<title>Foodator</title>
    
  
</head>

  
<body>


	<?php
include "nav.php";
?>



    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Sign Up</h1>
        
      <!-- Sign up form-->
      <div class="container">
  <div class="row">
        <div class="col-md-6">
            <form action="sign_up.php" method="post" id="signup" role="form" enctype="multipart/form-data">
            <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="phone" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/> 
            </div>

            <div class="form-group">   
                <label for="firstname"><span class="req">* </span> First name: </label>
                    <input class="form-control" type="text" name="fname" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>

            <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label> 
                    <input class="form-control" type="text" name="lname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="address"><span class="req">* </span> Address: </label> 
                    <input class="form-control" required type="text" name="address" id = "address"  onchange="" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label for="username"><span class="req">* </span> Username:  <small>This will be your login user name</small> </label> 
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 3 characters" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>
            </div>

            <div class="form-group">
                <label for="image"><span class="req">* </span> Picture: </label>
                    <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*"/>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div> 

            </fieldset>
            </form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
        </div><!-- ends col-6 -->
   
           
</div>

<br>
<br>

      <!-- Contact us form ends Here-->




    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Foodie 2017</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>