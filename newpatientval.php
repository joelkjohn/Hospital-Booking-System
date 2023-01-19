<?php

session_start();
// header('location:patientlogin.php');
include 'dbconn.php';

$Email = mysqli_real_escape_string($con, $_REQUEST['patientemail']);
$Password = mysqli_real_escape_string($con, $_REQUEST['patientpassword']);
$Firstname = mysqli_real_escape_string($con, $_REQUEST['patientFN']);
$Lastname = mysqli_real_escape_string($con, $_REQUEST['patientLN']);
$DOB = mysqli_real_escape_string($con, $_REQUEST['patientdob']);
$Gender = mysqli_real_escape_string($con, $_REQUEST['patientgender']);
$Address= mysqli_real_escape_string($con, $_REQUEST['patientaddress']);

$sql = "SELECT * FROM patient 
		WHERE patientemail = '$Email'";

$result = mysqli_num_rows(mysqli_query($con, $sql));

if($result == 1) {
	echo "An account with this email already exists!";
} else {

	$reg = "INSERT INTO patient (patientemail, patientpassword, patientFN, patientLN, patientdob, patientgender, patientaddress) 
			VALUES ('$Email','$Password', '$Firstname', '$Lastname', '$DOB', '$Gender', '$Address');";

	$insert = mysqli_query($con, $reg);
	
	if ($insert) {
		header('location:patientlogin.php');
	} else {
		echo mysqli_error($con);
	};
};
?>