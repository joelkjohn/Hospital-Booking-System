<?php

include 'dbconn.php';
session_start();
// header('location:index.php');

$Dremail = mysqli_real_escape_string($con, $_REQUEST['DrEmail']);
$Drpassword = mysqli_real_escape_string($con, $_REQUEST['DrPassword']);
$Drfirstname = mysqli_real_escape_string($con, $_REQUEST['DrFirstname']);
$Drlastname = mysqli_real_escape_string($con, $_REQUEST['DrLastname']);
$Drdob = mysqli_real_escape_string($con, $_REQUEST['DrDOB']);
$DrGender = mysqli_real_escape_string($con, $_REQUEST['DrGender']);
$DrAddress= mysqli_real_escape_string($con, $_REQUEST['DrAddress']);
$DrSpec = mysqli_real_escape_string($con, $_REQUEST['DrSpec']);

$sql = "SELECT * FROM doctor 
		WHERE DrEmail = '$Dremail'";

$result = mysqli_num_rows(mysqli_query($con, $sql));

if($result == 1) {
	echo "An account with this email already exists!";
} else {

	$reg = "INSERT INTO doctor (DrEmail, DrPassword, DrFirstname, DrLastname, DrDOB, DrGender, DrAddress, DrSpec) 
			VALUES ('$Dremail','$Drpassword', '$Drfirstname', '$Drlastname', '$Drdob', '$DrGender', '$DrAddress', '$DrSpec');";


	$insert = mysqli_query($con, $reg);

	if ($insert) {
		header('location:emplogin.php');
	} else {
		echo mysqli_error($con);
	};
};
?>  