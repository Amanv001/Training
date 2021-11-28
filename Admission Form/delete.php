<?php
include 'connect.php';

if (isset($_POST['deleteSend'])) {
    $unique = $_POST['deleteSend'];
    echo "<script> console.log("working...) </script>"

    $sql = "delete from `studentinfo` where sl=$unique";
    $result =  mysqli_query($con,$sql);
}
?>