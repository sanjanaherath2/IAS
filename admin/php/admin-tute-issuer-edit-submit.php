<?php

include('../../includes/connection.php');


    // Assign input data from form to variables
	$tute_issuer_id = $_POST['tute_issuer_id'];
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
               
        //Insert to Database
            $registrationQuery = "UPDATE `tute_issuer` SET `tute_issuer_id` = '$tute_issuer_id', `first_name` = '$first_name', `last_name` = '$last_name',  `email` = '$email', `password` = '$password' WHERE `tute_issuer`.`tute_issuer_id` = '$tute_issuer_id';";

            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Tute issuer Updated Successfully"));
				header('Location:../admin-tute-issuer-edit.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:../admin-tute-issuer-edit.php?msg=' . $message);
				exit();
            }
        



mysqli_close($connection);
   


?>