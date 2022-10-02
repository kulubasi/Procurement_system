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
  
  <form role="form" method="post" action="">
  <div class="modal-content">
    <div class="modal-body">
    	<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="procurement_board.php">Home</a>><a href="applications.php">Applications</a>>Details</li>
            </ol>
      <div class="card card-primary">
      <div class="card-header">

        <h3 class="card-title" align="center">Applications</h3>
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-1">
          </div>
          <div class="col-sm-6">
            <?php
            // echo $_SESSION['$username'];
  $a = $_GET['bid'];
  $c = $_GET['id'];
  include("config.php");
    $mydb ="SELECT * FROM   publish WHERE id ='".$a."'";
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
            $y=$row[10];
            echo "<h2> Tender details</dh2>";

            echo'<h4>'."Item id".'</h4>';
            echo$a;
            echo'<h4>'."Item name".'</h4>';
            echo$c;
            echo'<h4>'."Quantity".'</h4>';
            echo$d;
            echo'<h4>'."Type".'</h4>';
            echo$h;
            echo'<h4>'."Specifications".'</h4>';
            echo$e;
            echo'<h4>'."Required documents".'</h4>';
            echo$f;
            echo'<br/>';
            echo$g; 
            echo'<br/>';
            echo$i; 
            echo'<h4>'."Other requirements".'</h4>';
            echo$j;
            echo'<h4>'."Deadline for tender application".'</h4>';
            echo$y;
            


         }
     }           
   ?>

          </div>
          
          <div class="col-sm-5">
            <?php 
  $c = $_GET['id'];
  include("config.php");
    $mydb ="SELECT * FROM   applications WHERE a_id='".$c."' ";
    $run=mysqli_query($db,$mydb);
    if($run == true){
        while($row=mysqli_fetch_array($run)){
            $a =$row[0];
            $b =$row[1];
            $c  =$row[2];
            $d =$row[3];
            $e =$row[5];
            $f =$row[6];
            $g =$row[7];
            $h =$row[4];
            $i =$row[8];
            $j =$row[9];
            $u =$row[13];
            $k =$row[12];
            $p =$row[14];
            echo "<h2> Application details</dh2>";

            echo'<h4>'."Company name".'</h4>';
            echo$d;
            echo'<h4>'."Location".'</h4>';
            echo$h;
            echo'<h4>'."Contact person".'</h4>';
            echo$e;
            echo'<h4>'."Title".'</h4>';
            echo$f;
            echo'<h4>'."Email".'</h4>';
            echo$g;
            echo'<h4>'."Phone number".'</h4>';
            echo$i;
            echo'<h4>'."Price".'</h4>';
            echo$p;
             echo'<h4>'."Application date".'</h4>';
            echo$k;
            echo'<h4>'."<b>Required Documents</b>".'</h4>';
            echo'<h4>'."Document 1".'<a title="download"   href="download.php?id='.$b.'" >  <i class="fas fa-download fa-xl"></i></a>'.'</h4>';
             echo'<h4>'."Document 1".'<a title="download"   href="download1.php?id='.$b.'"  >  <i class="fas fa-download"></i></a>'.'</h4>';
             echo'<h4>'."Document 1".'<a title="download"   href="download2.php?id='.$b.'"   ">  <i class="fas fa-download"></i></a>'.'</h4>';
            echo'<br/>';

         }
     }           
   ?>
   
    <form action="remark.php" method="post">
              <p>Send feedback</p>
              <input hidden type="text" name="supplier" value="<?php echo $u;?>">
              <input hidden type="tex" name="item" value="<?php echo $z;?>">
              <textarea class="form-control" name="remarks"></textarea>
              <input class="btn btn-primary" type="submit" name="send" value="send">
            </form>
          </div>
      </div>
        
    </div>
 
      </form>
      </div>
        
</body>
</html>