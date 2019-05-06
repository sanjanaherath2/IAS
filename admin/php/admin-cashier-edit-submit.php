<?php

include('../../includes/connection.php');


    // Assign input data from form to variables
	$cashier_id = $_POST['cashier_id'];
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
               
        //Insert to Database
            $registrationQuery = "UPDATE `cashier` SET `cashier_id` = '$cashier_id', `first_name` = '$first_name', `last_name` = '$last_name', `address` = '$address',`phone` = '$phone', `email` = '$email', `password` = '$password' WHERE `cashier`.`cashier_id` = '$cashier_id';";

            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Cashier Updated Successfully"));
				header('Location:../admin-cashier-edit.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:../admin-cashier-edit.php?msg=' . $message);
				exit();
            }
        



mysqli_close($connection);
   


?>