<?php

//  include connection file
    include_once '../../includes/connection.php';

//  send data into database
        $month = date('F');
        $year = date('Y');

        $student_id=$_POST["student_id"];
        $lecturer_id=$_POST["lecturer_id"];
        $subject_id=$_POST["subject_id"];

        $sqlStudent = "select * from students where student_id = '$student_id'";
        $resultStudent = mysqli_query($connection,$sqlStudent);

        if (mysqli_num_rows($resultStudent) == 1) {
            $sqlFeeCheck = "select month, year from monthly_fee where student_id = '$student_id' AND month='$month' AND year='$year' AND subject_id='$subject_id' AND lecturer_id='$lecturer_id'";
            $resultFeeCheck = mysqli_query($connection,$sqlFeeCheck);
            if (mysqli_num_rows($resultFeeCheck) == 1) {
                $sqlMarkAttendance = "INSERT INTO student_attendance (attendance_id, student_id, timestamp, lecturer_id, subject_id) VALUES (NULL,'".$_POST["student_id"]."', CURRENT_TIMESTAMP, '$lecturer_id', '$subject_id')";   
                $resultMarkAttendance = mysqli_query($connection,$sqlMarkAttendance);
                if($resultMarkAttendance === TRUE){
                    $message = base64_encode(urlencode("$student_id"));
                    header('Location:../mark-student-attendence.php?msg=' . $message);
                    exit();
                }
                else{
                    $message = base64_encode(urlencode("SQL Error while Marking"));
                    header('Location:../mark-student-attendence.php?msg=' . $message);
                    exit();
                }
            }
            else{
                $message = base64_encode(urlencode("Fees has not been paid for this month"));
                header('Location:../mark-student-attendence.php?msg=' . $message);
                exit();
            }
        }       
        else {
            $message = base64_encode(urlencode("Invalid Student"));
            header('Location:../mark-student-attendence.php?msg=' . $message);
            exit();
        }


    

?>