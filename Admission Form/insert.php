<?php 
    include 'db.php';
    
    $name = $email = $phone = $place = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $place = $_POST["place"];

        if (!empty($name)) {
            if (!empty($email)) {
                if (!empty($phone)) {
                    if (!empty($place)) {
                        $sql = "INSERT INTO student_info(name,email,phone,place)
                                    values('$name','$email','$phone','$place')";
                        if (mysqli_query($conn,$sql)) {
                            echo "<script> alert('Student Added 🧑‍🎓')</script>";
                            // echo "Student Addded";
                        }
                    }else {
                        echo "<script> alert('place cannot be empty')</script>";
                    }
                }else {
                    "<script>alert('phone number cannot be empty')</script>";
                }
            }else {
                echo "<script> alert('Email cannot be empty')</script>";
            }
        }else {
            echo "<script> alert('Name Cannot be Empty!')</script>";
        }

        
    }

    header('Location:index.php');
?>