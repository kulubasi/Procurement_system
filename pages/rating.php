<?php
session_start();
if(isset($_SESSION['$username'])){
}else{
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Procurement System | </title>
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
	
 
<div style="margin-right: 100px; margin-left: 100px">
              <?php
  $a = $_GET['sup'];
  $c = $_GET['ten'];
  include("config.php");
    $mydb ="SELECT * FROM   applications WHERE name ='".$a."' AND tender ='".$c."'";
    $run=mysqli_query($db,$mydb);
    if($run == true){
        while($row=mysqli_fetch_array($run)){
            $a =$row[0];
            $b=$row[1];
            $c  =$row[2];
            $d =$row[3];
            $e =$row[5];
            $f =$row[6];
            $g =$row[7];
            $h =$row[4];
            $i =$row[8];
            $z=$row[2];
            $j=$row[9];
            $y=$row[13];        

         }
     }           
   ?>
   <?php
    
    $x= $_SESSION['$username'];
    
     include("config.php");
    $mydb ="SELECT * FROM users WHERE username ='".$x."'";
    $run=mysqli_query($db,$mydb);
    if($run == true){
        while($row=mysqli_fetch_array($run)){
            $n1=$row[1];
            $n2  =$row[2];
            echo$n1;
            }}

    ?>
  
  
  <form role="form" method="post" action="rating.php">
  <div class="modal-content">
    <div class="modal-body">
    	<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="procurement_board.php">Home</a>><a href="applications.php">Applications</a>><a href="applicationdetails.php">details</a>>rating</li>
            </ol>
      <div class="card card-primary">
      <div class="card-header">

        <h3 class="card-title" align="center">Supplier rating</h3>
      </div>
   
        <div class="card-body">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-3">
              <label>Supplier name:</label>
          </div>
          <div class="col-sm-4">
              <input type="text" name="supplier" class="form-control" value="<?php echo $d; ?>" >

          </div>
          <div class="col-sm-3">
          </div>
            </div>
            <br/>

            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Tender:</label>
              </div>
              <div class="col-sm-4">
                <input type="text" name="tender" class="form-control" value="<?php echo $c; ?>" >
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>

            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Price</label>
              </div>
              <div class="col-sm-4">
                <input name="price" type="text" class="form-control" value="<?php echo $y; ?>" >
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>

            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>After sale service</label>
              </div>
              <div class="col-lg-4">
                <select  class="form-select" aria-label="Default select example" name="services">
                        <option>score</option>
                      <?php 
                        $marks = range(1, 5);
                        foreach ($marks as $mark) {
                        echo '<option value='.$mark.'>'.$mark.'</option>';
                        }
                      ?>
                      </select>
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Quality</label>
              </div>
              <div class="col-lg-4">
                <select  class="form-select" aria-label="Default select example" name="quality">
                        <option>score</option>
                      <?php 
                        $marks = range(1, 5);
                        foreach ($marks as $mark) {
                        echo '<option value='.$mark.'>'.$mark.'</option>';
                        }
                      ?>
                </select>
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Other requirements specified in tender publication</label>
              </div>
              <div class="col-lg-4">
                <select  class="form-select" aria-label="Default select example" name="requirements">
                        <option>score</option>
                      <?php 
                        $marks = range(1, 5);
                        foreach ($marks as $mark) {
                        echo '<option value='.$mark.'>'.$mark.'</option>';
                        }
                      ?>
                      </select>
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
             <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>comment</label>
              </div>
              <div class="col-sm-4">
                <textarea class="form-control" name="comment" placeholder="Write your comment on the supplier"></textarea>
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
            <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Official name:</label>
              </div>
              <div class="col-sm-4">
                <input type="text" name="official" class="form-control" value="<?php echo $n1." ".$n2; ?>" >
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
             <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                <label>Date:</label>
              </div>
              <div class="col-sm-4">
                <input type="text" name="dat" class="form-control" value="<?php  echo date("Y-m-d"); ?>" >
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
             <div class="row">
            <div class="col-sm-2">
            </div>
              <!-- text input -->
              <div class="col-sm-3">
                
              </div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
              <div class="col-sm-3">
             </div>
            </div>
            <br/>
           

            </div>
      
          </div>
                      
  </form>
      </div>
        
<?php
    include("config.php");
    if (isset($_POST["submit"])) {
      $sup    = $_POST["supplier"];
      $tender = $_POST["tender"];
      $price  = $_POST["price"];
      $services = $_POST["services"];
      $quality   = $_POST["quality"];
      $requirements  = $_POST["requirements"];
      $comment    = $_POST["comment"];
      $official     = $_POST["official"];
      $dat     = $_POST["dat"];
      echo$sup;
      echo$tender;
      echo$price;
      echo$services;
      echo$quality;
      echo$requirements;
      echo$comment;
      echo$official;
      echo$dat;

      $sql = "INSERT INTO rating(name,tender,price,services,quality,requirements,comment,official,dat)
      VALUES('".$sup."','".$tender."','".$price."','".$services."','".$quality."','".$requirements."','".$comment."','".$official."','".$dat."')";
        $run=mysqli_query($db,$sql);
        if ($run==true) {
          echo '<script type="text/javascript">alert("You have succefully submited supplier rating");window.location=\'applications.php\';</script>';
          }else{
            echo "ERROR: Hush! sorry there was error try again." . mysqli_error($db);
          }

    

    }
    
        ?>


</body>
</html>