<?php

include 'connect.php';
if (isset($_POST['updateid'])) {
    $userid = $_POST['updateid'];
    $sql = "select * from `studentinfo` where sl=$userid";
    $result = mysqli_query($con,$sql);
    $response = array();
    while ($row=mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo $json_encode($response);
}

?>