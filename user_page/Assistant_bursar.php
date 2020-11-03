<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../css/image_view.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ; margin-top: 10%}
		th, td {padding: 10px}
		tr:hover {background-color: #f2f2f2;}
		button:hover{background-color: grey}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		#logout:hover{background-color: red}
		body{font-family: 'Raleway', sans-serif;}
	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">
		<center><img src="../icons/logo.png" style="width:80px;height:80px;" ></center>
		<a class="active" href="Assistant_bursar.php">Pay slip verification</a>
  		<a href="#contact">Notifications</a>
  		<a href="./Assistant_bursar/account_setting.php">Account setting</a>
  		<a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

	<div class="content">
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
			 	echo "0 results";
			}

			mysqli_close($conn);
			?>
			
		</table>
		
	</div>
</body>
</html>

