<!DOCTYPE html>
<html>
<head>
	<title>Enter Payment Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{
			padding: 30px 30px;
			border-radius: 10px;
			background-color: white;
			text-align: center;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			width: 50%;

		}
		td{padding: 10px 10px}
		input[type="date"]{border-radius: 10px; text-align: center;width: 90%}
		input[type="text"]{width: 60%}
		body{font-family: 'Raleway', sans-serif;}
		th{background-color: #002b80;color: white;border-radius: 10px}

	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../student.php">Home</a>
		<a href="./results.php">Results & Grades</a>
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a class="active" href="./payment.php">Payment Details</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%" id="logout">Log out</button></a>
	</div>

	<?php 
		include("./config/get_name.php");
		include ('./config/insert_payment.php');
	?>
	<ul>
      	<li style="margin-right: 275px" class="dropdown">
			<img src="./Profile_photo/<?php echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="Account_Setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
	  	</li>
      	<li style="margin: 25px 20px"><?php echo $UserName; ?></li>
      	
      	<li class="dropdown"> 
        <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        <div class="dropdown-content1">
            <p>notifications are shown here</p>
        </div>
      	</li>
    </ul>
		
	<div class="content">
		
		<form action="" method="post" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<th colspan="2"><h2>Enter payment details</h2></th>
			</tr>
			<tr >
				<td><b>Payment Date</b></td>
				<td><input type="date" name="payment_date"></td>
			</tr>
			<tr>
				<td colspan="2"><b>Bank Branch</b></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="bank_branch"></td>
			</tr>
			<tr>
				<td colspan="2" ><b>Upload soft copy of payment slip</b></td>
			</tr>
			<tr>
				<td colspan="2" style="border:1px dashed black;border-radius:10px;padding: 30px 30px "><input type="file" name="payfile"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="paysubmit" value="Submit"></td>
			</tr>
		</table>
		</form>

	</div>
</body>
</html>