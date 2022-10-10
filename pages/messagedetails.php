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
	
 
<div style="margin-right: 150px; margin-left: 150px">
  
  <form role="form" method="post" action="publish.php">
  <div class="modal-content">
    <div class="modal-body">
    	<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="supplierpage.php">Home</a>><a href="message.php">Message</a>>details</li>
            </ol>
      <div class="card card-primary">
      <div class="card-header">

        <h3 class="card-title" align="center">Message details</h3>
      </div>
        <div class="card-body">
<?php 
  $a = $_GET['id'];
  include("config.php");
    $mydb ="SELECT * FROM   feed WHERE id ='".$a."' ";
    $run=mysqli_query($db,$mydb);
    if($run == true){
        while($row=mysqli_fetch_array($run)){
            $a1 =$row[0];
            $y=$row[1];
            $c  =$row[2];
            $d =$row[3];
            $e =$row[5];
            $h =$row[4];
            
            echo'<h4>'."Sender".'</h4>';
            echo$y;
            echo'<h4>'."Message".'</h4>';
            echo$h;
            $se ="UPDATE feed SET view ='yes' WHERE id='$a1' ";
            $up=mysqli_query($db,$se);
              if($up==true){
                echo "";
              }else{
                echo "feedback not sent";
              }
            

         }

     }           
   ?>



    </div>
 
      </form>
      </div>
        
</body>
</html>