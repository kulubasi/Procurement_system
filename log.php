<?php
require_once("config.php");

?>

<?php
	session_start();
	if(isset($_POST["login"])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username=="" OR $password=="" ){
			$message="Please enter username and password!";
			echo '<script type="text/javascript">alert("Please enter username and password!");window.location=\'index.php\';</script>';
		}
		else{
			$suppsql = "SELECT *FROM suppliers WHERE username='".$username."' AND pswd ='".$password."' ";
			$suppcon = mysqli_query($db,$suppsql);
			$supprows = mysqli_num_rows($suppcon);
            $supprecords = mysqli_fetch_array($suppcon);

			if($supprows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'supplierlogin.php\';</script>';
    		}
    		else{
    			$_SESSION['id']=$supprecords['id'];
				$_SESSION['$username']=$username;
    			header("location:pages/supplierpage.php");}
    		

		}
		

	}
	

	?>