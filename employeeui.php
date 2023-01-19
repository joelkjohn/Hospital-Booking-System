<?php

session_start();
include 'dbconn.php';
include_once 'header.php';
if(!isset($_SESSION['Drid'])) {
	header('location:index.php');
}

$id = $_SESSION['Drid'];
$query = mysqli_query($con, "SELECT * FROM doctor WHERE Drid = '$id'");
$row = mysqli_fetch_array($query);

?>
	<Body style = "background:#c4d7f2; ">
		
		<div>
			<div class="container py-5 text-center">
			<div class="row mt-5 d-flex justify-content-start">
						<div class="col-2 mt-5">
						<a class="btn btn-lg btn-outline-danger" href="exit.php">LOGOUT</a>
						</div>
						
					</div>
			<h1><?php echo 'Dr'.' '. $row['DrFirstname'] . ' ' . $row['DrLastname']; ?>'s Appointment Profile</h1> 

			<div class="container my-5">
				<div class="row mt-5">
					<div class="col-11">
                    
						<h3 style = "font-family:Berlin;color:black;font-size:1.5rem;">Your Details:</h3>
						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Employee ID: <?php echo $row['Drid'];?></p>
						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Gender: <?php echo $row['DrGender'];?></p>
                        <p style = "font-family:Berlin;color:black;font-size:1.5rem;">Specialisation: <?php echo $row['DrSpec'];?></p>
						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Date of Birth: <?php echo $row['DrDOB'];?></p>
						
					</div>
                    <div class="col-4">
						<ul>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;" class="d-flex btn btn-primary btn-lg py-5 my-3" href="employeeedit.php">Edit profile</a>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;"class="d-flex btn btn-primary btn-lg py-5 my-3" href="employeeapp.php"> My Appointments</a>
						</ul>
					</div>
					<div class = "col"><img style ="margin-left:80%;"src="Lifesavers - Standing.png" alt="Italian Trulli" width= "40%" >
				</div>
				<div class="row mt-5 d-flex justify-content-end">

				</div>

				
			</div>
		</div>
		
	</Body>
</html>