

<?php

session_start();
if(isset($_SESSION['$username'])){
}else{
    header('location:../home.php');
}
?>

<?php
require_once("config.php");


?>



<?php 
$a = $_GET['id'];
$status ="UPDATE requests SET status ='approved' WHERE id='$a' ";
$up=mysqli_query($db,$status);
if($up==true){
	echo '<script type="text/javascript">alert("You have succefully approved the items requested");window.location=\'approved.php\';</script>';  
echo "";
}else{
echo "There was an error";
}



 ?>