<?php

include('../../includes/connection.php');
include('../../includes/session.php');
checkSession();  

    // Assign input data from form to variables
	$lecturer_id = $_POST['lecturer_id'];
	$subject_id = $_POST['subject_id'];
    $amount = $_POST['amount'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cashier_name = $_SESSION["name"];


	
        //Insert to Database
            $registrationQuery = "INSERT INTO salary(lecturer_id,subject_id,amount,cashier_name,month,year) VALUES ('$lecturer_id','$subject_id','$amount','$cashier_name','$month','$year')";
            

            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Payment Successful"));
				header('Location:../cashier-lecturer-list.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Paying"));
				header('Location:../cashier-lecturer-list.php?msg=' . $message);
				exit();
            }


mysqli_close($connection);
   


?>