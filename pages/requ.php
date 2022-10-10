<?php

 if (isset($_POST["save"])) {
  $item =$_POST["item"];
  $qty =$_POST["quantity"];
  $purpose =$_POST["purpose"];
  $request =$_POST["requestor"];
  $dat =$_POST["dat"];
  $processor=$_POST["processor"];
  $department =$_POST["department"];
  $org =$_POST["org"];

  include("config.php");
   $sql = "INSERT INTO requests (item,qty,purpose,requestor,dat,processor,department,status,org)VALUES
    ('$item','$qty','$purpose','$request','$dat ','$processor','$department','','$org')";
    $run=mysqli_query($db,$sql);
    if ($run==true) {
       echo '<script type="text/javascript">alert("You have succefully submited your item request wait for response");window.location=\'departmentpage.php\';</script>';
    }else{
      echo "ERROR: Hush! sorry $sql." . mysqli_error($db);
    }
    mysqli_close($db);
  }
  # code...
 
  

  ?>