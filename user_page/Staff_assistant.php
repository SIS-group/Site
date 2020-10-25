<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ; margin-top: 10%}
		th, td {padding: 10px}
		tr:hover {background-color: #f2f2f2;}
		button:hover{background-color: grey}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		#logout:hover{background-color: red}
		img{margin-bottom: 20px}
		body{font-family: 'Raleway', sans-serif;}
	</style> 



</head>
<body>
	<div class="sidebar">
		<center><img src="../icons/logo.png" style="width:80px;height:80px;" ></center>
		<a class="active" href="Assistant_bursar.php">Pay slip verification</a>
  		<a href="#contact">Notifications</a>
  		<a href="#about">Account setting</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

	<div class="content">
		<table align="center">
		<?php
			include ("../config/dbcon.php");
			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT RegNo,Branch,PayDate,Pay_slip FROM student_payment WHERE Verified_status='Not Verified'";
			$result = mysqli_query($conn, $sql);

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

