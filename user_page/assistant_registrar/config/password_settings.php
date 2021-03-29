<?php
    session_start();

    $conn = new mysqli("localhost","root","","sis");

    if ( isset($_POST['savepass']))
    {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        //$confirm_password = $_POST['confirm_password'];
        $active_user = $_SESSION['login_user'];

        $hashed_new_pass = password_hash($new_password,PASSWORD_DEFAULT);

        $sql1 = " SELECT Password FROM staff WHERE Staff_ID = ? ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("s",$active_user);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $row1 = $result1->fetch_assoc();
        $tab_password = $row1["Password"];
        $stmt1->close();

        //password_verify($current_password,$tab_password);

        if (password_verify($current_password,$tab_password))
        {
            $sql2 = " UPDATE staff SET password = ? WHERE Staff_ID = ? ";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("ss",$hashed_new_pass,$active_user);
            $stmt2->execute();
            $stmt2->close();

            if ($stmt2)
            {
                $_SESSION["success"] = "Password has been updated successfully";
                header("location: ../account_settings.php");
            }
        }
        else
        {
            $_SESSION["success"] = "There was an error";
            header("location: ../account_settings.php");
        }
    }

    $conn->close();
?>