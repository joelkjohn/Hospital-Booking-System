<?php 
	include 'dbconn.php'; 
	include_once 'header.php';
?>

	<body style = "background:url(background.jpg);background-size:100% 100%;"> 

    <div>
    <div class="text-center container p-3 flex-column">
			<h1 class="bg-primary p-3 border border-dark rounded-pill  text-black text-uppercase">Appointment Booking System</h1>
		</div>
        
    <div style = "background:#96caeb; width:30%;"class="container py-5 text-center border border-dark rounded-pill">
        <form action= "action.php" method = "post">
            <label style = "font-size:1.5rem;" for = "loginregister"><strong>Log In or Sign Up:</strong></label>
            <select class= "mx-2"name = "loginregister" id = "loginregister">
                <option value = "login">Log In</option>
                <option value = "register">Sign up</option>
            </select>

            <br>
            <br>
                <label style = "font-size:1.5rem;" for = "choice"><strong>Patient or Employee:</strong></label>
                <select class= "mx-2" name = "choice" id = "choice">
                    <option value = "patient">I am a Patient</option>
                    <option value = "employee">I am a Doctor</option>

                </select>
            <br>
            <br>

            <input type = "submit"  class="mt-3 btn btn-success btn-lg" value= "Get Started!"> <br>
        
        </form>

    </div>


        
    </div>
	
    


    
	</body>

</html>