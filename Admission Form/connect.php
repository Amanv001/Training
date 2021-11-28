<?php

$con = new mysqli('localhost','root','','admissionform');

if ($con) {
    echo "Connected";
}else {
    die(mysqli_error($con));
}

?>