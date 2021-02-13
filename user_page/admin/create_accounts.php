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
    

    .popup .overlay{
      position: fixed;
      top:0px;
      left: 0px;
      width: 100vw;
      height: 100vh;
      background: rgba(0,0,0,0.7);
      z-index: 1;
      display: none;
      
    }

    .popup .content{
      position: absolute;
      top:50%;
      left: 35%;
      transform: translate(-50%,-50%) scale(0);
      background: #fff;
      width: 450px;
      height: 150px;
      z-index: 2;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 10px;
    }

    .popup .close-btn{
     
      position: absolute;
      right: 190px;
      top: 70px;

    }

    .popup.active .overlay{
      display: block;
    }

    .popup.active .content{
      transition: all 300ms ease-in-out;
      transform: translate(-50%,-50%) scale(1);
    }
	</style>

  <script type="text/javascript">
    function togglePopup(){
      document.getElementById("popup-1").classList.toggle("active");
      setTimeout(formsub, 3000);
    }
    function formsub(){
      document.getElementById("myform").submit();
    }
    
  </script>
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
  		<a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 20%" id="logout">Log out</button></a>
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


		<form method="post" action="./config/create_acc.php" id="myform" name="create_account">
      <div class="content" align="center">

      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" ><img src="../../icons/true.png" style="width: 70px;height: 70px;"></div>
          <h2>Account Created Successfully</h2>
        </div>
      </div>

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
              <option value="Program Coordinator">Program Coordinator</option>
              <option value="Examiner">Examiner</option>
              <option value="Assistant Bursar">Assistant Bursar</option>
              <option value="Assistant Registrar">Assistant Registrar</option>
              <option value="Interview Commitee Member">Interview Commitee Member</option>
              <option value="Staff assistant">Staff Assistant</option>
            </select>
  				</td>
  			</tr>
  				<tr>
  					<td>Staff ID</td>
  					<td><input type="text" name="Staff_id"></td>
  				</tr>
  				<tr>
  					<td>Name</td>
  					<td><input type="text" name="Name"></td>
  				</tr>
  				<tr>
  					<td>Email</td>
  					<td><input type="text" name="Email"></td>
  				</tr>
  				<tr>
            <td colspan="2" style="padding-top: 30px">
              <center><input type="button" value="submit" onclick="togglePopup()"></center>

            </td>
  				</tr>
  			</table>
		</form>
    
	</div>

</body>
</html>