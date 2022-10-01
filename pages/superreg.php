<?php
      session_start();
      include("config.php");
      if(isset($_POST['superreg'])){
        $oname=$_POST['oname'];
        $oimage=$_POST['oimage'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $rppassword=$_POST['rppassword'];
        
        $allowed=['png','jpg','jpeg'];
        $fl_name= $_FILES['oimg']['name'];
        $fl_extn=strtolower(end(explode('.', $fl_name)))
        $fl_temp= $_FILES['oimg']['tmp_name'];

        if in_array($fl_extn, $allowed){
          echo 'ok';
        }
        else{
          echo "The extension isnt allowed";
        }

        $sql = "INSERT INTO organizations (`oname`, `oimage`,`fname`,`lname`,`tel`,`email`,`pswd`,`rp`) VALUES ('$oname', '$oimage','$fname','$lname', '$tel', '$email','$password','$rppassword')";

        if (mysqli_query($db, $sql)) {
          echo "New user has been created successfully";
          echo "<script>window.location.href='aftersign.html';</script>";
          //header('Location:managerhome.php');
          //exit();
        } 
        else {
          echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
        }

        mysqli_close($conn);
          
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
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Procurement </b>System</a>
  </div>
  <!-- /.login-logo -->
  <form action="" method="post" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Create Your organization a Free account with us</p>

      <div class="input-group mb-3">
          <input type="text" class="form-control" name="oname" placeholder="Organization name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <label>Organization logo</label>
        <div class="input-group mb-3">

          <input type="file" class="form-control" name="oimg" placeholder="Organization Logo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>

        <label>Created by</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" placeholder="Individual Firstname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-use"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="lname" placeholder="Individual Lastname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-use"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email Address" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-use"></span>
            </div>
          </div>
        </div>

        

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="tel" placeholder="Telephone Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-use"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          
          <select name="category" id="cars" class="form-control" required>
            <option value="supplier">Supplier</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->

        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-loc"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" id="rppassword" name="rppassword" onkeyup="chkpwd();" placeholder="Repeat Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-password"></span>
            </div>
          </div>
          <span id="mesg"></span>
        </div>
        <div class="row">
          
          <!-- /.col -->
        </div>

      <div class="social-auth-links text-center mb-3">
        <p>- -</p>
        <button class="btn btn-block btn-primary" type="submit" name="superreg">
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

</body>
</html>
