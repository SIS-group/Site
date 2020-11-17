<?php 
	include ('../login/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
</head>
<body>
	
    <div class="sidebar">
  		<a class="active" href="./student/Medical.php">Medical Submission</a>
  		<a href="./student/course_reg.php">Course Registration</a>
  		<a href="#contact">Notifications</a>
  		<a href="./student/payment.php">Payment Details</a>
  		<a href="#about">Account details</a>
  		<a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
	</div>

	<div class="content">
  		
	</div>
</body>
</html>