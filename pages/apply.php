
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
  <title></title>
</head>
<body>
<center>

    </center>
</body>
</html>
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

 <body class="hold-transition skin-blue fixed sidebar-mini">
  <?php 
  $n = $_GET['id'];
  include("config.php");
    $mydb ="SELECT * FROM   requests WHERE id ='".$n."' ";
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
         }
     }           
   ?>

       <div style="margin-right: 150px; margin-left: 150px">
 
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-content">
    <div class="modal-body">
      <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="supplierpage.php">Home</a>><a href="lished.php">Publishedrequests</a>><a href="lished.php">Details</a>>Apply</li>
            </ol>
      <div class="card card-primary">
      <div class="card-header">

        <h3 class="card-title" align="center">Apply for the tender</h3>
      </div>
        <div class="card-body">
        <div class="row">
          <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <input type="number" name="id" hidden value="Supply of <?php echo$a; ?>" >
                <label>Tender</label>
                <input type="text" name="tender" class="form-control" value="<?php echo $b; ?>" >

              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <input type="number" name="id" hidden value="Supply of <?php echo$a; ?>" >
                <label>Tender id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $a; ?>" >

              </div>
            </div>

            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Company name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>

            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Location/adress</label>
                <input name="adress" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-6">  
              <!-- text input -->
               <div class="form-group">
                <label>Contact person</label>
                 <input name="person" type="text" class="form-control" placeholder="Enter ...">
                
              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Tittle</label>
                <input name="title" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Contact</label>
                <input name="contact" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>



            
            </div>

      ---
          
              <div class="row">
               
                <?php 
                $n = $_GET['id'];
                include("config.php");
                $mydb ="SELECT * FROM   publish WHERE id ='".$n."' ";
                $run=mysqli_query($db,$mydb);
                if($run == true){
                    while($row=mysqli_fetch_array($run)){
                        $a =$row[0];
                        $b=$row[1];
                        $c  =$row[2];
                        $d =$row[3];
                        $e =$row[5];
                        $f =$row[4];
                        $h =$row[6];
                        $g =$row[7];
                        if($h !=''){
                        echo'<div class="col-sm-4">'.$e.
              '</div>'.'
              <div class="col-sm-4">
                <input type="file" name="doc1" class="form-control" placeholder="Enter...." >
              </div>
               <div class="col-sm-4">
                
              </div>
              
              </div>';
                      }
                     }
                 }           
               ?>
               <br/>
             <div class="row">
          <?php 
          $n = $_GET['id'];
          include("config.php");
          $mydb ="SELECT * FROM   publish WHERE id ='".$n."' ";
          $run=mysqli_query($db,$mydb);
          if($run == true){
              while($row=mysqli_fetch_array($run)){
                  $a =$row[0];
                  $b=$row[1];
                  $c  =$row[2];
                  $d =$row[3];
                  $e =$row[5];
                  $f =$row[4];
                  $h =$row[6];
                  $g =$row[7];
                  if($h !=''){
                  echo'<div class="col-sm-4">'.$h.
        '</div>'.'
        <div class="col-sm-4">
          <input type="file" name="doc2" class="form-control" placeholder="Enter...." >
        </div>
         <div class="col-sm-4">
          
        </div>
        
        </div>';
                }
               }
           }           
         ?>
           <br/>
             <div class="row">
          <?php 
          $n = $_GET['id'];
          // $f =$_GET['bid'];
          include("config.php");
          $mydb ="SELECT * FROM   publish WHERE id ='".$n."' ";
          $run=mysqli_query($db,$mydb);
          if($run == true){
              while($row=mysqli_fetch_array($run)){
                  $a =$row[0];
                  $b=$row[1];
                  $c  =$row[2];
                  $d =$row[3];
                  $e =$row[5];
                  $f =$row[4];
                  $h =$row[6];
                  $g =$row[7];
                  if($g !=''){
                  echo'<div class="col-sm-4">'.$g.
        '</div>'.'
        <div class="col-sm-4">
          <input type="file" name="doc3" class="form-control" placeholder="Enter...." >
        </div>
         <div class="col-sm-4">
          
        </div>
        
        </div>';
                }
               }
           }           
         ?>
         <br/>
          
            <div class="row">
              <div class="col-sm-4">
                <label>Application date</label>
                 </div>
                 <div class="col-sm-4">
                <input name="dat"  class="form-control"  value="<?php echo date("Y-m-d")?>" >
             
              </div>
            </div>
        
      <div class="row">
        <div class="col-sm-4">
              </div>
        <div class="col-sm-4">    
      <button type="submit" class="btn btn-primary" name="apply">Apply</button>
      </div>
      <div class="col-sm-4">
              </div>
    </div>
    </div>              
  </form>
</div>
        <?php
        include("config.php");
        if (isset($_POST["apply"])) {
          $id     = $_POST["id"];
      $tender = $_POST["tender"];
      $name     = $_POST["name"];
      $adress     = $_POST["adress"];
      $person   = $_POST["person"];
      $title  = $_POST["title"];
          $email     = $_POST["email"];
          $contact     = $_POST["contact"];

        
            $doc1name =$_FILES['doc1']['name'];
            $filetmpname  =$_FILES['doc1']['tmp_name'];
            $path    ="files/".$doc1name; 
            $doc2name =$_FILES['doc2']['name'];
            $filetmpname2  =$_FILES['doc2']['tmp_name'];
            $path2    ="files/".$doc2name; 

            $doc3name =$_FILES['doc3']['name'];
            $filetmpname3  =$_FILES['doc3']['tmp_name'];
            $path3    ="files/".$doc3name; 
            $dat    =$_POST["dat"];
            $a =$_SESSION['$username'];
            $sql = "INSERT INTO applications(id,tender,name,adress,person,title,email,contact,doc1,doc2,doc3,dat,user  
)VALUES('".$id."','".$tender."','".$name."','".$adress."','".$person."','".$title."','".$email."','".$contact."','".$doc1name."','".$doc2name."','".$doc3name."','".$dat."','".$a."')";
            $run=mysqli_query($db,$sql);
            if ($run==true) {
             
              move_uploaded_file($filetmpname, $path );
              move_uploaded_file($filetmpname2, $path2 );
              move_uploaded_file($filetmpname3, $path3 );
              echo '<script type="text/javascript">alert("You have succefully submited your application");window.location=\'supplierpage.php\';</script>';
              }else{
                echo "ERROR: Hush! sorry there was error try again." . mysqli_error($db);
              }

        

        }
        
        ?>
       
        <p>this is an updated file</p>    
    </body>
      <script type="text/javascript" src="/example/eris1/plugins/jQuery/jQuery-2.1.4.min.js"> </script>
      <script type="text/javascript" src="/example/eris1/bootstrap/js/bootstrap.min.js" ></script>
      <script src="/example/eris/dist/js/app.min.js"></script> 
</html>
 
 
         