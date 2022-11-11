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
  <?php
  $a = $_GET['id'];
  include("config.php");
  $mydb = "SELECT * FROM   requests WHERE id ='" . $a . "' ";
  $run = mysqli_query($db, $mydb);
  if ($run == true) {
    while ($row = mysqli_fetch_array($run)) {
      $a = $row[0];
      $b = $row[1];
      $c  = $row[2];
      $d = $row[3];
      $e = $row[5];
      $f = $row[4];
      $g = $row[7];
    }
  }
  ?>

  <div style="margin-right: 150px; margin-left: 150px">
    <form role="form" method="post" action="publish.php">
      <div class="modal-content">
        <div class="modal-body">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="procurement_board.php">Home</a>><a href="approved.php">approved requests</a>>publish requests</li>
          </ol>
          <div class="card card-primary">
            <div class="card-header">

              <h3 class="card-title" align="center">Publish items requests</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <input type="number" name="id" hidden value="<?php echo $a; ?>">
                    <label>Item</label>
                    <input type="text" name="item" class="form-control" value="<?php echo $b; ?>">

                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Quantity</label>
                    <input name="quantity" type="text" class="form-control" value="<?php echo $c; ?>">
                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Type</label>
                    <input name="type" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Specifications</label>
                    <textarea class="form-control" name="specification" placeholder="provide other specifications"></textarea>

                  </div>
                </div>


              </div>

              <div class="row">
                <div class="col-sm-4">
                  <label>Required documents</label>
                </div>
                <div class="col-sm-6">

                </div>

              </div>

              <div class="row">
                <div class="col-sm-4">
                  <label>Document 1</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" name="doc1" class="form-control" placeholder="Enter....">
                </div>
                <div class="col-sm-4">

                </div>

              </div>
              <br />
              <div class="row">
                <div class="col-sm-4">
                  <label>Document 2</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" name="doc2" class="form-control" placeholder="Enter....">
                </div>
                <div class="col-sm-4">

                </div>

              </div>
              <br />
              <div class="row">
                <div class="col-sm-4">
                  <label>Document 3</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" name="doc3" class="form-control" placeholder="Enter....">
                </div>
                <div class="col-sm-4">

                </div>

              </div>
              <br />

              <div class="row">

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Other requirements that must be provided by the bidders</label>
                    <textarea class="form-control" name="requirements" placeholder="Enter......."></textarea>

                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deadline for submision</label>
                    <input name="deadline" type="date" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary" name="publish">Publish</button>
                </div>
                <div class="col-sm-4">
                </div>
              </div>
            </div>

    </form>
  </div>
  <?php
  if (isset($_POST["publish"])) {
    include("config.php");
    $id      = $_POST["id"];
    $it      = $_POST["item"];
    $qt      = $_POST["quantity"];
    $type    = $_POST["type"];
    $specification  = $_POST["specification"];
    $doc1      = $_POST["doc1"];
    $doc2      = $_POST["doc2"];
    $doc3      = $_POST["doc3"];
    $requirements  = $_POST["requirements"];
    $deadline    = $_POST["deadline"];
    $sql = " INSERT INTO publish (id,item,qty,type,specification,doc1,doc2,doc3,requirements,deadline)
			VALUES('$id','$it','$qt	','$type','$specification','$doc1','$doc2','$doc3','$requirements','$deadline')";
    $run = mysqli_query($db, $sql);
    if ($run == true) {
      echo '<script type="text/javascript">alert("yuo have successfuly published your item requests");window.location=\'lished.php\';</script>';
    } else {
      echo "ERROR: Hush! sorry $sql." . mysqli_error($db);
    }
  }
  ?>
</body>

</html>