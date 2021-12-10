<?php 
    include 'db.php';
    
    $name = $email = $phone = $place = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $place = $_POST["place"];

        $sql = "INSERT INTO student_info(name,email,phone,place)
                values('$name','$email','$phone','$place')";
        if (mysqli_query($conn,$sql)) {
            echo "<script> alert('Student Added 🧑‍🎓')</script>";
            // echo "Student Addded";
        }
    }

    header('Location:index.php');
?>