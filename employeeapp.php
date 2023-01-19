<?php

session_start();
include 'dbconn.php';
include_once 'header.php';
if(!isset($_SESSION['Drid'])) {
	header('location:index.php');
}

$id = $_SESSION['Drid'];

$unionSQL = "SELECT patientFN, patientLN, DrFirstname, DrLastname, trtname, DrSpec, appstats, appdate, appid
                FROM appointment 
                JOIN patient ON appointment.Userid=patient.Userid
				JOIN treatment ON appointment.trtid=treatment.trtid
                JOIN doctor ON treatment.Drid=doctor.Drid

                
		        WHERE treatment.Drid = '$id';";

$sql = mysqli_query($con, $unionSQL);

?>

	<Body style = "background:#c4d7f2">
        
		<div class="container my-5">

        <div class="d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="employeeui.php">BACK</a>
			</div>

            <h1 class = "display-1"> Appointments for you</h1>
			<div class="container my-3">
                
				<table style = "font-size:1.5rem;font-family:Berlin;"class="table table-striped table-info">
				<?php 
				echo '<tr m-3>
						<th class = "border border-3 border-dark">Pateint</th>
						<th class = "border border-3 border-dark">Doctor</th>
						<th class = "border border-3 border-dark">Treatment</th>
						<th class = "border border-3 border-dark">Specialisation</th>
						<th class = "border border-3 border-dark">Status</th>
						<th class = "border border-3 border-dark">Date</th>
						<th class = "border border-3 border-dark"></th>
					</tr>';

				while($row = mysqli_fetch_array($sql)){
					echo "<tr>
							<td class = 'border border-3 border-dark'>" . $row['patientFN'] . " " . $row['patientLN'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['DrFirstname'] . " " . $row['DrLastname'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['trtname'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['DrSpec'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['appstats'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['appdate'] . "</td>
							<td class = 'border border-3 border-dark'> <a class='btn btn-outline-success' href='appstatus.php?Drid=" . $row['appid'] . "'>Mark as complete</a> </td>
						</tr>";
				}
				?>
				</table>
				
			</div>
		</div>
	</Body>
</html>