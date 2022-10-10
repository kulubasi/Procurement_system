<?php 
		if (isset($_POST["add"])) {
			include("config.php");
			$firstname		= $_POST["ftname"];
			$lastname		= $_POST["ltname"];
			$department		= $_POST["pat"];
			$designation	= $_POST["position"];
			$emailadress	= $_POST["email"];
			$contact	    = $_POST["contact"];
			$username	    = $_POST["username"];
			$password	    = $_POST["password"];
			$cod			= $_POST["cod"];
			$org			= $_POST["org"];
			$sql = " INSERT INTO users (fname,lname,department,position,email,contact,username,password,cod,org	)
			VALUES('$firstname','$lastname','$department','$designation','$emailadress','$contact','$username','$password','$cod','$org')"; 
			$run=mysqli_query($db,$sql);
			if ($run==true) {
				echo '<script type="text/javascript">alert("User successfully added");window.location=\'users.php\';</script>';
			}else{
				echo "ERROR: Hush! sorry $sql." . mysqli_error($db);
			}
		}
		?>