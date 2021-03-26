
<!DOCTYPE html>
<html>
<head>
	<title>Manage User Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		body{font-family: 'Raleway', sans-serif;}
		

  		table{
  			box-shadow: unset;
  			border-radius: 10px;
  			border: 1px solid #656565;
  			padding: 20px 20px;
  			background-color: white;


  		}
  		td,th{
  			padding: 10px;
  			border-bottom: 1px solid #ddd;

  		}
  		th{
  			border-radius: 10px;
  			background-color: #DCDCDC
  		}
  		tr:hover {background-color: #f5f5f5;}
  		#selection{
  			margin: 10px 20px;
  		}
  		#Insert{background-color: #4B0082;color: white;border-radius: 10px ;width: 80%}

  		select{
  			padding: 10px;
  			border-radius: 10px; 
  		}
  		#edit_main{
  			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    		margin: 10px 20px;
    		border-radius: 10px;
    		background-color: white;
    		padding: 10px 10px;
  		}
  		#new_course{
  			background-color: unset;margin: unset;border-bottom: unset;
  		}
  		h2{
  			background-color: #4B0082;color: white;border-radius: 10px ;padding: 20px 20px;width: 50%
  		}	
  		button:hover{
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
		}
		.title:hover{
			background-color: unset;
		}
	</style>
	<script type="text/javascript">
		function editCon(x){
			//alert(x);
			nameid="name"+x;
			txtnameid="txtname"+x;
			var name=document.getElementById(nameid).innerHTML;
			document.getElementById(nameid).innerHTML="<input type='text' value='"+name+"' id='"+txtnameid+"'>";

			yearid="year"+x;
			txtyearid="txtyear"+x;
			var year=document.getElementById(yearid).innerHTML;
			document.getElementById(yearid).innerHTML="<select id='"+txtyearid+"'><option value=1>1</option><option value=2>2</option><option value=3>3</option></select>";
			
			semesterid="semester"+x;
			txtsemesterid="txtsemester"+x;
			var semester=document.getElementById(semesterid).innerHTML;
			document.getElementById(semesterid).innerHTML="<select id='"+txtsemesterid+"'><option value=1>1</option><option value=2>2</option></select>";

			creditsid="credits"+x;
			txtcreditsid="txtcredits"+x;
			var credits=document.getElementById(creditsid).innerHTML;
			document.getElementById(creditsid).innerHTML="<input type='text' value='"+credits+"' id='"+txtcreditsid+"' style='width:15%' maxlength='1'>";

			typeid="type"+x;
			txttypeid="txttype"+x;
			var type=document.getElementById(typeid).innerHTML;
			document.getElementById(typeid).innerHTML="<select id='"+txttypeid+"'><option value='compulsory'>Compulsory</option><option value='optional'>Optional</option></select>";
			

			updateid="update"+x;
			document.getElementById(x).style.visibility="hidden";
			document.getElementById(updateid).style.visibility="visible";
		}

		function updatecourse(x){
			
			var nameid="txtname"+x;
			var name = document.getElementById(nameid).value;

			var yearid="txtyear"+x;
			var year = document.getElementById(yearid).value;
			

			var semesterid="txtsemester"+x;
			var semester = document.getElementById(semesterid).value;

			var creditsid="txtcredits"+x;
			var credits = document.getElementById(creditsid).value;

			var typeid="txttype"+x;
			var type = document.getElementById(typeid).value;

			update_val(x,name,year,semester,credits,type);

			document.getElementById(x).style.visibility="visible";
			document.getElementById("update"+x).style.visibility="hidden";

			document.getElementById("name"+x).innerHTML=name;
			document.getElementById("year"+x).innerHTML=year;
			document.getElementById("semester"+x).innerHTML=semester;
			document.getElementById("credits"+x).innerHTML=credits;
			document.getElementById("type"+x).innerHTML=type;
		}

		function update_val(id,name,year,semester,credits,type){
		swal({
			title: "Confirm?",
			text: "Course will be updated",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		    url: "./config/update_course.php" ,
					type: "POST",
					data: {
						course_id:id,
						course_name:name,
						year:year,
						semester:semester,
						credits:credits,
						type:type
					}
           		}),
           		location.reload()
			}
			else{
				location.reload()
			}
		});
		}
	</script>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      	<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      	</center>
  		<a href="../Admin.php">Dashboard</a>
  		<a href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href="./prog_manage.php">Program Managment</a>
  		<a class="active" href=" ">Course Managment</a>
  		<a href="./broadcast.php">Broardcast Notifications</a>
  		<a href="./manage_deadlines.php">Manage Deadlines</a>
  		<a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 20%" id="logout">Log out</button></a>
	</div>

	<ul> 
    <li style="margin-right: 275px" class="dropdown">
      <img src="../../icons/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./account_setting.php">Setting</a>
            <a href="../../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px">Welcome , Admin</li>
  	</ul>

	<div class="content">
			
			<table align="center" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border: unset;padding: 30px">

			<form method="post" action="./config/new_course.php" id="myform">	
					<tr class="title">
						<th colspan="2" id="new_course"><center><h2>Insert New Course</h2></center></th>
					</tr>
					<tr>
						<td colspan="2">
							<center>
							<b>Select Program</b>
			
							<select name="Program" id="Program" style="margin-left: 20px">	
							<?php
      						include ("./config/get_prog.php");
      						if ( $result->num_rows > 0) {
      							$num=0;
        						while($row = $result->fetch_assoc()) { 

        					?>
  								<option value='<?php echo $row["ProgramID"]; ?>'>
  									<?php echo $row["Program_Name"]; ?>
  								</option>
  								
							<?php 
								}
								$conn->close();
							}
							?>	
							</select>
							</center>
						</td>
					</tr>
					<tr>
						<td>Enter Course ID</td>
						<td><input type="text" name="CourseID" required maxlength="6"></td>
					</tr>
					<tr>
						<td>Enter Course Name</td>
						<td><input type="text" name="CourseName" required></td>
					</tr>
					<tr>
						<td>Year
							<select name="Year" id="Year" style="margin-left: 20px">
								<option value=1>1</option>
								<option value=2>2</option>
								<option value=3>3</option>
							</select>
						</td>
				
						<td>Semester
							<select name="Semester" id="Semester" style="margin-left: 20px">
								<option value=1>1</option>
								<option value=2>2</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Credits</td>
						<td><input type="text" name="Credits" maxlength="1" required></td>
					</tr>
					<tr>
						<td>Course type</td>
						<td>
							<input type="radio" name="type" id="compulsory" value="compulsory">
							<label for="compulsory" style="padding-right: 10px">Compulsory</label>

							<input type="radio" name="type" id="optional" value="optional">
							<label for="optional">Optional</label>
						</td>
					</tr>
					<tr class="title">
						<td colspan="2" style="border-bottom: unset;">
							<button id="but_upload">Submit</button>
						</td>
					</tr>
			</form>
			</table><br>

			<div id="edit_main">
				<center><h2 align="center">Edit Courses</h2></center>
				<center>
			
							<select name="Program_select" id="Program_select" style="margin-left: 20px">
							<option><center>Select Program<center></option>	
							<?php
      						include ("./config/get_prog.php");

      						if ( $result->num_rows > 0) {
      							
        						while($row = $result->fetch_assoc()) { 

        					?>
  								<option value='<?php echo $row["ProgramID"]; ?>'>
  									<?php echo $row["Program_Name"]; ?>
  								</option>
  								
							<?php 
								}
								$conn->close();
							}
							?>	
							</select>
				</center>
				<br>
				<div class="course" id="show_courses"></div>
				</table>
			</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script >

	$(document).ready(function(){

    $("#but_upload").click(function(event){
    	event.preventDefault();
    	var form = $('#myform')[0];
        var fd = new FormData(form);
        var prog= $("#Program").val();
        var year= $("#Year").val();
        var semester= $("#Semester").val();

        $("#but_upload").prop("disabled", true);
       	swal({
			title: semester,
			text: "Course will be inserted permanently",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		   url: './config/new_course.php',
           		   type: 'POST',
          		   enctype: 'multipart/form-data',
           		   data:fd,	
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
<script>
$(document).ready(function(){

    $('#Program_select').change(function(){
        	var program= $(this).val();
			$.ajax({
           	   url: './config/get_course.php',
           	   type: 'POST',
           	   data: {Program:program},
           	   success:function(data){  
                     $('#show_courses').html(data);  
               } 

           	});
           	   
    });
});


</script>
<script>
	jQuery(function(){
		$(document).on('click','#Remove', function(e){
			var course_id = $(this).data('id'); 
			swalreject(course_id);
			e.preventDefault();
		});
	});

	function swalreject(course_id){
		swal({
			title: "Confirm?",
			text: "Course will be removed",
			icon: 'warning',
			buttons: true,
			dangerMode: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "./config/remove_course.php" ,
					type: "POST",
					data: {remove:course_id},
					success:function(data){  
                    	alert("Hello");  
               		}
					
				}),
				location.reload()
			}

		});	
	}
</script>
</body>
</html>