<?php 
	include 'dbconn.php'; 
	include_once 'header.php';
?>

<h1 class="text-center">Employee Sign Up</h1>
 <form action="newemployee.php" method="post">
<div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-5">
    <input type="email" name="DrEmail" class="form-control" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">First Name</label>
  <div class="col-sm-5">
    <input type="text" name="DrFirstname" class="form-control" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
  <div class="col-sm-5">
  <input type="text" name="DrLastname" class="form-control" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
  <div class="col-sm-5">
    <input type="text" name="DrPassword" class="form-control" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Specialisation</label>
  <div class="col-sm-5">
    <input type="text" name="DrSpec" class="form-control" required>
  </div>
</div>

<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
  <div class="col-sm-5">
    <input type="text" name="DrAddress" class="form-control" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Gender</label>
  <div class="col-sm-5">
  <select name="DrGender" class="form-control" required >
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Other">Other</option>
					</select>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Date of Birth</label>
  <div class="col-sm-5">
     <input type="date" name="DrDOB" class="form-control" required>
  </div>
</div>

<div class="m-3">
	                <button type="submit" class="btn btn-success btn-lg">Sign Up</button>
	            </div>
	        </form>
</html>