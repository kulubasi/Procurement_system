<?php
session_start();
if (isset($_SESSION['$username'])) {
} else {
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
            <li class="breadcrumb-item"><a href="supplierpage.php">Home</a>>Details</li>
          </ol>
          <div class="card card-primary">
            <div class="card-header">

              <h3 class="card-title" align="center">Publish items requests</h3>
            </div>
            <div class="card-body">
              <section class="content">
                <div class="container-fluid">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Item id</th>
                        <th>Item name</th>
                        <th>Quantity</th>
                        <th>Type</th>
                        <th>Specifications</th>
                        <th>Required documents</th>
                        <th>Other requirements</th>
                        <th>Deadline for tender apllication</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $a = $_GET['id'];
                      include("config.php");
                      $mydb = "SELECT * FROM   publish WHERE id ='" . $a . "' ";
                      $run = mysqli_query($db, $mydb);
                      if ($run == true) {
                        while ($row = mysqli_fetch_array($run)) {
                          $a = $row[0];
                          $y = $row[1];
                          $c  = $row[2];
                          $d = $row[3];
                          $e = $row[5];
                          $f = $row[6];
                          $g = $row[7];
                          $h = $row[4];
                          $i = $row[8];
                          $j = $row[9];
                          $k = $row[10];

                          echo '<tr>';
                          echo '<td>' . $a . '</td>';
                          echo '<td>' . $c . '</td>';
                          echo '<td>' . $d . '</td>';
                          echo '<td>' . $h . '</td>';
                          echo '<td>' . $e . '</td>';
                          echo '<td>' . $f . $g . $i .'</td>';
                          // echo '<td>' . $g . '</td>';
                          // echo '<td>' . $i . '</td>';
                          echo '<td>' . $j . '</td>';
                          echo '<td>' . $k . '</td>';

                          echo '</tr>';

                          // echo '<h4>' . "Item id" . '</h4>';
                          // echo $a;
                          // echo '<h4>' . "Item name" . '</h4>';
                          // echo $c;
                          // echo '<h4>' . "Quantity" . '</h4>';
                          // echo $d;
                          // echo '<h4>' . "Type" . '</h4>';
                          // echo $h;
                          // echo '<h4>' . "Specifications" . '</h4>';
                          // echo $e;
                          // echo '<h4>' . "Required documents" . '</h4>';
                          // echo $f;
                          // echo '<br/>';
                          // echo $g;
                          // echo '<br/>';
                          // echo $i;
                          // echo '<h4>' . "Other requirements" . '</h4>';
                          // echo $j;
                          // echo '<h4>' . "Deadline for tender apllication" . '</h4>';
                          // echo $k;
                          // echo '<br/>';
                          // echo '<br/>';
                          echo '<div class="row">
            <div class="col-sm-4">
            <a    href="apply.php?id=' . $y . '"  class="btn btn-primary btn-xm  ">  Apply</a> 
            </div>
            
            
            </div>';
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

              </section>


            </div>

    </form>
  </div>

</body>

</html>