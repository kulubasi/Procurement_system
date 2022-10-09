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
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

 <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-power-off"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="Logout.php" class="dropdown-item">
            <button class="btn btn-danger btn-sm btn-lg" style="width:100%"><i class="fa fa-power-off"></i> Logout</button>
          </a>
       
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><h2 align="center"><strong>Procurement</strong></h2></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/FaceApp_164335736658_1.jpg" class="img-circle elevation-2 text-white" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['$username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item ">
            <a href="supplierpage.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <!-- <li class="nav-item has-treeview ">
            <a href="unit.php" class="nav-link ">
              <i class="fa fa-massega"></i>
              <p>
                Message
              </p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a href="message.php" class="nav-link">
              <i class="fa fa-envelope " ></i>
              <span class="label label-primary pull-right" style="color: white;">
                <?php
                include("config.php");
                $now =$_SESSION['$username'];
                $sql = " SELECT *FROM feed WHERE supplier='$now' AND view=''";
                $con = mysqli_query($db,$sql);
                $b =0;
                if(mysqli_num_rows($con) > 0){
                    $a =0;
                    while($row=mysqli_fetch_array($con)){
                        $a+=1;
                    }
                    echo $a;
                    
                }else{
                    echo $b;
                }
                
                ?>

            </span>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="" class="nav-link" id="availablebidstwigger">
              <i class="nav-icon fas fa-building"></i><p>Available bids
                  </p></a>
          </li>
          <li class="nav-item has-treeview" id="awardtwigger">
            <a class="nav-link">
              <i class="nav-icon fas fa-clone"></i><p>Awarded Contracts</p></a>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-palette"></i>
              <p>
                Future required items
                </i>
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item has-treeview">
            <a href="re.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Requested items
              </p>
            </a>
            
          </li> -->
          <!-- <li class="nav-item has-treeview ">
            <a href="apro.php" class="nav-link ">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Aprroved requests
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="fas fa-inventory"></i>
              <p>
                
              </p>
            </a>
          </li> -->
          
                  </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--------->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dash board  </h3> 
              <div class="modal fade show" id="add" aria-modal="true">
        <div class="modal-dialog modal-md">
              <form method="post" action="requ.php ">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" align="center">Add Request</h3>
              </div>
                <div class="card-body">
                    <div class="row">
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Item name.</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="item">
                        
                      </div>
                    </div>
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="quantity">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Purpose</label>
                         <input type="text" class="form-control" placeholder="Enter ..." name="purpose">
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Requested By</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="requestor">
                      </div>
                    </div>
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date Processed</label>
                        <input type="date" class="form-control" placeholder="00.00" name="dat">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Processed By</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="processor">
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="department">
                      </div>
                    </div>
                  
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
          </div>
              </form>
        </div>
        <!-- /.modal-dialog -->
      </div>
            </div>
            <!-- /.card-header -->
        </div>
      </div>
        <!-- /.row -->
        <!-- Main row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   <!----------->
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    



    <section class="content supphome" id="supphome">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6 avbidstwigger" id="avbidstwigger">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fa fa-users"></i> 0</h3>

                <p>Available bids</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fa fa-shopping-cart"></i>0</h3>

                <p >Awarded Contracts</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><i class="fa fa-cart-plus"></i>0</h3>

                <p>Recieved items</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><i class="fa fa-palette"></i> 0</h3>

                <p>Contract Status</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- sectiontwiggeredby awardstwigger -->
    <section class="awards" id="awards">
      <div style="margin-left: 50px;">
        <h3>Below are your current contracts</h3>
        <table class="table table-striped" id="tb">
          <thead>
            <tr>
            <th>Id</th>
            <th>Supplier name</th>
            <th>Tender</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Phases</th>
            <th>Official</th>
            <th>Terms & Conditions</th>
            <th>Date Awarded</th>
          </tr>
          </thead>

          <tbody>
            <?php
            include("config.php");
            $k =$_SESSION['$username'];
            //$user  =$_SESSION['$username_j'];
            $suppdetails="SELECT * FROM suppliers WHERE username = '".$k."'";
            //$my_db ="SELECT * FROM   contract WHERE username='".$k."'";
            $ran=mysqli_query($db,$suppdetails);
            if($ran == true){
              
                while($raw=mysqli_fetch_array($ran)){
                    $m =$raw[7];

                    $mydb ="SELECT * FROM   contract WHERE sup ='".$m."'";
                    $run=mysqli_query($db,$mydb);
                    if($run == true){
                      
                        while($row=mysqli_fetch_array($run)){
                            $a =$row[0];
                            $b=$row[1];
                            $c  =$row[2];
                            $d =$row[3];
                            $e =$row[5];
                            $f =$row[4];
                            $g =$row[7];
                            $h =$row[8];
                            $i =$row[9];
                            $j =$row[10];
                            
                            
                            
                          echo '<tr>';
                            echo'<td>' . $a.'</td>';
                            echo'<td>' .$b.'</td>';
                            echo'<td>' .$c.'</td>';
                            echo'<td>' .$d.'</td>';
                            echo'<td>' .$e.'</td>';
                            echo'<td>' .$f.'</td>';
                            echo'<td>' .$g.'</td>';
                            echo'<td>' .$h.'</td>';
                            echo'<td>' .$i.'</td>';
                            echo'<td>' .$j.'</td>';
                            // echo  '<td align="center" > <a  href="publish.php?id='.$a.'"  class="btn btn-primary btn-xs  "> Publish</a>  <a  href="\example\capston\project\look.php?id='.$a.'"  class="btn btn-danger btn-xs  "> Delete</a></td>';
                          echo '</tr>';
             
                        }
                 
                    }
                        

                        
                    }
                  }
           
            else{
            echo "<h3 >There are no pedding requests</h3>". mysqli_error($db);
            }
          
                  
            ?>
          </tbody>
        </table>
      </div>
      
    </section>

    <!-- section twiggered by open bids -->
    <section id="availablebids" class="availablebids">
      <div class="container" style="margin-left: 40px;">

        <!-- Small boxes (Stat box) -->
    
            <?php
            //$user  =$_SESSION['$username_j'];
            include("config.php");
            $mydb ="SELECT * FROM publish ";
            $run=mysqli_query($db,$mydb);
            if($run == true){
              $n =0;
              
                while($row=mysqli_fetch_array($run)){
                    $a =$row[0];
                    $y=$row[1]; 
                    $b=$row[2];
                    $c  =$row[3];
                    $d =$row[4];
                    $e =$row[10];
                    $f =$row[5];
                    $g =$row[8];  
                    $n+=1;                  
                  echo $n.'.'.' '. $c. $b.' ere/is needed before '.$e. ' <a title="View details"   href="details1.php?id='.$a.'&bid='.$y.'"  class="btn btn-primary btn-xm  ">  <i class="fa fa-eye"></i></a>'.'<br/>'.'<br/>';
     
                }
         
            }else{
            echo "<h3 >There are no pedding requests</h3>". mysqli_error($db);
            }
                  
            ?>
            <!-- small box -->
      
        <!-- /.row -->
        <!-- Main row -->
        
    
  
    </section>
    <!-- end of section twiggerd by open bids -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <strong>Footer<a href="http://adminlte.io"></a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#tb").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
  let availablebidstwigger = document.getElementById('availablebidstwigger');
  let availablebids = document.getElementById('availablebids');
  let supphome = document.getElementById('supphome');
  let avbidstwigger = document.getElementById('avbidstwigger');
  let awardtwigger = document.getElementById('awardtwigger');
  let awards = document.getElementById('awards');
  

  availablebidstwigger.addEventListener('click',(e)=>{
    e.preventDefault();
    availablebids.classList.add('active')
    supphome.classList.add('active')
    awards.classList.remove('active')
    // document.body.classList.add('overflow')
  })

  avbidstwigger.addEventListener('click',(e)=>{
    e.preventDefault();
    availablebids.classList.add('active')
    supphome.classList.add('active')
    // document.body.classList.add('overflow')
  })

  awardtwigger.addEventListener('click',(e)=>{
    e.preventDefault();
    awards.classList.add('active')
    availablebids.classList.remove('active')
    supphome.classList.add('active')
    // document.body.classList.add('overflow')
  })
</script>
</body>
</html>


