<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "sis11";
 $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 ?>


<!DOCTYPE html>
<html>
<head>
  <title> Director/view results</title>
<style>
.button {
  background-color: #7FFFD4;
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: #000000;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;  
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 8%;
}

.button:hover {
  background-color: #F0F8FF; /* Green */
  color: green; }
.headers{
  text-decoration: underline blue;
  text-align:center;
}

.mybox{
  border: 1px #ccc solid; 
  padding : 80px;
  border-radius: 50px;

}

</style>
</head>
<body style="background-color: #4169E1" >

<div class="headers">
  <h2>View Results</h2>
</div>

<div class="mybox">
  <a href="year1.php" class="button">First year students</a>
  <a href="year2.php" class="button">Second year students</a>
  <a href="year3.php" class="button">Third year students</a>
  <a href="year4.php" class="button">Fourth year students</a>
</div>

</body>
</html>