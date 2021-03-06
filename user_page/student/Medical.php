	
<!DOCTYPE html>
<html>
<head>
	<title>Medical submission</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{padding: 40px 40px;border-radius: 10px; background-color: white;text-align: center;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 50%
		}
		td{padding: 10px 10px}
		input[type="date"]{border-radius: 10px; text-align: center;width: 60%}
		body{font-family: 'Raleway', sans-serif;}
		th{background-color: #4B0082;color: white;border-radius: 10px}


	</style>
</head>

<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../student.php">Home</a>
		<a href="./results.php">Results & Grades</a>
  		<a class="active" href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<center><a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;" id="logout">Log out</button></a></center>

	</div>

	<?php 
	include("./config/get_name.php"); 
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
	

	<div class="med">
		<form action=" " method="post" enctype="multipart/form-data" id="myform">
			<table align="center">
				<tr><th><h2 align="center">Medical Submission</h2></th></tr>
				<tr><td><b>Enter Date</b> </td></tr>
				<tr><td><input type="date" name="Med_date"  required></td></tr>
				<tr><td style=";background-color: #DCDCDC;border-radius: 10px">
					<b>Enter Course Code</b> 
					<input type="text" name="course" required maxlength="6">
				</td></tr>
				
				<tr><td><b>Upload the file</b></td></tr>
				<tr><td>
						<input type="file" id="file" name="file" style="border:1px dashed black;border-radius:10px;padding: 30px 30px " required>
					</td>
				</tr>
				<tr><td><button id="but_upload">Submit</button></td></tr>
			</table>

			

		</form>
	</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

    $("#but_upload").click(function(event){
    	event.preventDefault();
    	var form = $('#myform')[0];
        var fd = new FormData(form);
        
        $("#but_upload").prop("disabled", true);
       	swal({
			title: "Confirm?",
			text: "You will be registered for this course",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		   url: './config/insert_medical.php',
           		   type: 'POST',
          		   enctype: 'multipart/form-data',
           		   data: fd,
           		   contentType: false,
           		   processData: false,
           		   cache: false,

           		 
           		}),
           		location.reload()
			}
			else{
				location.reload()
			}
		});
        
    });
});
</script>	
</body>
</html>