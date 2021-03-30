<?php
    
    $conn = new mysqli("localhost","root","","sis");

    $user = $_SESSION['login_user'];

    $sql1 = " SELECT Name,Profile_picture FROM staff WHERE Staff_ID = ? ";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("s",$user);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    $row1 = $result1->fetch_assoc();

    $profile_picture = $row1["Profile_picture"];
    $username = $row1["Name"];

    $conn->close();
?>