<?php

session_start();
include 'dbconn.php';
include_once 'header.php';
if(!isset($_SESSION['Userid'])) {
	header('location:index.php');
}

$id = $_SESSION['Userid'];
$query = mysqli_query($con, "SELECT * FROM patient WHERE Userid = '$id'");
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
			
				
		
			<h1 >Welcome <?php echo $row['patientFN'] . ' ' . $row['patientLN']; ?> </h1> 
			<div class="container my-3">
				<div class="row mt-5">
					<div class="col-12">
						<h3 style = "font-family:Berlin;color:black;font-size:1.5rem;"> Your Details:</h3>
						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Patient ID: <?php echo $row['Userid'];?></p>
						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Gender: <?php echo $row['patientgender'];?></p>

						<p style = "font-family:Berlin;color:black;font-size:1.5rem;">Date of Birth: <?php echo $row['patientdob'];?></p>
					</div>
					<div class="col-4">
						<ul>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;"class=" d-flex btn btn-primary btn-lg py-5 my-3 pl-5" href="patientedit.php">Edit profile</a>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;"class="d-flex btn btn-primary btn-lg py-5 my-3 pl-5" href="patientapp.php">View Appointments</a>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;"class="d-flex btn btn-primary btn-lg py-5 my-3 pl-5" href="bookingnew.php">Book Appointment</a>
							<a style = "font-family:Berlin;color:#e1eaf7;font-size:2rem;"class="d-flex btn btn-primary btn-lg py-5 my-3 pl-5" href="location.php">View Locations</a>
						</ul>
					</div>
					<div class="col mt-5"><img style = "margin-left:80%;"src="Lifesavers - New Patient.png" alt="Italian Trulli" width= "50%" ></div>
				</div>


				
			</div>
		</div>
	</div>
	</Body>
</html>