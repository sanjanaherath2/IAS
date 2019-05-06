<?php

include('../../includes/connection.php');

    $id=$_POST['tute_issuer_id'];

    $delQuery= "DELETE FROM tute_issuer WHERE tute_issuer_id = '$id' ";

    $delResult = mysqli_query ($connection, $delQuery);
    $message = base64_encode(urlencode("Tute Issuer Removed Successfully"));
    header('Location:../admin-tute-issuer-delete.php?msg=' . $message);
    exit();


mysqli_close($connection);
    
    
?>