<?php

session_start();
// header('location:index.php');
include 'dbconn.php';
$id = $_SESSION['Drid'];

$DrEmail = mysqli_real_escape_string($con, $_REQUEST['DrEmail']);
$DrPassword = mysqli_real_escape_string($con, $_REQUEST['DrPassword']);
$DrFirstname = mysqli_real_escape_string($con, $_REQUEST['DrFirstname']);
$DrLastname = mysqli_real_escape_string($con, $_REQUEST['DrLastname']);
$DrDOB = mysqli_real_escape_string($con, $_REQUEST['DrDOB']);
$DrGender = mysqli_real_escape_string($con, $_REQUEST['DrGender']);
$DrSpec = mysqli_real_escape_string($con, $_REQUEST['DrSpec']);


$reg =	"UPDATE doctor
		SET DrFirstname='$DrFirstname', DrLastname='$DrLastname', DrDOB='$DrDOB',DrGender='$DrGender', DrEmail= '$DrEmail', DrPassword= '$DrPassword',DrSpec = '$DrSpec'
		WHERE Drid = '$id';";

$insert = mysqli_query($con, $reg);

if ($insert) {
	echo "Details Updated!";
	header('location:employeeui.php');
} else {
	echo mysqli_error($con);
};
?>