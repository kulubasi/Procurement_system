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
  
 
<div style="margin-right: 50px; margin-left: 50px;margin-top: 50px;">
   
  
    
      <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="procurement_board.php">Home</a>><a href="bidding.php">bidding</a>><a href="pro.php">view suppliers</a>>supplier rating</li>
            </ol>
      
      
        <h1 class="card-title text-bold" align="center">Supplier rating</h1>
      
   
               <table id="example1" class="table table-bordered table-striped">
               <thead>
            <tr>
              <th>No</th>
              <th>Applicant name</th>
              <th>Tender</th>
              <th>Price</th>
              <th>After sale service score</th>
              <th> Quality score</th>
              <th> Requirements score </th>
              <th> Comment</th>
              <th> Rating date</th>
              <th> Rating official</th>
              <th> Averagescore</th>
              <th> Action</th>
            </tr> 
          </thead> 
            
              
            <?php
            //$user  =$_SESSION['$username_j'];
            $x = "supply of "." ".$_GET['pro'];
            $y = $_GET['app'];
            include("config.php");
            $mydb ="SELECT * FROM  rating WHERE tender ='".$x."' AND name ='".$y."' ";
            $run=mysqli_query($db,$mydb);
            if($run == true){
              $n =0;
                while($row=mysqli_fetch_array($run)){
                    $a =$row[1];
                    $b=$row[2];
                    $c =$row[3];
                    $d  =$row[4];
                    $e =$row[5];
                    $f =$row[6];
                    $g =$row[7];
                    $h =$row[9];
                    $i =$row[8];
                    $z =$_GET['pro'];
                    $p=($d+$e+$f)/3;
                    $n+=1;
                      echo '<tr>';
                    echo'<td>' . $n.'</td>';
                    echo'<td>'."supply of "." ".$a.'</td>';
                    echo'<td>' .$b.'</td>';
                    echo'<td>' .$c.'</td>';
                    echo'<td>' .$d.'</td>';
                    echo'<td>' .$e.'</td>';
                    echo'<td>' .$f.'</td>';
                    echo'<td>' .$g.'</td>';
                    echo'<td>' .$h.'</td>';
                    echo'<td>' .$i.'</td>';
                    echo'<td>' .$p.'</td>';
                    echo  '<td align="center" > <a  href="award.php?ap='.$a.'&td='.$z.'"  class="btn btn-primary btn-xs  "> Award contract</a></td>';
                  echo '</tr>';
     
                }
         
            }else{
            echo "<h3 >There are no any applicats</h3>". mysqli_error($db);
            }
                  
           
                  
            ?>
              
            </div>
      
          </div>
                      
  </form>
      </div>
        



</body>
</html>