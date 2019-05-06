<?php

include('../../includes/connection.php');

  //File Upload Settings

  $target_dir = "../../uploads/Tutes/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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

  $pdfName = $_FILES["fileToUpload"]["name"];
  $pdfData = $_FILES["fileToUpload"]["tmp_name"];
  $pdfType = $_FILES["fileToUpload"]["type"];



    // Assign input data form to variables
	$tute_no = $_POST['tute_no'];
	$tute_name = $_POST['tute_name'];
    $subject_id = $_POST['subject_id'];
    $lecturer_id = $_POST['lecturer_id'];

    if(isset($_POST['mark']) && ($_POST['mark']) == 'MARK'){
              
        //Check if tutes have already issued
         $selecttute= "SELECT * FROM tutes WHERE tute_no ='$tute_no' AND tute_name = '$tute_name' AND subject_id = '$subject_id' AND lecturer_id = '$lecturer_id'";
         $tutequery = mysqli_query($connection, $selecttute) ;  
         $num = mysqli_num_rows($tutequery);

        if($num > 0){
         $message = base64_encode(urlencode("Tute has already Added"));
         header('Location:../add-student-tute.php?msg=' . $message);
         exit();
        }
         
        else{
             $tuteQuery = "INSERT INTO tutes (tute_no,tute_name,subject_id,lecturer_id,pdf) VALUES ('$tute_no', '$tute_name', '$subject_id','$lecturer_id','$pdfName')";         

             if (mysqli_query($connection,$tuteQuery) === TRUE) {
                 $message = base64_encode(urlencode("Tute Added Successfully"));
                 header('Location:../add-student-tute.php?msg=' . $message);
                 exit();
            } 

             else {
                 $message = base64_encode(urlencode("SQL Error while adding tute"));
                 header('Location:../add-student-tute.php?msg=' . $message);
                 exit();
                }
            }
        
        }
       
        else{
            if(isset($_POST['delete']) && ($_POST['delete']) == 'DELETE'){
               $deleteQuery = "DELETE FROM `tutes` WHERE tute_no ='$tute_no'  AND subject_id = '$subject_id' AND tute_name = '$tute_name' AND lecturer_id = '$lecturer_id'"; 
                if (mysqli_query($connection,$deleteQuery) === TRUE) {                        
                    $message = base64_encode(urlencode("Tutes Deleted Successfully"));
                    header('Location:../add-student-tute.php?msg=' . $message);
                    exit();
                } 

                else {
                    $message = base64_encode(urlencode("SQL Error While Deleting Student Tutes"));
                    header('Location:../add-student-tute.php?msg=' . $message);
                    exit();

                }

                   
            }   
            
            echo
            "  
           <div class=\"col-sm-4\">
               <br><br>
               <input style=\"background-color:#ed1d24; color:#fff;\" type=\"submit\" value=\"DELETE\" name=\"delete\">
           </div>  
           <div class=\"col-sm-4\">
               <br><br>
               <input style=\"background-color:#ed1d24; color:#fff;\" type=\"submit\" value=\"ADD\" name=\"add\">
           </div>  
       </div>
       ";
   
        }
         


mysqli_close($connection);
   


?>