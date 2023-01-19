<?php

include 'dbconn.php';

$id = $_GET['id'];

$del = mysqli_query($con,"DELETE FROM appointment WHERE Appid = '$id'"); 

if($del)
{
	header("location:patientapp.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>