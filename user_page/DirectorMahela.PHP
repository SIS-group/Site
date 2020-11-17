<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
		th, td {padding: 10px}
		tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
		button:hover{background-color: grey}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}
	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a class="active" href="Assistant_bursar.php">Student Personal Details</a>
		<a href="./Assistant_bursar/Reg_fee_verify.php">Notification</a>
  		<a href="./Assistant_bursar/account_setting.php">Student Payment Details</a>
  		<a href="./Assistant_bursar/account_setting.php">Course Statistic</a>
  		<a href="./Assistant_bursar/account_setting.php">Studentt results and grades</a>
  		<a href="./Assistant_bursar/account_setting.php"> Log Out</a>
  		<a href="./Assistant_bursar/account_setting.php"> Account Settings</a>
  		<a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

    <ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./Assistant_bursar/account_setting.php">Setting</a>
      			<a href="../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Assistant bursar" ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	<div class="content">

		<h1 align="center">Annual Fees Verification</h1>

		<table align="center">
		<?php
			include ("./Assistant_bursar/config/get_payslip.php");

			if (mysqli_num_rows($result) > 0) {
				echo "<tr>
					<th>RegNo</th>
					<th>Branch</th>
					<th>PayDate</th>
					<th>  </th>
					<th>  </th>
					</tr>";
			  // output data of each row
				$num=0;
				while($row = mysqli_fetch_assoc($result)) {
					$img_name = $row['Pay_slip'];
					$num++;
					
					
					echo "<tr>
							<td>".$row["RegNo"]."</td>
							<td>".$row["Branch"]."</td>
							<td>".$row["PayDate"]."</td>
							<td>

							<div id='myModal' class='modal'>
  							<span class='close'>&times;</span>
  							<img class='modal-content' id='img01'>
							</div>

							<img src='student/Payslips/$img_name' id=$num style='display:none;width:100%;max-width:100px'>
							<button type='button' id=$num onclick='showimage(this.id);'>  Preview Pay Slip </button>

							</td>

							<td>
							<form action='./Assistant_bursar/Payslip_verify.php' method='post'>
							<input type='submit' name='verify' value='Verify'>
							<input type='submit' name='reject' value='Reject' id='reject'>
							</form>
							</td>
						  </tr>";
				}
			} 
			else {
			 	echo "No pending verifications";
			}

			mysqli_close($conn);
			?>
			
		</table>
		
	</div>
</body>
</html>

