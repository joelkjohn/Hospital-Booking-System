<?php 
	include 'dbconn.php'; 
	include_once 'header.php';
?>

	<body style = "background:#c4d7f2">
		<div class="container  px-5" style= "margin-top:5%;">
		<div class="d-flex justify-content-start">
                
				<a class="btn btn-outline-dark btn-lg" href="index.php">BACK</a>
			</div>
			<h2 class = text-center>Patient Login</h2>
			<form style="width:30%;margin-left:auto;margin-right:auto;" action="patienteval.php" method="post">
				<div class="my-3 form-group">
					<label>Email:</label>
					<input type="email" name="patientemail" class="form-control" required>
				</div>
				<div class="my-3 form-group">
					<label>Password:</label>
					<input type="password" name="patientpassword" class="form-control" required>
				</div>
                <div class= text-center><br>
				<button type="submit" class="btn btn-primary btn-lg">Log In</button>
                </div>
			</form>
		</div>
	</body>

</html>