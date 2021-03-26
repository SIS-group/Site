<!DOCTYPE html>
<html>
<head>
	<title>Create Staff User Account</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 30px ;background-color: white; padding: 4% 4%;width: 50%}
		td{padding: 5px 5px}
    input[type=text]{width: 60%}
		input[type=submit]:hover{background-color: green}
    body{font-family: 'Raleway', sans-serif;}
    th{background-color: #4B0082;color: white;border-radius: 10px ;}
    #popup {
      visibility: hidden;
      background-color: white;
      border-radius: 10px;
      position: fixed;
      width: 35%;
      height: 35%;
      left: 40.75%;
      top: 30%;
      box-sizing: border-box;
      text-align: center;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    }

    #popup .content .msg{
      text-align: left;
      margin-left: -55%;
    }

    #popup .content .img{
      margin-top: -15%;
      margin-left: -85%;
    }
  
	</style>


  
</head>
<body>
	<div class="sidebar">
      <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
        <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      </center>
  		<a href="../Admin.php">Dashboard</a>
  		<a class="active" href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href="./prog_manage.php">Program Managment</a>
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


		
  <div class="content" align="center">

      <div id="popup">
        <div class="content" >
          <div class="img" ><img src="../../icons/true.png" style="width: 70px;height: 70px;"></div>
          <h2 class="msg">Account Created Successfully</h2>
        </div>
      </div>

    <form method="post" action="./config/create_acc.php" id="myform" name="create_account">
			<table align="center">
        <tr>
          <th colspan="2">
            <h1>Create Staff Account</h1>
          </th>
        </tr>
				<tr >
					<td style="padding-top: 30px"><label for="role">User Role</label></td>
					<td style="padding-top: 30px">
            <select name="role" style="padding: 10px 5px;border-radius: 10px">
              <option value="Director">Director</option>
              <option value="Deputy Director Examination">Deputy Director Examination</option>
              <option value="program coordinator">Program Coordinator</option>
              <option value="Examiner">Examiner</option>
              <option value="Assistant Bursar">Assistant Bursar</option>
              <option value="Assistant registrar">Assistant Registrar</option>
              <option value="Interview committee member">Interview Commitee Member</option>
              <option value="Staff assistant">Staff Assistant</option>
            </select>
  				</td>
  			</tr>
  				<tr>
  					<td>Staff ID</td>
  					<td><input type="text" name="Staff_id" maxlength="8" required></td>
  				</tr>
  				<tr>
  					<td>Name</td>
  					<td><input type="text" name="Name" required></td>
  				</tr>
  				<tr>
  					<td>Email</td>
  					<td><input type="text" name="Email" required></td>
  				</tr>
  				<tr>
            <td colspan="2" style="padding-top: 30px">
              <center>
                <button id="but_upload">Submit</button>
              </center>

            </td>
  				</tr>
  			</table>
		</form>
    
	</div>

  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script >

  $(document).ready(function(){

    $("#but_upload").click(function(event){
      event.preventDefault();
      var form = $('#myform')[0];
      var fd = new FormData(form);

      $("#but_upload").prop("disabled", true);
      swal({
        title: "Confirm?",
        text: "Account will be created",
        icon: 'warning',
        buttons: true,
      })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
                 url: './config/create_acc.php',
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
</html>