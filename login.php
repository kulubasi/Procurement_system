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
			$sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' ";
			$suppsql = "SELECT *FROM suppliers WHERE username='".$username."' AND pswd ='".$password."' ";
			$con = mysqli_query($db,$sql);
			$suppcon = mysqli_query($db,$suppsql);
			$rows = mysqli_num_rows($con);
			$supprows = mysqli_num_rows($suppcon);
            $records = mysqli_fetch_array($con);
            $supprecords = mysqli_fetch_array($suppcon);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    		}
    		
    		else{
    			if ($records['cod'] == 1) {
    				$_SESSION['id']=$records['id'];
				    $_SESSION['$username']=$username;
    				header("location:pages/departmentpage.php");
    			}

    			elseif($supprows>=1){
    			$_SESSION['id']=$supprecords['id'];
				$_SESSION['$username']=$username;
    			header("location:pages/supplierpage.php");
    		}

    			elseif ($records['cod'] == 2) {
    				$_SESSION['id']=$records['id'];
				    $_SESSION['$username']=$username;
    				header("location:pages/procurement_board.php");	# code...
    			}
    			else{
    				$_SESSION['id']=$records['id'];
				   $_SESSION['$username']=$username;

				header("location:pages/admin.php");

    			}
    			
			}

			if($supprows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    		}
    		else{
    			$_SESSION['id']=$supprecords['id'];
				$_SESSION['$username']=$username;
    			header("location:pages/supplierpage.php");}
    		

		}
		

	}
	

	?>