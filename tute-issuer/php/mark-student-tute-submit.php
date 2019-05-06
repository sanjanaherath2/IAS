<?php

include('../../includes/connection.php');
include('../../includes/session.php');
checkSession();

    // Assign input data from form to variables
	$student_id = $_POST['student_id'];

    //Send data into database
    $registrationQuery = "INSERT INTO tute_issue (tute_id, student_id, subject_id, lecturer_id, tute_issuer_name) VALUES ('{$_SESSION['tute']}','$student_id', '{$_SESSION['subject-t']}', '{$_SESSION['lecturer-t']}', '{$_SESSION['name']}')";

            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Tute Issued"));
				header('Location:../mark-student-tute.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("Tute has already been issued"));
				header('Location:../mark-student-tute.php?msg=' . $message);
				exit();
            }
?>
	