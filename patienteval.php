<?php

session_start();

include 'dbconn.php';

$Email = mysqli_real_escape_string($con, $_REQUEST['patientemail']);
$Password = mysqli_real_escape_string($con, $_REQUEST['patientpassword']);

$sql = "SELECT * FROM patient 
		WHERE patientemail = '$Email' && patientpassword = '$Password'";

$result = mysqli_num_rows(mysqli_query($con, $sql));

if($result == 1) {
	$query = mysqli_query($con, "SELECT * FROM patient WHERE patientemail = '$Email'");
	$row = mysqli_fetch_array($query);
	$_SESSION['Userid'] = $row['Userid'];
	$_SESSION['user'] = 'patient';
	header('location:patientui.php');

} else {
	echo "Invalid Login Information";
}
?>