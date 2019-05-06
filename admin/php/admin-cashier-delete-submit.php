<?php

include('../../includes/connection.php');

    $id=$_POST['cashier_id'];

    $delQuery= "DELETE FROM cashier WHERE cashier_id = '$id' ";

    $delResult = mysqli_query ($connection, $delQuery);
    $message = base64_encode(urlencode("Cashier Removed Successfully"));
    header('Location:../admin-cashier-delete.php?msg=' . $message);
    exit();


mysqli_close($connection);
    
    
?>