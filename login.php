<?php
require_once("config.php");

?>

<?php
	session_start();
	if(isset($_POST["login"])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username=="" OR $password=="" ){
			$message="Plaese enter username and password!";
			echo '<script type="text/javascript">alert("Plaese enter username and password!");window.location=\'index.php\';</script>';
		}else{
			$sql = "SELECT *FROM users WHERE username='".$username."' AND password ='".$password."' ";
			$con = mysqli_query($db,$sql);
			$rows = mysqli_num_rows($con);
            $records = mysqli_fetch_array($con);
			if($rows==0){
				echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    		}else{
    			if ($records['cod'] == 1) {
    				$_SESSION['id']=$records['id'];
				    $_SESSION['$username']=$username;
				    $_SESSION['$name']=$records['fname']."". $records['lname'];
    				header("location:pages/departmentpage.php");
    			}
    			elseif ($records['cod'] == 2) {
    				$_SESSION['id']=$records['id'];
				    $_SESSION['$username']=$username;
				    $_SESSION['$name']=$records['fname']."". $records['lname'];
    				header("location:pages/procurement_board.php");	# code...
    			}
    			elseif ($records['cod'] == 3) {
    			   $_SESSION['id']=$records['id'];
				   $_SESSION['$username']=$username;
				   $_SESSION['$name']=$records['fname']."". $records['lname'];

				header("location:pages/admin.php");

    			}
    			else{
    			   $_SESSION['id']=$records['id'];
				   $_SESSION['$username']=$username;
				   $_SESSION['$name']=$records['fname']."". $records['lname'];

				header("location:pages/admin.php");

    			}
    			
			}

		}
		

	}
	

	?>