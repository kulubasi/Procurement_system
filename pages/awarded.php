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
  
 
  <div class="modal-content">
    <div class="modal-body">
    	<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="supplierpage.php">Home</a>>Details</li>
            </ol>
      <div class="card card-primary">
      <div class="card-header">

        <h3 class="card-title" align="center">Set dates for the delivery of items</h3>
      </div>
        <div class="card-body">
<?php 
  include("config.php");
            $mydb ="SELECT * FROM contract";
            $run=mysqli_query($db,$mydb);
            if($run == true){
              
                while($row=mysqli_fetch_array($run)){
                    $a =$row[0];
                    $x =$row[1];
                    $b=$row[2];
                    $c  =$row[3];
                    $d =$row[4];
                    $e =$row[10];
                    $f =$row[4];
                    $g =$row[7];
                    if ($g==1) {
                       echo "<h4>"."Supplier name:"." ".$x." "."Tender:"." ".$b."</h4>";
                      echo '<form role="form" method="post" action="">
                                 <div class="row">
                                <div class="col-sm-2">
                                 <input hidden name="id" value='.$a.' >
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase one:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d1" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                               <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary" name="set1">setdates</button>
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                          
                              </div>
                                          
                      </form>
                      ';
                    }
                    elseif ($g==2) {
                      echo "<h4>"."Supplier name:"." ".$x." "."Tender:"." ".$b."</h4>";
                     echo '<form role="form" method="post" action="">
                                  <div class="row">
                                <div class="col-sm-2">
                                <input hidden name="id" value='.$a.' >
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase one:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d1" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase two:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d2" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary" name="set2">setdates</button>
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                          
                              </div>
                                          
                      </form>
                      ';
                      # code...
                    }
                    elseif ($g==3) {
                       echo "<h4>"."Supplier name:"." ".$x." "."Tender:"." ".$b."</h4>";
                     echo '<form role="form" method="post" action="">
                            
                              <div class="row">
                                <div class="col-sm-2">
                                
                                <input hidden name="id" value='.$a.' >
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase one:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d1" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                  <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase two:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d2" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase three:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d3" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary" name="set3">setdates</button>
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                          
                              </div>
                                          
                      </form>
                      ';
                      # code...
                    }
                    else{
                       echo "<h4>"."Supplier name:"." ".$x." "."Tender:"." ".$b."</h4>";
                       echo '<form role="form" method="post" action="">
                            
                              <div class="row">
                                <div class="col-sm-2">
                                <input hidden name="id" value='.$a.' >
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase one:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d1" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                  <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase two:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d2" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase three:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d3" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                               <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                    <label>Phase four:</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <input type="date" name="d4" class="form-control" >
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                                <br/>
                                 <div class="row">
                                <div class="col-sm-2">
                                </div>
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary" name="set4">setdates</button>
                                  </div>
                                  <div class="col-sm-2">
                                 </div>
                                 <div class="col-sm-4">
                                </div>
                              </div>
                          
                              </div>
                                          
                      </form>
                      ';

                    }
     
                }
         
            }else{
            echo "<h3 >There are no any awarded contracts</h3>". mysqli_error($db);
            }         
   ?>



    </div>
 
      </form>
      </div>
      <?php 
      if (isset($_POST["set1"])) {
      $id     = $_POST["id"];
      $p1 = $_POST["d1"];
      include("config.php");
      $se ="UPDATE contract SET phase1 ='$p1' WHERE id='$id' ";
      $up=mysqli_query($db,$se);
        if($up==true){
           echo '<script type="text/javascript">alert("Date set");window.location=\'procurement_board.php\';</script>';
        }else{
          echo "feedback not sent". mysqli_error($db);
        }
      }


       ?>
       <div>
          <?php 
      if (isset($_POST["set2"])) {
      $id     = $_POST["id"];
      $p1 = $_POST["d1"];
      $p2     = $_POST["d2"];
      include("config.php");
      $se ="UPDATE contract SET phase1 ='$p1', phase2 ='$p1' WHERE id='$id' ";
      $up=mysqli_query($db,$se);
        if($up==true){
           echo '<script type="text/javascript">alert("Date set");window.location=\'procurement_board.php\';</script>';
        }else{
          echo "feedback not sent". mysqli_error($db);
        }
      }


       ?>
       </div>
       <div>
          <?php 
      if (isset($_POST["set3"])) {
      $id     = $_POST["id"];
      $p1 = $_POST["d1"];
      $p2     = $_POST["d2"];
      $p3    = $_POST["d3"];
      include("config.php");
      $se ="UPDATE contract SET phase1 ='$p1', phase2 ='$p1',phase3='$p1' WHERE id='$id' ";
      $up=mysqli_query($db,$se);
        if($up==true){
           echo '<script type="text/javascript">alert("Date set");window.location=\'procurement_board.php\';</script>';
        }else{
          echo "feedback not sent". mysqli_error($db);
        }
      }


       ?>
       </div>
       <div>
          <?php 
      if (isset($_POST["set4"])) {
      $id     = $_POST["id"];
      $p1 = $_POST["d1"];
      $p2     = $_POST["d2"];
      $p3    = $_POST["d3"];
      $p4   = $_POST["d4"];
      include("config.php");
      $se ="UPDATE contract SET phase1 ='$p1', phase2 ='$p1',phase3='$p1',phase4 ='$p1' WHERE id='id' ";
      $up=mysqli_query($db,$se);
        if($up==true){
           echo '<script type="text/javascript">alert("Date set");window.location=\'procurement_board.php\';</script>';
        }else{
          echo "feedback not sent". mysqli_error($db);
        }
      }


       ?>
       </div>
        
</body>
</html>