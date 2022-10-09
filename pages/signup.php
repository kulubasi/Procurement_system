<?php
      session_start();
      include("config.php");
      if(isset($_POST['register'])){
        $email=$_POST['email'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['username'];
        $tel=$_POST['tel'];
        $password=$_POST['password'];
        $comp=$_POST['comp'];
        $location=$_POST['location'];
        
        $sql = "INSERT INTO suppliers (email,fname,lname,username,tel,pswd,comp,location) VALUES ('".$email."', '".$fname."','".$lname."','".$username."', '".$tel."', '".$password."','".$comp."','".$location."')";

        if (mysqli_query($db, $sql)) {
          echo '<script type="text/javascript">alert("You have succefully created an account you can now log in");window.location=\'../supplierlogin.php\';</script>'; 
        } 
        else {
          echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
        }

       
          
        //}
        

      }
      

      ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Procurement System | Sign up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Procurement </b>System</a>
  </div>
  <!-- /.login-logo -->
  <form action="" method="post">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Create a Free account with us</p>

      <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" placeholder="Firstname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="lname" placeholder="Lastname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email Address" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="tel" placeholder="Telephone Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="comp" placeholder="Company name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="location" placeholder="Location" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input type="text" class="form-control" name="category" placeholder="Category"> -->
          <select name="category" id="cars" class="form-control" required>
            <option value="supplier">Supplier</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div id="message" class="input-group mb-3">
          <h3>Password must contain the following:</h3>
          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
          <p id="number" class="invalid">A <b>number</b></p>
          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="rppassword" onkeyup="chkpwd();" placeholder="Repeat Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span id="mesg"></span>
        </div>
        <div class="row">
          
          <!-- /.col -->
        </div>

      <div class="social-auth-links text-center mb-3">
        <p>- -</p>
        <button class="btn btn-block btn-primary" type="submit" name="register">
          <i class="fa fa-unlock"></i> Register
        </button>
      
      </div> <br>
      <p class="text-center">Already have an account! <a href="../index.php">Login</a></p>

    </div>
          </form>

          

    <!-- /.login-card-body -->
  </div>
</div>

    
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script type="text/javascript">
  var chkpwd = function(){
    if (document.getElementById('password').value == document.getElementById('rppassword').value){
      document.getElementById('msg').innerHTML='Passwords are Matching';
      document.getElementById('msg').style.color='Green';
    }
    else{
      document.getElementById('msg').innerHTML='Passwords are not Matching';
      document.getElementById('msg').style.color='red';

    }
  }
</script>

<script>
  var myInput = document.getElementById("password");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
  }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>

</body>
</html>
