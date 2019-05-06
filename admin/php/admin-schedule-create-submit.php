<?php

include('../../includes/connection.php');


    // Assign input data from form to variables
	$lecturer_id = $_POST['lecturer_id'];
	$hall_no = $_POST['hall_no'];
    $subject_id = $_POST['subject_id'];
    $start_hour = $_POST['start_hour'];
    $start_mins = $_POST['start_mins'];
    $end_hour = $_POST['end_hour'];
    $end_mins = $_POST['end_mins'];
    $day = $_POST['day'];

    $start_time = $_POST['start_hour'] . ':' . $_POST['start_mins'];
    $end_time = $_POST['end_hour'] . ':' . $_POST['end_mins'];

        
        //Insert to Database
        $scheduleQuery = "INSERT INTO lecture_schedule (lecturer_id, hall_no, subject_id, start_time, end_time, day) VALUES ('$lecturer_id', '$hall_no', '$subject_id', '$start_time', '$end_time', '$day')";            

            
            if (mysqli_query($connection,$scheduleQuery) === TRUE) {
                $message = base64_encode(urlencode("Lecture Schedule Added Successfully"));
				header('Location:../admin-schedule-create.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Adding Lecture Schedule"));
				header('Location:../admin-schedule-create.php?msg=' . $message);
				exit();
            }
        
        



mysqli_close($connection);
   


?>