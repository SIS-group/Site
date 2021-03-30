<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("sis11",$link);
  $sql = "SELECT Pay_slip FROM student_payment WHERE id=$id";
  $result = mysql_query("$sql",$link);
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['Pay_slip'];
?>