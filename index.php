<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{border-radius:30px; padding: 2% 2%; background-color: white;vertical-align: center;width: 30% ; margin-top:1%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		td{text-align: center; padding: 2px}

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
		
		input[type="submit"]{width: 50%}
		button:hover,input[type="submit"]:hover{
			background-color: green; color: white;width: 50% ;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}
		body{font-family: 'Raleway', sans-serif;background-color: #99bbff }
		
	</style>

</head>
<body>
	<table align="center" width="20%" >
	<form action="./login/login.php" method="post">
			<tr>
			<td colspan="2" >
				<img src="./icons/logo.png" style="width:80px;height:80px;" >
			</td>
			</tr>
			<tr>
				<td colspan="2" style="color: #002b80" id='login'><h1>LOGIN</h1></td>
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
		<td colspan="2"><a href="./Student_Reg_form.html" target="_self"><button style="width: 50%">Register</button></a><br></td>
	</tr>
	<tr>
		<td><a href="./Login/forgot_pass.php"><i>forgot password ?</i></a></td>
	</tr>
	</table>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>