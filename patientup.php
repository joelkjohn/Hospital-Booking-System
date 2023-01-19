<?php

session_start();
// header('location:index.php');
include 'dbconn.php';
$id = $_SESSION['Userid'];

$patientemail = mysqli_real_escape_string($con, $_REQUEST['patientemail']);
$patientpassword = mysqli_real_escape_string($con, $_REQUEST['patientpassword']);
$patientFN = mysqli_real_escape_string($con, $_REQUEST['patientFN']);
$patientLN = mysqli_real_escape_string($con, $_REQUEST['patientLN']);
$patientdob = mysqli_real_escape_string($con, $_REQUEST['patientdob']);
$patientgender = mysqli_real_escape_string($con, $_REQUEST['patientgender']);
$patientaddress = mysqli_real_escape_string($con, $_REQUEST['patientaddress']);


$reg =	"UPDATE patient
		SET patientemail='$patientemail', patientLN='$patientLN', patientFN='$patientFN',patientgender='$patientgender', patientpassword='$patientaddress', patientdob='$patientdob'
		WHERE Userid = '$id';";


$insert = mysqli_query($con, $reg);
if ( $insert) {
	echo "Details Updated!";
	header('location:patientui.php');
} else {
	echo mysqli_error($con);
};
?>