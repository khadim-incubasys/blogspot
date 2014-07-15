<?php
/***********************************************************************************************************
* Fancy Multiple File Upload using Ajax, Jquery and PHP
* Written by Bhavesh Bodar
* Website: www.esayscript4u.com
* Blog: easyscript4u.blogspot.in
* Email: easyscript4you@gmail.com
*/

if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
{
	$vpb_file_name = strip_tags($_FILES['upload_file']['name']); //File Name
	$vpb_file_id = strip_tags($_POST['upload_file_ids']); // File id is gotten from the file name
	$vpb_file_size = $_FILES['upload_file']['size']; // File Size
	$vpb_uploaded_files_location = 'uploaded_files/'; //This is the directory where uploaded files are saved on your server
	$vpb_final_location = $vpb_uploaded_files_location . $vpb_file_name; //Directory to save file plus the file to be saved
	//Without Validation and does not save filenames in the database
	if(move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $vpb_final_location))
	{
		//Display the file id
		echo $vpb_file_id;
	}
	else
	{
		//Display general system error
		echo 'general_system_error';
	}

}
?>