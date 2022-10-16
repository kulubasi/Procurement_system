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
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
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
  <!-- my styling -->
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
          <a href="logout.php" class="dropdown-item">
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
          <img src="../dist/img/FaceApp_164335366584_1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo 'Welcome '.$_SESSION['$username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="procurement_board.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pending.php" class="nav-link ">
              <p>Pending requests
                  </p></a>
          </li>
          <li class="nav-item active">
            <a href="approved.php" class="nav-link active">
              <p>Approved requests
                  </p></a>
          </li>
          <!-- <li class="nav-item">
            <a href="department.php" class="nav-link">
              <p>Postponed requests
                  </p></a>
          </li> -->
          <li class="nav-item">
            <a href="lished.php" class="nav-link">
              <p>Published contracts
                  </p></a>
          </li>
          <!-- <li class="nav-item">
            <a href="department.php" class="nav-link">
              <p>Awarded contracts
                  </p></a>
          </li> -->
          <li class="nav-item">
            <a href="applications.php" class="nav-link">
              <p>Applications
                  </p></a>
          </li>
          <li class="nav-item">
            <a href="bidding.php" class="nav-link">
              <p>Bidding
                  </p></a>
          </li>
          <li class="nav-item">
            <a href="contractmgmt.php" class="nav-link">
              <p>Contracts management
                  </p></a>
          </li>
          
          
                   
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
            <h1 class="m-0 text-dark">Contract Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="procurement_board.php">Home</a>>Contract Management</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <div class="modal fade show" id="add" aria-modal="true">
        
        <!-- /.modal-dialog -->
      </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <h4>Monitor awarded Contracts</h4><br>


            <?php
            include("config.php");
            $k =$_SESSION['$username'];
            //$user  =$_SESSION['$username_j'];
            $contracts="SELECT * FROM contract ";
            //$my_db ="SELECT * FROM   contract WHERE username='".$k."'";
            $ran=mysqli_query($db,$contracts);
            if($ran == true){
              
                while($raw=mysqli_fetch_array($ran)){
                    $m =$raw[1];

                    $mydb ="SELECT * FROM   contract WHERE sup ='".$m."'";
                    $run=mysqli_query($db,$mydb);
                    if($run == true){
                      
                        while($row=mysqli_fetch_array($run)){
                            $a =$row[0];
                            $b=$row[1];
                            $c  =$row[2];
                            $d =$row[3];
                            $f =$row[4];
                            $e =$row[5];
                            $g =$row[6];
                            $h =$row[7];
                            $i =$row[8];
                            $j =$row[9];
                            $k =$row[10];
                            $l =$row[11];
                            $m =$row[12];
                            $n =$row[13];
                            $o =$row[14];
                            

                            echo "<h5>".$a."     Contract of ".$c." by ".$b."</h5>"."
                             <br><br>";

                            echo "<form method='post' class='contractform'>
                                <div class='mb-3'>
                                  <label for='exampleInputEmail1' class='form-label'>Tender</label>
                                  <input type='text' name='tender' value='$c' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
                                  
                                </div>
                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>By</label>
                                  <input type='text' name='supname' value='$b' class='form-control' id='exampleInputPassword1'>
                                </div>

                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>Phase1 Status</label>
                                  <input type='text' value='' name='phase1' class='form-control' id='exampleInputPassword1'>
                                </div>
                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>Phase 2 Status</label>
                                  <input type='text' value='' name='phase2' class='form-control' id='exampleInputPassword1'>
                                </div>

                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>Phase 3 Status</label>
                                  <input type='text' value='' name='phase3' class='form-control' id='exampleInputPassword1'>
                                </div>

                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>Phase 4 Status</label>
                                  <input type='text' value='' name='phase4' class='form-control' id='exampleInputPassword1'>
                                </div>
                                <div class='mb-3'>
                                  <label for='exampleInputPassword1' class='form-label'>Name of Clearing Officer</label>
                                  <input type='text' value='' name='offname' class='form-control' id='exampleInputPassword1' required>
                                </div>
                                
                                <button type='submit' class='btn btn-primary' name='managetender'>Give feedback</button>
                              </form><br><br><br>";
                            
                          // echo '<tr>';
                          //   echo'<td>' . $a.'</td>';
                          //   echo'<td>' .$b.'</td>';
                          //   echo'<td>' .$c.'</td>';
                          //   echo'<td>' .$d.'</td>';
                          //   echo'<td>' .$e.'</td>';
                          //   echo'<td>' .$f.'</td>';
                          //   echo'<td>' .$g.'</td>';
                          //   echo'<td>' .$h.'</td>';
                          //   echo'<td>' .$i.'</td>';
                          //   // echo'<td>' .$j.'</td>';
                          //   echo'<td>' .$l.'</td>';
                          //   echo'<td>' .$k.'</td>';
                            // echo  '<td align="center" > <a  href="publish.php?id='.$a.'"  class="btn btn-primary btn-xs  "> Publish</a>  <a  href="\example\capston\project\look.php?id='.$a.'"  class="btn btn-danger btn-xs  "> Delete</a></td>';
                          echo '</tr>';
             
                        }
                 
                    }
                        

                        
                    }
                  }
           
            else{
            echo "<h3 >There are no current Contracts</h3>". mysqli_error($db);
            }
          
                  
            ?>

            <?php
      
              include("config.php");
              if(isset($_POST['managetender'])){
                $tender=$_POST['tender'];
                $supname=$_POST['supname'];
                $phase1=$_POST['phase1'];
                $phase2=$_POST['phase2'];
                $phase3=$_POST['phase3'];
                $phase4=$_POST['phase4'];
                $offname=$_POST['offname'];
                
                $sql = "INSERT INTO managecontract (tender,supname,phase1,phase2,phase3,phase4,offname) VALUES ('".$tender."', '".$supname."','".$phase1."','".$phase2."', '".$phase3."', '".$phase4."','".$offname."')";

                if (mysqli_query($db, $sql)) {
                  echo '<script type="text/javascript">alert("You have successfully Monitored the above contract");window.location=\'procurement_board.php\';</script>'; 
                } 
                else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
                }

               
                  
                //}
                

              }
              

              ?>


            </div>


            
               <br>
        <!-- <button class="btn btn-primary" onclick="tableToCSV()">Export to CSV</button> -->
              <div class="modal fade show" id="edit" aria-modal="true">
        <div class="modal-dialog modal-sm">
              <form role="form">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Department</h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department Initial</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Department Initial">
                  </div>
                  
                  <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
              </form>
        </div>
        <!-- /.modal-dialog -->
      </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
        <!-- /.row -->
        <!-- Main row -->
        
      </div><!-- /.container-fluid -->
    </section>
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
<script type="text/javascript">
        function tableToCSV() {
 
            // Variable to store the final csv data
            var csv_data = [];
 
            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
 
                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');
 
                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
 
                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }
 
                // Combine each column value with comma
                csv_data.push(csvrow.join(","));
            }
 
            // Combine each row data with new line character
            csv_data = csv_data.join('\n');
 
            // Call this function to download csv file 
            downloadCSVFile(csv_data);
 
        }
 
        function downloadCSVFile(csv_data) {
 
            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
 
            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');
 
            // Download csv file
            temp_link.download = "GfG.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
 
            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
 
            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>

    <script type="text/javascript">
      let contracttwigger = document.getElementById('contracttwigger');
      let contractform = document.getElementById('contractform');
      
      

      contracttwigger.addEventListener('click',(e)=>{
        e.preventDefault();
        contractform.classList.add('active')
        // supphome.classList.add('active')
        // awards.classList.remove('active')
        // document.body.classList.add('overflow')
      });


    </script>
</body>
</html>
