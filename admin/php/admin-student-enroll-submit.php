<?php

include('../../includes/connection.php');


    // Assign input data from form to variables
	$student_id = $_POST['student_id'];
	$subject_id = $_POST['subject_id'];
    $lecturer_id = $_POST['lecturer_id'];
     
    echo $student_id,$subject_id,$lecturer_id;
        
        //Insert to Database
            
            if(isset($_POST['enroll']) && ($_POST['enroll']) == 'ENROLL'){
                
                //Check if student has already enrolled
                $selectenroll= "SELECT * FROM enrollment WHERE student_id ='$student_id' AND subject_id ='$subject_id' AND lecturer_id='$lecturer_id' " ;
                $enrollquery = mysqli_query($connection, $selectenroll) ;  
                $num = mysqli_num_rows($enrollquery);

                if($num > 0){
                $message = base64_encode(urlencode("Student has already enrolled"));
                header('Location:../admin-student-enroll.php?msg=' . $message);
                exit();
                }
                
                else{
                    $enrollQuery = "INSERT INTO enrollment(student_id, subject_id,lecturer_id) VALUES ('$student_id', '$subject_id','$lecturer_id') ";         

                    if (mysqli_query($connection,$enrollQuery) === TRUE) {
                        $message = base64_encode(urlencode("Student Enrolled Successfully"));
                        header('Location:../admin-student-enroll.php?msg=' . $message);
                        exit();
                    } 

                    else {
                        $message = base64_encode(urlencode("SQL Error while enrolling student"));
                        header('Location:../admin-student-enroll.php?msg=' . $message);
                        exit();
                    }
                }
            }
            
            else{
                if(isset($_POST['delete']) && ($_POST['delete']) == 'DELETE'){
                   $deleteQuery = "DELETE FROM `enrollment` WHERE student_id='$student_id' AND subject_id='$subject_id' AND lecturer_id='$lecturer_id' "; 
                    if (mysqli_query($connection,$deleteQuery) === TRUE) {                        
                        $message = base64_encode(urlencode("Student Enrollment Deleted Successfully"));
                        header('Location:../admin-student-enroll.php?msg=' . $message);
                        exit();
                    } 

                    else {
                        $message = base64_encode(urlencode("SQL Error while deleting student enrollment"));
                        header('Location:../admin-student-enroll.php?msg=' . $message);
                        exit();
                    }
                }              
            }
        


mysqli_close($connection);
   


?>