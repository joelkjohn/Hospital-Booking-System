<?php

session_start();

include 'dbconn.php';
include_once 'header.php';

$DrEmail = mysqli_real_escape_string($con, $_REQUEST['DrEmail']);
$DrPassword = mysqli_real_escape_string($con, $_REQUEST['DrPassword']);

$sql = "SELECT * FROM doctor 
		WHERE DrEmail = '$DrEmail' && DrPassword = '$DrPassword'";

$result = mysqli_num_rows(mysqli_query($con, $sql));

if($result == 1) {
	$query = mysqli_query($con, "SELECT * FROM doctor WHERE DrEmail = '$DrEmail'");
	$row = mysqli_fetch_array($query);
	$_SESSION['Drid'] = $row['Drid'];
	

	
		header('location:employeeui.php');
	
	

} else {
	echo "<h1>Incorrect Login Information!!</h1>";
}
?>
</html>