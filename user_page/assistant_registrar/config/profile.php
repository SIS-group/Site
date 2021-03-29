<?php
    session_start();
    $conn = new mysqli("localhost","root","","sis");

    
    $target_dir = "../profile_photo/";
    //$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["ProfileUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["savephoto"])) 
    {
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
        {
            $_SESSION["success"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            header("location: ../account_settings.php");
            exit;
        }
        
        $picture = htmlspecialchars( basename( $_FILES["ProfileUpload"]["name"]));
        //echo $picture;
        $user = $_SESSION["login_user"];
        //echo $user;
        $profile = move_uploaded_file($_FILES["ProfileUpload"]["tmp_name"], $target_file);

        $sql1 = "UPDATE staff SET Profile_picture = ? WHERE Staff_ID = ? ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("ss",$picture,$user);
        $stmt1->execute();
        $stmt1->close();

        if($stmt1 && $profile)
        {
            $_SESSION["success"] = "Profile photo uploaded successfully";
            header('location:../account_settings.php');
            exit;
        }
    }   

    $conn->close();
?>