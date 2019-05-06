<?php

include('../../includes/connection.php');
    //Image Upload Settings

    $target_dir = "../../uploads/Students/photos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
            header('Location:admin-student-add.php?msg=' . $message);
            exit();
        }
    }

    $imageName = $_FILES["fileToUpload"]["name"];
    $imageData = $_FILES["fileToUpload"]["tmp_name"];
    $imageType = $_FILES["fileToUpload"]["type"];



    // Assign input data from form to variables
    $year = $_POST['year'];
    $level = $_POST['level'];
    $number = $_POST['number'];
    $student_id = $year.$level.$number;
	
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$address = $_POST['address'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
   
        //Check if email already exists
        $selectmail= "SELECT * FROM students WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        if($num > 0){
        $message = base64_encode(urlencode("Student already exists"));
        header('Location:../admin-student-add.php?msg=' . $message);
        exit();
        }
        
        $selectid= "SELECT * FROM students WHERE student_id ='$student_id' " ;
        $idquery = mysqli_query($connection, $selectid ) ;  
        $num = mysqli_num_rows($idquery);

        if($num > 0){
        $message = base64_encode(urlencode("Student already exists"));
        header('Location:../admin-student-add.php?msg=' . $message);
        exit();
         }

    
        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO students (student_id, first_name, last_name, address, dob, nic, phone, email, password,photo) VALUES ('$student_id', '$first_name', '$last_name', '$address', '$dob', '$nic', '$phone', '$email', '$password','$imageName')";
            

            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Student Added Successfully"));
				header('Location:../admin-student-add.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:../admin-student-add.php?msg=' . $message);
				exit();
            }
        }
        



mysqli_close($connection);
   


?>