<?php

include('../../includes/connection.php');

session_start();

$student_id = $_SESSION["userID"];
$password = sha1($_POST['password']);

if(isset($_POST['change'])){

    $sql = "UPDATE `students` SET password = '$password' WHERE student_id = '$student_id'";

    if (mysqli_query($connection,$sql) === TRUE) {
        $message = base64_encode(urlencode("Password Updated Successfully"));
        header('Location:../student-dashboard.php?msg=' . $message);
        exit();
    } 
    
    else {
        $message = base64_encode(urlencode("SQL Error while Registering"));
        header('Location:../student-dashboard.php?msg=' . $message);
        exit();
    }
}
?>