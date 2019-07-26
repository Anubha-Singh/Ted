<?php

	/*-- we included connection files--*/
	include "connection.php";

	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$uploadOk = 1;

		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];

		//image directory where actual image will be store
		$file_path = "uploads/".$file_name;

		$target_file = $file_path . basename($file_name);	

	/*---------------- php textbox validation checking ------------------*/
	if($image_name == "")
	{
		$error = "Please enter Image name.";
	}

	/*-------- now insertion of image section has start -------------*/
	else
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$file_name."</b> image already exist.";
			$uploadOk = 0;
		}
			else
			{
				$sql="INSERT INTO `image_table` (`img_id`, `img_name`, `img_path`) 
				VALUES('$image_name','$file_path')";
				$qry=mysqli_query($conn,$sql) ;
				move_uploaded_file($file_tmp,$file_path);
				
			}
		}
	}
?>
