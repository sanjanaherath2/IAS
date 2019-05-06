<?php

include('../../includes/connection.php');
include('../../includes/session.php');
checkSession();  
                
    // Assign input data from form to variables
	$student_id = $_POST['student_id'];
	$subject_id = $_POST['subject_id'];
    $lecturer_id = $_POST['lecturer_id'];
    $amount = $_POST['amount'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cashier_name = $_SESSION["name"];
	
        //Insert to Database
            $registrationQuery = "INSERT INTO monthly_fee(student_id,subject_id,lecturer_id,amount,cashier_name,month,year) VALUES ('$student_id','$subject_id','$lecturer_id','$amount','$cashier_name','$month','$year')";
                       
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Payment Successful"));
                
                $_SESSION['st_id'] = $student_id;
                $_SESSION['su_id'] = $subject_id;
                $_SESSION['le_id'] = $lecturer_id;
                $_SESSION['amt'] = $amount;
                $_SESSION['mt'] = $month;
                $_SESSION['yr'] = $year;
                $_SESSION['cn'] = $cashier_name;
                
				header('Location:../cashier-student-pay-receipt.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Paying"));
				header('Location:../cashier-student-list.php?msg=' . $message);
				exit();
            }


mysqli_close($connection);
   


?>