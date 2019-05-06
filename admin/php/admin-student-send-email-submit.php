<?php
include('../../includes/connection.php');

$topic =$_POST['topic'];
$body =$_POST['body'];

$sql = "SELECT email FROM students ";
$result = mysqli_query($connection, $sql);

while($row = $result->fetch_assoc()) {

mail($row['email'],$topic,$body,'from:iashavelock@gmail.com');

}

header('Location:../admin-student-send-email.php');
?>
