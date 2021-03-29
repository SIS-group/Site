<?php
    session_start();
    $conn = new mysqli("localhost","root","","sis");

    $target_dir = "../profile_photo/";
    $target_file = $target_dir . basename($_FILES["ProfileUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["savephoto"])) 
    {

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
        {
            $_SESSION["success"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            header("location: ../account_settings.php");
            exit();
        }

        move_uploaded_file($_FILES["ProfileUpload"]["tmp_name"], $target_file);

        $sql1 = "UPDATE staff SET Profile_picture = ? WHERE Staff_ID = ? ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("ss",$picture,$user);
        $stmt1->execute();
        $stmt1->close();

        if($stmt1)
        {
            $_SESSION["success"] = "Profile photo uploaded successfully";
            header('location:../account_settings.php');
            exit;
        }
    }

    $conn->close();
?>