<?php
include 'dbconn.php';

$appid = $_GET['Drid'];

$upd = mysqli_query($con,"UPDATE appointment 
							SET Appstats='Complete' 
							WHERE Appid = $appid;"); 

if($upd)
{
	header("location:employeeapp.php");
    exit;	
}
else
{
    echo "Error updating record";
}

?>