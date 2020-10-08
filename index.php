<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/css.css">
	<style type="text/css">
		table{border-style: solid; border-radius:30px; padding: 3% 3%; background-color: white;vertical-align: center;width: 30% ; margin-top: 4%}
		td{text-align: center; padding: 3px}

		input[type="radio"] {opacity: 0;width: 0 ;position: fixed; }
		label{background-color: #ddd;border: 1px solid #444;border-radius: 10px; width: 50%; padding: 10px 15px;display: inline-block;
		}
		label:hover {background-color: #dfd;}
		input[type="radio"]:focus + label {
    		border: 2px dashed #444;
		}

		input[type="radio"]:checked + label {
    		background-color: #bfb;
    		border-color: #4c4;
		}
		button:hover{background-color: green;}
		input[type="submit"]:hover{background-color: green;}
	</style>

</head>
<body>
	<table align="center" width="20%" >
	<form action="./login/login.php" method="post">
		
			<tr>
				<td colspan="2" style="color: #002b80"><h1>LOGIN</h1></td>
			</tr>
			<tr>
				<td >
					<input type="radio" id="radiostudent" name="usertype" value="Student" >
    				<label for="radiostudent">Student</label>
				</td>
			</tr>
			<tr>
				<td >
					<input type="radio" id="radiostaff" name="usertype" value="Staff" >
    				<label for="radiostaff">Staff Member</label>
				</td>
			</tr>
			<tr>
				<td ><b>Username</b> </td>
			</tr>
			<tr>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td ><b>Password</b> </td>
			</tr>
			<tr>
				<td><input type="Password" name="Password"></td>
			</tr>
			<tr>
				<td style="color: red"><i>
					<?php
                    	if(isset($_SESSION["error"])){
                        	$error = $_SESSION["error"];
                        	echo "<span>$error</span>";
                    	}
                	?> 
				</i></td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="passrem">
				
					<i>remember me</i>
				</td>
			</tr>
			<tr>
				<td colspan="2" ><input type="submit" name="loginform" value="Login"></td>
			</tr>
			
	</form>
	<tr>
		<td colspan="2"><a href="http://localhost/SIS/Student_Reg_form.php" target="_self"><button>Register</button></a><br></td>
	</tr>
	<tr>
		<td><a href="http://localhost/SIS/Login/forgot_pass.html"><i>forgot password ?</i></a></td>
	</tr>
	</table>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>