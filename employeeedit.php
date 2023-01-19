<?php

session_start();
include 'dbconn.php';
include_once 'header.php';

$id = $_SESSION['Drid'];
$query = mysqli_query($con, "SELECT * FROM doctor WHERE Drid = '$id'");
$row = mysqli_fetch_array($query);

$queryl = mysqli_query($con, "SELECT * FROM doctor WHERE Drid = '$id'");
$rowl = mysqli_fetch_array($queryl);

?>
<body style = "background:#c4d7f2">
	<div class="container my-5">
        
		<div class="my-5 mx-5 d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="employeeui.php">BACK</a>
			</div>
   
	    <h1 class="text-center">Edit Profile</h1>
	    <div class="col-md-6 offset-md-3" >
	        <form action="empup.php" method="post">
	            <div class="form-group">
					<label>Email:</label>
					<input type="email" name="DrEmail" class="form-control" value="<?php echo $row['DrEmail'];?>" required>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" name="DrPassword" class="form-control" value="<?php echo $row['DrPassword'];?>" required>
				</div>
				<div class="form-group">
					<label>Specialisation:</label>
					<input type="text" name="DrSpec" class="form-control" value="<?php echo $row['DrSpec'];?>" required>
				</div>
				<div class="form-group">
					<label>Firstname:</label>
					<input type="text" name="DrFirstname" class="form-control" value="<?php echo $row['DrFirstname'];?>" required>
				</div>
				<div class="form-group">
					<label>Lastname:</label>
					<input type="text" name="DrLastname" class="form-control" value="<?php echo $row['DrLastname'];?>" required>
				</div>

				<div class="form-group">
					<label>Birthdate:</label>
					<input type="date" name="DrDOB" class="form-control" value="<?php echo $rowl['DrDOB'];?>" required>
				</div>
				<div class="form-group">
					<label>Sex:</label>
					<select name="DrGender" class="form-control" required>
					  
					  <option value="Male" <?php if($rowl['DrGender'] == 'Male') {echo "selected";};?> >Male</option>
					  <option value="Female" <?php if($rowl['DrGender'] == 'Female') {echo "selected";};?> >Female</option>
					  <option value="Other" <?php if($rowl['DrGender'] == 'Other') {echo "selected";};?> >Other</option>
					
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