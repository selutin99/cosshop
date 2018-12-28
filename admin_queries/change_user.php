<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$userID = $_POST['uid'];
	$email = $_POST['eMail'];
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$familyName = $_POST['familyName'];
	$sex = $_POST['userSex'];
	if($sex=='male'){
		$sex='М';
	}
	else{
		$sex='Ж';
	}
	$birthday = $_POST['userBirthday'];
	$adress = $_POST['userAdress'];
	
	mysqli_query($connection, "UPDATE users SET first_name='$firstName', last_name='$lastName', 
												family_name='$familyName', adress='$adress',
												sex = '$sex', birthday = '$birthday'
												WHERE id='$userID'");
?>