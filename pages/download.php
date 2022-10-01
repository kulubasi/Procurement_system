<?php
if (!empty($_GET['id'])) {
	$filename = $_GET['id'];
	include("config.php");
    $mydb ="SELECT * FROM  applications WHERE a_id = '".$filename."' ";
            $run=mysqli_query($db,$mydb);
            if($run==true){
            	while($row=mysqli_fetch_array($run)){
            		$name =basename($row[9]);
            		$filepath ="files/".$name;
            		if (!empty($name) && file_exists($filepath)){
            			header("Cache-Control:Public");
            			header("Content-Description: File Transfer");
            			header("Content-Disposition: attachment; filename =$name");
            			header("Content-Type: application/zip");
            			header("Content-Transfer-Encoding: binary");
            			readfile($filepath);
            			exit;
            			
            		}else{
            			echo "File does not exist";
            		}

            	}

            }else{
            	echo "No such application";
            }
  }  



?>
