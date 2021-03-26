<?php
	error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Course Registration</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
    	table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-bottom: 5%;width: 80%}
    	td {padding: 10px;border-bottom: 1px solid #ddd;}
    	th{background-color: #4B0082;border-radius: 10px}
    	body{font-family: 'Raleway', sans-serif;}
    	#course tr:hover {background-color: #f2f2f2;}
    	#msg1{
    		background-color: white;
    		width: 50%;
    		border-radius: 10px;
    		padding: 5%;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    		color: red
    	}
    	#msg2{
    		background-color: white;
    		width: 40%;
    		border-radius: 10px;
    		padding: 20px;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    		color: green;
    		margin-bottom: 20px
    	}
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
  		<a class="active" href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<center><a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;" id="logout">Log out</button></a></center>
	</div>

	<?php include("./config/get_name.php") ?>

	<ul>
     	<li style="margin-right: 258px" class="dropdown">
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
		
		
		<?php
      		include ("./config/get_reg_course.php");
      		
      		if ($result2->num_rows > 0 ) {

      	?>

      	<center><div id="msg2"><h3>Course Registration Deadline - <?php echo $EndDate ?></h3></div></center>

      	<?php 		
      			echo "	<table align='center' id='course'>
      					<tr style='background-color: #002b80;color: white'>
							<th><h3>Course ID</h3></th>
							<th><h3>Name</h3></th>
							<th><h3>No. of Credits</h3></th>
							<th><h3>Semester</h3></th>
							<th></th>
						</tr>";
        
        		//$stat1 = $stat2 = $stat3 = $stat4 = $stat5 = $stat6 = $stat7 = $stat8 = 0;
        		// output data of each row
        		while($row2 = $result2->fetch_assoc()) {

        		?>
        				<tr>
							<td><?php echo $row2["CourseID"] ?></td>
							<td><?php echo $row2["Name"]?></td>
							<td align='center'><?php echo $row2["Credits"]?></td>
							<td align='center'><?php echo $row2["Semester"]?></td>
							<td align='center'>
							<button id="Register" 
							data-id="<?php echo $row2["CourseID"]; ?>" href="javascript:void(0)"> Register
							</button>
							</td>
						</tr>
		<?php
        		}
        	}
        	else{
        ?>
        		<center><div id="msg1"><h2>Course Registration is closed.</h2></div></center>
        <?php
        	}

      	?>
      	</table>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	//verification
	jQuery(function(){
		$(document).on('click','#Register', function(e){
			var course_id = $(this).data('id'); 
			swalregister(course_id);
			e.preventDefault();
		});
	});

	function swalregister(course_id){
		swal({
			title: "Confirm?",
			text: "You will be registered for this course",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "./config/course_reg.php" ,
					type: "POST",
					data: {register:course_id},
					
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
</script>
</body>
</html>