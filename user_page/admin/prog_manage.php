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
		.edit{
    		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    		margin-left: 20px;
    		margin-bottom: 20px;
    		border-radius: 10px;
    		background-color: white;
    		padding: 10px 20px;
    		overflow: auto;
  		}
  		.edit label,.insert label{
    		padding: 50px 20px;
  		}
  		.edit table{
  			border-radius: 10px;
  			box-shadow:unset;
  			margin-top: 20px;
  			margin-bottom: 20px;
  			border: 1px solid #656565;
  			overflow: auto;
  			overflow-x: auto;
  			padding: 10px
  		}
  		.insert{
  			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
  			width: 60%;
  			margin: 10px 20px;
  			background-color: white;
  			border-radius: 10px;
  			padding: 20px 20px; 	
  		}
  		
  		.insert table{
  			border-radius: 10px;
  			box-shadow:unset;
  			
  			margin-top: 20px;
  			border: 1px solid #656565;
  			padding: 20px 20px;
  		}
  		th, td {
  			padding: 10px;
  			border-bottom: 1px solid #ddd;
		}
		th{
			background-color: #DCDCDC;
  			border-radius: 9px;
		}
		.insert input[type="text"]{
			width: 80%;
		}
		button{
			border-radius: 25px;
		}
		button:hover{
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
		}
		tr:hover {background-color: #f5f5f5;}
		#sub:hover {background-color: unset;}
		#subdata{border-bottom: unset;}
		h2{background-color: #4B0082;color: white;border-radius: 10px ;padding: 20px 20px;width: 50%;}

		.remove:hover{background-color: red}
	</style>
	<script type="text/javascript">
		function editCon(x){
			//alert(x);
			nameid="name"+x;
			txtnameid="txtname"+x;
			var name=document.getElementById(nameid).innerHTML;
			document.getElementById(nameid).innerHTML="<input type='text' value='"+name+"' id='"+txtnameid+"'>";

			cordID="cord"+x;
			txtcordid="txtcord"+x;
			var cord=document.getElementById(cordID).innerHTML;
			document.getElementById(cordID).innerHTML="<input type='text' value='"+cord+"' id='"+txtcordid+"'>";
			//cord

			updateid="update"+x;
			document.getElementById(x).style.visibility="hidden";
			document.getElementById(updateid).style.visibility="visible";
		}

		function updatepro(x){
			var nameid="txtname"+x;
			var name = document.getElementById(nameid).value;

			var cordID="txtcord"+x;
			var cord = document.getElementById(cordID).value;

			update_val(x,name,cord);

			document.getElementById(x).style.visibility="visible";
			document.getElementById("update"+x).style.visibility="hidden";

			document.getElementById("name"+x).innerHTML=name;
			document.getElementById("cord"+x).innerHTML=cord;
		}

		function update_val(id,name,cord){
		swal({
			title: "Confirm?",
			text: "Program will be updated",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		    url: "./config/update_prog.php" ,
					type: "POST",
					data: {
						pro_id:id,
						pro_name:name,
						cord_id:cord
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
  		<a class="active" href=" ">Program Managment</a>
  		<a href="./course_manage.php">Course Managment</a>
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
		
		<center>
		<div class="insert">
			<center><h2 align="center">Insert New Programs</h2></center> 
			
			<table align="center">
				<form action=" " method="post" id="myform">
					<tr>
						<td>Program ID</td>
						<td><input type="text" name="progID" required maxlength="4"></td>
					</tr>
					<tr>
						<td>Program Name</td>
						<td><input type="text" name="progName" required></td>
					</tr>
					<tr>
						<td>Program Coordrinator ID</td>
						<td><input type="text" name="cord_ID" required maxlength="8"></td>
					</tr>
					<tr id="sub">
						<td colspan="2" id="subdata">
							<button id="but_upload">Submit</button>
						</td>
					</tr>

				</form>
			</table>	
		</div>
		</center>
		
		<div class="edit">

			
			<center><h2 align="center">Edit Current Programs</h2></center>
			<table align="center" id="example">
				<tr>
					<th >Program ID</th>
					<th>Name</th>
					<th>Program Coordinator</th>
					<th style="background-color: unset;"></th>
					<th style="background-color: unset;"></th>
				</tr>


		<?php
      		include ("./config/get_prog.php");
      		if ( $result->num_rows > 0) {
      			$num=0;
        		while($row = $result->fetch_assoc()) { 

        ?>
        			<tr>
                      <td><center><?php echo $row["ProgramID"]; ?></center></td>

                      <td >
                      	<center>
                      	<div id="name<?php echo $row['ProgramID']; ?>"><?php echo $row["Program_Name"]; ?></div>
                      	</center>
                      </td>

                      <td >
                      	<center>
                      	<div id="cord<?php echo $row['ProgramID']; ?>"><?php echo $row["Program_Coordinator_ID"]; ?></div>
                     	</center>
                      </td>
                      <td><center>

                      	<button id="<?php echo $row['ProgramID']; ?>" 
                      		name="<?php echo $row['ProgramID']; ?>" onclick="editCon(this.id)">
                      	Edit</button>

                      	<br>

                      	<button id="update<?php echo $row['ProgramID']; ?>" 
                      		name="<?php echo $row['ProgramID']; ?>" onclick="updatepro(this.name)" style="visibility: hidden;">
                      	Update</button>

                      </center></td>

                      <td>
                      	<button style='background-color:#8B0000'  id="Remove" 
							data-id="<?php echo $row['ProgramID']; ?>" href="javascript:void(0)">Remove</button>
                      </td> 	
                    </tr>
        <?php
        		}
    		}
    	?>
    	
				
			</table>
			
		</div>
  		
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
<script >
$(document).ready(function(){

    $("#but_upload").click(function(event){
    	event.preventDefault();
    	var form = $('#myform')[0];
        var fd = new FormData(form);
        
        $("#but_upload").prop("disabled", true);
       	swal({
			title: "Confirm?",
			text: "Program will be inserted to the Database",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		   url: './config/new_prog.php',
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
<script>
	jQuery(function(){
		$(document).on('click','#Remove', function(e){
			var prog_id = $(this).data('id'); 
			swalreject(prog_id);
			e.preventDefault();
		});
	});

	function swalreject(prog_id){
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
					url: "./config/remove_prog.php" ,
					type: "POST",
					data: {remove:prog_id}
					
				}),
				location.reload()
			}

		});	
	}
</script>

</body>
</html>