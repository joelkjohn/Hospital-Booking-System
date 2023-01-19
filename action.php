<?php
$loginregister = $_POST['loginregister'];
$choice = $_POST['choice'];

if ($loginregister == "login" && $choice == "patient"){
    header("location:patientlogin.php");
}

elseif ($loginregister == "register" && $choice == "patient" ){
    header("location:patientsignup.php");
}

elseif ($loginregister == "login" && $choice == "employee" ){
    header("location:emplogin.php");
}

elseif ($loginregister == "register" && $choice == "employee" ){
    header("location:empsignup.php");
}










// if (loginRegister == signIn) AND (choice == patient)
// goto patientLogin.php
// else if (loginRegister == register) AND (choice == patient)
//     goto patientRegister.php
// else if (loginRegister == signIn) AND (choice == doctor)
//     goto employeeSignin.php
// else if (loginRegister == register) AND (choice == doctor)
//     goto employeeRegister.php