<?php
include ("../../config/dbcon.php");
$sql = "SELECT * from program";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->get_result();
    $stmt->close();

    $conn->close();
?>