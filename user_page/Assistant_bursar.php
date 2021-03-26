<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-top: 50px;margin-bottom: 50px}
		td{padding:  10px;border-bottom: 0.5px solid #f2f2f2}
		th{background-color: #DCDCDC;padding: 20px;border-radius: 10px}
		tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
		button{background-color:#4B0082 ;color: white;border: none;padding: 11px 40px;text-align: center;border-radius: 25px;display: inline-block;font-size: 15px}
		button:hover{background-color: #00ace6;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)}
		#reject{background-color: #990000}
		#verify_slip{background-color: green}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h2{background-color: #4B0082;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}

	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a class="active" href="Assistant_bursar.php">Annual fees verification</a>
		<a href="./Assistant_bursar/Reg_fee_verify.php">Application fees verification</a>
  		<a href="./Assistant_bursar/account_setting.php">Account setting</a>
  		<a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

    <ul>

    	<?php
    		include("./Assistant_bursar/config/get_user_pic_home.php");
    	?>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Assistant_bursar/Profile_photo/<?php echo $row['Profile_picture'] ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
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

		<h2 align="center">Annual Fees Verification</h2>
		<table align="center">
		<?php
			include ("./Assistant_bursar/config/get_payslip.php");


			if ($result->num_rows > 0) {
				echo "<tr>
					<th>RegNo</th>
					<th>Branch</th>
					<th>PayDate</th>
					<th>Uplaoded time</th>
					<th>  </th>
					<th>  </th>
					</tr>";
			  // output data of each row
				$num=0;
				while($row = $result->fetch_assoc()) {
					$img_name = $row['Pay_slip'];
					$num++;
					
					
					echo "<tr>
							<td style='font-family: Arial;'>".$row["RegNo"]."</td>
							<td>".$row["Branch"]."</td>
							<td>".$row["PayDate"]."</td>
							<td style='font-family: Arial;'>".$row["Uploaded_time"]."</td>
							
							<td>

							<div id='myModal' class='modal'>
  								<span class='close'>	&times;	</span>
  								<img class='modal-content' id='img01'>
							</div>

							<img src='student/Payslips/$img_name' id=$num style='display:none;width:100%;max-width:100px'>

							<button type='button' id=$num onclick='showimage(this.id);'>  Preview Pay Slip </button>

							</td>"
			?>
							<td>

							<button id="verify_slip" 
							data-id="<?php echo $row["ID"]; ?>" href="javascript:void(0)">Verify </button>

							<button style='background-color:#8B0000'  id="reject_slip" 
							data-id="<?php echo $row["ID"]; ?>" href="javascript:void(0)">Reject</button>

							</td>
						  </tr>
			<?php
				}
			} 

			else {
			 	echo "No pending verifications";
			}

			
			?>
			
		</table>
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	//verification
	jQuery(function(){
		$(document).on('click','#verify_slip', function(e){
			var slip_id = $(this).data('id'); 
			swalverify(slip_id);
			e.preventDefault();
		});
	});

	function swalverify(slip_id){
		swal({
			title: "Confirm?",
			text: "Slip will be verified",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "./Assistant_bursar/config/Payslip_verify.php" ,
					type: "POST",
					data: {verify:slip_id},
					
					/*success: function(dataResult){
            			var dataResult = JSON.parse(dataResult);
            			if(dataResult.statusCode==200){
            				swal("Hello world!");
            			}
            			else if(dataResult.statusCode==201){
					   		swal("Hello world!");
						}          
        			}*/
					
				}),
				location.reload()
			}
		});	
	}

	jQuery(function(){
		$(document).on('click','#reject_slip', function(e){
			var slip_id = $(this).data('id'); 
			swalreject(slip_id);
			e.preventDefault();
		});
	});

	function swalreject(slip_id){
		swal({
			title: "Confirm?",
			text: "Slip will be rejected",
			icon: 'warning',
			buttons: true,
			dangerMode: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "./Assistant_bursar/config/Payslip_verify.php" ,
					type: "POST",
					data: {reject:slip_id},
					dataType: "json",
					
				}),
				location.reload()
			}

		});	
	}
</script>
</body>
</html>

