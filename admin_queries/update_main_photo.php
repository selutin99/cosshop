<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
		$path = '../images/goods/';
		$ext = array_pop(explode('.',$_FILES['file']['name']));
		$new_name = uniqid().'.'.$ext;
		$full_path = $path.$new_name;
		move_uploaded_file($_FILES['file']['tmp_name'], $full_path);
		$photoID = $_POST['photos'];
		if(empty($_FILES['file']['name']) || empty($ext)){
			mysqli_query($connection, "UPDATE photos SET main_photo=NULL WHERE id='$photoID'");
		}
		else{
			mysqli_query($connection, "UPDATE photos SET main_photo='$new_name' WHERE id='$photoID'");
		}
    }
?>