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
  <title> Student Personal Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.navbar {
  overflow: hidden;
  background-color: #000080;
}
.dropdown {
  float: right;
  padding-right: 25px;
  overflow: hidden;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #48D1CC;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.button {
  background-color: #7FFFD4;
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: #000000;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;  
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 0%;

}

.newb{
    background-color: #7FFFD4;
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: #000000;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;  
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 0%;
}
.headers{
  text-align:left;
  font-size: 30px;
  padding: 3%;
}

.mybox{
  border: 1px #000080 solid; 
  padding : 80px;
  border-radius: 50px;
  margin: 2%;

}
.mybox a:hover{
  background-color: #F5FFFA;
}

</style>
</head>
<body style="background-color: #AFEEEE" >

  <div class="navbar">
    <p1 class="headers">Student Personal Details</p1>
  <div class="dropdown">
    <button class="dropbtn">Director 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="accountS.php">Account Settings</a>
      <a href="../../login/logout.php">Logout</a>
    </div>
  </div> 
</div>

<div class="headers">

</div>

<div class="mybox">
  <a href="year1studentpersonal.php" class="button">First year students</a>
  <a href="year2studentpersonal.php" class="button">Second year students</a>
  <a href="year3studentpersonal.php" class="button">Third year students</a>
  <a href="year4studentpersonal.php" class="button">Fourth year students</a>
  <a class="newb" href="allyearsstudentpersonal.php" class="button">All students</a>
</div>




</body>
</html>