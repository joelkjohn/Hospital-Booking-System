<?php

session_start();
// header('location:index.php');
include 'dbconn.php';
$Userid = $_SESSION['Userid'];

$trtid = mysqli_real_escape_string($con, $_REQUEST['trtid']);
$Appdate = mysqli_real_escape_string($con, $_REQUEST['Appdate']);
$locationid = mysqli_real_escape_string($con, $_REQUEST['locationid']);

$sql = "INSERT INTO appointment(Userid, Appdate, trtid, locationid)
		VALUES('$Userid', '$Appdate', '$trtid','$locationid' )";
$result = mysqli_query($con, $sql);
header('location:patientui.php');
?>