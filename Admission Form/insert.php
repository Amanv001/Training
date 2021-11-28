<?php

include 'connect.php';

extract($_POST);
if (isset($_POST['nameSend']) && ($_POST['emailSend']) && ('addSend') && ($_POST['phoneSend'])) {
    
    $sql = "insert into `studentinfo` (name,email,place,mobile)
    values ('$nameSend','$emailSend','$addSend','$phoneSend')";

    $result = mysqli_query($con,$sql);
}

?>