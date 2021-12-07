<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    $name = $email = $position = $gender = $check = "";
    $nameErr = $emailErr = "";
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["upload_pic"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST["name"];
        $email = $_POST["email"];
        $position = $_POST["options"];
        $gender = $_REQUEST["gender"];
        $file_name = $_FILES['upload_pic']['name'];
        $file_type     = $_FILES["upload_pic"]["type"];
        $file_size     = $_FILES["upload_pic"]["size"];
        $file_size = $file_size/1024; // KB
        $file_size = round($file_size/1024,2); // MB
        $file_tmp_name = $_FILES["upload_pic"]["tmp_name"];
        $file_error    = $_FILES["upload_pic"]["error"];

        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }else{
            echo '<span style="color:#AFA;text-align:center;">Name -' .$name;
            echo "<br />";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invald Email Format";
        }else{
            echo "Email - ".$email;
            echo "<br />";
        }
        echo "Position - ".$position;
        echo "<br />";
        echo "Gender - ".$gender;
        echo "<br />";
        echo "File Name -".$file_name;
        echo "<br />";
        echo "File Type - ".$file_type;
        echo "<br />";
        echo "File Size - ".$file_size. " MB";
        echo "<br />";
        echo "File Temporary Stroage - ".$file_tmp_name;
        echo "<br />";
        echo "Error - ".$file_error;
        echo "<br />";
    }
    ?>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate method="post" enctype="multipart/form-data"
                            action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                <div class="valid-feedback"><?php echo $nameErr; ?></div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address"
                                    required>
                                <div class="valid-feedback"<?php echo $emailErr; ?></div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" required name = "options">
                                    <option selected disabled value="Please Select any Position">Position</option>
                                    <option value="Junior Web Developer">Junior Web Developer</option>
                                    <option value="Senior Web Developer">Senior Web Developer</option>
                                    <option value="Project Manager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>


                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    required>
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>

                                <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off"
                                    value = "Male" required>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                                <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off"
                                    value = "Female" required>
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                                <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off"
                                    value = "Secret" required>
                                <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                                <label class="mb-3 mr-1" for="upload_pic">Upload your Pic: </label>
                                <input type="file" name="upload_pic" id = "upload_pic" value = ""><br>
                                <!-- <input type="submit" name="submit" value="Upload"> -->
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!
                                </div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>