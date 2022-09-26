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
          <a href="../index.php" class="dropdown-item">
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
          <img src="../dist/img/FaceApp_1643357366584_1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nkwine Innocent</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="department.php" class="nav-link">
              <i class="nav-icon fas fa-building"></i><p>Department
                  </p></a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="proplan.php" class="nav-link active"><i class="nav-icon fas fa-clone"></i><p>Procurement Plan</p></a>
    
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-palette"></i>
              <p>
                Item
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="itemmanagement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="itemcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Purchase
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="order.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="orderdetail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="requestdetail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Detail</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="unit.php" class="nav-link">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Unit
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="usermanagement.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="voucher.php" class="nav-link">
              <i class="nav-icon fas fa-sticky-note"></i>
              <p>
                Voucher
              </p>
            </a>
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
            <h1 class="m-0 text-dark">Procurement Plan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Procurement Plan</li>

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
              <h3 class="card-title">Procurement Plan Table</h3> <button class="btn btn-success btn-sm" style="margin-left:1%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Add</i></button>
              <div class="modal fade show" id="add" aria-modal="true">
        <div class="modal-dialog modal-lg">
              <form role="form">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Procurement Plan</h3>
              </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item</label>
                    <select class="form-control">
                          <option>Item 1</option>
                          <option>option 2</option>
                        </select>
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="00.00">

                  </div>
                  </div>
               </div>
                <div class="row">
                    <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Qty 1<sup>st</sup> Qrt </label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                   <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">2<sup>nd</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                   <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">3<sup>rd</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>

               </div>
               <div class="row">
                    <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">4<sup>th</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Qty</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="0">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Amt</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="00.00">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter ...">

                  </div>
                  </div>
               </div>
               <div class="row">
                   
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Requested By</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Enter ...">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Remarks</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="00.00">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">School Yr</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="0000">

                  </div>
                  </div>
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Item</th>
                  <th>Unit Price</th>
                  <th>Qty 1<sup>st</sup> Qtr</th>
                  <th>Status</th>
                  <th>2<sup>nd</sup></th>
                  <th>Status</th>
                  <th>3<sup>rd</sup></th>
                  <th>Status</th>
                  <th>4<sup>th</sup></th>
                  <th>Status</th>
                  <th>Total Qty</th>
                  <th>Total Amt</th>
                  <th>Department</th>
                  <th>Requested By</th>
                  <th>Remarks</th>
                  <th>School Yr</th>
                  <th>Date Ecoded</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Data</td>
                  <td>2</td>
                  <td><i style="color:blue">10</i></td>
                  <td>Data</td>
                  <td><i style="color:blue">11</i></td>
                  <td>Data</td>
                  <td><i style="color:blue">12</i></td>
                  <td>Data</td>
                  <td><i style="color:blue">13</i></td>
                  <td>Data</td>
                  <td>46</td>
                  <td><u style="color: blue"><strong>92</strong></u></td>
                  <td>Guiadance</td>
                  <td>John Esmail</td>
                  <td><span class="btn btn-success btn-xs">DATA!</span></td>
                  <td>2020</td>
                  <td>01/01/20</td>
                  <td align="center"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Item</th>
                  <th>Unit Price</th>
                  <th>Qty 1<sup>st</sup> Qtr</th>
                  <th>Status</th>
                  <th>2<sup>nd</sup></th>
                  <th>Status</th>
                  <th>3<sup>rd</sup></th>
                  <th>Status</th>
                  <th>4<sup>th</sup></th>
                  <th>Status</th>
                  <th>Total Qty</th>
                  <th>Total Amt</th>
                  <th>Department</th>
                  <th>Requested By</th>
                  <th>Remarks</th>
                  <th>School Yr</th>
                  <th>Date Ecoded</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
              <button class="btn btn-primary" onclick="tableToCSV()">Export to CSV</button>
              <div class="modal fade show" id="edit" aria-modal="true">
        <div class="modal-dialog modal-lg">
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
                <h3 class="card-title">Edit Procurement Plan</h3>
              </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item</label>
                    <select class="form-control">
                          <option>Item 1</option>
                          <option>option 2</option>
                        </select>
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="00.00">

                  </div>
                  </div>
               </div>
                <div class="row">
                    <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Qty 1<sup>st</sup> Qrt </label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                   <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">2<sup>nd</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                   <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">3<sup>rd</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>

               </div>
               <div class="row">
                    <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">4<sup>th</sup></label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0" style="color: blue">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ...">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Qty</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="0">
                  </div>
                  </div>
                  <div class="col-sm-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Amt</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="00.00">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter ...">

                  </div>
                  </div>
               </div>
               <div class="row">
                   
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Requested By</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Enter ...">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Remarks</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="00.00">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">School Yr</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="0000">

                  </div>
                  </div>
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
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
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
</body>
</html>
