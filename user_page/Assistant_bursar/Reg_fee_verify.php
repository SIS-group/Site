<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-top: 50px;margin-bottom: 50px}
		th, td {padding: 10px}
		th{background-color: #DCDCDC;padding: 20px;border-radius: 10px}
		tr:hover {background-color: #f2f2f2;}
		button:hover{background-color: #00ace6;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)}}
		#reject_slip{background-color: #990000}
		#verify_slip{background-color: green}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h2{background-color: #4B0082;color: white;padding: 20px 20px;margin: 1% 18%;border-radius: 10px}
	</style>
	<script src="../../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../Assistant_bursar.php">Annual fees verification</a>
		<a class="active" href=" ">Application fees verification</a>
  		<a href="./account_setting.php">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

	<ul>
		<?php
    		include("./config/get_user_pic.php");
    	?>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Profile_photo/<?php echo $row['Profile_picture'] ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./account_setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Assistant bursar" ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	<div class="content">
		<h2 align="center">Application fees verification</h2>
		
		<table align="center">
		<?php
			include ("./config/get_reg_payslip.php");

			if(mysqli_num_rows($result) > 0) {
				echo "<tr>
						<th>NIC No</th>
						<th>Type</th>
						<th>Applied_Date</th>
						<th style='background-color: unset;'>  </th>
						<th style='background-color: unset;'>  </th>
					  </tr>";

				$num=0;
				while($row = mysqli_fetch_assoc($result)) {
					$img_name = $row['Pay_slip'];
					$num++;
					
					
					echo "<tr>
							<td style='font-family: Arial;'>".$row["NIC_No"]."</td>
							<td>".$row["Type"]."</td>
							<td>".$row["Applied_Date"]."</td>"
					?>

					<?php if($row['Type']=='Bank'){

					echo	"<td>

								<div id='myModal' class='modal'>
  									<span class='close'>&times;</span>
  									<img class='modal-content' id='img01'>
								</div>

								<img src='../student/Application_fee_slips/$img_name' id=$num style='display:none;width:100%;max-width:100px'>
								<button type='button' id=$num onclick='showimage(this.id);'>  Preview Pay Slip </button>

							</td>";

					} 

					else{
						echo"<td></td>";

					}
					?>
							<td>

							<button id="verify_slip" 
							data-id="<?php echo $row['NIC_No']; ?>" href="javascript:void(0)">Verify </button>

							<button style='background-color:#8B0000'  id="reject_slip" 
							data-id="<?php echo $row['NIC_No']; ?>" href="javascript:void(0)">Reject</button>

							</td>

						  </tr>
			<?php
				}
			} 
			else {
				include ("./Indexing.php");
			 	echo "No pending verifications";
			}

			
			?>
			
		</table>
		
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	//verification
	jQuery(function(){
		$(document).on('click','#verify_slip', function(e){
			var NIC = $(this).data('id'); 
			swalverify(NIC);
			e.preventDefault();
		});
	});

	function swalverify(NIC){
		swal({
			title: "Confirm?",
			text: "Slip will be verified",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "./config/Reg_slip_verify.php" ,
					type: "POST",
					data: {verify:NIC},
					dataType: "json"
					
				}),
				location.reload()
			}
		});
		
	}

	//rejection
	jQuery(function(){
		$(document).on('click','#reject_slip', function(e){
			var NIC = $(this).data('id'); 
			swalreject(NIC);
			e.preventDefault();
		});
	});

	function swalreject(NIC){
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
					url: "./config/Reg_slip_verify.php" ,
					type: "POST",
					data: {reject:NIC},
					dataType: "json",
					
				}),
				location.reload();
			}
		});
			

		
	}
</script>
</body>
</html>

