<?php
    session_start();

    $conn = mysqli_connect("localhost","root","","sis");

    if ( isset($_POST['savepass']) && !empty($_POST['current_password']) && !empty($_POST['new_password']) && !empty($_POST['confirm_password']))
    {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $active_user = $_SESSION['login_user'];

        $sql1 = " SELECT Password FROM staff WHERE Staff_ID='$active_user' ";
        $sql2 = " UPDATE staff SET password='$new_password' WHERE Staff_ID='$active_user'";

        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($result1);

        if ( ($row1['Password'] == $current_password) &&  ($new_password==$confirm_password) )
        {
            $result2 = mysqli_query($conn,$sql2);
            echo "password have been successfully updated.";
        }

        else if (($row1['Password'] == $current_password) &&  ($new_password!=$confirm_password))
        {
            echo "Please enter the new password correctly";
        }

        else if ( $row1['Password'] != $current_password )
        {
            echo "Invalid password";
        }

    }

    mysqli_close($conn);
?>