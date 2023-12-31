<?php

require_once 'config.php';

if (isset($_POST["btnSubmit"])) {

    $errors = array();
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] == 0) {

        $file_name = time() . '_' . $_FILES['uploadFile']['name'];
        $file_size = $_FILES['uploadFile']['size'];
        $file_tmp = $_FILES['uploadFile']['tmp_name'];
        $file_type = $_FILES['uploadFile']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        $extensions = array("png" , "jpeg" ,"jpg");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a png , jpg or jpeg file.";
        }

        if ($file_size > 500000) {
            $errors[] = 'File size must be excately 500KB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);

            $full_name = $db->real_escape_string($_POST["full_name"]);
            $email = $db->real_escape_string($_POST["email"]);
            $sqlInsert = "INSERT INTO tbl_user(full_name, file_name , email) VALUES ('" . $full_name . "','" ."uploads/". $file_name . "','". $email . "')";
            $result = $db->query($sqlInsert);

            if ($result) {
                echo"<script> window.location='signup_student.php'</script>";
               
            } else {
                echo "Error in file uploading";
            }
        } else {
            print_r($errors);
        }
    } else {
        echo "Error in file uploading";
    }
}

//Close connection
$db->close();
?>