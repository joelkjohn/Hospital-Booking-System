<?php 
	include 'dbconn.php'; 
	include_once 'header.php';
?>

<body style = "background:#c4d7f2; ">

	<div class="row">
	<div class="my-5 mx-5 d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="patientui.php">BACK</a>
			</div>
	    <h1 class="text-center py-5">Booking Appointment</h1>
	    <div class="col-md-6 offset-md-3">
	        <form action="FNbooking.php" method="post">
				<div class="form-group">
					<label>Treatment:</label>
					<select name="trtid" class="form-control" required>
						<?php

							$query1 = mysqli_query($con, "SELECT * FROM treatment;");
							while($row = mysqli_fetch_array($query1)){
								echo '<option value='. $row['trtid'] .'>'.$row['trtname'].'</option>';
								
							}


						?>
					</select>
					<label>Location:</label>
					<select name="locationid" class="form-control" required>
						<?php

							$query2 = mysqli_query($con, "SELECT * FROM place;");
							while($row = mysqli_fetch_array($query2)){
								echo '<option value='. $row['locationid'] .'>'.$row['locationNM'].'</option>';
								
							}
						?>
					</select>
							
				</div>
				<div class="form-group">
					<label>Appointment Date:</label>
					<input type="date" name="Appdate" class="form-control" required>
				</div>
	            <div class="m-3">
	                <button type="submit" class="btn btn-success btn-lg">Book Appointment</button>
	            </div>
	        </form>
	    </div>
	</div>

</body>
</html>