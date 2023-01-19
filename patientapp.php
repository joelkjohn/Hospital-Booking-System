<?php

session_start();
include 'dbconn.php';
include_once 'header.php';
if(!isset($_SESSION['Userid'])) {
	header('location:index.php');
}

$id = $_SESSION['Userid'];

$unionSQL = "SELECT patientFN, patientLN, DrFirstname, DrLastname, trtname, DrSpec, Appstats, Appdate, Appid, locationNM
                FROM appointment 
                JOIN patient ON appointment.Userid=patient.Userid
                JOIN treatment ON appointment.trtid=treatment.trtid
                JOIN doctor ON treatment.Drid=doctor.Drid
				JOIN place ON appointment.locationid=place.locationid

                
		        WHERE treatment.Drid = '$id';";

$sql = mysqli_query($con, $unionSQL);

?>

<Body style = "background:#c4d7f2; ">
        
		<div class="container my-5">

        <div class="d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="patientui.php">BACK</a>
			</div>

            <h1 class = "display-1"> Your Appointments</h1>
			<div class="container my-3">
                
				<table  style = "font-size:1.5rem;font-family:Berlin;" class="table table-striped table-info">
				<?php 
				echo '<tr m-3>
						<th class = "border border-3 border-dark">Pateint</th>
						<th class = "border border-3 border-dark">Doctor</th>
						<th class = "border border-3 border-dark">Treatment</th>
						<th class = "border border-3 border-dark">Specialisation</th>
						<th class = "border border-3 border-dark">Status</th>
						<th class = "border border-3 border-dark">Date</th>
						<th class = "border border-3 border-dark">Location</th>
						<th class = "border border-3 border-dark"></th>
					</tr>';

				while($row = mysqli_fetch_array($sql)){
					echo "<tr>
							<td class = 'border border-3 border-dark'>" . $row['patientFN'] . " " . $row['patientLN'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['DrFirstname'] . " " . $row['DrLastname'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['trtname'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['DrSpec'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['Appstats'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['Appdate'] . "</td>
							<td class = 'border border-3 border-dark'>" . $row['locationNM'] . "</td>";


                    if ($row['Appstats'] != "Completed") {
                            echo "<td class = 'border border-3 border-dark'><a class='btn btn-sm btn-success' href='appupdate.php?id=" . $row['Appid'] . "'>Update Appointment</a> <a class='btn btn-sm btn-danger' href='appdel.php?id=" . $row['Appid'] . "'>Cancel Appointment</a> </td>
                                </tr>";
                     } else {
                         echo "</tr>";
                     }

					 
                }
                        ?>
                        </table>
				
			</div>
		</div>
	</Body>
</html>