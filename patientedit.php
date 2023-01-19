<?php

session_start();
include 'dbconn.php';
include_once 'header.php';

$id = $_SESSION['Userid'];
$query = mysqli_query($con, "SELECT * FROM patient WHERE Userid = '$id'");
$row = mysqli_fetch_array($query);

$queryl = mysqli_query($con, "SELECT * FROM patient WHERE Userid = '$id'");
$rowl = mysqli_fetch_array($queryl);

?>
<body style = "background:#c4d7f2; ">
<div >
	<div class="container my-5">
        
		<div class="my-5 mx-5 d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="patientui.php">BACK</a>
			</div>
	    <h1 class="text-center">Edit Profile</h1>
	    <div class="col-md-6 offset-md-3">
	        <form action="patientup.php" method="post">
	            <div class="form-group">
					<label>Email:</label>
					<input type="email" name="patientemail" class="form-control" value="<?php echo $row['patientemail'];?>" required>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" name="patientpassword" class="form-control" value="<?php echo $row['patientpassword'];?>" required>
				</div>
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" name="patientFN" class="form-control" value="<?php echo $row['patientFN'];?>" required>
				</div>
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" name="patientLN" class="form-control" value="<?php echo $row['patientLN'];?>" required>
				</div>
                <div class="form-group">
					<label>Address:</label>
					<input type="text" name="patientaddress" class="form-control" value="<?php echo $rowl['patientaddress'];?>" required>
				</div>
				<div class="form-group">
					<label>Birthdate:</label>
					<input type="date" name="patientdob" class="form-control" value="<?php echo $rowl['patientdob'];?>" required>
				</div>
				<div class="form-group">
					<label>Sex:</label>
					<select name="patientgender" class="form-control" required>
					  
					  <option value="Male" <?php if($rowl['patientgender'] == 'Male') {echo "selected";};?> >Male</option>
					  <option value="Female" <?php if($rowl['patientgender'] == 'Female') {echo "selected";};?> >Female</option>
					  <option value="Other" <?php if($rowl['patientgender'] == 'Other') {echo "selected";};?> >Other</option>
					
					</select>
				</div>
	            <div class="my-3">
	                <button type="submit" class="btn btn-success btn-lg">Update!</button>
	            </div>
	        </form>
	    </div>
	</div>
</body>
</html>