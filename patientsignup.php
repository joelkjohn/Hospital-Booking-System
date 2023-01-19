<?php 
	include 'dbconn.php'; 
	include_once 'header.php';
?>
<body style ="background:#c4d7f2">
<div class="container  px-5" style= "margin-top:5%;">
<div class="d-flex justify-content-start">
                
                <a class="btn btn-outline-dark btn-lg" href="index.php">BACK</a>
              </div>
<h1 class="text-center">Patient Sign Up</h1>
 <form style="width:40%;margin-left:auto;margin-right:25%;" action="newpatientval.php" method="post">
<div class="row my-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">Email</label>
  <div class="col-8">
    <input type="email" name="patientemail" class="form-control" required>
  </div>
</div>
<div class="row mb-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">First Name</label>
  <div class="col-8">
      <input type="text" name="patientFN" class="form-control" required>
  </div>
</div>
<div class="row mb-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">Last Name</label>
  <div class="col-8">
      <input type="text" name="patientLN" class="form-control" required>
  </div>
</div>
<div class="row mb-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">Password</label>
  <div class="col-8">
    <input type="text" name="patientpassword" class="form-control" required>
  </div>
</div>

<div class="row mb-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">Address</label>
  <div class="col-8">
  <input type="text" name="patientaddress" class="form-control" required>
  </div>
</div>
<div class="row mb-4">
  <label for="colFormLabelLg" class="col col-form-label col-form-label-lg">Gender</label>
  <div class="col-8">
  <select name="patientgender" class="form-control" required>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Other">Other</option>
					</select>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabelLg" class="col-4 col-form-label col-form-label-lg">Date of Birth</label>
  <div class="col-8">
      <input type="date" name="patientdob" class="form-control" required>
  </div>
</div>

<div style= "margin-right:25%;"class=" text-center">
	                <button type="submit" class="btn btn-success btn-lg">Sign Up</button>
	            </div>
	        </form>
</div>
</body>
</html>