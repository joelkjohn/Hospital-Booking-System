<?php

include 'dbconn.php';

$id = $_GET['id'];
$trtid = mysqli_real_escape_string($con, $_REQUEST['trtid']);
$Appdate = mysqli_real_escape_string($con, $_REQUEST['Appdate']);
$locationid = mysqli_real_escape_string($con, $_REQUEST['locationid']);

$del = mysqli_query($con,"UPDATE appointment SET  trtid= '$trtid',Appdate='$Appdate',locationid='$locationid'  WHERE appid='$id'; "); 

if($del)
{
	header("location:patientui.php");
    exit;	
}
else
{
    echo "Error updating record";
}
?>