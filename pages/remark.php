<?php
session_start();
if(isset($_SESSION['$username'])){
}else{
    header('location:../index.php');
}
?>
<?php
include("config.php");
if(isset($_POST["send"])){
  $c =$_POST['sender'];
  $a = $_POST['supplier'];
  $b = $_POST['item'];
  $d = $_POST['remarks'];
  $sql = " INSERT INTO feed (sender,supplier,item,message)VALUES('".$c."','".$a."','".$b."','".$d."')"; 
  $run=mysqli_query($db,$sql);
  if ($run==true){
    echo '<script type="text/javascript">alert("You have succefully sent your feedback to the applicant");window.location=\'applications.php\';</script>';

  }else{
    echo "ERROR: Hush! sorry there was error try again." . mysqli_error($db);;
  }
  }   
?>
<?php 
/*$seeker ="UPDATE feedback SET employer_remarks ='$d' WHERE employer_user='$a' AND jobtitle = '$c' AND jobseeker_user ='$b'";
$up=mysqli_query($db,$seeker);
  if($up==true){
    echo "Feedback sent";
  }else{
    echo "feedback not sent";
  }
} */

?>

